<?php
echo"<html>
<head><title>SunMoon Bakery</title>
<body>";
     include('dblink.php'); 
     
    $mysql_query="select * from cookies";
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
     
    
     include('menu.php'); 
     
     
if(!isset($_POST['submit']))
{   echo"<h2 align='center'>Customer Order Form</h2><br>";
    echo"<p align='center'><b>Please fill the information below to order sunmoon products</b><hr>"; 
    $today=date("d/m/Y");
    echo "<p align='right'>Date:&nbsp;&nbsp;".$today."</p>";
    echo "<form action='cakeorder.php' method='POST'>  
          <p align='right'><table width='95%' border='0' cellspacing='5' cellpadding='2'> 
          <tr><td align='right'><h3>Customer Name :</h3></td><td> <input type='text' name='customer' maxlength='65' size='65'></td></tr>
          <tr><td align='right'><h3>Phone Number :</h3></td><td> <input type='text' name='phone_no' maxlength='65' size='65'></td></tr>
          <tr><td align='right'><h3>Address :</h3></td><td> <input type='text' name='address' maxlength='65' size='65' height='20'></td></tr></table></p>";
    echo"<table width='95%' border='0' cellspacing='5' cellpadding='2'><tr><td><h3><b>Product Name</h3></b></td><td><h3><b>Price</h3></b></td><td><h3><b>Quantity</h3></b></td><td><h3><b>Amount</h3></b></td><td><h3><b>Discount</h3></b></td><td><h3><b>Total Amount</h3></b></td></tr>";      
         
          foreach($_POST['ch'] as $key=>$value)
     {   static $currenttotal; 
         $discount='0.1';
         switch($value)
         {   
             case 1: $quan=$_POST['1'];
                     $total=$quan*$price[0];
                     $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values('$name[0]','$quan[0]','$total')";
                     $results=mysql_query($mysql_query,$con);
                     echo "<tr><td>".$name[0]."</td>"; 
                     echo "<td>".$price[0]."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>"; 
                     break;
             case 2: $quan=$_POST['2'];
                     $total=$quan*$price[1];
                     $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values('$name[1]','$quan[1]','$total')";
                     $results=mysql_query($mysql_query,$con);
                     echo "<tr><td>".$name[1]."</td>"; 
                     echo "<td>".$price[1]."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>";
                     break; 
             case 3: $quan=$_POST['3'];
                     $total=$quan*$price['2'];
                     $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values('$name[2]','$quan[2]','$total')";
                     $results=mysql_query($mysql_query,$con);
                     echo "<tr><td>".$name[2]."</td>"; 
                     echo "<td>".$price['2']."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>";
                     break;
             case 4: $quan=$_POST['4'];
                     $total=$quan*$price['3'];
                     $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values('$name[3]','$quan[3]','$total')";
                     $results=mysql_query($mysql_query,$con);
                     echo "<tr><td>".$name[3]."</td>"; 
                     echo "<td>".$price['3']."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>";
                     break;
             case 5: $quan=$_POST['5'];
                     $total=$quan*$price['4'];
                     $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values('$name[4]','$quan[4]','$total')";
                     $results=mysql_query($mysql_query,$con);
                     echo "<tr><td>".$name[4]."</td>"; 
                     echo "<td>".$price['4']."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>";
                     break;
             case 6: $quan=$_POST['6'];
                     $total=$quan*$price['5']; 
                     $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values('$name[5]','$quan[5]','$total')";
                     $results=mysql_query($mysql_query,$con);
                     echo "<tr><td>".$name['5']."</td>"; 
                     echo "<td>".$price['5']."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>";
                     break;
             case 7: $quan=$_POST['7']; 
                     $total=$quan*$price['6'];
                     $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values('$name[6]','$quan[6]','$total')";
                     $results=mysql_query($mysql_query,$con); 
                     echo "<tr><td>".$name['6']."</td>"; 
                     echo "<td>".$price['6']."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>";
                     break;
             case 8: $quan=$_POST['8']; 
                     $total=$quan*$price['7'];
                     $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values('$name[7]','$quan[7]','$total')";
                     $results=mysql_query($mysql_query,$con);  
                     echo "<tr><td>".$name['7']."</td>"; 
                     echo "<td>".$price['7']."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>";
                     break;
             case 9: $quan=$_POST['9']; 
                     $total=$quan*$price['8'];
                     $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values('$name[8]','$quan[8]','$total')";
                     $results=mysql_query($mysql_query,$con);  
                     echo "<tr><td>".$name['8']."</td>"; 
                     echo "<td>".$price['8']."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>";
                     break;
             case 10: $quan=$_POST['10'];
                      $total=$quan*$price['9'];
                      $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values('$name[9]','$quan[9]','$total')";
                      $results=mysql_query($mysql_query,$con); 
                      echo "<tr><td>".$name['9']."</td>"; 
                     echo "<td>".$price['9']."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>";
                     break;
             case 11: $quan=$_POST['11']; 
                      $total=$quan*$price['10'];
                      $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values('$name[10]','$quan[10]','$total')";
                     $results=mysql_query($mysql_query,$con); 
                      echo "<tr><td>".$name['10']."</td>"; 
                      echo "<td>".$price['10']."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>";
                     break;
             case 12: $quan=$_POST['12'];
                      $total=$quan*$price['11'];
                      $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values('$name[11]','$quan[11]','$total')";
                     $results=mysql_query($mysql_query,$con); 
                      echo "<tr><td>".$name['11']."</td>"; 
                     echo "<td>".$price['11']."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>";
                     break;
             case 13: $quan=$_POST['13']; 
                      $total=$quan*$price['12'];
                      $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values($name[12]','$quan[12]','$total')";
                     $results=mysql_query($mysql_query,$con); 
                      echo "<tr><td>".$name['12']."</td>"; 
                     echo "<td>".$price['12']."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>";
                     break;
             case 14: $quan=$_POST['14']; 
                      $total=$quan*$price['13'];
                      $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values($name[13]','$quan[13]','$total')";
                     $results=mysql_query($mysql_query,$con); 
                      echo "<tr><td>".$name['13']."</td>"; 
                     echo "<td>".$price['13']."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>";
                     break;
             case 15: $quan=$_POST['15']; 
                      $total=$quan*$price['14'];
                      $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values($name[14]','$quan[14]','$total')";
                     $results=mysql_query($mysql_query,$con); 
                     echo "<tr><td>".$name['14']."</td>"; 
                     echo "<td>".$price['14']."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>";
                     break;
             case 16: $quan=$_POST['16']; 
                      $total=$quan*$price['15'];
                      $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values('$name[15]','$quan[15]','$total')";
                     $results=mysql_query($mysql_query,$con); 
                      echo "<tr><td>".$name['15']."</td>"; 
                     echo "<td>".$price['15']."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>";
                     break; 
             case 17: $quan=$_POST['17'];  
                      $total=$quan*$price['16'];
                      $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values($name[16]','$quan[16]','$total')";
                     $results=mysql_query($mysql_query,$con);
                      echo "<tr><td>".$name['16']."</td>"; 
                     echo "<td>".$price['16']."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>";
                     break;
             case 18:  $quan=$_POST['18']; 
                      $total=$quan*$price['17'];
                      $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values($name[17]','$quan[17]','$total')";
                     $results=mysql_query($mysql_query,$con); 
                      echo "<tr><td>".$name['17']."</td>"; 
                     echo "<td>".$price['17']."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>";
                     break;
             case 19: $quan=$_POST['19']; 
                      $total=$quan*$price['18'];
                      $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values($name[18]','$quan[18]','$total')";
                     $results=mysql_query($mysql_query,$con); 
                      echo "<tr><td>".$name['18']."</td>"; 
                     echo "<td>".$price['18']."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>";
                     break;
             case 20: $quan=$_POST['20']; 
                      $total=$quan*$price['19'];
                      $mysql_query="insert into orderdetails(ProductName,Quantity,TotalAmount) values($name[19]','$quan[19]','$total')";
                     $results=mysql_query($mysql_query,$con); 
                      echo "<tr><td>".$name['19']."</td>"; 
                     echo "<td>".$price['19']."</td>"; 
                     echo "<td>".$quan."</td>";  
                     echo "<td>".$total."</td>";
                     echo "<td>10%</td>";
                     $total=$total-($total*$discount);
                     $currenttotal+=$total;
                     echo "<td>".$total."</td></tr>";
                     break;
             default: break;
         } 
     } 
     $deliveryfee='2000';
     $totalpayment=$currenttotal+$deliveryfee;
     echo"</tr><tr><td></td><td></td><td></td><td></td><td><h3><b>Total Order Amount</h3></b></td><td>$currenttotal ks</td></tr>";
      echo"<tr><td></td><td></td><td></td><td></td><td><h3><b>Delivery Fee</h3></b></td><td>$deliveryfee ks</td></tr>";
      echo"<tr><td></td><td></td><td></td><td></td><td></h3></b><h3><b>Total Payment Amount</h3></b></h3></b></td><td>
      <input type='text' name='total' value='$totalpayment'>ks</td></tr></table>";     
           
     echo"<div align='center'><p><input type='submit' name='submit' value='Insert'>
          <input type='reset' name='reset' value='Clear'></p></div></p>"; 
}                
else
{$customer=$_POST["customer"];
 $phone_no=$_POST["phone_no"];
 $address=$_POST["address"];
 $totalpayment=$_POST["total"]; 
 $mysql_query="insert into customer(CustomerName,PhoneNumber,Address,TotalAmount) values('$customer','$phone_no','$address','$totalpayment')";
$results=mysql_query($mysql_query,$con);
echo "<br/><br/>";
if($results>0)
{//include('productmenu.php'); 
echo("Insert one record Successful!");
 echo"<h1><center><font color='skyblue'>Your order is Successful.Thank You!</font></center></h1>";
 echo"<br><br><br><br><br><br>";
}
else 
{
echo ("Insert fail!"); 
}

mysql_close($con);
}
include('footer.php');
echo"</body></html>";
?>
