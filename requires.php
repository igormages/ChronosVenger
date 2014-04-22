<?php
	
	require_once('listeClasses.php');
	
	function printClasses($array){
	    foreach($array as $name => $item){
	        if(is_array($item)){
	            echo '<ol class="dd-list">';
	
	                if(is_array($item)){
	                    echo '<li class="dd-item"><div class="dd-handle dd-nodrag">'.$name.'</div>';
	                    	printClasses($item);
	                    echo '</li>';
	                } else {
	                    echo '<li class="dd-item dd-nodrag">'.$item.'</li>';
	                }
	
	            echo '</ol>';
	        }
	        else {
	        	echo '<ol class="dd-list">';
		        	echo '<li class="dd-item"><div class="dd-handle dd-nodrag"><a href="'.$item.'">'.$item.'</a></div></li>';
	        	echo '</ol>';
	        }
	        
	    }
	}
	
	function getAPI($classeName){
		$requette = ereg_replace('/','-',$classeName);
		
		if(!is_dir("cache-chronos/".substr(md5($_SERVER['REQUEST_URI']), -3))) { mkdir("cache/".substr(md5($_SERVER['REQUEST_URI']), -3)); } 
		   $fichierCache="cache-chronos/".substr(md5($requette), -3)."/".$requette;
		   
		if (@filemtime($fichierCache)<time()-(3600*24)) {
		   ob_start();
		   		require_once('generator.php?classe='.$classeName);
		   $contenuCache = ob_get_contents();
		   ob_end_flush();
		   $fd = fopen("$fichierCache", "w");
		    if ($fd) {
		          fwrite($fd,$contenuCache);
		          fclose($fd);
		       }
		} 
		
		else {
			include ($fichierCache);
		}
	}
 