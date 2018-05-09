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
		<title>ORDER | PT. WAHANA PAMUNAH LIMBAH INDUSTRI</title>
		<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/ionicons.min.css">
		<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/owl.theme.css">
	    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/main.css">
	    <link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/section.css">
			<link rel="stylesheet" href="<?php echo base_url('assets') ?>/css/order.css">
			<link rel="stylesheet" href="<?php echo base_url('assets/template/back/bower_components') ?>/font-awesome/css/font-awesome.min.css">

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
						<li class="active"><a href="<?php echo base_url('order') ?>">order</a></li>
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
				<li class="active">&nbsp;order</li>
			</ol>
		</div> <!-- /.container -->
	</section> <!-- /.section-background -->



<!-- Form isian custommer limbah B3-->
	<section class="contact section-wrapper" id="contact">
		<div class="container">
			<div class="row">

									<form>
									<h1>Form Permintaan Customer Limbah B3</h1>

									<div class="contentform">
									<div id="sendmessage"> Your message has been sent successfully. Thank you. </div>


									<div class="leftcontact">
												<div class="form-group">
													<p>Nama Perusahaan :<span>*</span></p>
													<span class="icon-case"><i class="fa fa-building-o"></i></span>
														<input type="text" name="nom" id="nom" required="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."/>
														<div class="validation"></div>
									 </div>

												<div class="form-group">
												<p>Jenis Perusahaan : <span>*</span></p>
												<span class="icon-case"><i class="fa fa-info"></i></span>
													<select type="text" name="prenom" id="prenom" required="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné."/>
													<option value="CV"> CV </option>
													<option value="PT"> PT </option>
													<option value="RS"> RS </option>
													<option value="klinik"> klinik</option>
												</select>
													<!--<select name="Jenis Perusahaan" id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné."/>
														<option value="CV"> CV </option>
														<option value="PT"> PT </option>
														<option value="RS"> RS </option>
														<option value="klinik"> klinik</option>
													</select>-->
														<div class="validation"></div>
									</div>

									<div class="form-group">
									<p>Alamat Lengkap Perusahaan : <span>*</span></p>
									<span class="icon-case"><i class="fa fa-home"></i></span>
														<input type="email" name="email" id="email" required="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire."/>
														<input type="text" name="society" id="society" required="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Société' doit être renseigné." placeholder="Provinsi"/>
														<input type="text" name="adresse" id="adresse" required="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Adresse' doit être renseigné." placeholder="Kabupaten"/>
														<div class="validation"></div>
									</div>


									<div class="form-group">
									<p>Kode Pos :<span>*</span></p>
									<span class="icon-case"><i class="fa fa-map-marker"></i></span>
										<input type="text" name="postal" id="postal" required="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."/>
														<div class="validation"></div>
									</div>



									</div>

									<div class="rightcontact">

									<div class="form-group">
									<p>E-mail :<span>*</span></p>
									<span class="icon-case"><i class="fa fa-envelope-o"></i></span>
										<input type="text" name="ville" id="ville" required="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
														<div class="validation"></div>
									</div>

									<div class="form-group">
									<p>Jenis Limbah :<span>*</span></p>
									<span class="icon-case"><i class="fa fa-filter	"></i></span>
										<select type="text" name="phone" id="phone" required="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"/>
											<option value="padat"> Padat </option>
											<option value="cair"> Cair</option>
									</select>
														<div class="validation"></div>
									</div>

									<div class="form-group">
									<p>Nomor Tlp/HP : <span>*</span></p>
									<span class="icon-case"><i class="fa fa-phone"></i></span>
														<input type="text" name="fonction" id="fonction" required="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Fonction' doit être renseigné."/>
														<div class="validation"></div>
									</div>

									<div class="form-group">
									<p>Fax : <span>*</span></p>
									<span class="icon-case"><i class="fa fa-fax"></i></span>
														<input type="text" name="sujet" id="sujet" required="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Sujet' doit être renseigné."/>
														<div class="validation"></div>
									</div>

									<div class="form-group">
									<p>Keterangan <span></span></p>
									<span class="icon-case"><i class="fa fa-comments-o"></i></span>
														<textarea name="message" rows="14" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné."></textarea>
														<div class="validation"></div>
									</div>
									</div>
									</div>
									<button type="submit" class="bouton-contact">Send</button>

									</form>


									<!-- form isian batako-->
									<section class="contact section-wrapper" id="contact">
										<div class="container">
											<div class="row">

																	<form>
																	<h1>Form Permintaan Customer Batako</h1>

																	<div class="contentform">
																	<div id="sendmessage"> Your message has been sent successfully. Thank you. </div>


																	<div class="leftcontact">
																				<div class="form-group">
																					<p>Nama Customer :<span>*</span></p>
																					<span class="icon-case"><i class="fa fa-male"></i></span>
																						<input type="text" name="nom" id="nom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."/>
																						<div class="validation"></div>
																	 </div>

																	<div class="form-group">
																	<p>Alamat : <span>*</span></p>
																	<span class="icon-case"><i class="fa fa-envelope-o"></i></span>
																						<input type="email" name="email" id="email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire."/>
																						<div class="validation"></div>
																	</div>

																	<div class="form-group">
																	<p>Provinsi :<span>*</span></p>
																	<span class="icon-case"><i class="fa fa-home"></i></span>
																		<input type="text" name="society" id="society" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Société' doit être renseigné."/>
																						<div class="validation"></div>
																	</div>

																	<div class="form-group">
																	<p>Kabupaten : <span>*</span></p>
																	<span class="icon-case"><i class="fa fa-location-arrow"></i></span>
																		<input type="text" name="adresse" id="adresse" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Adresse' doit être renseigné."/>
																						<div class="validation"></div>
																	</div>

																	<div class="form-group">
																	<p>Kode Pos :<span>*</span></p>
																	<span class="icon-case"><i class="fa fa-map-marker"></i></span>
																		<input type="text" name="postal" id="postal" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."/>
																						<div class="validation"></div>
																	</div>

																	<div class="form-group">
																	<p>Nomor Identitas :<span>*</span></p>
																	<span class="icon-case"><i class="fa fa-building-o"></i></span>
																		<input type="text" name="ville" id="ville"  data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
																						<div class="validation"></div>
																	</div>


																	</div>

																	<div class="rightcontact">

																	<div class="form-group">
																	<p>E-mail :<span>*</span></p>
																	<span class="icon-case"><i class="fa fa-building-o"></i></span>
																		<input type="text" name="ville" id="ville"  data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
																						<div class="validation"></div>
																	</div>


																	<div class="form-group">
																	<p>Nomor Tlp/HP : <span>*</span></p>
																	<span class="icon-case"><i class="fa fa-info"></i></span>
																						<input type="text" name="fonction" id="fonction" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Fonction' doit être renseigné."/>
																						<div class="validation"></div>
																	</div>


																	<div class="form-group">
																	<p>Keterangan <span>*</span></p>
																	<span class="icon-case"><i class="fa fa-comments-o"></i></span>
																						<textarea name="message" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné."></textarea>
																						<div class="validation"></div>
																	</div>
																	</div>
																	</div>
																	<button type="submit" class="bouton-contact">Send</button>

																	</form>
							<!--<h3  text-align"left">Form Permintaan Customer Limbah B3</h3>
							<pre>
							<p>Nama Perusahaan						:	<input type:"text" name="Nama Perusahaan" value=""></p>
							<p>Jenis Perusahaan 					:	<select name="Jenis Perusahaan">
								<option value="CV"> CV </option>
								<option value="PT"> PT </option>
								<option value="RS"> RS </option>
								<option value="klinik"> klinik</option>
							</select>
							<p>Alamat Lengkap Perusahaan 				: 	<input type:"text" name="Alamat Perusahaan" value=""></p>
							<p> Kode Pos 						:       <input type="text" name="Provinsi" value=""></p>
							<p> email						 	: 	<input type="text" name="Email"  value=""> </p>
							<p> Jenis Limbah						: 	<input type="text" name="Jenis Limbah"  value=""> </p>
							<p> Nomor Tlp/HP						: 	<input type="text" name="telepon"  value=""> </p>
							<p> Fax							: 	<input type="text" name="Fax"  value=""> </p>
							<input class="btn btn-sub" type="submit" value="Send Message" align="right">
						</pre>
					</div>
					</form> <!-- /.row -->

					<!--<form class="row form">
								<h3  text-align"left">Form Permintaan Customer Limbah B3</h3>
								<pre>
								<p>Nama Perusahaan						:	<input type:"text" name="Nama Perusahaan" value=""></p>
								<p>Jenis Perusahaan 					:	<select name="Jenis Perusahaan">
									<option value="CV"> CV </option>
									<option value="PT"> PT </option>
									<option value="RS"> RS </option>
									<option value="klinik"> klinik</option>
								</select>
								<p>Alamat Lengkap Perusahaan 				: 	<input type:"text" name="Alamat Perusahaan" value=""></p>
								<p> Kode Pos 						:       <input type="text" name="Provinsi" value=""></p>
								<p> email						 	: 	<input type="text" name="Email"  value=""> </p>
								<p> Jenis Limbah						: 	<input type="text" name="Jenis Limbah"  value=""> </p>
								<p> Nomor Tlp/HP						: 	<input type="text" name="telepon"  value=""> </p>
								<p> Fax							: 	<input type="text" name="Fax"  value=""> </p>
								<input class="btn btn-sub" type="submit" value="Send Message">
							</pre>
						</form> <!-- /.row -->
					</div>
					</div>
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
