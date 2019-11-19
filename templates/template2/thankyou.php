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
		var home_url = '<?php get_site_url(); ?>';
		var debug = false;
	</script>



<!-- BEGIN Universal Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113392273-1"></script>
<script>
  <?php
    $codice_analytics = get_post_meta( get_the_ID(),'_codice_analytics' );
    echo $codice_analytics['0'];
  ?>
</script>
<!-- END  Universal Analytics -->

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
					<h1>Grazie per averci contattato</h1>
					<h2>Sabbiatrice a recupero a pressione</h2>
				</div>
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
				<a href="#">Note Legali</a> | <a href="#">Privacy</a>
			</div>
		</div>
	</div>
</div>



<!-- Fine BODY -->

<?php wp_footer(); ?>

</body>
</html>


                <?php endwhile; ?>

                <?php endif; ?>
