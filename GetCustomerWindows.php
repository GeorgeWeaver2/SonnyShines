 <?php
        // put your code here
        ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="Calculate.php" method="post"> <!-- radio button form for # of floows-->
            Number of Floors:<br>
            <select name="NumFloors">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3+</option>
            </select><br>
       
            Number of windows on 1st floor:<br>
            <input type="text" name="Num_1st_FL_windows"><br>
            Number of windows on 2nd floor :<br>
            <input type="text" name="Num_2nd_FL_windows"><br>
            Number of windows on 3rd and higher floors :<br>
            <input type="text" name="Num_3rdplus_FL_windows"><br>
            <input type="button" name="GetQuote" value="Get a Quote">
        </form>
        
    </body>
</html>
<?php  include('Calculate.php'); // we always want to go back to index.php for hte next stre\

?>