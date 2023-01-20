<?php

/* 
    Template Name: Page prestation
*/

//------------------------------- HEADER ---------------------------
get_header();

//------------------------------- FIRST BLOCK ---------------------------

$first_title_service = get_field('first_title_service');

$title_firstblock_service = get_field('title_firstblock_service');

$paraone_firstblock_service = get_field('paraone_firstblock_service');

$paratwo_firstblock_service = get_field('paratwo_firstblock_service');

$parathree_firstblock_service = get_field('parathree_firstblock_service');

$img_firstblock_service = get_field('img_firstblock_service');

$img_secondblock_service = get_field('img_secondblock_service');

$title_secondblock_service = get_field('title_secondblock_service');

$paraone_secondblock_service = get_field('paraone_secondblock_service');

$paratwo_secondblock_service = get_field('paratwo_secondblock_service');

$firstlink_firstblock_service = get_field('firstlink_firstblock_service');

//------------------------------- SECOND BLOCK ---------------------------

$second_title_service = get_field('second_title_service');

$title_thirdblock_service = get_field('title_thirdblock_service');

$paraone_thirdblock_service = get_field('paraone_thirdblock_service');

$img_thirdblock_service = get_field('img_thirdblock_service');

$secondlink_secondblock_service = get_field('secondlink_secondblock_service');

//------------------------------- THIRD BLOCK ---------------------------

$third_title_service = get_field('third_title_service');

$title_fourthblock_service = get_field('title_fourthblock_service');

$paraone_fourthblock_service = get_field('paraone_fourthblock_service');

$paratwo_fourthblock_service = get_field('paratwo_fourthblock_service');

$img_fourthblock_service = get_field('img_fourthblock_service');

$img_fifthblock_service = get_field('img_fifthblock_service');

$title_fifthblock_service = get_field('title_fifthblock_service');

$paraone_fifthblock_service = get_field('paraone_fifthblock_service');

$paratwo_fifthblock_service = get_field('paratwo_fifthblock_service');

$thirdlink_thirdblock_service = get_field('thirdlink_thirdblock_service');

//------------------------------- FOURTH BLOCK ---------------------------


?>

<main>
    <section>
        <article class="ServicePage FirstSection">
            <div class="ServicePage FirstTitle">
                <h2><?php echo ($first_title_service); ?></h2>
            </div>

            <div class="ServicePage FirstBlock">
                <div class="FirstBlockContain">
                    <h3><?php echo ($title_firstblock_service); ?></h3>
                    <p><?php echo ($paraone_firstblock_service); ?></p>
                    <p><?php echo ($paratwo_firstblock_service); ?></p>
                    <p><?php echo ($parathree_firstblock_service); ?></p>
                </div>
                <div class="SecondBlockContain">
                    <img src="<?php echo ($img_firstblock_service['url']); ?>" alt="<?php echo ($img_firstblock_service['alt']); ?>" width="<?php echo ($img_firstblock_service['sizes']['imgblocksolarpanel-width']); ?>" height="<?php echo ($img_firstblock_service['sizes']['imgblocksolarpanel-height']); ?>">
                </div>
            </div>

            <div class="ServicePage SecondBlock">
                <div class="FirstBlockContain">
                    <img src="<?php echo ($img_secondblock_service['url']); ?>" alt="<?php echo ($img_secondblock_service['alt']); ?>" width="<?php echo ($img_secondblock_service['sizes']['imgblocksolarpanel-width']); ?>" height="<?php echo ($img_secondblock_service['sizes']['imgblocksolarpanel-height']); ?>">
                </div>
                <div class="SecondBlockContain">
                    <h3><?php echo ($title_secondblock_service); ?></h3>
                    <p><?php echo ($paraone_secondblock_service); ?></p>
                    <p><?php echo ($paratwo_secondblock_service); ?></p>
                </div>
            </div>

            <div class="ServicePage FirstLink">
                <a href="<?php echo ($firstlink_firstblock_service['url']); ?>">
                    <?php echo ($firstlink_firstblock_service['title']); ?></a>
            </div>
        </article>

        <article class="ServicePage SecondSection">
            <div class="ServicePage SecondTitle">
                <h2><?php echo ($second_title_service); ?></h2>
            </div>
            <div class="ServicePage ThirdBlock">
                <div class="FirstBlockContain">
                    <h3><?php echo ($title_thirdblock_service); ?></h3>
                    <p><?php echo ($paraone_thirdblock_service); ?></p>
                </div>
                <div class="SecondBlockContain">
                    <img src="<?php echo ($img_thirdblock_service['url']); ?>" alt="<?php echo ($img_thirdblock_service['alt']); ?>" width="<?php echo ($img_thirdblock_service['sizes']['imgblocksolarpanel-width']); ?>" height="<?php echo ($img_thirdblock_service['sizes']['imgblocksolarpanel-height']); ?>">
                </div>
            </div>
            <div class="ServicePage SecondLink">
                <a href="<?php echo ($secondlink_secondblock_service['url']); ?>">
                    <?php echo ($secondlink_secondblock_service['title']); ?></a>
            </div>
        </article>

        <article class="ServicePage ThirdSection">
            <div class="ServicePage ThirdTitle">
                <h2><?php echo ($third_title_service); ?></h2>
            </div>

            <div class="ServicePage FirstBlock">
                <div class="SecondBlockContain">
                    <img src="<?php echo ($img_fourthblock_service['url']); ?>" alt="<?php echo ($img_fourthblock_service['alt']); ?>" width="<?php echo ($img_fourthblock_service['sizes']['imgblocksolarpanel-width']); ?>" height="<?php echo ($img_fourthblock_service['sizes']['imgblocksolarpanel-height']); ?>">
                </div>
                <div class="FirstBlockContain">
                    <h3><?php echo ($title_fourthblock_service); ?></h3>
                    <p><?php echo ($paraone_fourthblock_service); ?></p>
                    <p><?php echo ($paratwo_fourthblock_service); ?></p>
                </div>
            </div>

            <div class="ServicePage SecondBlock">
                <div class="SecondBlockContain">
                    <h3><?php echo ($title_fifthblock_service); ?></h3>
                    <p><?php echo ($paraone_fifthblock_service); ?></p>
                    <p><?php echo ($paratwo_fifthblock_service); ?></p>
                </div>
                <div class="FirstBlockContain">
                    <img src="<?php echo ($img_fifthblock_service['url']); ?>" alt="<?php echo ($img_fifthblock_service['alt']); ?>" width="<?php echo ($img_fifthblock_service['sizes']['imgblocksolarpanel-width']); ?>" height="<?php echo ($img_fifthblock_service['sizes']['imgblocksolarpanel-height']); ?>">
                </div>
            </div>

            <div class="ServicePage FirstLink">
                <a href="<?php echo ($thirdlink_thirdblock_service['url']); ?>">
                    <?php echo ($thirdlink_thirdblock_service['title']); ?></a>
            </div>
        </article>
    </section>
</main>


<?php

//------------------------------- FOOTER ---------------------------
get_footer();

?>