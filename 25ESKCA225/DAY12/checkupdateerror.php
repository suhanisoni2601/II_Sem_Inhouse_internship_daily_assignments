<?php
session_start();
include("db_connect.php");

$error = "";

$newpassword = "";
$oldpassword = "";
$confirmpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $newpassword = mysqli_real_escape_string($conn, $_POST['newpassword']);
    $oldpassword = mysqli_real_escape_string($conn, $_POST['oldpassword']);
    $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);

    if ($newpassword == "" || $oldpassword == "" || $confirmpassword == "") {

        echo "All fields are required.";

    } elseif ($newpassword != $confirmpassword) {

        echo "Passwords do not match.";

    } else {

        $user_id = $_SESSION['user_id'];

        $selectQuery = "SELECT * FROM user WHERE id='$user_id'";
        $result = mysqli_query($conn, $selectQuery);

        $user = mysqli_fetch_assoc($result);

        if ($user && $user['password'] == $oldpassword) {

            $updateQuery = "UPDATE user SET password='$newpassword' WHERE id='$user_id'";

            if (mysqli_query($conn, $updateQuery)) {

                header("Location: updatesuccess.php");
                exit();

            } else {

                echo mysqli_error($conn);

            }

        } elseif ($user) {

            echo "Old password does not match.";

        } else {

            echo "User not found.";

        }
    }
}
?>
