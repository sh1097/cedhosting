<?php
include('header.php');
include('admin/product.php');
?>
<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sub = new product();
	$store1 = $sub->Viewproduct1($id);
}
// print_r($store1);
if (isset($_GET['id'])) {
}
?>
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
									<li><span>Launch  </span> your business with Rs. 1000* Google AdWords Credit *</li>
									<li><span>30 day </span> Money Back Guarantee</li>
								</ul>
									<a href="#">view plans</a>
								</div>
								<div class="col-md-4 linux-grid1">
									<img src="images/cms.png" class="img-responsive" alt=""/>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
	 <div class="modal-body">
			<form action="cart.php" >
			<input type="text" id="product_id" name="product_id"  value="<?php echo $id?>"hidden>
			<select name="plan" id="" class="btn-block">
			<option value="">Choose Plan</option>
			<option value="annual">Annual Plan</option>
			<option value="monthly">Monthly Plan</option>
			</select>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="submit" class="btn btn-primary" name="add">Add</button>
			</div>
			</form>
		</div>
			
			
     
    </div>
  </div>
</div>

					<div class="tab-prices">
    <div class="container">
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            
            <div id="myTabContent" class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                    <div class="linux-prices">
                        <?php
                            foreach($store1 as $key1=>$val1){
                          $key1;
                              
                                echo "
                                <div class='col-md-3 linux-price'>
                                <div class='linux-top'>
                                <h4>Standard</h4>
                                </div>
                                <div class='linux-bottom'>
                                    <h5>"  .$val1['mon_price']. "₹.<span class='month'>per month</span></h5>
                                    <h5>"  .$val1['annual_price']. "₹.<span class='month'>per year</span></h5>
                                    <h6>Single Domain</h6>
                                    <ul>
                                    <li><strong>".$val1['webspace']."GB</strong> Web Space</li>
                                    <li><strong>".$val1['bandwidth']."GB</strong> Bandwidth</li>
                                    <li><strong>".$val1['mailbox']."</strong> Mailbox</li>
                                    <li><strong>".$val1['freedomain']."</strong> Free Domain</li>
                                    <li><strong>".$val1['languagetechnology']."</strong> Language/Technology</li>
                                    <li><strong>".$val1['mailbox']."</strong> Mailbox</li>
                                    <li><strong>location</strong> : <img src='images/india.png'></li>
                                    </ul>
                                    </div>
									<a class='open-homeEvents' data-toggle='modal' data-target='#exampleModal' data-prodid='<?php echo $id ?>'>Add To Cart</a>
								
                                    </div>";
                                }
                     
                        
                        ?>
                        </div>

                        
                        <div class="clearfix"></div>
                    </div
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
			
					<!-- Wordpress Features -->
				</div>
			<!---footer--->
				<div class="facebook-section">
					<div class="container">
					<div class="face-top">
						<h5><img src="images/facebook.png"><span>I can’t believe my grand mothers making me take Out the garbage I’m rich fuck this I’m going home I don’t need this shit</span><h5>
					</div>
					</div>
				</div>
				<div class="footer-section">
					<div class="container">
						<div class="footer-grids">
							<div class="col-md-3 footer-grid">
								<h4>flickr widget</h4>
								<div class="footer-top">
									<div class="col-md-4 foot-top">
										<img src="images/f1.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-4 foot-top">
									<img src="images/f2.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-4 foot-top">
									<img src="images/f3.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="footer-top second">
									<div class="col-md-4 foot-top">
									<img src="images/f4.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-4 foot-top">
									<img src="images/f1.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-4 foot-top">
									<img src="images/f2.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-3 footer-grid">
								<h4>tag cloud</h4>
								<ul>
								<li><a href="#">Premium</a></li>
								<li><a href="#">Graphic</a></li>
								<li><a href="#">1170px</a></li>
								<li><a href="#">Photoshop Freebie</a></li>
								<li><a href="#">Designer</a></li>
								<li><a href="#">Themes</a></li>
								<li><a href="#">thislooksgreat chris</a></li>
								<li><a href="#">Lovely Area</a></li>
								<li><a href="#">You might use it...</a></li>
								</ul>
							</div>
							<div class="col-md-3 footer-grid">
							<h4>recent posts</h4>
								<div class="recent-grids">
									<div class="col-md-4 recent-great">
										<img src="images/f4.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 recent-great1">
										<a href="#">This is my lovely headline title for this footer section.</a>
										<span>22 October 2014</span>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="recent-grids">
									<div class="col-md-4 recent-great">
										<img src="images/f1.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 recent-great1">
										<a href="#">This is my lovely headline title for this footer section.</a>
										<span>22 October 2014</span>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="recent-grids">
									<div class="col-md-4 recent-great">
										<img src="images/f3.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="col-md-8 recent-great1">
										<a href="#">This is my lovely headline title for this footer section.</a>
										<span>22 October 2014</span>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-3 footer-grid">
								<h4>get in touch</h4>
								<p>8901 Marmora Road</p>
								<p>Glasgow, DO4 89GR.</p>
								<p>Telephone : +1 234 567 890</p>
								<p>Telephone : +1 234 567 890</p>
								<p>FAX : + 1 234 567 890</p>
								<p>E-mail : <a href="mailto:example@mail.com"> example@mail.com</a></p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="copy-section">
							<p>&copy; 2016 Planet Hosting. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
						</div>
					</div>
				</div>
			<!---footer--->
			
			
</body>
</html>