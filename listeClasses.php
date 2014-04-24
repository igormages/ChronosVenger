<?php 


// --------------------------------- Eleves ------------------------

//  -------------  EPITA -----------------------

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
					$listeClasses['Stagiaires']['Epita']['PREPA'][$niveau[$n]][$lettres[$i]][$j][$k] = "INFO$niveau[$n]$lettres[$i]$j-$k";
				}
			}
		}
	}
}

$listeClasses['Stagiaires']['Epita']['PREPA']['API'] = 'API';

$listeClasses['Stagiaires']['Epita']['CYCLE INGENIEUR']['ING1']['Divers'] = "Divers";

for($j=0;$j<2;$j++)
{
	for($k=1;$k<3;$k++)
	{
		$listeClasses['Stagiaires']['Epita']['CYCLE INGENIEUR']['ING1'][$lettres[$j].$k] = "ING1/GR$lettres[$j]$k";
	}
}

$majeures = array('DIVERS','CSI', 'GISTRE', 'GITM', 'MTI', 'SCIA', 'SIGL', 'SRS', 'TCOM');


for($i=0;$i<sizeof($majeures);$i++)
{
	$listeClasses['Stagiaires']['Epita']['CYCLE INGENIEUR']['MAJEURES'][$majeures[$i]] = "$majeures[$i]";
}


$listeClasses['Stagiaires']['Epita']['CYCLE INGENIEUR']['APPRENTIS']['DIVERS'] = "*DIVERS/APPING";
for($i=1;$i<4;$i++)
{
	$listeClasses['Stagiaires']['Epita']['CYCLE INGENIEUR']['APPRENTIS']["APPING$i"] = "APPING $i";
}





$listeClasses['Stagiaires']['Epita']['PREPA']['API'] = 'API';

$listeClasses['Stagiaires']['Epita']['CYCLE INGENIEUR']['ING1']['Divers'] = "Divers";

for($j=0;$j<2;$j++)
{
	for($k=1;$k<3;$k++)
	{
		$listeClasses['Stagiaires']['Epita']['CYCLE INGENIEUR']['ING1'][$lettres[$j].$k] = "ING1/GR$lettres[$j]$k";
	}
}

$majeures = array('DIVERS','CSI', 'GISTRE', 'GITM', 'MTI', 'SCIA', 'SIGL', 'SRS', 'TCOM');


for($i=0;$i<sizeof($majeures);$i++)
{
	$listeClasses['Stagiaires']['Epita']['CYCLE INGENIEUR']['MAJEURES'][$majeures[$i]] = "$majeures[$i]";
}


$listeClasses['Stagiaires']['Epita']['CYCLE INGENIEUR']['APPRENTIS']['DIVERS'] = "*DIVERS/APPING";
for($i=1;$i<4;$i++)
{
	$listeClasses['Stagiaires']['Epita']['CYCLE INGENIEUR']['APPRENTIS']["APPING$i"] = "APPING $i";
}







// -------------------- Epitech ------------------



$listeClasses['Stagiaires']['Epitech']['Divers'] = "DIVERS/EPITECH";
$listeClasses['Stagiaires']['Epitech']['PSO1'] = "PSO1";


for($i=1;$i<7;$i++)
{
	$listeClasses['Stagiaires']['Epitech']["TECH$i"] = "TECH$i";
}

$listeClasses['Stagiaires']['Epitech']["TECH3S"] = "TECH3S";
$listeClasses['Stagiaires']['Epitech']["TECH3SI"] = "TECH3SI";
$listeClasses['Stagiaires']['Epitech']["W@C#1"] = "W@C#1";
$listeClasses['Stagiaires']['Epitech']["W@C#2"] = "W@C#2";


?>