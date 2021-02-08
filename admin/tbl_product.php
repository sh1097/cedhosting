<?php include 'dbcon.php'?>
<?php

class tbl_product extends dbcon {
     
    public $prod_name;
    public $id;
    public $prod_parent_id;
    public $prod_link;
    public $prod_available;
    public $prod_launch_date;
    public $conn;
    
    public function __construct()
    {
        $dbcon=new Dbcon();
        $this->conn=$dbcon->createConnection();
    }
   

    function insertdata($prod_name,$prod_link){
        {
            $sql="INSERT INTO `tbl_product` (`prod_parent_id`,`prod_name`,`prod_link`,`prod_available`,`prod_launch_date`) 
            VALUES ('1','$prod_name','$prod_link','1',NOW())";
            $data=$this->conn->query($sql);
            if ($data) {
                return $data;
            }
            return false;
        }

    }
    public function updateProductByCategory($productname, $link, $availability, $id) 
    {
        $sql="UPDATE `tbl_product` SET `prod_name`='$productname', `prod_link`='$link',`prod_available`='$availability' WHERE `id` = '$id'";
        $data=$this->conn->query($sql);
        if ($data) {
            return true;
        }
        return false;
    }
   public function deletedata($id) {
       $sql="delete from tbl_product Where id='$id'";
       if ($this->conn->query($sql) === TRUE) {
        echo "<script>alert('Record deleted successfully');</script>";
      } else {
        echo " <script>alert('Error deleting record:');</script> " . $this->conn->error;
      }

   }
   public function getMainCategory()
   {
       $sql="SELECT * FROM `tbl_product` WHERE `id`='1' AND `prod_parent_id`='0'";
       $data=$this->conn->query($sql);
       if ($data->num_rows>0) {
           $arr=array();
           while ($row=$data->fetch_assoc()) {
               $arr[]=$row;
           }
           return $arr;
       }
       return false;
   }
}