<?

try{
  $dbHandle = new PDO('sqlite:/var/www/html/db/mtg.db');
}catch( PDOException $exception ){
       $message = $exception->getMessage();
       $log->LogFatal("Can not connect to database.  Exception: $message");
       die($exception->getMessage());
}
?>
