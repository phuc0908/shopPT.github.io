<?php
include "Database/database.php";
?>

<?php
    class Class_Color{
        private $db;

        public function __construct(){
            $this->db= new Database();
        }
       
        public function insert($name_color,$link_img,$link_img2,$id_product){
            $query = "INSERT INTO colors(Name,Img,Id_product,Img2) values ('$name_color','$link_img','$id_product','$link_img2')";
            $this->db->row($query);
        }
        
        public function update($img_id,$name_color,$link_img,$link_img2,$id_product){
            $query = "UPDATE colors SET Name ='$name_color',Img= '$link_img',Id_product='$id_product',Img2='$link_img2'
                                                        WHERE ID='$img_id'";
            $result = $this->db->row($query);
            header('Location:color_list.php');
            return $result;
        }
        public function delete($id){
            $query = "DELETE FROM colors  WHERE ID='$id'";
            $result = $this->db->row($query);
            header('Location:color_list.php');
            return $result;
        }
        public function show(){
            $query = "SELECT c.ID ,t.Name N_type ,c2.Name N_cart ,p.Name N_pro,c.Name ,c.Img ,c.Img2
            FROM colors c INNER JOIN products p ON c.Id_product =p.ID 
                            INNER JOIN cartegories c2 ON c2.ID =p.ID_cartegory 
                            INNER JOIN type_cartegory t ON t.ID = c2.ID_type  ORDER BY ID DESC";
            $result = $this->db->select($query);
            return $result;
        }
        public function get($ID){
            $query = "SELECT t.Name N_type ,c2.Name N_cart ,p.Name N_pro,c.Name ,c.Img ,c.Img2, p.ID p_ID,c2.ID cart_ID,t.ID t_ID
            FROM colors c INNER JOIN products p ON c.Id_product =p.ID 
                            INNER JOIN cartegories c2 ON c2.ID =p.ID_cartegory 
                            INNER JOIN type_cartegory t ON t.ID = c2.ID_type WHERE c.ID='$ID'";
            $result = $this->db->select($query);
            return $result;
        }
       
        public function show_product_onWeb_product($ID){
            $query = "SELECT p.Name, p.Price, p.PriceAfterSale, c.Name as name_color, c.Img, c.Img2,c2.Name as name_cart
            FROM        colors c
            INNER JOIN  products p ON c.Id_product = p.ID
            INNER JOIN  cartegories c2 ON c2.ID = p.Id_cartegory
            WHERE c.ID='$ID'";
            $result = $this->db->select($query);
            return $result;
        }
        
       // CARTEGORY
        public function get_cartegory($ID){
            $query = "SELECT * FROM cartegories WHERE ID='$ID'";
            $result = $this->db->select($query);
            return $result;
        }
        public function get_cartegory_ofType($ID){
            $query = "SELECT * FROM cartegories WHERE ID_type='$ID'";
            $result = $this->db->select($query);
            return $result;
        }
        public function showAllCart(){
            $query = "SELECT * FROM cartegories ";
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
        //PRODUCT
        public function get_product_ofCartegory($ID){
            $query = "SELECT * FROM products WHERE ID_cartegory='$ID'";
            $result = $this->db->select($query);
            return $result;
        }
        public function show_product(){
            $query = "SELECT * FROM products ORDER BY ID DESC";
            $result = $this->db->select($query);
            return $result;
        }

    }

?>