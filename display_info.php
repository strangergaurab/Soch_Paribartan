<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <style>
        <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        margin-top: 50px;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    @media (max-width: 768px) {
        table {
            font-size: 12px;
        }

        th, td {
            padding: 6px;
        }
    }
</style>

    </style>
</head>
<body>
      <a href="index.php">Home</a>

<div class="container">
    <h2>User FeedBack Information</h2>
    <table class="table">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Address</th>
            <th>Subjects</th>
            <th>Comment</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include "db.php";

        $sql = "SELECT * FROM user_feedback";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['first_name']}</td>
                    <td>{$row['last_name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['contact_number']}</td>
                    <td>{$row['address']}</td>
                    <td>{$row['subjects']}</td>
                    <td>{$row['comment']}</td>
                  </tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<div class="container">
    <h2>Donor Details</h2>
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Donation Amount</th>
            <th>Donation Type</th>
        </tr>
        </thead>
        <tbody>
            <!-- PHP code to fetch and display donor details from the database -->
            <?php
        

            $sql = "SELECT * FROM donors_tbl";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['full_name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['gender']}</td>
                            <td>{$row['phone']}</td>
                            <td>{$row['address']}</td>
                            <td>{$row['donation_amount']}</td>
                            <td>{$row['donation_type']}</td>
                           
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No donor records found</td></tr>";
            }

            $conn->close();
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
