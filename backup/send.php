<?php



$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "car-rental";

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//defining variables
    $fname=$lname=$email=$password=$confirmpassword=$phone="";
      
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Get input data from the form
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword= $_POST["confirmpassword"];
    $phone = $_POST["phone"];

    if( $password==$confirmpassword){
        $sql = "INSERT INTO customers (fname,lname,email,password,confirmpassword,phone) VALUES
         ('$fname', '$lname','$email','$password','$confirmpassword','$phone')";

        if(mysqli_query($conn, $sql)){
            // If the data was inserted successfully, redirect to the home page

            // Display the ID to the user
           // $customer_id = uniqid();
           // echo "Thank you for registering! Your customer ID is: " . $customer_id;
           session_start();
           $_SESSION['authentication']=true;
            header("location: carhome.php ? Registered successfully");
            exit();
        } else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
    }
    else{
        echo "check password, password and confirm password should be exactly the same";
    }
    mysqli_close($conn);
    }

    
?>
