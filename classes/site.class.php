<?php  
class site{ 
    private $connect,
            $result;
    public function __construct() {
        $this->connect = mysqli_connect(DBHOST, DBUSERNAME, DBPASSWORD, DBDATABASE);
    }
    
     /**
     * @author Rohan Morris
     * @version 1.0.0
     * @name getResultSet
     * @param string $sql the string with the sql statment
     * @return array The result set
     */
    function getResultSet($sql){
        $data         = array();        
        $this->result = mysqli_query($this->connect, $sql);
        if($this->result){
            while(($rs  = mysqli_fetch_assoc($this->result)) == true){
                $data[] = $rs;
            }
        } 
        return $data;
    }
    
    
     /**
     * @author Rohan Morris
     * @version 1.0.0
     * @name getResultRow
     * @param string $sql the string with the sql statment
     * @return a single row
     */
    function getResultRow($sql){ 
        $data         = array();        
        $this->result = mysqli_query($this->connect, $sql);
        $data = mysqli_fetch_assoc($this->result);
        return $data;
    }
    
     /**
     * @author Rohan Morris
     * @version 1.0.0
     * @name RunNewResulstSet
     * @param None
     */
    function runNewResulstSet(){ 
        mysqli_next_result($this->connect);
    }
    
    /**
     * @author Rohan Morris
     * @version 1.0.0
     * @name insertRecord
     * @param array $DATA the key value pair with database heading and values
     * @return int The last inseted id
     */
    function insertRecord($DATA, $TABLE)
    {		
        $i=0;
        foreach($DATA as $key => $value )
        {
            $columnValue[$i]= '"'.addslashes(trim($value)).'"';
            $columnKey[$i]  = '`'.$key.'`';
            $i++;
        }

        $str[] = 'INSERT INTO';
        $str[] = $TABLE;
        $str[] = '('.implode($columnKey, ', ').')';
        $str[] = 'VALUES'; 
        $str[] = '( '.implode($columnValue, ', ').')'; 
        
        $sql = implode($str, ' ');

        if(mysqli_query($this->connect,$sql)) 
            return mysqli_insert_id($this->connect);
        printf('Error: %s\n', mysqli_error($this->connect));
        return false;
    }
    
    public function __destruct() {
        if($this->result){
            mysqli_free_result($this->result);    
            mysqli_close($this->connect);
        }
    }
}
?>