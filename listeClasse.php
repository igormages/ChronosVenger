<?php 

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
					$listeClasses[$niveau[$n]][$lettres[$i]][$j][$k] = "INFO$niveau[$n]$lettres[$i]$j-$k";
				}
			}
		}
	}
}


?>

			
