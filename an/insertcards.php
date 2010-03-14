<?php

try{
  $dbHandle = new PDO('sqlite:/var/www/html/mtg/mtg.db');
}catch( PDOException $exception ){
       $message = $exception->getMessage();
       $log->LogFatal("Can not connect to database.  Exception: $message");
       die($exception->getMessage());
}

$lines = file('cardlist.txt');

// Loop through our array, show HTML source as HTML source; and line numbers too.
foreach ($lines as $line_num => $line) {
	$ln = explode("\t", $line);
	echo "1: " . $ln[1] . "\n";
	echo "4: " . $ln[4] . "\n";

$name = trim($ln[1]);
//$name = str_replace("'", "", $name);
//$set = trim($ln[5]);
$rarity = trim($ln[4]);

$sql = "insert into an (card_name, set_name, rarity, owned) values(:name, 'an', :rarity, '0')";

$sth = $dbHandle->prepare($sql);

$sth->execute(array(':name' => $name, ':rarity' => $rarity));

//$stmt = $dbHandle->prepare($insert);
//print_r($dbHandle->errorInfo());
//$stmt->execute();
}

?>

