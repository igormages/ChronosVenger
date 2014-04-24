<?php 
	
	require_once('requires.php');
	if(isset($_GET['classe']) AND !empty($_GET['classe'])) {
		getAPI($_GET['classe']);
		exit;
	}
	//T4ze		
?>
<!DOCTYPE html>
<html lang="fr" class=" js no-touch no-android chrome no-firefox no-iemobile no-ie no-ie10 no-ie11 no-ios"><head>
  <meta charset="utf-8">
  <title>Chronos for calendar - Igor Magès & T4ze</title>
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
</head>
<body style="">
  <section class="hbox stretch">
    <!-- .aside -->
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
    <!-- /.aside -->
    <!-- .vbox -->
    <section id="content">
      <section class="vbox">
        <section class="scrollable wrapper">

          <h1 class="m-t-none h3">ChrnosVenger <small>powered by Igor Magès & T4ze</small></h1>

          <div class="row m-b">
            <div class="col-sm-4">              
             	 <div class="dd" id="nestable1">
	                 <?php 
	    
	    
						printClasses($listeClasses);
					 ?>
                
				 </div>
				
            </div>
            <div class="col-sm-12">
            	<p><div class="h3 m-t-xs m-b-xs">Comment s'abonner ?</div>Activiez la synchronisation automatique sur vos appareils !</p>
            	
	            	<div class="row">
		            	<form action="" class="form-horizontal">
			            	<div class="form-group">
		                      <label class="col-sm-2 control-label">Lien</label>
		                      <div class="col-sm-2">
		                        <input type="text" class="form-control">
		                        <span class="help-block m-b-none">Abonnez-vous: copiez ce lien dans votre calendrier.</span>
		                      </div>
		                    </div>
		            	</form>
	            	</div>
	            	
            	<div class="row">
					<div class="col-sm-4">
		            	<div class="panel">
		            	<header class="panel-heading bg- lter no-borders">
                        <div class="clearfix">
                          <div class="clear">
                            <div class="h4 m-t-xs m-b-xs">iOS, OS X & iCloud</div>
                            <small class="text-muted"></small>
                          </div>                
                        </div>
                      </header>
                      
		            	
			            	<div class="panel-body">
				                            <article class="media">
				                              <div class="media-body">                        
				                                <p><span class="font-semibold">Étape 1:</span> Ouvrir Calendrier</p>
				                              </div>
				                              <a class="zoombox" href="images/etape0.png"><img src="images/etape0.png"></a>
				                            </article>
				                            <div class="line line-dashed"></div>
				                            
				                            <article class="media">
				                              <div class="media-body">                        
				                                <p><span class="font-semibold">Étape 2:</span> Ajouter un nouvel abonnement</p>
				                              </div>
				                              <a class="zoombox" href="images/etape1.png"><img src="images/etape1.png"></a>
				                            </article>
				                            <div class="line line-dashed"></div>
				                            
				                            <article class="media">
				                              <div class="media-body">                        
				                                <p><span class="font-semibold">Étape 3:</span> Coller l'URL fournie par ChrnosVenger</p>
				                              </div>
				                              <a class="zoombox" href="images/etape2.png"><img src="images/etape2.png"></a>
				                            </article>
				                            <div class="line line-dashed"></div>
				                            
				                            <article class="media">
				                              <div class="media-body">                        
				                                <p><span class="font-semibold">Étape 4:</span>  <br />(1) Opter pour une configuration "iCloud" pour un accès sur vos iPhone ou iPad. <br />(2) Puis choisissez une actualisation automatique pour des emplois du temps toujours à jour !<br /> NB: Notre cache se met à jour toutes les 24h, nous vous conseillons une mise à jour quotidienne. </p>
				                              </div>
				                              <a class="zoombox" href="images/etape3.png"><img src="images/etape3.png"></a>
				                            </article>
				                            <div class="line line-dashed"></div>
		            	</div>
					</div>
          </div>
            <div class="col-sm-4">
	            <div class="panel">
		            	
		            	
		            	<header class="panel-heading bg- lter no-borders">
                        <div class="clearfix">
                          <div class="clear">
                            <div class="h4 m-t-xs m-b-xs">Google Calendar et Android</div>
                            <small class="text-muted"></small>
                          </div>                
                        </div>
                      </header>
                      
		            	
			            	<div class="panel-body">
				                            <article class="media">
				                              <div class="media-body">                        
				                                <p><span class="font-semibold">Étape 1:</span> Aller sur google calendar</p>
				                              </div>
				                              <a class="zoombox" href="images/etape0.png"><img src="images/etape0.png"></a>
				                            </article>
				                            <div class="line line-dashed"></div>
				                            
				                            <article class="media">
				                              <div class="media-body">                        
				                                <p><span class="font-semibold">Étape 2:</span> Ajouter un nouvel abonnement</p>
				                              </div>
				                              <a class="zoombox" href="images/etape1.png"><img src="images/etape1.png"></a>
				                            </article>
				                            <div class="line line-dashed"></div>
				                            
				                            <article class="media">
				                              <div class="media-body">                        
				                                <p><span class="font-semibold">Étape 3:</span> Coller l'URL fournie par ChrnosVenger</p>
				                              </div>
				                              <a class="zoombox" href="images/etape2.png"><img src="images/etape2.png"></a>
				                            </article>
				                            <div class="line line-dashed"></div>
				                            
				                            <article class="media">
				                              <div class="media-body">                        
				                                <p><span class="font-semibold">Étape 4:</span>  <br />(1) Opter pour une configuration "iCloud" pour un accès sur vos iPhone ou iPad. <br />(2) Puis choisissez une actualisation automatique pour des emplois du temps toujours à jour !<br /> NB: Notre cache se met à jour toutes les 24h, nous vous conseillons une mise à jour quotidienne. </p>
				                              </div>
				                              <a class="zoombox" href="images/etape3.png"><img src="images/etape3.png"></a>
				                            </article>
				                            <div class="line line-dashed"></div>
		            	</div>
            </div>     
        </section>
      </section>
    </section>
    <!-- /.vbox -->
  </section>
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
		   $('a.zoombox').zoombox();
		  $('.calendarAdd');
	  });
  </script>
</body></html>