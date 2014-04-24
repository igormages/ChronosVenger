<?php 
	
	require_once('requires.php');
	if(isset($_GET['classe']) AND !empty($_GET['classe'])) {
		getAPI($_GET['classe']);
		exit;
	}
	//T4ze		
?>
<!DOCTYPE html>
<html lang="fr" class=""><head>
  <meta charset="utf-8">
  <title>ChronosVenger - Chronos for calendar by Igor Magès & T4ze</title>
  <meta name="description" content="Use chrnos on yours calendars, gmail, iOS...">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="css/animate.css" type="text/css">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/font.css" type="text/css" cache="false">
  <link rel="stylesheet" href="js/nestable/nestable.css" type="text/css" cache="false">
  <link rel="stylesheet" href="css/plugin.css" type="text/css">
  <link rel="stylesheet" href="css/app.css" type="text/css">
  <link rel="stylesheet" href="css/zoombox.css" type="text/css">
  <!--[if lt IE 9]>
    <script src="js/ie/respond.min.js" cache="false"></script>
    <script src="js/ie/html5.js" cache="false"></script>
    <script src="js/ie/fix.js" cache="false"></script>
  <![endif]-->
  <style>
	  .helpExpander {
		  cursor: pointer;
	  }
	  .lineInfo i {
		  margin: 0.5em 1em 0.5em 0.5em; 
		  font-size:2em;
	  }
  </style>
</head>
<body style="">
  <section class="hbox stretch">
    <!-- .aside -->
    <!--
<aside class="bg-dark aside-sm" id="nav">
      <section class="vbox">
        <section class="w-f">
          
          <nav class="nav-primary hidden-xs">
            <ul class="nav">
              <li class="active">
                <a href="index.html">
                  <i class="fa fa-eye"></i>
                  <span>Classes</span>
                </a>
              </li> 
            </ul>
          </nav>
        </section>
        
      </section>
    </aside>
