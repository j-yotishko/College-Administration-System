<?php include ("connect.php");?>
<?php
// Fetch student details from the table
$sql = "SELECT `Name`, `Email`, `JECARANK` FROM `student_registration`";
$result = $conn->query($sql);
function send_confirmation_email($email, $status) {
    $to = $email;
    $subject = "Confirmation of student application";
    $message = "Dear student,\n\nYour application has been " . $status . ".";
    $headers = "From: mindcontroller190@gmail.com" . "\r\n" .
               "Reply-To: mindcontrolle@gmail.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Confirmation email sent to the student";
    } else {
        echo "Error sending confirmation email";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Marks</th>
            <th></th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["Name"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                echo "<td>" . $row["JECARANK"] . "</td>";
                echo "<td>";
                // Option to accept or reject the student
                echo "<form method='post' action=''>";
                echo "<input type='hidden' name='email' value='" . $row["Email"] . "'>";
                echo "<input type='submit' name='accept' value='Accept'>";
                echo "<input type='submit' name='reject' value='Reject'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";

                // Handle form submission
               if (isset($_POST["accept"])) {
                    $email = $_POST["email"];
                    // Update the status of the student to 'accepted'
                    $sql_update = "UPDATE student_registration SET status='accepted' WHERE email='$email'";
                    if ($conn->query($sql_update) === TRUE) {
                        echo "Student accepted successfully";
                        send_confirmation_email($email, "accepted");
                    } else {
                        echo "Error updating student: " . $conn->error;
                    }
                }

                if (isset($_POST["reject"])) {
                    $email = $_POST["email"];
                    // Update the status of the student to 'rejected'
                    $sql_update = "UPDATE student_registration SET status='rejected' WHERE email='$email'";
                    if ($conn->query($sql_update) === TRUE) {
                        echo "Student rejected successfully";
                        send_confirmation_email($email, "rejected");
                    } 
                    else {
                            echo "Error updating student: " . $conn->error;
                        }
                    }
}
} else {
echo "0 results";
}
$conn->close();
?>
       
    </table>
</body>
</html>
