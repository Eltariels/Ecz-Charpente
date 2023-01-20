<?php

/* 
    Template Name: Page réalisation
*/

//------------------------------- HEADER ---------------------------
get_header();

$block_realisations = get_field('block_realisations');

$titleblock_realisations = get_field('titleblock_realisations');

$containblock_realisations = get_field('containblock_realisations');

$linkblock_realisations = get_field('linkblock_realisations');

?>

<main>
    <section>
        <?php foreach ($block_realisations as $block_realisation) : ?>
            <article>
                <?php foreach ($titleblock_realisations as $titleblock_realisation) : ?>
                    <div>
                        <h2><?php echo ($titleblock_realisation['titlecontainer_realisation']); ?></h2>
                    </div>
                <?php endforeach; ?>

                <div class="">
                    <?php foreach ($containblock_realisations as $containblock_realisation) : ?>
                        <div class="">
                            <img src="<?php echo ($containblock_realisation['imgblock_realisation']['url']); ?>" alt="<?php echo ($containblock_realisation['imgblock_realisation']['alt']); ?>" width="<?php echo ($containblock_realisation['imgblock_realisation']['sizes']['imgblockrealisation-width']); ?>" height="<?php echo ($containblock_realisation['imgblock_realisation']['sizes']['imgblockrealisation-width']); ?>">
                        </div>
                        <div>
                            <p><?php echo ($containblock_realisation['parablock_realisation']); ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>

                <?php foreach ($linkblock_realisations as $linkblock_realisation) : ?>
                    <div>
                        <a href="<?php echo ($linkblock_realisation['linkcontainer_realisation']['url']); ?>">
                            <?php echo ($linkblock_realisation['linkcontainer_realisation']['title']); ?></a>
                    </div>
                <?php endforeach; ?>
            </article>
        <?php endforeach; ?>
    </section>
</main>

<?php

//------------------------------- FOOTER ---------------------------
get_footer();

?>