-->
    <!-- /.aside -->
    <!-- .vbox -->
    <section id="content">
      <section class="vbox">
        <section class="scrollable wrapper">

          <h1 class="m-t-none h3" style="margin: 1em 1em 2em 1em;">ChronosVenger <small>powered by Igor Magès & T4ze</small></h1>
		  <div class="col-sm-4">		        		
			<div class="panel">
			    	<header class="panel-heading bg-primary dker no-borders">
			            <div class="clearfix">
			              <div class="clear">
			                <div class="h4 m-t-xs m-b-xs">1. Comment ça marche ?</div>
			                <small class="text-muted"></small>
			              </div>                
			            </div>
					</header>
			  
				
			    	<div class="panel-body">
			    		<p class="lead">ChronosVenger intègre votre emploi du temps à votre calendrier! </p>
			    		<p>Il vous préviens quand sera votre prochain cours, avec qui et dans quelle salle !</p> <p>De plus certains smartphones vous avertiront le temps de trajet nécessaire afin d'arriver en cours ! Plus jamais de retard ou de petit oubli !</p>
			    		
			    		<h4 class="lineInfo"><i class="fa fa-crosshairs"></i>Choisissez une classe</h4>
			    		<h4 class="lineInfo"><i class="fa fa-calendar"></i>Abonnez vous au planning</h4>
			    		<h4 class="lineInfo"><i class="fa fa-smile-o"></i>Profitez d'une intégration simple</h4>
			    		
			    	</div>
				</div>
    		</div>
            <div class="col-sm-4">     
            	<div class="panel">
			    	<header class="panel-heading bg-primary dker no-borders">
			            <div class="clearfix">
			              <div class="clear">
			                <div class="h4 m-t-xs m-b-xs">2. Choisissez votre classe</div>
			                <small class="text-muted"></small>
			              </div>                
			            </div>
					</header>  
					<div class="panel-body">       
						<div class="dd" id="nestable1">
						<?php 
						
						
						printClasses($listeClasses);
						?>
						
						</div>
					</div>
            	</div>
				
            </div>
        	
	        		
	        		<div class="col-sm-4">
	        			<div class="panel">
			            	<header class="panel-heading bg-primary dker no-borders">
		                        <div class="clearfix">
		                          <div class="clear">
		                            <div class="h4 m-t-xs m-b-xs">3. Comment s'abonner ?</div>
		                            <small class="text-muted"></small>
		                          </div>                
		                        </div>
							</header>
						<div style="padding: 1em">
			        		
			        		<div class="panel">
				            	<header class="panel-heading bg-info dker no-borders helpExpander">
			                        <div class="clearfix">
			                          <div class="clear">
			                            <div class="h4 m-t-xs m-b-xs">iOS, OS X & iCloud</div>
			                            <small class="text-muted"></small>
			                          </div>                
			                        </div>
								</header>
	                      
			            	
				            	<div class="panel-body help">
		                            <article class="media">
		                              <div class="media-body">                        
		                                <p><span class="font-semibold">Étape 1:</span> Ouvrir Calendrier</p>
										<a class="zoombox" href="images/etape0.png"><img src="images/etape0.png"></a>
		                              </div>
		                            </article>
		                            <div class="line line-dashed"></div>
		                            
		                            <article class="media">
		                              <div class="media-body">                        
		                                <p><span class="font-semibold">Étape 2:</span> Ajouter un nouvel abonnement</p>
		                              	<a class="zoombox" href="images/etape1.png"><img src="images/etape1.png"></a>
		                              </div>
		                            </article>
		                            <div class="line line-dashed"></div>
		                            
		                            <article class="media">
		                              <div class="media-body">                        
		                                <p><span class="font-semibold">Étape 3:</span> Coller l'URL fournie par ChronosVenger</p>
		                              	<a class="zoombox" href="images/etape2.png"><img src="images/etape2.png"></a>
		                              </div>
		                            </article>
		                            <div class="line line-dashed"></div>
		                            
		                            <article class="media">
		                              <div class="media-body">                        
		                                <p><span class="font-semibold">Étape 4:</span>  <br />(1) Opter pour une configuration "iCloud" pour un accès sur vos iPhone ou iPad. <br />(2) Puis choisissez une actualisation automatique pour des emplois du temps toujours à jour !<br /> NB: Notre cache se met à jour toutes les 24h, nous vous conseillons une mise à jour quotidienne. </p>
										<a class="zoombox" href="images/etape3.png"><img src="images/etape3.png"></a>
		                              </div>
		                            </article>
		                            <div class="line line-dashed"></div>
								</div>
			            	</div>
			        		
			        		
			        		<div class="panel">
				            	<header class="panel-heading bg-success dker no-borders helpExpander">
			                        <div class="clearfix">
			                          <div class="clear">
			                            <div class="h4 m-t-xs m-b-xs">Google Calendar & Android</div>
			                            <small class="text-muted"></small>
			                          </div>                
			                        </div>
								</header>
	                      
			            	
				            	<div class="panel-body help">
		                            <article class="media">
		                              <div class="media-body">                        
		                                <p><span class="font-semibold">Étape 1:</span> Rendez-vous sur <a href="https://www.google.com/calendar">Google Calendar</a></p>
		                              </div>
		                            </article>
		                            <div class="line line-dashed"></div>
		                            
		                            <article class="media">
		                              <div class="media-body">                        
		                                <p><span class="font-semibold">Étape 2:</span> Ajouter un nouvel agenda par URL</p>
		                              	<a class="zoombox" href="images/etape1-android.png"><img src="images/etape1-android.png"></a>
		                              </div>
		                            </article>
		                            <div class="line line-dashed"></div>
		                              <div class="media-body">                        
		                                <p><span class="font-semibold">Étape 3:</span> Coller l'URL fournie par ChronosVenger</p>
										<a class="zoombox" href="images/etape2-android.png"><img src="images/etape2-android.png"></a>
		                              </div>
		                            </article>
		                            <div class="line line-dashed"></div>
		                            
								</div>
			            	</div>
						</div>
	        		</div>
        		</div>
        	</div>
            
            
          </div>
        </section>
      </section>
    </section>
    <!-- /.vbox -->
  </section>
  
  
  
  <div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">ChronosVenger</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text" class="form-control urlPlanning">
            <span class="help-block m-b-none">Copiez ce lien dans votre calendrier.</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





	<script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>
  <script src="js/app.plugin.js"></script>
  <script src="js/app.data.js"></script>
  <!-- Sortable -->
  <script src="js/sortable/jquery.sortable.js"></script>
  <script src="js/nestable/jquery.nestable.js" cache="false"></script>
  <script src="js/nestable/demo.js" cache="false"></script>
  <script src="js/zoombox.js" cache="false"></script>
  <script>
		$(document).ready(function() {
			$('.dd').nestable('collapseAll');
			$('.linkPane,  .help').hide();
			$('.linkPane').hide();
			$('a.zoombox').zoombox();
			
			$('.helpExpander').click(function() {
				$(this).parent().find('.help').fadeToggle();
			});
			
			$('.calendarAdd').click(function() {
				classeName = $(this).attr('data-chronos');
				$('.urlPlanning').val('http://ChronosVenger.com/' + classeName);
				$('.linkPane').slideDown();
				$('.linkPane .form-group').addClass('has-success');
				$('.modal').modal('show');
			});
		});
  </script>
  <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-50355045-1', 'ChronosVenger.com');
	  ga('send', 'pageview');
	</script>
</body></html>