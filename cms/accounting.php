<?php
include_once('common.php');
class Administration extends common {

    private $id,$balance;
    
    protected function _config() {
        parent::_config();
        $this->id = $this->get->id | 0;
    }

    protected function _init() {
        parent::_init();
        $this->appendView("accounting.view.php");
        c('#mm_account')->attr('class','list-group-item active');
    }

    protected function _load() {  
        $this->delegate('#addcat',    '#click', array('callback' => '.addCategory'));
        $this->delegate('#addsubcat', '#click', array('callback' => '.addSubCategory')); 
        $this->delegate('#addpayee',  '#click', array('callback' => '.addPayee'));
        $this->delegate('#category_id_list', '#change', array('callback' => '.loadSubCategory'));
        $this->delegate('#addexpense',  '#click', array('callback' => '.addExpense'));
        $this->delegate('#expCat',    'click',  array('callback' => '.exportCategory'));
        $this->delegate('#expSubCat', 'click',  array('callback' => '.exportSubCategory')); 
        $this->delegate('#exppayee',  'click',  array('callback' => '.exportPayee'));
        $this->delegate('.edit', '#click',  array('callback' => '.editForm'));
        $this->delegate('#clearexpense', '#click',  array('callback' => '.clearForm'));
        $this->delegate('#groupbtn', '#click',  array('callback' => '.delete'));
        $this->delegate('#photogroupbtn', '#click',  array('callback' => '.deletePhoto'));
        $this->delegate('#rptcat', '#click',  array('callback' => '.categoryReport'));
        $this->delegate('#rptsubcat', '#click',  array('callback' => '.subCategoryReport'));
        
        $this->expTran->attr('href','createPdfs/accounting.php?id='.base64_encode($this->id));
        $this->clearexpense->hide();
    }
    
    protected function _prerender() {
        if(!$this->isCallback)
        { 
            $this->loadDataExpense();
            $this->sub_category_id->bind(null);
            $this->loadCategory();
            $this->loadPayee();
            $this->printUploader();
            $this->loadPhoto();
        }
    }
    
