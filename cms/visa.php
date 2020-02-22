<?php
include_once('common.php');
class Visa extends common {
    protected   $updateList         = false, 
                $updateProjectList  = false,
                $updateFormData     = false;
    private $id,$typeId;
    public $countyId,$countyListId;

    protected function _config() {
        parent::_config();
        $this->id = $this->get->id | 0;
    }

    protected function _init() {
        parent::_init();
        $this->appendView("visa.view.php");
        c('#mm_visa')->attr('class','list-group-item active');
    }

    protected function _load() {  
        $this->delegate('.delete', '#click', array('callback' => '.removeFile'));
    }
    
    protected function _prerender() {
        $this->loadVolunteerSummary($this->id);

        $this->loadUploader();
        $this->loadVisaList($this->id);
    }
    
    protected function removeFile($e) {  
        $id = $e->intVal();
        $rs = $this->db->table('volunteer_visa id, CONCAT(volunteer_id,"/",fileName) AS file','id=?',$id);
        $filename = '../rsvp_docs/visa/'.$rs[0]['file'];
        if(file_exists($filename)){
            unlink($filename);
        }
        $this->db->tableDelete('volunteer_visa','id=?',$id);
    }
    
    protected function loadVisaList($id) {   
        /**LOAD GALLERY BY GROUP ID**/
        $rs = $this->db->table('volunteer_visa id, CONCAT(volunteer_id,"/",fileName) AS fileName','volunteer_id=?',$id);
        $this->gallery->bind($rs);
        $this->gallery->updateClient();
        /**END LOAD GALLERY**/
    }
    
    protected function loadUploader() {  
$xml = <<<XML
<link rel="stylesheet" type="text/css" href="../includes/uploader/uploadify.css" />
<script type="text/javascript" src="../includes/uploader/jquery.uploadify.min.js"></script>
<script>
    $(function() {
        $('#file_upload').uploadify({
            'formData'      : {'u' : $this->id, 'a' : $this->userId },
            'buttonText' : 'SELECT FILE...',
            'multi'    : true, 
            'swf'      : '../includes/uploader/uploadify.swf',
            'uploader' : '../includes/uploader/___visauploadify___.php',
            'onQueueComplete' : function(queueData) {
                window.location='visa.php?id=' + $this->id;
            }
        });
    });
</script>
<input type="file" name="file_upload" id="file_upload" />
XML;
        
        c('#uploadfrm')->html($xml);
    }
}