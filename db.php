<?php

    $serverName = "127.0.0.1";
    $userName = "root";
    $password = "";
    $dbName = "my-journal";

    $connection = null;

    //create connection
    try{

        $connection = new PDO( "mysql:host=".$serverName.";dbname=".$dbName, $userName, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }

   catch(PDOException $e){
    echo"error in connection" . $e->getMessage();
  }

  
  function insert_query($connection,$tablename,  $data=[])
  {
     
    $query_string="INSERT INTO ".$tablename;

    $columns = array_keys($data);
    
    $query_string.="(".implode("," , $columns).")";

    $query_string.=" VALUES (:".implode(",:" , $columns).")";
   
    $stmt = null;
     try
     {
        $stmt = $connection->prepare($query_string);

        foreach($data as $column => &$value)
        {
            $stmt->bindParam($column,$value);
        }
    
    
        $stmt->execute();
       
        return  $connection->lastInsertId();
    
      } catch(PDOException $e) {
         echo "<br>" . $e->getMessage();
        return -1;
      }

   

  }


?>