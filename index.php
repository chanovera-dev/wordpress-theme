<?php get_header(); ?>

<main id="main">

    <section class="container">

        <div class="section content-section">
        
            <h1><?= __('Título en h1', 'renata') ?></h1>
            <h2><?= __('Título en h2', 'renata') ?></h2>
            <h3><?= __('Título en h3', 'renata') ?></h3>
            <h4><?= __('Título en h4', 'renata') ?></h4>
            <h5><?= __('Título en h5', 'renata') ?></h5>

            <p>Ejemplo de párrafo de texto, esto es un <a href="#">ejemplo de hipervínculo</a>.</p>

            <p>
                <label for="input-text">Label para input text</label>
                <input type="text" placeholder="texto" id="input-text">
            </p>
            <input type="button" value="Botón">

        </div>

    </section>

</main>

<?php get_footer(); ?>