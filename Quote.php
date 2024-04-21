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
        <table border ="1">
            <th>Sonny Shines Quote:</th>
            <tr>
            <td> Floor:</td>
            <td>Windows:</td>
            <td>Cost of floor:</td>
            </tr>
            <?php while ( $Windows >= $windowCosts) 
            {
                echo"<tr><td>";
                echo i;
                echo "</td>";
                echo $Windows[i];
                echo "</td>";
                echo $CostperFloor[i];
                echo"</tr>";
               
            }
            ?>
        </table>
        <form action="index.php" method="post">
                Do You Want The Work Done?<br>
            <input type="button" name="NoWork" value="No">
             <input type="button" name="YesWork" value="Yes, Here's Where To Go!">
        </form>
    </body>
   
</html>