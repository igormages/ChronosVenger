<?php 


// --------------------------------- Eleves ------------------------

//  -------------  EPITA -----------------------

$lettres = array('A','B','C','D');
$niveau = array('SUP','SPE');


for($n=0;$n<2;$n++)
{
	for($i=0;$i<4;$i++)
	{
		if($niveau[$n] != 'SPE' || $lettres[$i] != 'D')
		{
			for($j=1;$j<3;$j++)
			{
				for($k=1;$k<3;$k++)
				{
					$listeClasses['EPITA']['PREPA'][$niveau[$n]][$lettres[$i]][$j][$k] = "INFO$niveau[$n]$lettres[$i]$j-$k";
				}
			}
		}
	}
}

$listeClasses['EPITA']['PREPA']['SUP']['I'][1] = "INFOSUPI-1";
$listeClasses['EPITA']['PREPA']['SUP']['I'][2] = "INFOSUPI-2";
$listeClasses['EPITA']['PREPA']['SPE']['I'] = "INFOSPEI";

for($j=1;$j<3;$j++)
{
	for($k=1;$k<3;$k++)
	{
		$listeClasses['EPITA']['PREPA']['INFO#']['INFOSUP#']["INFOSUPS$j#-$k"] = "INFOSUPS$j#-$k";
	}
}
$listeClasses['EPITA']['PREPA']['INFO#']['INFOSPE#']['INFOSPES3#'] = "INFOSUPS3#";
$listeClasses['EPITA']['PREPA']['INFO#']['INFOSPE#']['INFOSPES4#'] = "INFOSUPS4#";



$listeClasses['EPITA']['PREPA']['API'] = 'API';


// --------- EPITA - ING




$listeClasses['EPITA']['CYCLE INGENIEUR']['ING1']['Divers'] = "Divers";

for($j=0;$j<2;$j++)
{
	for($k=1;$k<3;$k++)
	{
		$listeClasses['EPITA']['CYCLE INGENIEUR']['ING1'][$lettres[$j].$k] = "ING1/GR$lettres[$j]$k";
	}
}

$majeures = array('DIVERS','CSI', 'GISTRE', 'GITM', 'MTI', 'SCIA', 'SIGL', 'SRS', 'TCOM');


for($i=0;$i<sizeof($majeures);$i++)
{
	$listeClasses['EPITA']['CYCLE INGENIEUR']['MAJEURES'][$majeures[$i]] = "$majeures[$i]";
}


$listeClasses['EPITA']['CYCLE INGENIEUR']['APPRENTIS']['DIVERS'] = "*DIVERS/APPING";
for($i=1;$i<4;$i++)
{
	$listeClasses['EPITA']['CYCLE INGENIEUR']['APPRENTIS']["APPING$i"] = "APPING $i";
}




// -------------------- Epitech ------------------



$listeClasses['Epitech']['Divers'] = "DIVERS/EPITECH";
$listeClasses['Epitech']['PSO1'] = "PSO1";


for($i=1;$i<7;$i++)
{
	$listeClasses['Epitech']["TECH$i"] = "TECH$i";
}

$listeClasses['Epitech']["TECH3S"] = "TECH3S";
$listeClasses['Epitech']["TECH3SI"] = "TECH3SI";
$listeClasses['Epitech']["W@C#1"] = "W@C#1";
$listeClasses['Epitech']["W@C#2"] = "W@C#2";



?>