<?php
//database connection
  class config{

    private static $pdo = NULL;
    private $db;

    public static function getConnexion()
    {
      if (!isset(self::$pdo))
      {
        try
        {
          self::$pdo = new PDO('mysql:host=localhost;dbname=railway_db', 'root', '');
          self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(Exception $e)
        {
          die('Erreur: '.$e->getMessage());
	  	}
      }
      return self::$pdo;
    }

    public function query($sql)
    {
      $db = config::getConnexion();
      $req = $db->prepare($sql);
      $req->execute();
      return $req->fetchAll();
    }
  }
?>
 