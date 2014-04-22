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