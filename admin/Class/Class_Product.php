<?php
include "Database/database.php";
?>

<?php
    class Class_Product{
        private $db;

        public function __construct(){
            $this->db= new Database();
        }
       
        public function insert($product_name,$cartegory_id,$price,$price2,$amount,$cmt){
            
            $query =   "INSERT INTO products(Name,ID_cartegory,Price,PriceAfterSale,Amount,details)
                        values ('$product_name','$cartegory_id','$price','$price2','$amount','$cmt')";

            $this->db->row($query);
        }
    
        public function get($ID){
            $query = "SELECT * FROM products WHERE ID='$ID'";
            $result = $this->db->select($query);
            return $result;
        }
        public function update($product_id,$product_name,$cartegory_id,$price,$price2,$amount,$cmt){
            $query =   "UPDATE products SET Name ='$product_name',ID_cartegory ='$cartegory_id',
                                            Price = '$price', PriceAfterSale = '$price2',
                                            Amount = '$amount' , details = '$cmt' 
                                            WHERE ID='$product_id'";

            $result = $this->db->row($query);
            header('Location:product_list.php');
            return $result;
        }
        public function delete($product_id){
            $query = "DELETE FROM products  WHERE ID='$product_id'";
            $result = $this->db->row($query);
            header('Location:product_list.php');
            return $result;
        }
        public function show(){
            $query = " SELECT  p.ID, p.Name, c.Name as name_cartegory, p.Price,p.PriceAfterSale, p.Amount, p.details
                       FROM 			cartegories c 
                       INNER JOIN 		products p  ON c.ID  = p.ID_cartegory  
                       ORDER BY ID DESC";
                       
            $result = $this->db->select($query);
            return $result;
        }
        public function show_product_on_web_index(){
            $query = " SELECT  p.Name, p.PriceAfterSale, c.Name as name_color, c.Img,c.ID
                       FROM 			colors c 
                       INNER JOIN 		products p  ON c.Id_product  = p.ID 
                       ORDER BY RAND()
                       LIMIT 20
                       ";
                       
            $result = $this->db->select($query);
            return $result;
        }
        public function show_product_on_web_allProduct(){
            $query = " SELECT  p.Name, p.PriceAfterSale, c.Name as name_color, c.Img,c.ID
                       FROM 			colors c 
                       INNER JOIN 		products p  ON c.Id_product  = p.ID 
                       ORDER BY RAND()
                      ";
                       
            $result = $this->db->select($query);
            return $result;
        }
        public function show_product_on_web_ofCartegory($ID_cartegory){
            $query = " SELECT  p.Name, p.PriceAfterSale, c.Name as name_color, c.Img,c.ID
                       FROM 			colors c 
                       INNER JOIN 		products p  ON c.Id_product  = p.ID 
                       INNER JOIN       cartegories cc ON cc.ID = p.ID_cartegory
                       WHERE cc.ID = '$ID_cartegory'";
                       
            $result = $this->db->select($query);
            return $result;
        }
        // CARTEGORY
        public function show_cartegory(){
            $query = "SELECT * FROM cartegories ORDER BY ID DESC";
            $result = $this->db->select($query);
            return $result;
        }
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