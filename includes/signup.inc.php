<!-- showind queries from  DB to website -->
<?php
        include_once 'includes/dbh.inc.php'; //connection to db
        
    //get the users input and save in a variable
    $first = $_POST['firstName'];
    $last = $_POST['lastName'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    
// now query the db

    $sql = "INSERT INTO users (firstname, lastname, email, pwd) VALUES ('$first', '$last', '$email', '$pwd');"; //query the table posts

    // include the connection and query together
    mysqli_query($conn, $sql);

    header('Location: ../index.php?signup=Successful');


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    // $result = mysqli_query($conn, $sql); //conect them together
    // get the result stored here below
    // $resultCheck = mysqli_num_rows($result); //any result above 0?
    // if ($resultCheck > 0) { //lets see if result is above 0 then do the folowing below
    //     while ($row = mysqli_fetch_assoc($result)) { //keep loping while data is >0 and is in result
    //         echo $row ['subject'] . "<br>"; //name of d column
    //     }
    // }



?>


    
<!-- showind queries from  DB to website -->
