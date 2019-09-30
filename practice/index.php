<!DOCTYPE html>
<html>
<head>
	<title>Fundamental of PHP</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
  
  <section class="content">
  	
  		<div class="header">
  			
  			<h2><?php echo "Fundamental php"; ?></h2>

  		</div>
  		<div class="maincontent">


<?php 

  include 'function.php';
  
 ?>








        <form action="" method="post">
          <table>
            <tr>
              <td>Enter the first Number:</td>
              <td><input type="number" name="num1"></td>
            </tr>
            <tr>
              <td>Enter the second Number:</td>
              <td><input type="number" name="num2"></td>
            </tr>
            <tr>
              <td></td>
              <td><input type="submit" name="calculation" value="calculate"></td>
            </tr>
          </table>
        </form>
<?php
 

 if (isset($_POST['calculation'])) {
   $numOne = $_POST['num1'];
    $numTwo = $_POST['num2'];
 

if (empty($numOne) or empty($numTwo)) {
     echo  "<span style='color: #EE6554'> Fild must not be empty</span> </br> ";
}
else{
      echo "First Number is :" .$numOne. " Second Number is: "  .$numTwo. "<br/>";

  $cal = new calculation;
  $cal->add($numOne, $numTwo);
  $cal->sub($numOne, $numTwo);
  $cal->mul($numOne, $numTwo);
  $cal->div($numOne, $numTwo);
}
}

?>

        

     


  		
  		</div>
  		<div class="footer">
  			<h2><?php echo "Tranning with live project";  ?></h2>
  		</div>

  </section>
   
</body>
</html>