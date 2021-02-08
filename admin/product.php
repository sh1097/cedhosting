<?php require_once 'dbcon.php' ?>

<?php

session_start();
class product extends dbconn
{

    public $prod_name;
    public $id;
    public $prod_parent_id;
    public $prod_link;
    public $prod_available;
    public $prod_launch_date;
    public $conn;

    public function __construct()
    {
        $dbcon = new Dbconn();
        $this->conn = $dbcon->createConnection();
    }


    function insertdata($prod_name, $prod_link)
    { {
            $sql = "INSERT INTO `tbl_product` (`prod_parent_id`,`prod_name`,`prod_link`,`prod_available`,`prod_launch_date`) 
            VALUES ('1','$prod_name','$prod_link','1',NOW())";
            $data = $this->conn->query($sql);
            if ($data) {
                return $data;
            }
            return false;
        }
    }
    public function updateProduct($productname, $link, $availability, $id)
    {
        $sql = "UPDATE `tbl_product` SET `prod_name`='$productname', `prod_link`='$link',`prod_available`='$availability' WHERE `id` = '$id'";
        $data = $this->conn->query($sql);
        if ($data) {
            return true;
        }
        return false;
    }
    public function deletedata($id)
    {
        $sql = "delete from tbl_product Where id='$id'";
        if ($this->conn->query($sql) === TRUE) {
            echo "<script>alert('Record deleted successfully');</script>";
        } else {
            echo " <script>alert('Error deleting record:');</script> " . $this->conn->error;
        }
    }
    public function getMainCategory()
    {
        $sql = "SELECT * FROM `tbl_product` WHERE `id`='1' AND `prod_parent_id`='Hosting'";
        $data = $this->conn->query($sql);
        if ($data->num_rows > 0) {
            $arr = array();
            while ($row = $data->fetch_assoc()) {
                $arr[] = $row;
            }
            return $arr;
        }
        return false;
    }
    function productdescription($productcategory, $productname, $pageurl, $monthlyprice, $annualprice, $sku, $des)
    {
        $sql = "INSERT INTO `tbl_product` (`id`, `prod_parent_id`, `prod_name`, `prod_link`, `prod_available`, `prod_launch_date`) VALUES (NULL, '$productcategory', '$productname', '$pageurl', '1', current_timestamp())";
        if ($this->conn->query($sql) === true) {
            $last_id = $this->conn->insert_id;
            $sql1 = " INSERT INTO `tbl_product_description` (`id`, `prod_id`, `description`, `mon_price`, `annual_price`, `sku`) VALUES (NULL, '$last_id', '$des', '$monthlyprice', '$annualprice', '$sku')";
            if ($this->conn->query($sql1) === true) {
                return true;
            }
            return false;
        }

        return false;
    }
    public function Viewproduct($id)
    {


        $sql = "SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id` where tbl_product_description.id='$id' ";
        if ($result = $this->conn->query($sql)) {

            /* fetch associative array */
            while ($row = $result->fetch_assoc()) {
   echo$d0=$row['id'];
                $d1 = $row['prod_name'];
                $d2 = $row['prod_link'];
                $d3 = $row['annual_price'];
                $s1 = $row['mon_price'];
                $s2 = $row['sku'];
                $row1 = json_decode($row['description'], true);
                $d4 = $row1['webspace'];
                $d5 = $row1['bandwidth'];
                $d6 = $row1['mailbox'];
                $d7 = $row1['languagetechnology'];
                $d8 = $row1['freedomain'];

                $arr = array(
                    "id"=>$d0,
                    "product name" => $d1,
                    "prod_link" => $d2,
                    "annual_price" => $d3,
                    "webspace" => $d4,
                    "bandwidth" => $d5,
                    "mailbox" => $d6,
                    "languagetechnology" => $d7,
                    "freedomain" => $d8,
                    "mon_price" => $s1,
                    "sku" => $s2
                );
            }
            return $arr;
        }
    }
    public function Viewproduct1($id)
    {

        //   echo $id;
        $sql = "SELECT `tbl_product`.*,`tbl_product_description`.* FROM tbl_product JOIN tbl_product_description ON `tbl_product`.`id` = `tbl_product_description`.`prod_id` where tbl_product.prod_parent_id='$id' ";
        $result = $this->conn->query($sql);
        if ($result) {
$arr=array();
            /* fetch associative array */
   
            while ($row = $result->fetch_assoc()) {
                $d0=$row['prod_id'];
                $d1 = $row['prod_name'];
                $d2 = $row['prod_link'];
                $d3 = $row['annual_price'];



                $s1 = $row['mon_price'];
                $s2 = $row['sku'];
                $row1 = json_decode($row['description'], true);
                $d4 = $row1['webspace'];
                $d5 = $row1['bandwidth'];
                $d6 = $row1['mailbox'];
                $d7 = $row1['languagetechnology'];
                $d8 = $row1['freedomain'];

                $arr[] =[
                    "prod_id"=>$d0,
                    "product name" => $d1,
                    "prod_link" => $d2,
                    "annual_price" => $d3,
                    "webspace" => $d4,
                    "bandwidth" => $d5,
                    "mailbox" => $d6,
                    "languagetechnology" => $d7,
                    "freedomain" => $d8,
                    "mon_price" => $s1,
                    "sku" => $s2
                ];
            }
            
        }
 
        return($arr);
    }

    function checklogin($id)
    {
        $sql = "Select * from tbl_user  ";
        if ($result = $this->conn->query($sql)) {
            while ($row = $result->fetch_assoc()) {
                if ($row['is_admin'] == 1) {
                    return true;
                } else {
                    if ($row['is_admin'] == 0) {
                        if ($row['active'] == 1) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            }
        }
    }

    function checkforadmin()
    {
        $phone = $_POST['phone'];
        $pwd = $_POST['pwd'];
        $servernamedb = "localhost";
        $usernamedb = "root";
        $passworddb = "";
        $databasedb = "cedhosting";
        $con = mysqli_connect($servernamedb, $usernamedb, $passworddb, $databasedb);
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        } else {
            $sql = ("select * from tbl_user where password='$pwd' and email='$phone' or mobile='$phone' ");
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
                if ($row['is_admin==1']) {
                    return 2;
                } else {
                    if ($row['is_admin'] == 0) {
                        if ($row['active'] == 1) {
                            return 1;
                        } else {
                            return 0;
                        }
                    }
                }
            }
        }
    }
}
$obj=new product();
$obj->Viewproduct1(61);