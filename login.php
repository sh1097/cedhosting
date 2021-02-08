<?php include 'header.php' ?>
<?
session_start();
error_reporting(0);if (isset($_SESSION['admin'])){
	
	echo"<script>window.location='admin/';</script>";
}


	?>
<div class="content">
	<div class="main-1">
		<div class="container">
			<div class="login-page">
				<div class="account_grid">
					<div class="col-md-6 login-left">
						<h3>new customers</h3>
						<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
						<a class="acount-btn" href="login2.php">Create an Account</a>
					</div>
					<div class="col-md-6 login-right">
						<h3>registered</h3>
						<p>If you have an account with us, please log in.</p>
						<form action="decide.php" method="Post">
							<div>
								<span>Email Address or phone <label>*</label></span>
								<input type="text" name="phone" id="phone">
							</div>
							<div>
								<span>Password<label>*</label></span>
								<input type="password" name="pwd" id="pwd">
							</div>
							<a class="forgot" href="#">Forgot Your Password?</a>
							<input type="submit" value="Login">
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- login -->
<!---footer--->
<div class="footer-section">
	<?php include 'footer.php' ?>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

</html>