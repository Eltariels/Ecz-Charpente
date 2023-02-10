<?php

/* 
    Template Name: Page prestation
*/

//------------------------------- HEADER ---------------------------
get_header();

$mainblocks_service = get_field('mainblocks_service');
//debug($imgcertification_services);
?>

<main>
    <section>
        <?php foreach ($mainblocks_service as $mainblock_service) : ?>
            <article class="ServicePage FirstSection">
                <div class="Title">
                    <h2 id="<?php echo (sanitize_title($mainblock_service['mainblock_service']['title_block_service'])); ?>"><?php echo ($mainblock_service['mainblock_service']['title_block_service']); ?></h2>
                </div>
                <div class="ServicePage BlockContainer">
                    <div class="ServicePage BlockContain">
                        <div class="ServicePage FirstBlockContain">
                            <h3><?php echo ($mainblock_service['mainblock_service']['subtitle_block_service']); ?></h3>
                            <div><?php echo ($mainblock_service['mainblock_service']['textarea_block_service']); ?></div>
                        </div>
                        <div class="ServicePage SecondBlockContain">
                            <img src="<?php echo ($mainblock_service['mainblock_service']['img_block_service']['url']); ?>" alt="<?php echo ($mainblock_service['mainblock_service']['img_block_service']['alt']); ?>" width="<?php echo ($mainblock_service['mainblock_service']['img_block_service']['sizes']['imgblockservice-width']); ?>" height="<?php echo ($mainblock_service['mainblock_service']['img_block_service']['sizes']['imgblockservice-height']); ?>">
                        </div>
                    </div>
                    <div class="ServicePage Link">
                        <a href="<?php echo ($mainblock_service['mainblock_service']['link_block_service']['url']); ?>">
                            <?php echo ($mainblock_service['mainblock_service']['link_block_service']['title']); ?></a>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
    </section>
</main>

<?php

//------------------------------- FOOTER ---------------------------
get_footer();

?>