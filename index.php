<?php 
	
	require_once('requires.php');
	
	if(isset($_GET['classe']) AND !empty($_GET['classe'])) {
		getAPI($_GET['classe']);
		break;
	}
		
?>
<!DOCTYPE html>
<html lang="fr" class=" js no-touch no-android chrome no-firefox no-iemobile no-ie no-ie10 no-ie11 no-ios"><head>
  <meta charset="utf-8">
  <title>Chronos for calendar - Igor Magès</title>
  <meta name="description" content="Use chrnos on yours calendars, gmail, iOS...">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <link rel="stylesheet" href="css/animate.css" type="text/css">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/font.css" type="text/css" cache="false">
  <link rel="stylesheet" href="js/nestable/nestable.css" type="text/css" cache="false">
  <link rel="stylesheet" href="css/plugin.css" type="text/css">
  <link rel="stylesheet" href="css/app.css" type="text/css">
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
   
          <h1 class="m-t-none h3">ChrnosVenger</h1>
          <div class="row m-b">
            <div class="col-sm-4">              
              <div class="dd" id="nestable1">
                 <?php 
    
    
					printClasses($listeClasses);
					?>
                
            </div>
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
  <script>
	  $(document).ready(function() {
		  $('.dd').nestable('collapseAll');
	  });
  </script>
</body></html>