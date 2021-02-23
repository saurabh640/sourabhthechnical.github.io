<?php
include('connection.php');

if(isset($_POST['register_btn']))
{
   $name = $_POST['name'];
   $pizza_topping = $_POST['pizza_topping'];
   $pizza_sauce = $_POST['pizza_sauce'];
   $optional_extras = $_POST['check_list'];
   $chk="";
   foreach($optional_extras as $chk1){
     $chk.=$chk1;
   }
   $delivery_instruction = $_POST['delivery_instruction'];

   $query = "INSERT INTO pizzaform(name,pizza_topping,pizza_sauce,optional_extras,delivery_instruction) VALUES ('$name','$pizza_topping','$pizza_sauce','$chk','$delivery_instruction')";
   $query_run = mysqli_query($con,$query);

if($query_run)
{
  echo "inserted";
}
else{
  echo "There was some problem";
}
}




?>