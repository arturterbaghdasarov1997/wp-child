<?php
    // Template Name: First Page
    get_header();
    ?>

        <div>
            <h1>
                <?php echo get_the_title(); ?>
            </h1>
        </div>

        <div class="content">
            <?php
                the_content();
            ?>
        </div>

<?php
    get_footer();