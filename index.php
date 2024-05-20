<?php
require_once 'consts.php';
require_once 'functions.php';
require_once 'classes/NextMovie.php';

$next_movie = NextMovie::fetch_and_create_movie(API_URL);
$next_movie_data = $next_movie->get_data();

$data = get_data(API_URL);
$untilMessage = get_until_message($data["days_until"]);
?>
<?php render_template('head', ['title' => $data["title"]]); ?>
<?php render_template('main', array_merge($data, ["until_message" => $untilMessage])); ?>
<?php render_template('styles'); ?>

