<?php 
    $cust_name = $_POST['cust-name']
    $cust_phone = $_POST['cust-phone']
    $cust_email = $_POST['email_error']

    // Database connection
    $conn = new mysqli('localhost','root','','ordercomplete');

    if($conn->connect_error){
        die('Connection Faild : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into ordercomplete(name,phone,email)
        valuse(?,?,?)");
        $stmt->bind_param("sis",$name,$phone,$email);
        $stmt->execute();
        echo "Order Received";
        $stmt->close();
        $conn->close();
    }

// $insert = false;
// if(isset($_POST['cust-name'])){
//     // Set connection variables
//     $server = "localhost";
//     $username = "root";
//     $password = "";

//     // Create a database connection
//     $con = mysqli_connect($server, $username, $password);

//     // Check for connection success
//     if(!$con){
//         die("connection to this database failed due to" . mysqli_connect_error());
//     }
//     // echo "Success connecting to the db";

//     // Collect post variables
//     $name = $_POST['cust-name']
//     $phone = $_POST['cust-phone']
//     $email = $_POST['email_error']
//     INSERT INTO `ordercomplete`( `name`, `phone`, `email`) VALUES (  $name,$phone, $email)
//     // echo $sql;

//     // Execute the query
//     if($con->query($sql) == true){
//         echo "Successfully inserted";

//         // Flag for successful insertion
//         $insert = true;
//     }
//     else{
//         echo "ERROR: $sql <br> $con->error";
//     }

//     // Close the database connection
//     $con->close();
// }
?>