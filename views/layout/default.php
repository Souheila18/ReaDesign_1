<?php
if (!isset($_SESSION)) {
    session_start();
    $_SESSION["user"] = "Hicham";
    $_SESSION["caddy"] = array();
}
include 'header.php';
?>
<?php include 'nav.php'; ?>
<main>

    <div class="container">
        <?= $content ?>
    </div>

</main>


<?php include 'footer.php';
exit();

?>