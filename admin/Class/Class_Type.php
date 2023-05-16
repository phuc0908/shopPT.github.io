<?php
include "database.php";
?>

<?php
    class Class_Type{
        private $db;

        public function __construct(){
            $this->db= new Database();
        }
       
        public function insert_type($type_name){
            $query = "INSERT INTO type_cartegory(Name) values ('$type_name')";
            $result = $this->db->insert($query);
            return $result;
        }
    }

?>