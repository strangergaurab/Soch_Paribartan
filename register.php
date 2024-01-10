<?php
session_start();
include "db.php";
if (isset($_POST["f_name"])) {
    $f_name = $_POST["f_name"];
    $l_name = $_POST["l_name"];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $subject = $_POST['subject'];
    $comment = isset($_POST['comment']) ? $_POST['comment'] : '';
    $name = "/^[a-zA-Z ]+$/";
    $emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
    $number = "/^[0-9]+$/";

    if (empty($f_name) || empty($l_name) || empty($email) ||
        empty($mobile) || empty($address) || empty($subject) || empty($comment)
    ) {
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please fill in all fields.</b>
			</div>
		";
        exit();
    } else {
        if (!preg_match($name, $f_name) || !preg_match($name, $l_name)) {
            echo "
                <div class='alert alert-warning'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>Invalid name format.</b>
                </div>
            ";
            exit();
        }

        if (!preg_match($emailValidation, $email)) {
            echo "
                <div class='alert alert-warning'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>Invalid email format.</b>
                </div>
            ";
            exit();
        }

        if (!preg_match($number, $mobile) || strlen($mobile) != 10) {
            echo "
                <div class='alert alert-warning'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>Invalid mobile number.</b>
                </div>
            ";
            exit();
        }

        // Existing email address in the database
        $sql = "SELECT id FROM user_feedback WHERE email = '$email' LIMIT 1";
        $check_query = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($check_query);

        if ($count_email > 0) {
            echo "
                <div class='alert alert-danger'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <b>Email Address is already available. Try another email address.</b>
                </div>
            ";
            exit();
        } else {
            // Note: MD5 is not a secure way to hash passwords, consider using password_hash() instead
            $password = md5($password);

            $sql = "INSERT INTO `user_feedback` 
                    (`id`, `first_name`, `last_name`, `email`, 
                    `contact_number`, `address`, `subjects`, `comment`) 
                    VALUES (NULL, '$f_name', '$l_name', '$email', 
                    '$mobile ', '$address', '$subject ', '$comment ')";

            $run_query = mysqli_query($conn, $sql);

            if ($run_query) {
                $_SESSION["id"] = mysqli_insert_id($conn);
                $_SESSION["name"] = $f_name;
                $ip_add = getenv("REMOTE_ADDR");
                echo "register_success";
                exit();
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
}
?>
