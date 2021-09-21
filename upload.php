
<?php
    //connect to mysql db
    $db_connection = mysqli_connect("localhost", "root", "", "financepeer");

    //read the json file contents
    $jsondata = file_get_contents('file.json');
    
    //convert json object to php associative array
    $data = json_decode($jsondata, true);
    
    //get the employee details
    $userid = $data['userid'];

    $id = $data['id'];
    $title = $data['title'];
    $body = $data['body'];
    
    
    //insert into mysql table
    $sql = "INSERT INTO filedetails(userid,id, title, body)
    VALUES('$userid','$id', '$title', '$body')";
    if(!mysql_query($sql,$con))
    {
        die('Error : ' . mysql_error());
    }
?>