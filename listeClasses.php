<?php 


$listeClasses[] = 'INFOSPEA1-1'; //Unité de test

$lettres = array('A','B','C','D','I');
$niveau = array('SUP','SPE');


for($n=0;$n<2;$n++)
{
	for($i=0;$i<5;$i++)
	{
		if($niveau[$n] != 'SPE' || $lettres[$i] != 'D')
		{
			for($j=1;$j<3;$j++)
			{
				for($k=1;$k<3;$k++)
				{
					$listeClasses['PREPA'][$niveau[$n]][$lettres[$i]][$j][$k] = "INFO$niveau[$n]$lettres[$i]$j-$k";
				}
			}
		}
	}
}



$listeClasses['PREPA']['API'] = 'API';

$listeClasses['CYCLE INGENIEUR']['ING1']['Divers'] = "Divers";

for($j=0;$j<2;$j++)
{
	for($k=1;$k<3;$k++)
	{
		$listeClasses['CYCLE INGENIEUR']['ING1'][$lettres[$j].$k] = "ING1/GR$lettres[$j]$k";
	}
}

$majeures = array('DIVERS','CSI', 'GISTRE', 'GITM', 'MTI', 'SCIA', 'SIGL', 'SRS', 'TCOM');


for($i=0;$i<sizeof($majeures);$i++)
{
	$listeClasses['CYCLE INGENIEUR']['MAJEURES'][$majeures[$i]] = "$majeures[$i]";
}


$listeClasses['CYCLE INGENIEUR']['APPRENTIS']['DIVERS'] = "*DIVERS/APPING";
for($i=1;$i<4;$i++)
{
	$listeClasses['CYCLE INGENIEUR']['APPRENTIS']["APPING$i"] = "APPING $i";
}





?>
