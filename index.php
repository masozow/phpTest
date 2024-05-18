<?php
require_once 'consts.php';
require_once 'functions.php';

$data = get_data(API_URL);
$untilMessage = get_until_message($data["days_until"]);
?>
<?php require_once('sections/head.php') ?>
<?php require_once('sections/main.php'); ?>
<?php require_once('sections/styles.php'); ?>

