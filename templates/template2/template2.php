<?php
/**
 * Template Name: Template 2
 *
 */
 ?>

 <?php if(have_posts()): while(have_posts()) : the_post(); ?>

<!DOCTYPE html>
<html>
<head>


	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> <?php echo the_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="/wp-content/plugins/landing-plugin/templates/template2/assets/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="/wp-content/plugins/landing-plugin/templates/template2/assets/css/override.css" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext" rel="stylesheet">
	<script type="text/javascript">
		var _iub = _iub || [];
		_iub.csConfiguration = {
			cookiePolicyId: 56881979,
			siteId: 1017647,
			lang: "it",
			priorConsent: false
		};
	</script>
	<script type="text/javascript" src="//cdn.iubenda.com/cookie_solution/safemode/iubenda_cs.js" charset="UTF-8" async></script>
	<script type="text/javascript">
		var home_url = '<?php get_site_url(); ?>';
		var debug = false;
	</script>

	<?php wp_head(); ?>


<!-- BEGIN Universal Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113392273-1"></script>
<script>
  <?php
    $codice_analytics = get_post_meta( get_the_ID(),'_codice_analytics' );
    echo $codice_analytics['0'];
  ?>
</script>
<!-- END  Universal Analytics -->

<!-- Global site tag (gtag.js) - Google AdWords: 818590868 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-818590868"></script>
<script>
  <?php
    $codice_adwords = get_post_meta( get_the_ID(),'_codice_adwords' );
    echo $codice_adwords['0'];
  ?>
</script>

</head>


<body>

<script>var landing_name = "<?php the_title(); ?>"</script>
<script>var base_url = "<?php echo get_site_url(); ?>"</script>
<script>var landing_url = "<?php echo get_permalink(); ?>"</script>
<script type="text/javascript" src="/wp-content/plugins/landing-plugin/templates/template2/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/wp-content/plugins/landing-plugin/templates/template2/assets/js/bootstrap.js"></script>


<!-- Tracking Code -->
<script>
  <?php
    $codice_tracking = get_post_meta( get_the_ID(),'_codice_codice_tracking' );
    echo $codice_tracking['0'];
  ?>
</script>

<!-- Inizio BODY -->

<div class="row header">

	<div class="row top_header">
		<div class="container">
			<div class="col-md-6 top_header_left">
				<img src="/wp-content/plugins/landing-plugin/templates/template2/assets/images/logo.png">
			</div>
			<div class="col-md-6 top_header_right">
				<img src="/wp-content/plugins/landing-plugin/templates/template2/assets/images/numero_verde.png">
			</div>
		</div>
	</div>
	
	<div class="row bottom_header">
		<div class="container">
			<div class="col-md-8 col-md-offset-2">
				<div class="text-header">
					<h1><?php echo the_title(); ?></h1>
					<h2>Sabbiatrice a recupero a pressione</h2>
				</div>
			</div>
		</div>
	</div>

</div>

