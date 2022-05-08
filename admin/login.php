<?php
require_once('includes/header.php');

if (!$session->is_signed_in()) {
    redirect('index.php');
}
if (isset($_POST['submit'])) {
    $username = (isset($_POST['uname'])) ? trim($_POST['uname']) : '';
    $password = (isset($_POST['upassword'])) ? trim($_POST['upassword']) : '';

    //method to check database

    $is_user = User::verifyUser($username, $password);

    //
    if ($is_user) {
        $session->login($is_user);
        redirect('index.php');
    } else {
        $errormsg = 'Username or Password are in correct';
    }
} else {
    // $username = '';
    // $password = '';
} ?>
<div class="col-md-4 col-md-offset-3">

    <h4 class="bg-danger"><?php echo $errormsg; ?></h4>

    <form id="login-id" action="" method="post">

        <div class="form-group">
            <label for="uname">Username</label>
            <input type="text" class="form-control" name="uname" value="<?php echo htmlentities($username); ?>">

        </div>

        <div class="form-group">
            <label for="upassword">Password</label>
            <input type="password" class="form-control" name="upassword" value="<?php echo htmlentities($password); ?>">

        </div>


        <div class="form-group">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">

        </div>


    </form>


</div>