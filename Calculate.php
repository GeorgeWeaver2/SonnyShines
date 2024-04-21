<?php


include('database.php');
$NumFloors = $_POST('NumFloors');
$Num1stWindows = filter_input($type, 'Num_1st_FL_windows',FILTER_INPUT_INT);
$Num2ndWindows = filter_input($type, 'Num_2nd_FL_windows',FILTER_INPUT_INT);
$Num3plusWindows = filter_input($type, 'TNum_3rdplus_FL_windows',FILTER_INPUT_INT);

$Windows = array ($Num1stWindows,$Num2ndWindows,$Num3plusWindows);


 
 $floorcost = 'Select * From cost Where Floor = :Floor';
$statement3 = $db->prepare($floorcost);
$statement3 -> bindValue('Floor', $Floorlevel);
$success = $statement->execute();
$windowCost= $statement->fetch();

$TotalFloorCost = $windowCost * $NumWindows;

include('Quote.php');

//return $TotalFloorCost;
//}



 ?>


