<?php

/* 
    Template Name: Page réalisation
*/

//------------------------------- HEADER ---------------------------
get_header();

$block_realisations = get_field('block_realisations');



//debug($block_realisations);

?>

<main>
    <section>
        <?php foreach ($block_realisations as $block_realisation) : ?>
            <article class="RealisationPage MainBlock">

                <div class="RealisationPage Title">
                    <h2 class=""><?php echo ($block_realisation['titleblock_realisations']); ?></h2>
                </div>
                
                <div class="RealisationPage BlockContainer">
                    <?php foreach ($block_realisation['containblock_realisations'] as $i => $containblock_realisation) : ?>
                        <div class="RealisationPage BlockContain">
                            <div class="ImgBlock">
                                <div class="ImgOne">
                                    <img src="<?php echo ($containblock_realisation['imgblockone_realisation']['url']); ?>" alt="<?php echo ($containblock_realisation['imgblockone_realisation']['alt']); ?>" width="<?php echo ($containblock_realisation['imgblockone_realisation']['sizes']['imgblockrealisation-width']); ?>" height="<?php echo ($containblock_realisation['imgblockone_realisation']['sizes']['imgblockrealisation-width']); ?>">
                                </div>
                                <div class="ImgTwo">
                                    <img src="<?php echo ($containblock_realisation['imgblocktwo_realisation']['url']); ?>" alt="<?php echo ($containblock_realisation['imgblocktwo_realisation']['alt']); ?>" width="<?php echo ($containblock_realisation['imgblocktwo_realisation']['sizes']['imgblockrealisation-width']); ?>" height="<?php echo ($containblock_realisation['imgblocktwo_realisation']['sizes']['imgblockrealisation-width']); ?>">
                                </div>
                            </div>
                            <div class="TextBlock">
                                <p><?php echo ($containblock_realisation['parablock_realisation']); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="RealisationPage Link">
                    <a href="<?php echo ($block_realisation['linkblock_realisations']['url']); ?>">
                        <?php echo ($block_realisation['linkblock_realisations']['title']); ?></a>
                </div>
            </article>
        <?php endforeach; ?>
    </section>
</main>

<?php

//------------------------------- FOOTER ---------------------------
get_footer();

?>