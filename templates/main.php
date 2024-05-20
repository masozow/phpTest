<main>
    <section>
        <img src="<?= $poster_url ?>" width="30%;" alt="Poster de <?= $title ?>" style="border-radius: 5%;">
    </section>
    <article>
        <h2><?= $title ?> - <?= $until_message ?></h2>
        <p>Fecha de estreno: <?= $release_date ?></p>
        <p>La siguiente película es: <?= $following_production["title"] ?></p>
    </article>
</main>