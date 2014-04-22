<?php
	
	require_once('listeClasses.php');
	
	function printClasses($array){
	    foreach($array as $name => $item){
	        if(is_array($item)){
	            echo '<ul>';
	
	                if(is_array($item)){
	                    echo '<li>'.$name;
	                    	printClasses($item);
	                    echo '</li>';
	                } else {
	                    echo '<li>'.$name.$item.'</li>';
	                }
	
	            echo '</ul>';
	        }
	        else {
	        	echo '<ul>';
		        	echo '<li><a href="'.$item.'">'.$item.'</a></li>';
	        	echo '</ul>';
	        }
	    }
	}