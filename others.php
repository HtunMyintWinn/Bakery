<?php
include('menu.php');  
    echo "<html><head></head><body>";
    
    include('dblink.php');
    $mysql_query="select * from others";
    $ret=mysql_query($mysql_query,$con);
    $noRows=mysql_num_rows($ret);
    if($noRows==0)
    {
        echo"<p>There is no bakery data</p>";
    }
    else
    {
          for($i=1;$i<=$noRows;$i++)
          {
             $row=mysql_fetch_array($ret);
             $name[]=$row["ProductName"];
             $price[]=$row["Price"];
             $ingredients[]=$row["Ingredients"];
             $manufacturedate[]=$row["ManufactureDate"];
             $expireddate[]=$row["ExpiredDate"];
             
          }
          
    } 
    
    mysql_close($con); 
    include('productmenu.php');
    echo"<form action='othersorder.php' method='post'>"; 
    echo "<center><table width='95%'>"; 
    
    
        
        echo"<tr><td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/others/1.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[0] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[0]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[0] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[0]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[0]</td>";
                
        echo"<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/others/2.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[1] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[1]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[1] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[1]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[1]</td></tr>";
        
        
        echo"<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='1'>";
       for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='1'>Add to Cart</td>"; 
        
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='2'>";
        for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='2'>Add to Cart</td></td></tr>";
        
        echo"<tr><td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/others/3.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[2] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[2]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[2] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[2]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[2]</td>";
                
        echo"<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/others/4.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[3] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[3]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[3] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[3]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[3]</td></tr>";
        
        
        echo"<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='3'>";
        for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='3'>Add to Cart</td>"; 
        
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='4'>";
       for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='4'>Add to Cart</td></td></tr>";     

        echo"<tr><td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/others/5.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[4] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[4]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[4] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[4]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[4]</td>";
                
        echo"<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/others/6.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[5] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[5]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[5] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[5]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[5]</td></tr>";
        
        
        echo"<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='5'>";
        for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='5'>Add to Cart</td>"; 
        
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='6'>";
       for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='6'>Add to Cart</td></td></tr>";     
        
        echo"<tr><td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/others/7.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[6] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[6]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[6] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[6]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[6]</td>";
                
        echo"<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/others/8.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[7] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[7]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[7] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[7]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[7]</td></tr>";
        
        
        echo"<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='7'>";
       for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='7'>Add to Cart</td>"; 
        
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='8'>";
       for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='8'>Add to Cart</td></td></tr>";      
        echo "</table></center><br><br><div align='center'><p><input type='submit' value='Order'></p></div></form>"; 
    

    echo "<br><br>";
    
    include('footer.php');
    echo "</body></html>";                     
    
  ?>      