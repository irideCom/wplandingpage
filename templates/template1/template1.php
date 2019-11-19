<?php
/**
 * Template Name: Template 1
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
	<link rel="stylesheet" type="text/css" href="/wp-content/plugins/landing-plugin/templates/template1/bootstrap.css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/wp-content/plugins/landing-plugin/templates/template1/main.css" />

	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<script type="text/javascript">
		var home_url = '<?php get_site_url(); ?>';
		var debug = false;
	</script>



<!-- BEGIN GADWP v5.0.0.1 Universal Analytics - https://deconf.com/google-analytics-dashboard-wordpress/ -->
<script>
  <?php
    $codice_analytics = get_post_meta( get_the_ID(),'_codice_analytics' );
    echo $codice_analytics['0'];
  ?>
</script>
<!-- END GADWP Universal Analytics -->


<!-- Facebook Pixel Code -->
<script>
  <?php
    $pixel_face = get_post_meta( get_the_ID(),'_codice_pixel_facebook' );
    echo $pixel_face['0']
  ?>
</script>
<!-- End Facebook Pixel Code -->

</head>


<body>
<!-- Google Tag Manager (noscript) -->
<?php
  $tag_manager = get_post_meta( get_the_ID(),'_codice_tag_manager' )
?>
<noscript>
  <iframe src="<?php echo $tag_manager['0'] ?>"height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="wrapper">
        <div class="top" id="header">
            <div class="container">
                <div class="hidden-xs col-sm-3 col-md-4 text-left" id="tel">
                    <a href="tel:00390521941649">Chiamaci Subito! <br class="hidden-md hidden-lg " /><strong>0521 941 649</strong></a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <img src="http://www.katitalia.com/landing/dehors/_assets/images/logo.png" class="img-responsive" id="logo-top" />
                </div>
                <div class="hidden-xs col-sm-3 col-md-4 text-right" id="social">&nbsp;</div>
            </div>
        </div>

        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">

                        <h1><span class="strong"><?php the_title(); ?></span></h1>
                    	  <?php the_content(); ?>
                    </div>
                    <div class="col-md-4 box-form">
                        <h3>Richiedi Preventivo</h3>
                        <div class="form">
                            <!-- Tab panes -->
                            <div class="tab-content">
                              <?php $shortcode = get_post_meta( get_the_ID(),'_codice_contact_form' ); ?>
                                <div class="tab-pane active" id="preventivo">
                                  <?php echo do_shortcode($shortcode['0']); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="site-info" style="text-align:center">
				          Tel: (0039) 0521 941649  &nbsp; - &nbsp; Fax: (0039) 0521 957195  &nbsp; - &nbsp; P.IVA. 00478800345 &nbsp; - &nbsp; Via Prampolini, 1/Q - 43044 Lemignano di Collecchio ( Parma ) Italy
				        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
  <div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">Informativa sulla Privacy</h4>
        </div>
        <div class="modal-body">
          <div class="block">

      <h1>Privacy Policy di <strong>pricer.sidemilia.com</strong></h1>

      <p>Per avere informazioni circa i tuoi dati personali raccolti, le finalità ed i soggetti con cui i dati vengono condivisi, contatta il Titolare.</p>

      <h2>Titolare del Trattamento dei Dati</h2>

      <p>
      Sid Emilia s.r.l.,<br>
      sidemilia@sidemilia.it<br>
      </p>

      <h2>Tipologie di Dati raccolti</h2>

      <p>Il Titolare non fornisce una lista di tipologie di Dati Personali raccolti.</p>


      <p>Altri Dati Personali raccolti potrebbero essere indicati in altre sezioni di questa privacy policy o mediante testi informativi visualizzati contestualmente alla raccolta dei Dati stessi.<br>I Dati Personali possono essere inseriti volontariamente dall’Utente, oppure raccolti in modo automatico durante l'uso di questa Applicazione.<br>L’eventuale utilizzo di Cookie - o di altri strumenti di tracciamento - da parte di questa Applicazione o dei titolari dei servizi terzi utilizzati da questa Applicazione, ove non diversamente precisato, ha la finalità di identificare l’Utente e registrare le relative preferenze per finalità strettamente legate all'erogazione del servizio richiesto dall’Utente.<br>Il mancato conferimento da parte dell’Utente di alcuni Dati Personali potrebbe impedire a questa Applicazione di erogare i propri servizi.</p>
      <p>L'Utente si assume la responsabilità dei Dati Personali di terzi pubblicati o condivisi mediante questa Applicazione e garantisce di avere il diritto di comunicarli o diffonderli, liberando il Titolare da qualsiasi responsabilità verso terzi.</p>

      <h2>Modalità e luogo del trattamento dei Dati raccolti</h2>

      <h3>Modalità di trattamento</h3>

      <p>Il Titolare tratta i Dati Personali degli Utenti adottando le opportune misure di sicurezza volte ad impedire l’accesso, la divulgazione, la modifica o la distruzione non autorizzate dei Dati Personali.<br>Il trattamento viene effettuato mediante strumenti informatici e/o telematici, con modalità organizzative e con logiche strettamente correlate alle finalità indicate. Oltre al Titolare, in alcuni casi, potrebbero avere accesso ai Dati categorie di incaricati coinvolti nell’organizzazione del sito (personale amministrativo, commerciale, marketing, legali, amministratori di sistema) ovvero soggetti esterni (come fornitori di servizi tecnici terzi, corrieri postali, hosting provider, società informatiche, agenzie di comunicazione) nominati anche, se necessario, Responsabili del Trattamento da parte del Titolare. L’elenco aggiornato dei Responsabili potrà sempre essere richiesto al Titolare del Trattamento.</p>

      <h3>Luogo</h3>

      <p>I Dati sono trattati presso le sedi operative del Titolare ed in ogni altro luogo in cui le parti coinvolte nel trattamento siano localizzate. Per ulteriori informazioni, contatta il Titolare.</p>

      <h3>Tempi</h3>

      <p>I Dati sono trattati per il tempo necessario allo svolgimento del servizio richiesto dall’Utente, o richiesto dalle finalità descritte in questo documento, e l’Utente può sempre chiedere l’interruzione del Trattamento o la cancellazione dei Dati.</p>

      <h2>Ulteriori informazioni sul trattamento</h2>

      <h3>Difesa in giudizio</h3>
      <p>
      I Dati Personali dell’Utente possono essere utilizzati per la difesa da parte del Titolare in giudizio o nelle fasi propedeutiche alla sua eventuale instaurazione, da abusi nell'utilizzo della stessa o dei servizi connessi da parte dell’Utente.<br>L’Utente dichiara di essere consapevole che al Titolare potrebbe essere richiesto di rivelare i Dati su richiesta delle pubbliche autorità.
      </p>

      <h3>Informative specifiche</h3>
      <p>
      Su richiesta dell’Utente, in aggiunta alle informazioni contenute in questa privacy policy, questa Applicazione potrebbe fornire all'Utente delle informative aggiuntive e contestuali riguardanti servizi specifici, o la raccolta ed il trattamento di Dati Personali.
      </p>

      <h3>Log di sistema e manutenzione</h3>
      <p>
      Per necessità legate al funzionamento ed alla manutenzione, questa Applicazione e gli eventuali servizi terzi da essa utilizzati potrebbero raccogliere Log di sistema, ossia file che registrano le interazioni e che possono contenere anche Dati Personali, quali l’indirizzo IP Utente.
      </p>

      <h3>Informazioni non contenute in questa policy</h3>
      <p>
      Maggiori informazioni in relazione al trattamento dei Dati Personali potranno essere richieste in qualsiasi momento al Titolare del Trattamento utilizzando le informazioni di contatto.
      </p>

      <h3>Esercizio dei diritti da parte degli Utenti</h3>
      <p>
      I soggetti cui si riferiscono i Dati Personali hanno il diritto in qualunque momento di ottenere la conferma dell'esistenza o meno degli stessi presso il Titolare del Trattamento, di conoscerne il contenuto e l'origine, di verificarne l'esattezza o chiederne l’integrazione, la cancellazione, l'aggiornamento, la rettifica, la trasformazione in forma anonima o il blocco dei Dati Personali trattati in violazione di legge, nonché di opporsi in ogni caso, per motivi legittimi, al loro trattamento. Le richieste vanno rivolte al Titolare del Trattamento.
      </p>

      <p>
      Questa Applicazione non supporta le richieste “Do Not Track”.<br>Per conoscere se gli eventuali servizi di terze parti utilizzati le supportano, l'Utente è invitato a consultare le rispettive privacy policy.
      </p>

      <h3>Modifiche a questa privacy policy</h3>
      <p>
      Il Titolare del Trattamento si riserva il diritto di apportare modifiche alla presente privacy policy in qualunque momento dandone pubblicità agli Utenti su questa pagina. Si prega dunque di consultare spesso questa pagina, prendendo come riferimento la data di ultima modifica indicata in fondo. Nel caso di mancata accettazione delle modifiche apportate alla presente privacy policy, l’Utente è tenuto a cessare l’utilizzo di questa Applicazione e può richiedere al Titolare del Trattamento di rimuovere i propri Dati Personali. Salvo quanto diversamente specificato, la precedente privacy policy continuerà ad applicarsi ai Dati Personali sino a quel momento raccolti.
      </p>

      <h3>Informazioni su questa privacy policy</h3>
      <p>
      Il Titolare del Trattamento dei Dati è responsabile per questa privacy policy, redatta partendo da moduli predisposti da Iubenda e conservati sui suoi server.
      </p>

      <h3>
      Definizioni e riferimenti legali
      </h3>

      <h4>Dati Personali (o Dati)</h4>
      <p>Costituisce dato personale qualunque informazione relativa a persona fisica, identificata o identificabile, anche indirettamente, mediante riferimento a qualsiasi altra informazione, ivi compreso un numero di identificazione personale.</p>

      <h4>Dati di Utilizzo</h4>
      <p>Sono le informazioni raccolte in maniera automatica da questa Applicazione (o dalle applicazioni di parti terze che questa Applicazione utilizza), tra le quali: gli indirizzi IP o i nomi a dominio dei computer utilizzati dall’Utente che si connette con questa Applicazione, gli indirizzi in notazione URI (Uniform Resource Identifier), l’orario della richiesta, il metodo utilizzato nel sottoporre la richiesta al server, la dimensione del file ottenuto in risposta, il codice numerico indicante lo stato della risposta dal server (buon fine, errore, ecc.) il paese di provenienza, le caratteristiche del browser e del sistema operativo utilizzati dal visitatore, le varie connotazioni temporali della visita (ad esempio il tempo di permanenza su ciascuna pagina) e i dettagli relativi all’itinerario seguito all’interno dell’Applicazione, con particolare riferimento alla sequenza delle pagine consultate, ai parametri relativi al sistema operativo e all’ambiente informatico dell’Utente.</p>

      <h4>Utente</h4>
      <p>L'individuo che utilizza questa Applicazione, che deve coincidere con l'Interessato o essere da questo autorizzato ed i cui Dati Personali sono oggetto del trattamento.</p>

      <h4>Interessato</h4>
      <p>La persona fisica o giuridica cui si riferiscono i Dati Personali.</p>

      <h4>Responsabile del Trattamento (o Responsabile)</h4>
      <p>La persona fisica, giuridica, la pubblica amministrazione e qualsiasi altro ente, associazione od organismo preposti dal Titolare al trattamento dei Dati Personali, secondo quanto predisposto dalla presente privacy policy.</p>

      <h4>Titolare del Trattamento (o Titolare)</h4>
      <p>La persona fisica, giuridica, la pubblica amministrazione e qualsiasi altro ente, associazione od organismo cui competono, anche unitamente ad altro titolare, le decisioni in ordine alle finalità, alle modalità del trattamento di dati personali ed agli strumenti utilizzati, ivi compreso il profilo della sicurezza, in relazione al funzionamento e alla fruizione di questa Applicazione. Il Titolare del Trattamento, salvo quanto diversamente specificato, è il proprietario di questa Applicazione.</p>

      <h4>Questa Applicazione</h4>
      <p>Lo strumento hardware o software mediante il quale sono raccolti i Dati Personali degli Utenti. </p>


      <h4>Riferimenti legali</h4>
      <p>Avviso agli Utenti europei: la presente informativa privacy è redatta in adempimento degli obblighi previsti dall’Art. 10 della Direttiva n. 95/46/CE, nonché a quanto previsto dalla Direttiva 2002/58/CE, come aggiornata dalla Direttiva 2009/136/CE, in materia di Cookie.</p>
      <p>Questa informativa privacy riguarda esclusivamente questa Applicazione.</p>

      <p>
      Ultima modifica: 24 Agosto 2016
      </p>


  </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
        </div>
      </div>
    </div>
  </div>




<script>var landing_name = "<?php the_title(); ?>"</script>
<script>var base_url = "<?php echo get_site_url(); ?>"</script>
<script>var landing_url = "<?php echo get_permalink(); ?>"</script>
<script type="text/javascript" src="/wp-content/plugins/landing-plugin/templates/template1/js/jquery.min.js"></script>
<script type="text/javascript" src="/wp-content/plugins/landing-plugin/templates/template1/js/bootstrap.js"></script>

<!-- Google Code per il tag di remarketing -->
<!--------------------------------------------------
I tag di remarketing possono non essere associati a informazioni di identificazione personale o inseriti in pagine relative a categorie sensibili. Ulteriori informazioni e istruzioni su come impostare il tag sono disponibili alla pagina: http://google.com/ads/remarketingsetup
------------------------------------------------- -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 964316246;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/964316246/?guid=ON&amp;script=0"/>
</div>
</noscript>


<!-- Hotjar Tracking Code for http://www.katitalia.com/landing/dehors/ -->
<script>
  <?php
    $codice_tracking = get_post_meta( get_the_ID(),'_codice_codice_tracking' );
    echo $codice_tracking['0'];
  ?>
</script>

<?php wp_footer(); ?>

</body>
</html>


                <?php endwhile; ?>

                <?php endif; ?>
