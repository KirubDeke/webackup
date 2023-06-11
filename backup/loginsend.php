<?php





$host = "localhost"; // database server
$user = "root"; // database user name 
$password = ""; // database password 
$dbName = "car-rental"; // database name  
$table = "customers"; // table name


$connect = mysqli_connect($host, $user, $password, $dbName);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
if($_SERVER["REQUEST_METHOD"]=="POST"){ 

    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM customers WHERE email='$email' and password='$password';";
    $result=mysqli_query($connect,$sql);
    if($result->num_rows===1){
       {
        session_start();
        $_SESSION['authentication']=true;
        header("location: carhome.php ? Sign in successfull");
        exit();
           
        }
       
    }
    else{
        echo "<h2>User not found Check your user name and password or Register Please</h2>";
       
    }
}
mysqli_close($connect);
?>
