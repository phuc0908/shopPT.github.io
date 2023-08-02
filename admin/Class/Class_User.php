<?php
include "Database/database.php";
?>

<?php
    class Class_User{
        private $db;

        public function __construct(){
            $this->db= new Database();
        }
        public function setisSignInTRUE($ID){
            $query = "UPDATE users SET isSignIn =1 WHERE ID = '$ID'";
            $result = $this->db->row($query);
            return $result;
        }
        public function setisSignInAllFalse(){
            $query = "UPDATE users SET isSignIn =0 ";
            $result = $this->db->row($query);
            return $result;
        }

        public function getUserTRUE(){
            $query = "SELECT * FROM users WHERE isSignIn = 1
            LIMIT 1 ";
            $result = $this->db->row($query);
            return $result;
        }
        public function get($ID){
            $query = "SELECT * FROM users WHERE ID = $ID ";
            $result = $this->db->row($query);
            return $result;
        }



        public function insert($email,$phone,$password,$firstName,$lastName,$address,$commune,$district,$province,$isSignIn){
            $name = $lastName." ".$firstName;
            $add = $province." / ".$district." / ".$commune." / ".$address;
            $query = "INSERT INTO users(Email,Phone,Password,Name,Address,isSignIn)
             values ('$email','$phone','$password','$name','$add','0')";
            $this->db->row($query);
        }
        
        public function update($email,$phone,$password,$firstName,$lastName,$address,$commune,$district,$province,$ID){
            $name = $lastName." ".$firstName;
            $add = $province." / ".$district." / ".$commune." / ".$address;
            $query = "UPDATE users SET Email ='$email' ,  Phone = '$phone' , Password = '$password', Name = '$name',
                                         Address = '$add'
            WHERE ID='$ID'";
            $result = $this->db->row($query);
            header('Location:user_list.php');
            return $result;
        }

        public function delete($ID){
            $query = "DELETE FROM users WHERE ID='$ID'";
            $result = $this->db->row($query);
            header('Location:user_list.php');
            return $result;
        }
        public function show(){
            $query = "SELECT * FROM users ORDER BY ID DESC";
            $result = $this->db->select($query);
            return $result;
        }


        public function setSignIn_O($ID){
            $query = "UPDATE users SET isSignIn = 0
            WHERE ID='$ID'";
            $result = $this->db->row($query);
            header('Location:index.php');
            return $result;
        }
        
    }

?>