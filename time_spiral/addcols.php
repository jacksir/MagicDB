<?php

//connect to the database, this should be in some kind of library but oh well for now
try{
  $dbHandle = new PDO('sqlite:/var/www/html/db/mtg.db');
}catch( PDOException $exception ){
       $message = $exception->getMessage();
       $log->LogFatal("Can not connect to database.  Exception: $message");
       die($exception->getMessage());
}

	/*
	//hopefully i will not have to update the tables per set
	$sql = "alter table wwk add color TEXT";
	$sth = $dbHandle->prepare($sql);
	$sth->execute();
	$sql = "alter table wwk add castingcost TEXT";
	$sth = $dbHandle->prepare($sql);
	$sth->execute();
	$sth = $dbHandle->prepare($sql);
	$sth->execute();
	*/

//open the card file
$lines = file('cardlist.txt');

//loop city
foreach ($lines as $line_num => $line) 
{
   $ln = explode("\t", $line);

   $card_name = trim($ln[1]);
   $card_type = trim($ln[2]);
   $casting_cost = trim($ln[3]);
   $rarity = trim($ln[4]);
   $set_name = trim($ln[6]);
   $color = GetColor($casting_cost, $card_type);

   $sql = "insert into cards (card_name, set_name, rarity, owned, card_type, casting_cost, color) values(:card_name, :set_name, :rarity, '0', :card_type, :casting_cost, :color)";

   $sth = $dbHandle->prepare($sql);

   $sth->execute(array(':card_name' => $card_name, ':set_name' => $set_name, ':rarity' => $rarity, ':card_type' => $card_type, ':casting_cost' => $casting_cost, ':color' => $color));


//$sql = "update wwk
//set color=:color, castingcost=:cc, cardtype=:ct
//where name=:name";

//$sth = $dbHandle->prepare($sql);

//$sth->execute(array(':color' => $color, ':cc' => $castingcost, ':ct' => $ct, ':name' => $name));

}

function GetColor($cc, $ct)
{
   $pos = strpos($ct, "Artifact"); 
   if($pos !== false){ return "Artifact"; }

   $pos = strpos($ct, "Land"); 
   if($pos !== false){ return "Land"; }
  
   //first of all detect hybrid and return gold
   $pos = strpos($cc, "{");
   if($pos !== false){return "Gold"; }

   //white
   $pos = strpos($cc, "W");
   if($pos !== false)
   {
      $blue = strpos($cc, "U");  
      $black = strpos($cc, "B");  
      $red = strpos($cc, "R");  
      $green = strpos($cc, "G");  

      if( ($blue !== false) || ($black !== false) || ($red !== false) || ($green !== false) )
      {
         return "Gold";
      }
      else{ return "White"; }
   }

   //blue
   $pos = strpos($cc, "U");
   if($pos !== false)
   {
      $white = strpos($cc, "W");  
      $black = strpos($cc, "B");  
      $red = strpos($cc, "R");  
      $green = strpos($cc, "G");  

      if( ($white !== false) || ($black !== false) || ($red !== false) || ($green !== false) )
      {
         return "Gold";
      }
      else{ return "Blue"; }
   }

   //black
   $pos = strpos($cc, "B");
   if($pos !== false)
   {
      $white = strpos($cc, "W");  
      $blue = strpos($cc, "U");  
      $red = strpos($cc, "R");  
      $green = strpos($cc, "G");  

      if( ($white !== false) || ($blue !== false) || ($red !== false) || ($green !== false) )
      {
         return "Gold";
      }
      else{ return "Black"; }
   }

   //red
   $pos = strpos($cc, "R");
   if($pos !== false)
   {
      $white = strpos($cc, "W");  
      $blue = strpos($cc, "U");  
      $black = strpos($cc, "B");  
      $green = strpos($cc, "G");  

      if( ($white !== false) || ($blue !== false) || ($black !== false) || ($green !== false) )
      {
         return "Gold";
      }
      else{ return "Red"; }
   }

   //green
   $pos = strpos($cc, "G");
   if($pos !== false)
   {
      $white = strpos($cc, "W");  
      $blue = strpos($cc, "U");  
      $black = strpos($cc, "B");  
      $green = strpos($cc, "R");  

      if( ($white !== false) || ($blue !== false) || ($black !== false) || ($green !== false) )
      {
         return "Gold";
      }
      else{ return "Green"; }
   }


   return "Artifact";
}

?>

