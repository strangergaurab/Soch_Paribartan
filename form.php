 <!-- Donation Section -->
 <?php
include 'db.php';
    // Email validation
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $checkQuery = "SELECT COUNT(*) FROM donors_tbl WHERE email = '$email'";
    $result = $conn->query($checkQuery);

    if ($result->fetch_row()[0] > 0) {
        echo "Email already exists. Please use a different email address.";
        exit(); 
    }

if ($_SERVER["REQUEST_METHOD"] === "POST") {


    // Retrieve data from the form
    $full_name = mysqli_real_escape_string($conn, $_POST["full_name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $gender = mysqli_real_escape_string($conn, $_POST["gender"]);
    $phone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $donation_amount = mysqli_real_escape_string($conn, $_POST["donation_amount"]);
    $donation_type = mysqli_real_escape_string($conn, $_POST["donation_type"]);


    // Insert data into the database
    $sql = "INSERT INTO donors_tbl (full_name, email, gender, phone, address, donation_amount,donation_type)
            VALUES ('$full_name',  '$email', '$gender', '$phone', '$address', '$donation_amount','$donation_type')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for your donation!";

       
        $conn->close();

  header("Location:login.php");
   
         exit();


    } else {
        echo "Error storing donation data: " . $conn->error;
    }
}
?>