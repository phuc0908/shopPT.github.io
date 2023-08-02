<?php
include "Database/database.php";
?>

<?php
    class Class_cartegory{
        private $db;

        public function __construct(){
            $this->db= new Database();
        }
       
        public function insert($cartegory_name,$type_id){
            $query = "INSERT INTO cartegories(Name,ID_type) values ('$cartegory_name','$type_id')";
            $this->db->row($query);
        }
        public function get($ID){
            $query = "SELECT * FROM cartegories WHERE ID='$ID'";
            $result = $this->db->select($query);
            return $result;
        }
        public function update($cartegory_id,$cartegory_name,$type_ID){
            $query = "UPDATE cartegories SET Name ='$cartegory_name', ID_type ='$type_ID' WHERE ID='$cartegory_id'";
            $result = $this->db->row($query);
            header('Location:cartegory_list.php');
            return $result;
        }
        public function delete($cartegory_ID){
            $query = "DELETE FROM cartegories  WHERE ID='$cartegory_ID'";
            $result = $this->db->row($query);
            header('Location:cartegory_list.php');
            return $result;
        }
        public function show(){
            $query =" SELECT c.ID,c.Name,t.Name as name_type  FROM cartegories c 
                      INNER JOIN type_cartegory t  ON c.ID_type = t.ID 
                      ORDER BY ID DESC";

            $result = $this->db->select($query);
            return $result;
        }
        // TYPE
        public function show_type(){
            $query = "SELECT * FROM type_cartegory ORDER BY ID DESC";
            $result = $this->db->select($query);
            return $result;
        }
        public function get_type($ID){
            $query = "SELECT * FROM type_cartegory WHERE ID='$ID'";
            $result = $this->db->select($query);
            return $result;
        }
        

    }

?>