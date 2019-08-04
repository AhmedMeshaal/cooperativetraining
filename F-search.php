<?php

//fetch.php
$connect = mysqli_connect("localhost", "root", "", "supplying");
$output = '';
//if(isset($_POST['Delete'])){
  //   $OrdId= $_POST['item'];
    //if (mysqli_query($con,"DELETE FROM `confirmed_orders` WHERE `order_id` = '$OrdId'"))
      //  $flag =1;
    //}
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  select * FROM confirmed_orders
  where 
  order_id LIKE '%".$search."'
  OR hospital_name LIKE '%".$search."'
  OR werehouse_name LIKE '%".$search."'
  OR confirm_date LIKE '%".$search."'
 ";
}
else
{
 	$query = "SELECT * FROM confirmed_orders";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
        <tr>
         <th>Items</th>
         <th>Werehouse Name</th>
         <th>Hospital Name</th>
         <th>Date Of Order</th>
         <th>Order Condition</th>
         <th>Quantity</th>
         <th>Type</th>
        </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["order_id"].'</td>
    <td>'.$row["werehouse_name"].'</td>
    <td>'.$row["hospital_name"].'</td>
    <td>'.$row["confirm_date"].'</td>
    <td>'.$row["condition"].'</td>
    <td>'.$row["quantity"].'</td>
    <td>'.$row["car_type"].'</td>
    </tr>
  ';
 }
 echo $output;
}
else
{
 echo '<h2>Data Not Found.....</h2>';
}

?>
<!--<form id="contact" name="modify" method="POST" action="F-search.php">

<input type="submit" name="Delete" class="btn btn-danger btn-xs remove" value="Delete">
</form>-->
