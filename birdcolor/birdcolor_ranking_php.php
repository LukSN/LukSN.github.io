<?php>
$text = $_POST["text1"];
if($text != null){
	echo("Empfangener Text: ".$text);
	$logfile = fopen("birdcolor_ranking.txt", "w");
	fwrite($logfile, $text);
	fclose($logfile);
} else{
echo("Kein Text empfangen.");
}
?>
