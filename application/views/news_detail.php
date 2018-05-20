
	<?php
		error_reporting(0);
        $b=$data->row_array();
        $url=base_url().'artikel/'.$b['tulisan_slug'];
	    $img=base_url().'assets/images/'.$b['tulisan_gambar'];
	    $title=$b['tulisan_judul'];
	    $author=$b['tulisan_author'];
	    $date=$b['tanggal'];
	    $kategori=$b['tulisan_kategori_nama'];
	    $deskripsi=strip_tags($b['tulisan_isi']);
	    $isi=$b['tulisan_isi'];
	    $views=$b['tulisan_views'];
	    $rating=$b['tulisan_rating'];
    ?>

<!DOCTYPE html>
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
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
		<link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
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
					<div class="col-md-8">
						<h1 style="margin-bottom:0px;"><a href="<?php echo $url;?>"><?php echo $title;?></a></h1>
						<small><em>Posted by: <?php echo $author;?> | <?php echo $date;?> | Kategori: <?php echo $kategori;?> | <?php echo $views;?> kali dibaca | Rating: <?php echo $rating;?></em></small>
							<figure>
								<img src="<?php echo $img;?>" alt="" class="img-responsive">
							</figure>
							<?php echo $isi;?>
								<?php if($rate->num_rows()>0):?>

								<?php else:?>
								<div class="alert alert-success">
									<strong>Apakah pendapat Anda tentang artikel ini?</strong><br/><br/>
									<a class="btn btn-sm" href="<?php echo base_url().'news/good/'.$b['tulisan_slug'];?>" title="Good"><i class="fa fa-smile-o fa-2x"></i></a>
									<a class="btn btn-sm" href="<?php echo base_url().'news/like/'.$b['tulisan_slug'];?>" title="Like"><i class="fa fa-thumbs-o-up fa-2x"></i></a>
									<a class="btn btn-sm" href="<?php echo base_url().'news/love/'.$b['tulisan_slug'];?>" title="Love"><i class="fa fa-heart-o fa-2x"></i></a>
									<a class="btn btn-sm" href="<?php echo base_url().'news/genius/'.$b['tulisan_slug'];?>" title="Genius"><i class="fa fa-lightbulb-o fa-2x"></i></a>
								</div>
								<?php endif;?>
						<h4>Share:</h4>
						<div>
							<a class="popup2 btn btn-info btn-sm" href="https://plus.google.com/share?url=<?php echo $url; ?>" title="Bagikan ke Google+"><i class="fa fa-google-plus"></i> Google+</a>
							<a class="popup2 btn btn-info btn-sm" target="_parent" href="https://www.facebook.com/dialog/share?app_id=966242223397117&display=popup&href=<?php echo $url;?>" title="Bagikan ke Facebook"><i class="fa fa-facebook"></i> Facebook</a>
							<a class="popup2 btn btn-info btn-sm" href="http://twitter.com/share?source=sharethiscom&text=<?php echo $b['tulisan_judul'];?>&url=<?php echo $url; ?>&via=badoey" title="Bagikan ke Twitter"><i class="fa fa-twitter"></i> Twitter</a>
							<a class="popup2 btn btn-info btn-sm" href="javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());" title="Bagikan ke Pinterest"><i class="fa fa-pinterest"></i> Pinterest</a>
						</div>
					</div>



					<div class="col-md-4">
						<form class="search_form" action="<?php echo base_url().'news/search'?>" method="post">
							<input type="text" name="xfilter" class="form-control" placeholder="Search" required>
							<button type="submit" id="btncari"></button>
						</form>
						<br/>

						<h4><b>KATEGORI</b></h4>
						<div style="margin-top:-20px;margin-bottom:20px;"></div>
						<ul class="list-unstyled">
						<?php foreach($kat->result() as $i):?>
							<li><a href="<?php echo base_url().'news/kategori/'.$i->kategori_id;?>"><?php echo $i->kategori_nama.' ('.$i->jml.')';?></a></li>
						<?php endforeach;?>
						</ul>
						<br/>
						<br>
						<h4><b>POST POPULER</b></h4>
						<div style="margin-top:-20px;margin-bottom:20px;"></div>
						<?php foreach ($populer->result() as $row) : ?>
						<div class="media">
							<div class="media-left">
								<a href="<?php echo base_url().'news/detail/'.$row->tulisan_slug;?>">
									<img class="media-object" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" width="90">
								</a>
							</div>
							<div class="media-body">
								<h4 class="media-heading"><a href="<?php echo base_url().'news/detail/'.$row->tulisan_slug;?>"><?php echo $row->tulisan_judul;?></a></h4>
								<span><small><i>by: <?php echo $row->tulisan_author;?> | <?php echo $row->tanggal;?></i></small></span>
							</div>
						</div>
						<?php endforeach;?>

						<br/>
						<br>

						<h4><b>POST TERBARU</b></h4>
						<div style="margin-top:-20px;margin-bottom:20px;"></div>
						<?php foreach ($terbaru->result() as $row) : ?>
						<div class="media">
							<div class="media-left">
								<a href="<?php echo base_url().'news/artikel'.$row->tulisan_slug;?>">
									<img class="media-object" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" width="90">
								</a>
							</div>
							<div class="media-body">
								<h4 class="media-heading"><a href="<?php echo base_url().'artikel/'.$row->tulisan_slug;?>"><?php echo $row->tulisan_judul;?></a></h4>
								<span><small><i>by: <?php echo $row->tulisan_author;?> | <?php echo $row->tanggal;?></i></small></span>
							</div>
						</div>
						<?php endforeach;?>

					</div>

			</div>
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





	<!-- jQuery -->
	<script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url().'theme/js/jquery.easing.1.3.js'?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url().'theme/js/jquery.waypoints.min.js'?>"></script>
	<!-- Easy PieChart -->
	<script src="<?php echo base_url().'theme/js/jquery.easypiechart.min.js'?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url().'theme/js/jquery.flexslider-min.js'?>"></script>
	<!-- Stellar -->
	<script src="<?php echo base_url().'theme/js/jquery.stellar.min.js'?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url().'theme/js/main.js'?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#btncari').hide();
		});
	</script>
	<script>
        jQuery(document).ready(function($) {
          $('.popup2').click(function(event) {
            var width  = 575,
                height = 400,
                left   = ($(window).width()  - width)  / 2,
                top    = ($(window).height() - height) / 2,
                url    = this.href,
                opts   = 'status=1' +
                         ',width='  + width  +
                         ',height=' + height +
                         ',top='    + top    +
                         ',left='   + left;
            window.open(url, 'facebook', opts);
            return false;
          });
        });
	</script>


</body>
</html>
