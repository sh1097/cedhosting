<?php include 'header.php'; ?>
<?php include_once 'admin/product.php' ?>
<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sub = new product();
	$store1 = $sub->Viewproduct1($id);

	print_r($store1);
}

if (isset($_GET['id'])) {
}
?>
<script>
	$(document).on("click", ".add", function() {
		alert($(this).data("id"));

	})
</script>

<div class="content">
	<div class="linux-section">
		<div class="container">
			<div class="linux-grids">
				<div class="col-md-8 linux-grid">
					<h2>CMS Hosting</h2>
					<ul>
						<li><span>Unlimited </span> domains, email and disk space</li>
						<li><span>99.9% uptime </span> with dedicated 24/7 technical support</li>
						<li><span>1 click</span> WordPress Installation with cPanel (demo) platform</li>
						<li><span>Launch </span> your business with Rs. 1000* Google AdWords Credit *</li>
						<li><span>30 day </span> Money Back Guarantee</li>
					</ul>
					<a href="#">view plans</a>
				</div>
				<div class="col-md-4 linux-grid1">
					<img src="images/cms.png" class="img-responsive" alt="" />
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="tab-prices">
		<div class="container">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
					<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">IN Hosting</a></li>
					<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">US Hosting</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						<div class="linux-prices">
							<div class="col-md-3 linux-price">
								<div class="linux-top">
									<h4>Standard</h4>
								</div>
								<div class="linux-bottom">
									<h5><?php echo $store1['annual_price']; ?><span class="month">per annum</span></h5>
									<h5><?php echo $store1['mon_price']; ?><span class="month">per month</span></h5>
									<h6><?php echo $store1['freedomain']; ?> Domain</h6>
									<ul>
										<li><strong><?php echo $store1['webspace']; ?></strong> Disk Space</li>
										<li><strong><?php echo $store1['bandwidth']; ?></strong> Data Transfer</li>
										<li><strong><?php echo $store1['mailbox']; ?></strong> Email Accounts</li>
										<li><strong>Includes</strong> Global CDN</li>
										<li><strong>high performance</strong> Servers</li>
										<li><strong>location</strong> : <img src="images/india.png"></li>
									</ul>
								</div>
								<button type="button" class="btn btn-danger add " style="width:100%;" data-toggle="modal" data-target="#myModal" data-id="<?php echo $id ?>">Add To Cart</button>

								<!-- Modal -->
								<div id="myModal" class="modal fade" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Modal Header</h4>
											</div>
											<div class="modal-body">
												<form>
													<span id="m1" name="idd"> id= <?php echo $id ?></span><br>
													<select id="sel" name="sel" style="font-size:15px;width:60%;">
														<option value="annual"> annual </option>
														<option value="monthly"> Monthly </option>
													</select>
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
												<button type="button" class="btn btn-success" id="modalid" value="Add">Add</button>
											</div>
										</div>

									</div>
								</div>
							</div>
							<div class="col-md-3 linux-price">
								<div class="linux-top">
									<h4>Advanced</h4>
								</div>
								<div class="linux-bottom">
									<h5><?php echo $store1['annual_price']; ?><span class="month">per annum</span></h5>
									<h5><?php echo $store1['mon_price']; ?><span class="month">per month</span></h5>
									<h6><?php echo $store1['freedomain']; ?> Domain</h6>
									<ul>
										<li><strong><?php echo $store1['webspace']; ?></strong> Disk Space</li>
										<li><strong><?php echo $store1['bandwidth']; ?></strong> Data Transfer</li>
										<li><strong><?php echo $store1['mailbox']; ?></strong> Email Accounts</li>
										<li><strong>Includes</strong> Global CDN</li>
										<li><strong>high performance</strong> Servers</li>
										<li><strong>location</strong> : <img src="images/india.png"></li>
									</ul>
								</div>

								<button type="button" class="btn btn-danger add " style="width:100%;" data-toggle="modal" data-target="#myModal">Add To Cart</button>


							</div>
							<div class="col-md-3 linux-price">
								<div class="linux-top">
									<h4>Business</h4>
								</div>
								<div class="linux-bottom">
									<h5><?php echo $store1['annual_price']; ?><span class="month">per annum</span></h5>
									<h5><?php echo $store1['mon_price']; ?><span class="month">per month</span></h5>
									<h6><?php echo $store1['freedomain']; ?> Domain</h6>
									<ul>
										<li><strong><?php echo $store1['webspace']; ?></strong> Disk Space</li>
										<li><strong><?php echo $store1['bandwidth']; ?></strong> Data Transfer</li>
										<li><strong><?php echo $store1['mailbox']; ?></strong> Email Accounts</li>
										<li><strong><?php $store1['languagetechnology']; ?></strong> Global CDN</li>
										<li><strong>high performance</strong> Servers</li>
										<li><strong>location</strong> : <img src="images/india.png"></li>
									</ul>
								</div>
								<button type="button" class="btn btn-danger  add " style="width:100%;" data-toggle="modal" data-target="#myModal">Add To Cart</button>
								<!--  -->
							</div>
							<div class="col-md-3 linux-price">
								<div class="linux-top">
									<h4>Pro</h4>
								</div>
								<div class="linux-bottom">
									<h5><?php echo $store1['annual_price']; ?><span class="month">per annum</span></h5>
									<h5><?php echo $store1['mon_price']; ?><span class="month">per month</span></h5>
									<h6><?php echo $store1['freedomain']; ?> Domain</h6>
									<ul>
										<li><strong><?php echo $store1['webspace']; ?></strong> Disk Space</li>
										<li><strong><?php echo $store1['bandwidth']; ?></strong> Data Transfer</li>
										<li><strong><?php echo $store1['mailbox']; ?></strong> Email Accounts</li>
										<li><strong><?php $store1['languagetechnology']; ?></strong> Global CDN</li>
										<li><strong>high performance</strong> Servers</li>
										<li><strong>location</strong> : <img src="images/india.png"></li>
									</ul>
								</div>
								<button type="button" class="btn btn-danger  add " style="width:100%;" data-toggle="modal" data-target="#myModal">Add To Cart</button>

							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
						<div class="linux-prices">
							<div class="col-md-3 linux-price">
								<div class="linux-top us-top">
									<h4>Standard</h4>
								</div>
								<div class="linux-bottom">
									<h5><?php echo $store1['annual_price']; ?><span class="month">per annum</span></h5>
									<h5><?php echo $store1['mon_price']; ?><span class="month">per month</span></h5>
									<h6><?php echo $store1['freedomain']; ?> Domain</h6>
									<ul>
										<li><strong><?php echo $store1['webspace']; ?></strong> Disk Space</li>
										<li><strong><?php echo $store1['bandwidth']; ?></strong> Data Transfer</li>
										<li><strong><?php echo $store1['mailbox']; ?></strong> Email Accounts</li>
										<li><strong><?php $store1['languagetechnology']; ?></strong> Global CDN</li>
										<li><strong>high performance</strong> Servers</li>
										<li><strong>location</strong> : <img src="images/india.png"></li>
									</ul>
								</div>
								<button type="button" class="btn btn-danger  add" style="width:50%;" data-toggle="modal" data-target="#myModal">Add To Cart</button>

							</div>
							<div class="col-md-3 linux-price">
								<div class="linux-top us-top">
									<h4>Advanced</h4>
								</div>
								<div class="linux-bottom">
									<h5><?php echo $store1['annual_price']; ?><span class="month">per annum</span></h5>
									<h5><?php echo $store1['mon_price']; ?><span class="month">per month</span></h5>
									<h6><?php echo $store1['freedomain']; ?> Domain</h6>
									<ul>
										<li><strong><?php echo $store1['webspace']; ?></strong> Disk Space</li>
										<li><strong><?php echo $store1['bandwidth']; ?></strong> Data Transfer</li>
										<li><strong><?php echo $store1['mailbox']; ?></strong> Email Accounts</li>
										<li><strong><?php echo $store1['languagetechnology']; ?></strong> Global CDN</li>
										<li><strong>high performance</strong> Servers</li>
										<li><strong>location</strong> : <img src="images/india.png"></li>
									</ul>
								</div>
								<button type="button" class="btn btn-danger add " style="width:100%;" data-toggle="modal" data-target="#myModal">Open Modal</button>

							</div>
							<div class="col-md-3 linux-price">
								<div class="linux-top us-top">
									<h4>Business</h4>
								</div>
								<div class="linux-bottom us-bottom">
									<h5><?php echo $store1['annual_price']; ?><span class="month">per annum</span></h5>
									<h5><?php echo $store1['mon_price']; ?><span class="month">per month</span></h5>
									<h6><?php echo $store1['freedomain']; ?> Domain</h6>
									<ul>
										<li><strong><?php echo $store1['webspace']; ?></strong> Disk Space</li>
										<li><strong><?php echo $store1['bandwidth']; ?></strong> Data Transfer</li>
										<li><strong><?php echo $store1['mailbox']; ?></strong> Email Accounts</li>
										<li><strong><?php echo $store1['languagetechnology']; ?></strong> Global CDN</li>
										<li><strong>high performance</strong> Servers</li>
										<li><strong>location</strong> : <img src="images/india.png"></li>
									</ul>
								</div>
								<button type="button" class="btn btn-danger add " style="width:100%;" data-toggle="modal" data-target="#myModal">Open Modal</button>



							</div>
							<div class="col-md-3 linux-price">
								<div class="linux-top us-top">
									<h4>Pro</h4>
								</div>
								<div class="linux-bottom us-bottom">
									<h5><?php echo $store1['annual_price']; ?><span class="month">per annum</span></h5>
									<h5><?php echo $store1['mon_price']; ?><span class="month">per month</span></h5>
									<h6><?php echo $store1['freedomain']; ?> Domain</h6>
									<ul>
										<li><strong><?php echo $store1['webspace']; ?></strong> Disk Space</li>
										<li><strong><?php echo $store1['bandwidth']; ?></strong> Data Transfer</li>
										<li><strong><?php echo $store1['mailbox']; ?></strong> Email Accounts</li>
										<li><strong><?php echo $store1['languagetechnology']; ?></strong> Global CDN</li>
										<li><strong>high performance</strong> Servers</li>
										<li><strong>location</strong> : <img src="images/india.png"></li>
									</ul>
								</div>
								<button type="button" class="btn btn-danger add " style="width:100%;" data-toggle="modal" data-target="#myModal">Open Modal</button>


							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- clients -->
	<div class="clients">
		<div class="container">
			<h3>Some of our satisfied clients include...</h3>
			<ul>
				<li><a href="#"><img src="images/c1.png" title="disney" /></a></li>
				<li><a href="#"><img src="images/c2.png" title="apple" /></a></li>
				<li><a href="#"><img src="images/c3.png" title="microsoft" /></a></li>
				<li><a href="#"><img src="images/c4.png" title="timewarener" /></a></li>
				<li><a href="#"><img src="images/c5.png" title="disney" /></a></li>
				<li><a href="#"><img src="images/c6.png" title="sony" /></a></li>
			</ul>
		</div>
	</div>
	<!-- clients -->
	<!-- Wordpress Features -->
	<div class="features">
		<div class="container">
			<h3>Wordpress Features</h3>
			<div class="features-grids">
				<div class="col-md-4 features-grid">
					<img src="images/f1.png">
					<h4>Expert Web Design</h4>
					<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
				</div>
				<div class="col-md-4 features-grid">
					<img src="images/f2.png">
					<h4>Expert Web Design</h4>
					<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
				</div>
				<div class="col-md-4 features-grid">
					<img src="images/f3.png">
					<h4>Expert Web Design</h4>
					<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="features-grids">
				<div class="col-md-4 features-grid">
					<img src="images/f4.png">
					<h4>Expert Web Design</h4>
					<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
				</div>
				<div class="col-md-4 features-grid">
					<img src="images/f5.png">
					<h4>Expert Web Design</h4>
					<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
				</div>
				<div class="col-md-4 features-grid">
					<img src="images/f6.png">
					<h4>Expert Web Design</h4>
					<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- Wordpress Features -->
</div>
<!---footer--->
<div class="footer-section">
	<?php include 'footer.php' ?>
</div>
<script>
	$(document).ready(function() {
		$("#modalid").on(click, function() {
			var id = $("#m1").val();
			console.log(id);
		})
	})
</script>

</body>

</html>