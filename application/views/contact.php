<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
		<!-- meta -->
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>CONTACT | PT. WAHANA PAMUNAH LIMBAH INDUSTRI</title>
		<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/ionicons.min.css">
		<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/owl.theme.css">
	    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/main.css">
	    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/section.css">
	    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/contact.css">
	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
				<script src="<?php echo base_url('assets') ?>/js/html5shiv.js"></script>
				<script src="<?php echo base_url('assets') ?>/js/respond.js"></script>
			<![endif]-->

			<!--[if IE 8]>
		    	<script src="<?php echo base_url('assets') ?>/js/selectivizr.js"></script>
		    <![endif]-->
	</head>

<body>

<!-- Home -->
	<section class="portfolio-header" id="header">

		<nav class="navbar navbar-default _navbar-fixed-top">
			<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="" href="#"><img src="<?php echo base_url('assets') ?>/images/logo.png"></a>
				</div> <!-- /.navbar-header -->

		    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url('welcome') ?>">home</a></li>
						<li><a href="<?php echo base_url('about') ?>">introduction</a></li>
						<li><a href="<?php echo base_url('service') ?>">services</a></li>
						<li><a href="<?php echo base_url('news') ?>">news</a></li>
						<li><a href="<?php echo base_url('presentation') ?>">presentation</a></li>
						<li><a href="<?php echo base_url('gallery') ?>">gallery</a></li>
						<li class="dropdown">
				            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Order <span class="caret"></span></a>
				              <ul class="dropdown-menu" role="menu">
				                <li><a href="<?php echo base_url('limbah') ?>">Limbah B3</a></li>
				                <li><a href="<?php echo base_url('batako') ?>">Batako</a></li>
				              </ul>
				         </li>
						<li class="active"><a href="<?php echo base_url('contact') ?>">contact</a></li>
					</ul> <!-- /.nav -->
			    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container -->
		</nav>
	</section> <!-- /#header -->


<!-- Section Background -->
	<section class="section-background">
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="index-multipage.html">Home</a></li>
				<li class="active">&nbsp;contact</li>
			</ol>
		</div> <!-- /.container -->
	</section> <!-- /.section-background -->



<!-- Contact with us -->
	<section class="contact section-wrapper" id="contact">
		<div class="container">
			<div class="row">

	            <div class="col-md-3 contact-item col-sm-6 col-xs-12">
	                <i class="ion-location"></i>
	                <h3>Address</h3>
	                <p class="contact">
	                   Jl. Raya Rangkasbitung Km. 6, RW 1, Desa Parakan,
					   Kecamatan Jawilan, Serang.
	                </p>
	            </div>
	            <div class="col-md-3 contact-item col-sm-6 col-xs-12">
	                <i class="ion-ios-telephone"></i>
	                <h3>Phone</h3>
	                <p class="contact">
	                    (0254) 786 0456 / 786 0298
	                </p>
	            </div>
	            <div class="col-md-3 contact-item col-sm-6 col-xs-12">
	                <i class="ion-printer"></i>
	                <h3>Fax</h3>
	                <p class="contact">
	                    (0254) 786 0432
	                </p>
	            </div>
	            <div class="col-md-3 contact-item col-sm-6 col-xs-12">
	                <i class="ion-ios-email"></i>
	                <h3>Email Address</h3>
	                <p class="contact">
	                    info@wpli.co.id
	               	</p>
	            </div>


	        </div> <!-- /.row -->
	        <form action="<?php echo base_url('admin/inbox/tambah_aksi') ?>" method="post" class="row form" >
                <h3>Leave A Message</h3>
                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">Name</label>
                    <input name="inbox_nama" class="form-control" type="text" placeholder="Name" required="required">
                </div> <!-- /.form-group -->
                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">Email</label>
                    <input name="inbox_email" class="form-control" type="email" placeholder="Email" required="required">
                </div> <!-- /.form-group -->
                <div class="col-sm-4 col-xs-12 form-group">
                    <label class="sr-only">Website</label>
                    <input name="inbox_kontak" class="form-control" type="text" placeholder="Company" required="required">
                </div> <!-- /.form-group -->
                <div class="row">
                    <div class="col-md-12 col-xs-12 form-group">
                        <label class="sr-only">Message</label>
                        <textarea name="inbox_pesan" class="message form-control" placeholder="Write message" required="required"></textarea>
                    </div> <!-- /.form-group -->
                    <input class="btn btn-sub" type="submit" value="Send Message">
                </div>
            </form> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.contact -->





<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<img src="<?php echo base_url('assets') ?>/images/footer.png">
				</div>
				<div class="col-sm-6">
					<div class="copy">
						Office : (0254) 786 0456 / 786 0298 Fax : (0254) 786 0432
						<br>
						Jl. Raya Rangkasbitung Km. 6, RW 1, Desa Parakan, Kecamatan Jawilan, Serang.
						<br>
						Copyright &copy; 2018 PT.WPLI. All Rights Reserved.
					</div>
				</div>
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</footer>




	<script src="<?php echo base_url('assets') ?>/js/jquery-1.11.2.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url('assets') ?>/js/contact.js"></script>
	<!-- // <script src="<?php echo base_url('assets') ?>/js/smoothscroll.js"></script> -->
	<script src="<?php echo base_url('assets') ?>/js/script.js"></script>


</body>
</html>
