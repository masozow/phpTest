<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);
// var_dump($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="The next marvel film" />
    <title>The next Marvel film</title>
    <!-- Centered viewport -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>

<body>
    <main>
        <!-- <pre style="font-size:10px; overflow:scroll; height:20vh;">
            <?php var_dump($data); ?>
        </pre> -->
        <section>
            <img src="<?= $data["poster_url"] ?>" width="30%;" alt="Poster de <?= $data["title"] ?>" style="border-radius: 5%;">
        </section>
        <article>
            <h2><?= $data["title"] ?> se estrena en: <?= $data["days_until"] ?> días</h2>
            <p>Fecha de estreno: <?= $data["release_date"] ?></p>
            <p>La siguiente película es: <?= $data["following_production"]["title"] ?></p>
        </article>
    </main>
</body>
<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    img {
        margin: 0 auto;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    article {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>

</html>