    protected function addCategory() {
        try{
            $data['category']   = $this->post->textVal('category');
            $data['parent']     = 0;
            $this->db->tableInsert('accounting_category',$data); 
            $this->loadCategory();
            $this->flashmsg($this->icon.'<b>'.$data['category'].'</b> dded to category list','fade','alert alert-success');
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function addSubCategory() {
        try{
            $data['parent']     = $this->post->intVal('category_id');
            $data['category']   = $this->post->textVal('sub_category');
            $this->db->tableInsert('accounting_category',$data); 
            $this->flashmsg($this->icon.'Sub-category <b>'.$data['category'].'</b> added','fade','alert alert-success');
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function addPayee() {
        try{
            $data['name'] = $this->post->textVal('name');
            $data['type'] = $this->post->textVal('type');
            $this->db->tableInsert('accounting_payee',$data); 
            $this->loadPayee();
            $this->flashmsg($this->icon.DB_DATA_ADD,'fade','alert alert-success');
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }    
    
    protected function addExpense() {
        try{
            $data['account_id']     = $this->id;
            $id                     = $this->post->intVal('id');
            $data['payee_id']       = $this->post->intVal('payee_id');
            $data['category_id']    = $this->post->intVal('category_id');
            $data['sub_category_id']= $this->post->intVal('sub_category_id');
            $data['account']        = $this->post->textVal('account');
            $data['date']           = $this->post->textVal('date');
            $data['amount']         = $this->post->textVal('amount');
            $data['cheque_number']  = $this->post->textVal('cheque_number');
            $data['receipt']        = $this->post->intVal('receipt') | 0;;
            $data['detail']         = $this->post->textVal('detail');
            $data['trans_type']     = $this->post->textVal('trans_type');
            $data['date_added']     = $this->dateNow;
            $data['user_id']        = $this->userId;

            if($id){
                $this->db->tableUpdate('accounting',$data,'id=?',$id); 
                $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
            }else{
                $this->db->tableInsert('accounting',$data); 
                $this->flashmsg($this->icon.DB_DATA_ADD,'fade','alert alert-success');
            }

            $this->clearForm();
            $this->loadDataExpense();
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function categoryReport() {
        $start_date = $this->post->textVal('start_date_cat');
        $end_date   = $this->post->textVal('end_date_cat');
        
        $rs = $this->db->execQuery("call sp_report_accounting({$this->id},'{$start_date}','{$end_date}')");
        
        $html = "";
        $year = $amt = array();
        foreach($rs as $row => $key){
            if($key['month']){
                $year[] = $key['month'];
            }
        }
        $html .= "<th>Category</th>";
        $year = array_unique($year);
        foreach($year as $row => $value){
            $value = date("M", mktime(0, 0, 0, $value));
            $html .= "<th>$value</th>";
        }
        $html .= "<th>Total</th>";
        
        foreach($rs as $row => $key){
            $amt[$key['category']][$key['month']] = $key['amount'];
        }
        
        foreach($amt as $key => $value){
            $html .= "<tr>";
            $html .= "<td>$key</td>";
            $total = 0;
            foreach($year as $k => $v){
                $val = (isset($value[$v]))? $value[$v] : 0;
                $html .= "<td>".number_format($val, 2, '.', ',')."</td>";
                $total += $val;
            }
            $html .= "<td>$".number_format($total, 2, '.', ',')."</td>";
            $html .= "</tr>";
        }
        
        $this['#reportdata table']->html($html)->updateClient();
        $key = base64_encode($this->id.'_'.$start_date.'_'.$end_date);
        $this['#subreportdata']->html('')->updateClient();
        $this['#reportdata']->append("<a href='createPdfs/accounting-report.php?key={$key}' class='btn btn-primary' target='_blank'>Print</a>")->updateClient();
    }
    
    protected function subCategoryReport() {
        $start_date = $this->post->textVal('start_date_subcat');
        $end_date   = $this->post->textVal('end_date_subcat');
        
        try{
            $rs = $this->db->execQuery("call sp_subreport_accounting({$this->id},'{$start_date}','{$end_date}')");

            $html = "";
            $total = 0;
            $data = array();
            foreach($rs as $r => $v){
                $data[$v['category_id']][] = $v;
            }

            $html .= "<ul>";
            foreach($data as $key => $row){
                $html .= "<li>";
                $html .= "<table style='width:250px;' class='table table-bordered table-striped'>";
                $html .= "<tr><th colspan='2'>{$row[0]['category']}</th></tr>";
                foreach($row as $r => $value){
                    $total += $value['amount'];
                    $html .= "<tr><td>{$value['sub_category']}</td><td>".number_format($value['amount'], 2, ".", ",")."</td></tr>";
                }
                $html .= "<tr><th>Total</th><th>".number_format($total, 2, ".", ",")."</th></tr>";
                $html .= "</table>";
                $html .= "</li>";
                $total = 0;
            }
            $html .= "</ul>";
            $this['#reportdata']->html('')->updateClient();
            $this['#subreportdata']->html($html)->updateClient();

            $key = base64_encode($this->id.'_'.$start_date.'_'.$end_date);
            $this['#subreportdata']->append("<br style='clear:both;'><a href='createPdfs/accounting-subreport.php?key={$key}' class='btn btn-primary' target='_blank'>Print</a>")->updateClient();
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function delete() {
        try{
            $id = $this->post->intVal('del');
            if(empty($id)){return null;}
            $id = implode(',', $id);
            $this->db->query('DELETE FROM accounting WHERE id IN ('.$id.')');
            $this->loadDataExpense();
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function deletePhoto() {
        try{
            $id = $this->post->intVal('delphoto');           
            if(empty($id)){return null;}
            $id = implode(',', $id);
            
            $rs = $this->db->query('SELECT document FROM accounting_documents WHERE id IN ('.$id.')');
            foreach($rs as $key => $value){
                $filename = '../rsvp_docs/accounting/'.$value['document'];
                if(file_exists($filename)){
                    unlink($filename);
                }
            }
            $this->db->query('DELETE FROM accounting_documents WHERE id IN ('.$id.')');
            $this->loadPhoto();
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    
    protected function loadCategory() {
        try{
            $opt[] = array('id' => '', 'name' => 'Select GL Category...');
            $tmp = $this->db->table('accounting_category','parent=?',0);
            $rs  = array_merge($opt, $tmp);
            $this['.category_id']->bind($rs)->updateClient();
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function loadPhoto() {
        try{
            $rs = $this->db->table('accounting_documents','account_id=?',  $this->id);
            $this['#gallery']->bind($rs)->updateClient();
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function loadSubCategory($e) {
        $id = $e->textVal() | 0;
        try{
            $opt[] = array('id' => '', 'name' => 'Select GL Sub Category...');
            $tmp = $this->db->table('accounting_category','parent=?',$id);
            $rs  = array_merge($opt, $tmp);
            $this->sub_category_id->bind($rs)->updateClient();
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function loadPayee() {
        try{
            $opt[] = array('id' => '', 'name' => 'Select Payee...');
            $tmp = $this->db->table('accounting_payee');
            $rs  = array_merge($opt, $tmp);
            $this['.payee_id']->bind($rs)->updateClient();
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function loadDataExpense() {
        $rs = $this->db->table('view_accounting','account_id=?',  $this->id);
        $this->data->bind($rs,array('callback' => array($this,'rowHandler')))->updateClient();
    }
    
    public function rowHandler(&$row, $index, $tpl, $tplType, &$fmt, $cssClass) {
        if($index==0 && $row['trans_type'] == "income"){
            $row['deposit'] = $this->balance = $row['amount'];
            $row['amount']  = 0;
        }else{
            $row['deposit'] = 0;
            $row['amount']  = $row['amount'];
            $this->balance  = $this->balance - $row['amount'];
        }
        $row['deposit'] = ($row['deposit'])? '$'.number_format($row['deposit'], 2, '.', ',') : '';
        $row['amount']  = ($row['amount'] )? '$'.number_format($row['amount'], 2, '.', ',')  : '';
        $row['balance'] = ($this->balance )? '$'.number_format($this->balance, 2, '.', ',')  : '';
    }
    
    protected function exportCategory() {
        $rs = $this->db->table('accounting_category category','parent=?',0);
        $this->data('exportCSVname','category');
        $this->data('exportCSV',$rs);
        $this->exportCSVdata();
    }
    
    protected function exportSubCategory() {
        $rs = $this->db->execQuery('SELECT c.category AS category, s.category AS `sub category`
                                    FROM accounting_category c
                                    INNER JOIN accounting_category s ON s.parent = c.id
                                    WHERE c.parent = 0
                                    ORDER BY c.category');
        $this->data('exportCSVname','category');
        $this->data('exportCSV',$rs);
        $this->exportCSVdata();
    }
    
    protected function exportPayee() {
        $rs = $this->db->table('accounting_payee');
        $this->data('exportCSVname','category');
        $this->data('exportCSV',$rs);
        $this->exportCSVdata();
    }
    
    protected function editForm($e){
        $id = $e->intVal();
        $rs = $this->db->table('accounting','id=?',$id); 
        if($rs){
            $this->addexpense->html('Update Payee');
            $this->clearexpense->show();
            $opt[] = array('id' => '', 'name' => 'Select GL Sub Category...');
            $tmp = $this->db->table('accounting_category','parent=?',$rs[0]['category_id']);
            $rt  = array_merge($opt, $tmp);
            $this->sub_category_id->bind($rt);
            
            $this->loadCategory();
            $this->loadPayee();
            
            $this->frm1->inputValues($rs[0])->updateClient();
        }
    }
    
    protected function clearForm(){
        C('#addexpense')->html('Add Payee');
        C('#clearexpense')->hide();

        C(':input','#frm1')->not(':button, :submit, :reset, :checkbox, :radio')
        ->val('')
        ->removeAttr('checked')
        ->removeAttr('selected');
        //C('#expense')->attr("checked","checked");
    }
    
    protected function printUploader(){
$xml = <<<XML
<link rel="stylesheet" type="text/css" href="../includes/uploader/uploadify.css" />
<script type="text/javascript" src="../includes/uploader/jquery.uploadify.min.js"></script>
<script>
    $(function() {
        var html = null;
        $('#file_upload').uploadify({
            'buttonText' : 'SELECT FILE...',
            'formData'      : {'a' : $this->id, 'u' : $this->userId},
            'fileTypeExts' : '*.jpg; *.jpeg; *.pdf',
            'multi'    : false,
            'swf'      : '../includes/uploader/uploadify.swf',
            'uploader' : '../includes/uploader/___accountinguploadify___.php',
            'onUploadSuccess' : function(file, data, response) {
                html = '<!--input type="checkbox" name="delphoto[]" value="{id}" class="photocheckbox"/-->&nbsp;<a href=\"../rsvp_docs/accounting/' + data + '\" target="_blank" >' + data + '</a><br>';
                $('#gallery').append(html);            
            }
        });
    });
</script>
<input type="file" name="file_upload" id="file_upload" />
XML;

        c('#photoFrm')->html($xml);
    }
    
}