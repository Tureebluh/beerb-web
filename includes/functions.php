<?php

//Check's to see if passed in $result_set returned anything
//If not, calls die which prints Database query failed. to console and exits the script.
function confirm_query($result_set) {
    if (!$result_set) {
            die("Database query failed.");
    }
}


//Retrieves data from database. mysqli_fetch_assoc is called on $user_set
//to create $user associative array. $user object is returned
function get_downloadCounter() {
    global $dbconn;
    
    $query  = "SELECT Counter ";
    $query .= "FROM downloadcounter ";
    $data_set = mysqli_query($dbconn, $query);
    confirm_query($data_set);
    if($counter = mysqli_fetch_assoc($data_set)) {
        mysqli_free_result($data_set);
        mysqli_close($dbconn);
        return $counter['Counter'];
    } else {
        mysqli_free_result($data_set);
        return false;
    }
}


function update_downloadCounter() {
    global $dbconn;

    $query = "UPDATE downloadcounter SET Counter = Counter + 1 ";

    $result = mysqli_query($dbconn, $query);
    confirm_query($result);
    //DownloadCounter update success
    if( $result ){
        return true;
    //DownloadCounter update failed    
    } else {
        return false;
    }
}

?>