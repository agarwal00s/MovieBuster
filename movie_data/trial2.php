<?php
$xml=simplexml_load_file("movie.xml") or die("Error: Cannot create object");
foreach($xml->children() as $m)
{
	echo $m['name'] . "<br>";
	foreach($m->children() as $d)
	{
		echo $d['dt']."</br>";
		foreach($d->children() as $th)
		{
			echo $th['name']."</br>";
			
			foreach($th->children() as $te)
			{
				echo $te['t']."</br>";
				foreach($te->children() as $s)
				{
					echo $s['row']." ".$s."</br>";
				}
			}
		}
	}
}
$xml->movie[0]->date[0]->theatre[0]->time[0]->seat[0]="1.2.5.10";
$xml->asXML('movie.xml');
?>