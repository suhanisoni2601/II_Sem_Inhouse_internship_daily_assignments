<?php

include("db_connect.php");
include("checkloginerror.php");
include("header.php");
?>

<div class="container mt-5" style="max-width:400px;">
    <form action="" method="post">
        <h3 class="mb-3">Login</h3>

        <!-- //<input type="text" class="form-control mb-3" placeholder="Name" name="name" required value="<?= $name?>"> -->

        <input type="email" class="form-control mb-3" placeholder="Email" name="email" required value="<?= $email?>">

        <input type="password" class="form-control mb-3" placeholder="Password" name="password" required value="<?= $password?>">

        <!-- <input type="confirmpassword" class="form-control mb-3" placeholder="confirmpassword" name="confirmpassword" required value=" -->

        <button  class="btn btn-primary w-100" type="submit">
            Login
        </button>
    </form>
</div>

<?php
include("footer.php");
?>

