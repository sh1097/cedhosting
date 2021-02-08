
<?php include 'admin/product.php' ?>
<?
$create=new dbconn();
$db=$create->createConnection();
$sql = "SELECT *  FROM tbl_product  where prod_parent_id=1";
$result = mysqli_query($db,$sql);
if(isset($_GET['id'])){

    if(!isset($_SESSION['cart'])){
        $_SESSION['cart']=[]; //Create session 1st time
    
    } 
}

?>
<?php  
if(isset($_GET['add'])){
 $id=$_GET['product_id'];
 $plan=$_GET['plan'];
  $sub=new product();
  $store1=$sub->Viewproduct1($id);
	  

  
  }?>
  <?php

 if(isset($_GET['check'])) {  
$check=new product();
 $chck=$check->checklogin($id);
 if($chck!=false){
     header('location:checkout.php');
 }
 else {
      echo "<script>alert('you must login first for checkout');</script>";
     header('location:login.php');
 }
 

 }

 
  
  
  ?>



<!DOCTYPE php>
<php>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">

</head>
<body>
	<!---header--->
		<div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<i class="sr-only">Toggle navigation</i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="index.php"><i style="color:#e7663f">ced</i><i style="color:#585CA7">Hosting</i></a></h1>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
								<li><a href="about.php">About</a></li>
							
								<li><a href="services.php">Services</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
									<ul class="dropdown-menu">
                                <?php    while($row=mysqli_fetch_array($result)){
                                       echo "<li><a href='cmshosting.php?id=".$row['id']."'>".$row['prod_name']."</a ></li>";
                                } ?>
								
									</ul>			
								</li>
								
                                <li><a href="login.php">pricing</a></li>
                           	<li><a href="blog.php">Blog</a></li>

                                <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"><span class="badge">1</span></i></a></li>

                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="login.php">Login</a></li>
							</ul>
									  
						</div>
					</div>
				</nav>
			</div>
        </div>
        <div class="container mt--8 pb-5" >
<!-- table display -->
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush" id="dataTable">
                <thead class="thead-light">
                    <tr>
                        <th>Product</th>
                        <th>Plan</th>
                        <th>price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                 
                    </tr>
                </thead>
                <tbody>
              
                  <tr>
              <?php foreach($store1 as$key1=>$val1){
              ?>
		
            <td><?php echo $val1['product name']; ?></td>
            <td><?php echo $plan;?></td>
            <?php if($plan=="monthly"){?>
            <td><?php echo $val1['mon_price']; ?></td>
            <?}?>
            <?php if($plan=="annual") { ?>
                <td><?php echo $val1['annual_price'];?></td>
                <?}}?>
                <td>1</td>
      
            <td>
			
			
      <a style="margin-left:6%;"  href="#" class="btn btn-danger Sdel_btn">Remove</a>  </td>
 
              
   </table>
            </div>
          </div>
        </div>
      </div>
        </div>
        <a style="margin-left:6%;"  href="checkout.php?check=<?php echo $id ?>"  id="check" class="btn btn-success Sdel_btn" name="check">Checkout</a>  </td>

        <div class="footer-section">
                    <?php include 'footer.php'?>
				</div>
</body>
<script src="https://www.paypal.com/sdk/js?client-id=YOUR_CLIENT_ID&currency=USD"></script>

</html>