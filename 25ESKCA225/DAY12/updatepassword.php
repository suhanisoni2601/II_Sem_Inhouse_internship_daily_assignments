<?php
session_start();
include("header2.php");
?>

<div class="container mt-5" style="max-width:400px;">

    <form action="checkupdateerror.php" method="post" autocomplete="off">

        <h3 class="mb-3">Update Password</h3>

        <input type="password"
               class="form-control mb-3"
               name="oldpassword"
               placeholder="Old Password"
               autocomplete="current-password"
               required>

        <input type="password"
               class="form-control mb-3"
               name="newpassword"
               placeholder="New Password"
               autocomplete="new-password"
               required>

        <input type="password"
               class="form-control mb-3"
               name="confirmpassword"
               placeholder="Confirm Password"
               autocomplete="new-password"
               required>

        <button type="submit" class="btn btn-primary w-100">
            Update
        </button>
    </form>

</div>

<?php
include("footer.php");
?>
