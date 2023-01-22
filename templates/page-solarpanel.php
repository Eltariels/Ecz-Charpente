<?php

/* 
    Template Name: Page panneaux solaires
*/

//------------------------------- HEADER ---------------------------
get_header();

$mainblocks_solarpanel = get_field('mainblocks_solarpanel');

$titlecertification_solarpanel = get_field('titlecertification_solarpanel');

$sentencecertification_solarpanel = get_field('sentencecertification_solarpanel');

$linkcertification_solarpanel = get_field('linkcertification_solarpanel');

$imgcertification_solarpanels = get_field('imgcertification_solarpanel');
//debug($imgcertification_solarpanels);
?>

<main>
    <section>
        <?php foreach ($mainblocks_solarpanel as $mainblock_solarpanel) : ?>
            <article class="SolarpanelPage FirstSection">
                <div class="title">
                    <h2 id="<?php echo (sanitize_title($mainblock_solarpanel['mainblock_solarpanel']['title_block_solarpanel'])); ?>"><?php echo ($mainblock_solarpanel['mainblock_solarpanel']['title_block_solarpanel']); ?></h2>
                </div>
                <div class="SolarpanelPage block">
                    <div class="SolarpanelPage FirstBlockContain">
                        <h3><?php echo ($mainblock_solarpanel['mainblock_solarpanel']['subtitle_block_solarpanel']); ?></h3>
                        <div><?php echo ($mainblock_solarpanel['mainblock_solarpanel']['textarea_block_solarpanel']); ?></div>
                    </div>
                    <div class="SolarpanelPage SecondBlockContain">
                        <img src="<?php echo ($mainblock_solarpanel['mainblock_solarpanel']['img_block_solarpanel']['url']); ?>" alt="<?php echo ($mainblock_solarpanel['mainblock_solarpanel']['img_block_solarpanel']['alt']); ?>" width="<?php echo ($mainblock_solarpanel['mainblock_solarpanel']['img_block_solarpanel']['sizes']['imgblockservice-width']); ?>" height="<?php echo ($mainblock_solarpanel['mainblock_solarpanel']['img_block_solarpanel']['sizes']['imgblockservice-height']); ?>">
                    </div>
                    <div class="SolarpanelPage ThridBlockContain">
                        <a href="<?php echo ($mainblock_solarpanel['mainblock_solarpanel']['link_block_solarpanel']['url']); ?>">
                            <?php echo ($mainblock_solarpanel['mainblock_solarpanel']['link_block_solarpanel']['title']); ?></a>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
        <article class="SolarpanelPage SecondSection">
            <div class="SolarpanelPage Title">
                <h2><?php echo ($titlecertification_solarpanel); ?></h2>
            </div>
            <div class="SolarpanelPage FirstBlockContain">
                <p><?php echo ($sentencecertification_solarpanel); ?></p>
                <div>
                    <?php foreach ($imgcertification_solarpanels as $imgcertification_solarpanel) : ?>
                        <div>
                            <img src="<?php echo ($imgcertification_solarpanel['img_certif_solarpanel']['url']); ?>" alt="<?php echo ($imgcertification_solarpanel['img_certif_solarpanel']['alt']); ?>" width="<?php echo ($imgcertification_solarpanel['img_certif_solarpanel']['sizes']['medium-width']); ?>" height="<?php echo ($imgcertification_solarpanel['img_certif_solarpanel']['sizes']['medium-height']); ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="SolarpanelPage Link">
                <a href="<?php echo ($linkcertification_solarpanel['url']); ?>">
                    <?php echo ($linkcertification_solarpanel['title']); ?></a>
            </div>
        </article>
    </section>
</main>

<?php

//------------------------------- FOOTER ---------------------------
get_footer();

?>