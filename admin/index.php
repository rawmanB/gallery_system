<?php
require_once("includes/header.php");
if (!$session->is_signed_in()) {
    redirect('login.php');
}
?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <?php require_once("includes/navbar_header.php") ?>

    <!-- Top Menu Items -->
    <?php require_once("includes/top_nav.php") ?>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <?php require_once("includes/side_nav.php") ?>
</nav>

<?php require_once("includes/body-contents/admin_body_content.php") ?>

<?php require_once("includes/footer.php"); ?>