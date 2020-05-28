<?php
	include 'header.php';
?>
	<style type="text/css">
		#content{
	text-align: center;
	padding-top: 25%;
	text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
				 0px 8px 13px rgba(0,0,0,0.2),
				 0px 18px 23px rgba(0,0,0,0.3)
}

	h1{
		color: black;
		font-weight: 700;
		font-size: 5em;
	}
	.jumbotron{
  			background: url("https://images.unsplash.com/photo-1505985518385-c4e867fcaf82?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60");
  		}
  	body{
  		background: url("https://images.unsplash.com/photo-1554755229-ca4470e07232?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60");
  		background-position: center;
  		background-size: cover;
  		background-repeat: no-repeat;
  	}
  	.p1{
  		font-weight: 700;
  	}

	</style>
	<div class=" container">
		<div class="jumbotron">
			<div class="content">
				<h1 class="text-center">The Tax</h1>
				<hr>
				<center><button class="btn btn-lg btn-success"><i class="fas fa-paw"></i>  Get Started!!</button></center>
			</div>
		</div>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="./img/tax2.jpg" class="d-block w-100 h-20" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="./img/tax3.jpg" class="d-block w-100 h-20" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="./img/tax4.jpg" class="d-block w-100 h-20" alt="...">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div>
		<hr>
		<h2 class="text-center" style="font-weight: 600;">About Us..</h2>
		<div class="row">
			<div class="col-md-6">
					<div class="media border p-3">
						  <div class="media-body">
						    <p class="p1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	  					</div>
					</div>
			</div>
			<div class="col-md-6">
					<div class="media border p-3">
						  
						  <div class="media-body">
						    <p class="p1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	  					</div>
					</div>
			</div>
		
	</div>	

	<!--Services-->
	<div class="jumbotron text-white" style="background:black;padding:0px;">
		<h3 class="text-center my-3">Available Services near you</h3>
		<div class="row">
			<div class="col-md-4 col-6">
				<a href="#">Company Formation</a><br>
			    <a href="#">Company Secretarial</a><br>
			    <a href="#">Bookkeeping</a><br>
			    <a href="#">Auditing</a><br>
			    <a href="#">Statutory Reporting</a><br>
			    <a href="#">Payroll Consulting</a><br>
      			<a href="#">ISO Registration</a><br>
      			<a href="#">Trust Formation</a><br>
			</div>
			<div class="col-md-4 col-6">
				<a href="#">Business Startup Consultancy</a><br>
      			<a href="#">Business Valuations</a><br>
      			<a href="#">Due Diligence</a><br>
      			<a href="#">Family Business Consulting</a><br>
      			<a href="#">Change In Share Capital Of Company</a><br>
      			<a href="#">ROC Filing</a><br>
      			<a href="#">GST Returns</a><br>
      			<a href="#">15ca 5cb Certificate</a><br>
			</div>
			<div class="col-md-4 col-6">
				<a href="#">E-commerce Startup Consulting</a><br>
      			<a href="#">Wealth Creation And Management</a><br>
      			<a href="#">Shop License</a><br>
      			<a href="#">GST Consulting</a><br>
      			<a href="#">TDS Consulting</a><br>
      			<a href="#">Online Startup Registration</a><br>
      			<a href="#">Ca Services</a><br>
      			<a href="#">Limited Liability Partnership</a><br>
			</div>
			<hr>
		</div>
	</div>

	<!--Footer-->
	
</div>





<?php
	include 'footer.php';
?>