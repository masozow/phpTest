<main>
    <!-- <pre style="font-size:10px; overflow:scroll; height:20vh;">
            <?php var_dump($data); ?>
        </pre> -->
    <section>
        <img src="<?= $data["poster_url"] ?>" width="30%;" alt="Poster de <?= $data["title"] ?>" style="border-radius: 5%;">
    </section>
    <article>
        <h2><?= $data["title"] ?> - <?= $untilMessage ?></h2>
        <p>Fecha de estreno: <?= $data["release_date"] ?></p>
        <p>La siguiente película es: <?= $data["following_production"]["title"] ?></p>
    </article>
</main>