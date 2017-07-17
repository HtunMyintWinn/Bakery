<?php
include('menu.php');  
    echo "<html><head></head><body>";
    
    include('dblink.php');
    $mysql_query="select * from cake";
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
    echo"<form action='cakeorder.php' method='post'>"; 
    echo "<center><table width='95%'>";                                                                                                  
    
    
        
        echo"<tr><td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/1.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[0] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[0]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[0] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[0]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[0]</td>";
                
        echo"<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/2.jpg'></img></td>";
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
        
        echo"<tr><td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/3.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[2] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[2]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[2] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[2]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[2]</td>";
                
        echo"<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/4.jpg'></img></td>";
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

        echo"<tr><td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/5.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[4] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[4]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[4] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[4]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[4]</td>";
                
        echo"<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/6.jpg'></img></td>";
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
        
        echo"<tr><td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/7.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[6] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[6]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[6] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[6]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[6]</td>";
                
        echo"<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/8.jpg'></img></td>";
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

        echo"<tr><td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/9.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[8] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[8]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[8] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[8]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[8]</td>";
                
        echo"<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/10.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[9] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[9]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[9] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[9]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[9]</td></tr>";
        
        
        echo"<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='9'>";
        for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='9'>Add to Cart</td>"; 
        
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='10'>";
        for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='10'>Add to Cart</td></td></tr>";     

        echo"<tr><td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/11.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[10] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[10]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[10] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[10]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[10]</td>";
                
        echo"<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/12.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[11] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[11]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[11] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[11]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[11]</td></tr>";
        
        
        echo"<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='11'>";
        for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='11'>Add to Cart</td>"; 
        
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='12'>";
        for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='12'>Add to Cart</td></td></tr>";     

        echo"<tr><td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/13.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[12] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[12]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[12] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[12]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[12]</td>";
                
        echo"<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/14.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[13] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[13]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[13] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[13]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[13]</td></tr>";
        
        
        echo"<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='13'>";
        for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='13'>Add to Cart</td>"; 
        
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='14'>";
        for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='14'>Add to Cart</td></td></tr>";     

        echo"<tr><td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/15.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[14] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[14]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[14] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[14]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[14]</td>";
                
        echo"<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/16.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[15] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[15]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[15] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[15]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[15]</td></tr>";
        
        
        echo"<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='15'>";
        for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='15'>Add to Cart</td>"; 
        
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='16'>";
        for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='16'>Add to Cart</td></td></tr>";     

        echo"<tr><td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/17.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[16] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[16]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[16] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[16]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[16]</td>";
                
        echo"<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/18.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[17] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[17]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[17] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[17]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[17]</td></tr>";
        
        
        echo"<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='17'>";
        for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='17'>Add to Cart</td>"; 
        
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='18'>";
        for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='18'>Add to Cart</td></td></tr>";
        
        echo"<tr><td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/19.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[18] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[18]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[18] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[18]<br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[18]</td>";
                
        echo"<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='products/cake/20.jpg'></img></td>";
        echo"<td>&nbsp;&nbsp;&nbsp;Product Name: $name[19] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Price : $price[19] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Integradients : $ingredients[19] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Manufacture Date : $manufacturedate[19] <br>";
        echo"<br>&nbsp;&nbsp;&nbsp;Expired Date : $expireddate[19] </td></tr>";
        
        
        echo"<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='19'>";
        for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='17'>Add to Cart</td>"; 
        
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity &nbsp;&nbsp;<select name='20'>";
        for($n=10;$n<101;$n++)
        {
            echo"<option>$n</option>";
        }
        echo"</td>";
        echo"<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='checkbox' name='ch[]' value='18'>Add to Cart</td></td></tr>";     

    echo "</table></center><br><br><div align='center'><p><input type='submit' value='Order'></p></div></form>"; 
    

    echo "<br><br>";
    
    include('footer.php');
    echo "</body></html>";                     
    
  ?>      