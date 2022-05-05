<?php
  class config1{

    private static $instance = NULL;
    private $db;

    public static function getConnexion()
    {
      if (!isset(self::$instance))
      {
        try
        {
          self::$instance = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
		      self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(Exception $e)
        {
          die('Erreur: '.$e->getMessage());
	  	}
      }
      return self::$instance;
    }

    public function query($sql)
    {
      $db = config1::getConnexion();
      $req = $db->prepare($sql);
      $req->execute();
      return $req->fetchAll();
    }
  }
?>
 