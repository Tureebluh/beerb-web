
<?php
  define("DB_SERVER_BEERB", getenv('DB_SERVER_BEERB'));
  define("DB_USER_BEERB", getenv('DB_USER_BEERB'));
  define("DB_PASS_BEERB", getenv('DB_PASS_BEERB'));
  define("DB_NAME_BEERB", getenv('DB_NAME_BEERB'));
        
    $dbconn = mysqli_connect(DB_SERVER_BEERB, DB_USER_BEERB, DB_PASS_BEERB, DB_NAME_BEERB);
    if(mysqli_connect_errno()) {
        die("Database connection failed: " . 
             mysqli_connect_error() . 
             " (" . mysqli_connect_errno() . ")"
        );
    } else {
   
        mysqli_character_set_name($dbconn);
        mysqli_set_charset($dbconn, "utf8");
    }
   
?>