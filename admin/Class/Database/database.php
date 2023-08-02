

<?php
class Database{
    public $host ="localhost";
    public $user ="root";
    public $pass ="";
    public $dbname="web-shop";

    public $link;
    public $error;

    public function __construct(){
        $this->connectDB();
    }
    private function connectDB(){
        $this->link = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
        if(!$this->link){
            $this->error="Connection fail".$this->link->connect_error;
        }
        mysqli_set_charset($this->link, 'UTF8');
    }
    //Select or Read data
    public function select($query){
        $result =$this->link->query($query) 
        or die($this->link->error.__LINE__);
        if($result->num_rows>0){
            return $result;
        }else{
            return false;
        }
    }
    // Insert,Update,Delete Data
    public function row($query){
        $row =$this->link->query($query) 
        or die($this->link->error.__LINE__);
        if($row){
            return $row;
        }else{
            return false;
        }
    }
    
}
?>