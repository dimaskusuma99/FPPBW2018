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
		<title>NEWS | PT. WAHANA PAMUNAH LIMBAH INDUSTRI</title>



	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


		<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/ionicons.min.css">
		<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/owl.theme.css">
	    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/main.css">
	    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/section.css">
		<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/news.css">
	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!--[if lt IE 9]>
				<script src="<?php echo base_url('assets') ?>/js/html5shiv.js"></script>
				<script src="<?php echo base_url('assets') ?>/js/respond.js"></script>
			<![endif]-->

			<!--[if IE 8]>
		    	<script src="<?php echo base_url('assets') ?>/js/selectivizr.js"></script>
		    <![endif]-->
		  <?php
            error_reporting(0);
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }

        ?>


</head>
<body>
	<!-- Start of LiveChat (www.livechatinc.com) code -->
	<script type="text/javascript">
	window.__lc = window.__lc || {};
	window.__lc.license = 9759300;
	(function() {
	  var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
	  lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
	  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
	})();
	</script>
	<!-- End of LiveChat code -->
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
						<li class="active"><a href="<?php echo base_url('news') ?>">news</a></li>
						<li><a href="<?php echo base_url('presentation') ?>">presentation</a></li>
						<li><a href="<?php echo base_url('gallery') ?>">gallery</a></li>
						<li class="dropdown">
				            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Order <span class="caret"></span></a>
				              <ul class="dropdown-menu" role="menu">
				                <li><a href="<?php echo base_url('limbah') ?>">Limbah B3</a></li>
				                <li><a href="<?php echo base_url('batako') ?>">Batako</a></li>
				              </ul>
				         </li>
						<li><a href="<?php echo base_url('contact') ?>">contact</a></li>
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
				<li class="active">&nbsp;service</li>
			</ol>
		</div> <!-- /.container -->
	</section> <!-- /.section-background -->


<!-- Portfolio -->
	<section class="" id="">
		<div class="container section-wrapper">
			<h2 class="section-title black">
				News
			</h2> <!-- /.section-title -->
			<div class="underline purple"></div>
			<div class="row">
					<?php
				foreach ($data->result_array() as $j) :
						$post_id=$j['tulisan_id'];
						$post_judul=$j['tulisan_judul'];
						$post_isi=$j['tulisan_isi'];
						$post_author=$j['tulisan_author'];
						$post_image=$j['tulisan_gambar'];
						$post_tglpost=$j['tanggal'];
						$post_slug=$j['tulisan_slug'];
				?>
					<div class="col-md-4 col-xs-12">
						<img src="<?php echo base_url().'assets/images/'.$post_image;?>" class="img-responsive">
						<h3><a href="<?php echo base_url().'news/detail/'.$post_slug;?>"><?php echo $post_judul;?></a></h3>
						<span><?php echo $post_tglpost.' | '.$post_author;?></span>
						<p><?php echo limit_words($post_isi,10).'...';?></em></p>
						<p><a href="<?php echo base_url().'news/detail/'.$post_slug;?>" class="btn btn-primary">Selengkapnya <i class="icon-arrow-right"></i></a></p>
					</div>
					<?php endforeach;?>
			</div>
			<center><?php echo $page;?></center>
		</div> <!-- /.container -->
	</section> <!-- /.portfolio -->


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
	<script src="<?php echo base_url('assets') ?>/js/script.js"></script>


</body>
</html>
