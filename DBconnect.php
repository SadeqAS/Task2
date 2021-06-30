<?php


  $servern = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'motors_db';
  $port = "3306";

  
  $Con = new mysqli($servern, $user, $pass, $db );

 // Connection check
 
  if ($Con->connect_error) {
   die("Connection failed: " . $Con->connect_error);
}
  echo "Connected successfully";
  echo "<br>";
	echo "<br>";
	



if(isset($_POST['btnF'])){
	
	echo "<br>";
	
	$btnF = $_POST['btnF'];
	
    $MQR = "";

    $MQR = "SELECT * FROM motor_d WHERE 1 ";
    $R = mysqli_query($Con, $MQR);
	
	$MQR = "INSERT INTO motor_d(btnValueF, btnValueR, btnValueS, btnValueL, btnValueB) VALUES ('$btnF','','','','')";

    $R = mysqli_query($Con, $MQR);
    if($R)
    {
        echo "Values added successfuly";
    }
    else{
        echo "Values not added!  <br>";
    }

}
else if(isset($_POST['btnL'])){
	
	echo "<br>";
	
	$btnL = $_POST['btnL'];
	
	$MQR = "";

    $MQR = "SELECT * FROM motor_d WHERE 1 ";
    $R = mysqli_query($Con, $MQR);
	
	$MQR = "INSERT INTO motor_d (`btnValueF`, `btnValueR`, `btnValueS`, `btnValueL`, `btnValueB`) VALUES ('', '', '', '$btnL', '')";

    $R = mysqli_query($Con, $MQR);
    if($R)
    {
        echo "Values added successfuly";
    }
    else{
        echo "Values not added!  <br>";
    }


}

else if(isset($_POST['btnR'])){
	
	echo "<br>";
	
	$btnR = $_POST['btnR'];
	
	$MQR = "";

    $MQR = "SELECT * FROM motor_d WHERE 1 ";
    $R = mysqli_query($Con, $MQR);
	
	$MQR = "INSERT INTO motor_d (`btnValueF`, `btnValueR`, `btnValueS`, `btnValueL`, `btnValueB`) VALUES ('', '$btnR', '', '', '')";

    $R = mysqli_query($Con, $MQR);
    if($R)
    {
        echo "Values added successfuly";
    }
    else{
        echo "Values not added!  <br>";
    }


}

else if(isset($_POST['btnS'])){
	
	echo "<br>";
	
	$btnS = $_POST['btnS'];
	
	$MQR = "";

    $MQR = "SELECT * FROM motor_d WHERE 1 ";
    $R = mysqli_query($Con, $MQR);
	
	$MQR = "INSERT INTO motor_d (`btnValueF`, `btnValueR`, `btnValueS`, `btnValueL`, `btnValueB`) VALUES ('', '', '$btnS', '', '')";

    $R = mysqli_query($Con, $MQR);
    if($R)
    {
        echo "Values added successfuly";
    }
    else{
        echo "Values not added!  <br>";
    }


}

else if(isset($_POST['btnB'])){
	
	echo "<br>";
	
	$btnB = $_POST['btnB'];
	
	$MQR = "";

    $MQR = "SELECT * FROM motor_d WHERE 1 ";
    $R = mysqli_query($Con, $MQR);
	
	$MQR = "INSERT INTO motor_d (`btnValueF`, `btnValueR`, `btnValueS`, `btnValueL`, `btnValueB`) VALUES ('', '', '', '', '$btnB')";

    $R = mysqli_query($Con, $MQR);
    if($R)
    {
        echo "Values added successfuly";
    }
    else{
        echo "Values not added!  <br>";
    }


}

	
	
	


?>