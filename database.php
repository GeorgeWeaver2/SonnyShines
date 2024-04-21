<?php

 //function accessdb() 
// {
     $username = 'SonnyShines';
        $password = 'secret123';
        $dsn =  'mysql:localhost;dbname=SonnyShines';

        try 
        {  $db = new PDO($dsn, $username, $password);  //makes $db the vriable with database login creds
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  //not sure what this does, but I think its creating the variable fore an exception
        } 
 
           catch (PDOException $e)
        { //if $db generates an exception because it cant log in, this prevents it from crashing with a eird error
        $error = $e->getMessage(); //takes the error and send syou to an apology screen VERY PROFESSIONAL
        include('ErrorHandle.php');
        exit();
       
        } 
 //if no error we go back to index.php
//}

function AddCustToDB()
{
    $FN_dirty = filter_input(INPUT_POST,'FirstName');
    $LN_dirty = filter_input(INPUT_POST,'LastName');
     $SA_dirty = filter_input(INPUT_POST,'StreetAddress', FILTER_CHAR);
     
     $FN = htmlspecialchars($FN_dirty);
     $LN = htmlspecialchars($LN_dirtyN_dirty);
     $SA = htmlspecialchars($SA_dirty);
     
     
     
    $Phone = filter_input(INPUT_POST,'phone', FILTER_SANITIZE_NUMBER_INT);
    $Email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
   
    // $RD request ate neded
    
    //some sql statement addiung customer to data base
    $query = 'INSERT INTO Customer (FirstName,LastName,Phone,Email,RequestDate)'
            . 'VALUES (:FN,:LN,:Phone,:email,:RequestDate,:StreetAddress);';
    $InsertStatement = $db -> prepare($query);
    $InsertStatement -> bindValue(':FN',$FN);
    $InsertStatement -> bindValue(':LN',$LN);
    $InsertStatement -> bindValue(':Phone',$Phone);
    $InsertStatement -> bindValue('email',$Email);
    $InsertStatement -> bindValue(':StreetAddress',$SA);
    $InsertStatement -> execute();
    $InsertStatement -> closeCursor();
    
     
}
?>