<div class="row content">
	<div class="row content_top">
		<div class="container block_top">
			<div class="col-md-4 left_block_top"><img src="/wp-content/plugins/landing-plugin/templates/template2/assets/images/image-box-left.png"></div>
			<div class="col-md-4 center_block_top">
				<h3>La sabbiatrice Pressure TOP rappresenta, l'espressione dell'assoluta qualità da sempre ricercata dalla nostra azienda.</h3>
				<div class="hr"></div>
				<p>Dalla sintesi delle due divisioni <b>FEVI</b>, sabbiatrice e aspiratori industriali, nasce dopo 15 anni di storia della nostra azienda, il migliore sistema di sabbiatura a recupero presente sul mercato.</p>
				<img src="/wp-content/plugins/landing-plugin/templates/template2/assets/images/compila_form.png">
			</div>
			<div class="col-md-4 right_block_top">
				<p>Compila il Form</p>
				<?php $shortcode = get_post_meta( get_the_ID(),'_codice_contact_form' ); ?>
				<?php echo do_shortcode($shortcode['0']); ?>
			</div>
		</div>
	</div>
	<div class="row content_middle_top">
		<div class="container">
			<div class="col-md-6">
				<?php the_content(); ?>
			</div>
			<div class="col-md-6">
				<iframe class="video" width="555" height="315" src="https://www.youtube.com/embed/j-tbc9QYi7I?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				<div class="box-video">
					<p><span><b>STOP</b></span> alle <b>polveri</b> e alla <b>sabbia</b> da smaltire</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row content_middle_bottom">
		<div class="container">
			<div class="col-md-6">
				<p>
					<b>Unità di sabbiatura</b><br>
					Autonomia 60 lt<br>
					Ugelli in widia disponibili diametro 03/04/05/06 mm<br>
					Scuotitore pneumatico<br>
					Miscelatore pneumatico<br>
					Riduttore di pressione<br>
					Silenziatore di scarico pressione<br>
					Ciclone per la separazione delle polveri<br>
					Dimensioni<br>
					A 470 mm<br>
					B 1600 mm<br>
					C 675 mm<br>
					D 600<br>
					Peso kg 104<br><br>
					<b>Unità di aspirazione Lautos LS 300/70</b><br>
					Potenza 03 kw<br>
					Tensione 230+ 400V-3P+N+T<br>
					Portata d’aria m3/h 320<br>
					Depressione max 320 mBbar<br>
					Capienza 70 lt<br>
					Dimensioni 80 x 60 x H 162 cm<br>
				</p>
			</div>
			<div class="col-md-6">
				<img src="/wp-content/plugins/landing-plugin/templates/template2/assets/images/image_block_middle_right.jpg">
			</div>
		</div>
	</div>
	<div class="row content_box">
		<div class="container container_boxs_1">
			<div class="col-md-4">
				<img src="/wp-content/plugins/landing-plugin/templates/template2/assets/images/boxs/1.jpg">
				<br>
				<h4>Corpo pistola a recupero</h4>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/plugins/landing-plugin/templates/template2/assets/images/boxs/2.jpg">
				<br>
				<h4>Ciclone separatore</h4>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/plugins/landing-plugin/templates/template2/assets/images/boxs/3.jpg">
				<br>
				<h4>Ingresso polveri tangenziale</h4>
			</div>
		</div>
		<div class="container container_boxs_2">
			<div class="col-md-4">
				<img src="/wp-content/plugins/landing-plugin/templates/template2/assets/images/boxs/4.jpg">
				<br>
				<h4>Filtro di aspirazione aria</h4>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/plugins/landing-plugin/templates/template2/assets/images/boxs/5.jpg">
				<br>
				<h4>Miscelatore pneumatico</h4>
			</div>
			<div class="col-md-4">
				<img src="/wp-content/plugins/landing-plugin/templates/template2/assets/images/boxs/6.jpg">
				<br>
				<h4>Riduttori di pressione d'esercizio e scuotimento pneumatico</h4>
			</div>
		</div>
	</div>
	<div class="row preventivo">
		<div class="container">
			<div class="col-md-8">
				<p>Per un preventivo <b>Gratuito</b></p>
			</div>
			<div class="col-md-4">
				<a href="#wpcf7-f5-p7-o1">Compila il form</a>
			</div>
		</div>
	</div>
</div>



<div class="row footer">
	<div class="container text-center">
		<img class="footer_logo" src="/wp-content/plugins/landing-plugin/templates/template2/assets/images/logo.png">
		<br>
		<br>
		<p>
			Via Koch, 49/A-51<br>
			43123 Pilastrello<br>
			PARMA - Italy
			<br><br>
			Tel. : +39 0521 64 21 03<br>
			Fax : +39 0521 64 14 45
		</p>
	</div>
</div>
<div class="row footer-bottom">
	<div class="container">
		<div class="col-md-8">
			<p>Copyright 2018 © Fe.Vi. SRL unipersonale P.IVA 02452730340</p>
		</div>
		<div class="col-md-4">
			<div class="privacy-info">
				<a href="//www.iubenda.com/privacy-policy/56881979" class="iubenda-nostyle iubenda-embed" title="Privacy Policy">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "//cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
			</div>
		</div>
	</div>
</div>



<!-- Fine BODY -->

	<script type="text/javascript">
		document.addEventListener( 'wpcf7mailsent', function( event ) {
		    location = 'http://fevi.iridecomunicazione.it/landingpage/fevi/thank-you/';
		}, false );
	</script>

<?php wp_footer(); ?>

</body>
</html>


                <?php endwhile; ?>

                <?php endif; ?>
