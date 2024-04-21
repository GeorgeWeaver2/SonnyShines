<?php
        
       /* include_once ('database.php');
       $NumofFloors; //pt1 of 2d array
       $NumofWindowsonFloor; //ot 2 of 2d array
       $CostofFloor; //pt 3 of array array
      $TotalCostofService; */

    include('database.php') ;                   //calling the page that connects to the database 
    //accessdb();                      //if this fails you will just see a scree nsaying their was an error
                              
    include('CustOrEmploy.php');  //pulls up webpage asking if the vuser is a customer or employee
       
                                  //we want to get he customer windwos then come back to here
    
    if(isset($_POST["customer"])) //checks if the cusotmer button or employee butt onwas clicked
     {
        include('GetCustomerWindows.php');
    }
    
    if(isset($_POST["customer"]))
    {
        include('EmployeeReport.php');
    }
    
    if(isset($_POST["NoWork"])) //checks if the cusotmer button or employee butt onwas clicked
     {
        include('bye.php');
    }
    
    if(isset($_POST["YesWork"]))
    {
        include('Customer Info.php') ; //gather customer info
         
         

        include('EmployeeReport.php'); // takes data base into and spits it into html table 
    }
     
    if (!NULL =="CustomerContact" )
            {
        AddCustToDB();
    }
        
  
      
 ?>              
        
      


