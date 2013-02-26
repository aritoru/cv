<?php
$validPages = array('home', 'cv', 'projects', 'contact');
if (!isset($_REQUEST['section']) || !in_array($_REQUEST['section'], $validPages)) {
    $_REQUEST['section'] = "home";
}
?>

<!doctype html>
<html class="no-js">
<?php include_once('header.php'); ?>

    <body lang="en">
<?php include_once('nav.php'); ?>
        <!-- MAIN -->
        <div id="main">
<?php include_once('social.php'); ?>
            <!-- Content -->
            <div id="content">
                <?php include_once($_REQUEST['section'] . '.php'); ?>

            </div>

        </div>
<?php include_once('footer.php'); ?>
    </body>



</html>