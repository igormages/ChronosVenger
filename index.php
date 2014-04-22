<?php
        require_once 'iCalcreator.class.php';
       
        $classe = (!empty($_GET['classe'])) ? $_GET['classe'] :'INFOSUPB2-1';
       
        $config = array('unique_id' => md5('EPITA'));
        $cal = new vcalendar($config);
        $cal->setProperty( 'method', 'PUBLISH' );
        $cal->setProperty( "x-wr-calname", 'EPITA');
        $cal->setProperty( "X-WR-CALDESC", 'EPITA Chronos');
        $cal->setProperty( "X-WR-TIMEZONE", "Europe/Paris" ); // Fuseau Horaire
       
        for($semaine = 0; $semaine < 5; $semaine++):
                $ch = curl_init('http://ichronos.in/?s='.$classe.'&w='.(date('w')+$semaine+13).'&api');
                $options = array(
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_HTTPHEADER => array('Content-type: application/json') ,
                );
                curl_setopt_array( $ch, $options );
                $result =  curl_exec($ch);
                $result = (!empty($result)) ? json_decode($result) : array();
               
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
                        $vevent->setProperty( 'description', 'Powered By Igor Magès - Epita 2018 - Viré');
               
                endforeach;
        endfor;
                       
        echo $cal->returnCalendar(); ?>