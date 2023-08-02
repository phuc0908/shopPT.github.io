<?php
include "Database/database.php";
?>

<?php
    class Class_Type{
        private $db;

        public function __construct(){
            $this->db= new Database();
        }
       
        public function insert($type_name){
            $query = "INSERT INTO type_cartegory(Name) values ('$type_name')";
            $this->db->row($query);
        }
        
        public function update($type_name,$type_ID){
            $query = "UPDATE type_cartegory SET Name ='$type_name' WHERE ID='$type_ID'";
            $result = $this->db->row($query);
            header('Location:type_list.php');
            return $result;
        }
        public function delete($type_ID){
            $query = "DELETE FROM type_cartegory  WHERE ID='$type_ID'";
            $result = $this->db->row($query);
            header('Location:type_list.php');
            return $result;
        }
        public function show(){
            $query = "SELECT * FROM type_cartegory ORDER BY ID DESC";
            $result = $this->db->select($query);
            return $result;
        }
        public function get($ID){
            $query = "SELECT * FROM type_cartegory WHERE ID='$ID'";
            $result = $this->db->select($query);
            return $result;
        }
       
        

    }

?>