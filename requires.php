<?php
	if (!ini_get('allow_url_fopen')) {
	    ini_set('allow_url_fopen', '1');
	}
	if (!ini_get('allow_url_include')) {
	    ini_set('allow_url_include', '1');
	}	
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
		        	echo '<li class="dd-item"><div class="dd-handle dd-nodrag"><a href="#'.$item.'" class="calendarAdd" data-chronos="'.$item.'">'.$item.'</a></div></li>';
	        	echo '</ol>';
	        }
	        
	    }
	}
	
	function calendrier($classe) {
        require_once 'iCalcreator.class.php';
       
        $classe = (!empty($classe['classe'])) ? $classe['classe'] :'INFOSUPB2-1';
       
        $config = array('unique_id' => md5('EPITA'));
        $cal = new vcalendar($config);
        $cal->setProperty( 'method', 'PUBLISH' );
        $cal->setProperty( "x-wr-calname", 'EPITA');
        $cal->setProperty( "X-WR-CALDESC", 'EPITA Chronos');
        $cal->setProperty( "X-WR-TIMEZONE", "Europe/Paris" ); // Fuseau Horaire
       
        for($semaine = 0; $semaine < 10; $semaine++):
        		$filename = cache(array('classe' => $classe, 'semaine' => $semaine));
				
				$result = file_get_contents($filename);
				$result = json_decode($result, TRUE);

                foreach($result as $event):
                        $date = date_parse_from_format('d/m/Y H:i',$event[0].' '.str_replace('h', ':', $event[1]));
                        $datePlageHoraire = date_parse_from_format('H\hi', $event[2]);
                        $datePlageHoraire = $datePlageHoraire['hour']*3600+$datePlageHoraire['minute']*60;
                       
                        $date_end = mktime ($date['hour'], $date['minute'], 0, $date['month'], $date['day'], $date['year']) + $datePlageHoraire;
                       
                        $date_end = array(
                                'year' => date('Y', $date_end),
                                'month' => date('m', $date_end),
                                'day' => date('d', $date_end),
                                'hour' => date('H', $date_end),
                                'minute' => date('i', $date_end),
                        );
						
                        $vevent = & $cal->newComponent( 'vevent' );
                        $start = array('year' => $date['year'], 'month'=> $date['month'], 'day'=> $date['day'], 'hour'=> $date['hour'], 'min'=> $date['minute'], 'sec'=> 0);
                        $end = array('year' => $date_end['year'], 'month'=> $date_end['month'], 'day'=> $date_end['day'], 'hour'=> $date_end['hour'], 'min'=> $date_end['minute'], 'sec'=> 0);
                        $vevent->setProperty( 'dtstart', $start );
                        $vevent->setProperty( 'dtend', $end );
                        $vevent->setProperty( 'LOCATION', $event[7]);
                        $vevent->setProperty( 'summary', $event[4]);
                        $vevent->setProperty( 'description', $event[6]);
               
                endforeach;
        endfor;
                       
        return  $cal->returnCalendar(); 

	}
	function getAPI($classe) {
		$url = 'http://ichronos.in/?s='.$classe['classe'].'&w='.(date('w')+$classe['semaine']+35).'&api';
		/*
$ch = curl_init('http://ichronos.in/?s='.$classe['classe'].'&w='.(date('w')+$classe['semaine']+35).'&api');
        $options = array(
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HTTPHEADER => array('Content-type: application/json') ,
        );
        curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
*/
        return $result = file_get_contents($url);
	}
	function cache($classeName){
		$requette = ereg_replace('/','-',$classeName['classe'].$classeName['semaine']);
		
		if(!is_dir("cache-chronos/".substr(md5($_SERVER['REQUEST_URI']), -3))) { mkdir("cache/".substr(md5($_SERVER['REQUEST_URI']), -3)); } 
		
		$fichierCache = "cache-chronos/".substr(md5($requette), -3);
		mkdir($fichierCache);
		$fichierCache .= "/".$requette;
		
		if (@filemtime($fichierCache)<time()-(3600*24)) {
			$content = getAPI($classeName);
			$handle = fopen($fichierCache, 'a');
			
			fwrite($handle, $content);
			fclose($handle);
		}
		
		return $fichierCache;
	}
 