<main>
    <article>
        <section class="inner read-width">
            <a class="logo" href="<?php bloginfo('url'); ?>">
                Timr
            </a>
            <h1>Opret din egen nedtælling på sekunder</h1>
            <p>Something something</p>
        </section>
        <section class="inner create-timr-section">
            <h3 class="center">Begynd hér:</h3>
            <form class="create-timr" method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
                <input type="hidden" name="action" value="create_timr">
                <?php wp_nonce_field('create_timr','create_timr_nonce'); ?>
                <div class="create-timr-title">
                    <input type="text" name="title" required>
                    <label for="title">Nedtællingens titel</label>
                </div>
                <div class="create-timr-submit">
                    <input class="block" type="submit" value="Opret og konfigurer">
                </div>
            </form>
        </section>
    </article>
</main>