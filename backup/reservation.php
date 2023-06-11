<?php


$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname ="car-rental";

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname );

//check connection

if($conn-> connect_error){
    die("connection failed: ".$conn-> connect_error);
}

//variables to be used

$location=$car_id=$pickup_date=$return_date=$email="";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    
    $location = $_POST["location"];
    $car_id = $_POST["car_id"];
    $pickup_date = $_POST["pickup_date"];
    $return_date = $_POST["return_date"];
    $email = $_POST["email"];


    $sql = "INSERT INTO reservation (location, car_id, pickup_date, return_date, email)
    VALUES ('$location', '$car_id', '$pickup_date', '$return_date',' $email')";

     if ($conn->query($sql) === TRUE) {
      header("location: carhome.php ? Booked Successfully");
      exit();

      } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
      } 

}
$conn->close();

?>
