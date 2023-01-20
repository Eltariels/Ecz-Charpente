<?php

/* 
    Template Name: Page home
*/

//------------------------------- HEADER ---------------------------
get_header();

//NavBar
$blocprestahomes = get_field('blocprestahome');

//NavBar
$third_title_home = get_field('third_title_home');

//NavBar
$sentenceblochome = get_field('sentenceblochome');

//NavBar
$imgaboutus = get_field('imgaboutus');

//NavBar
$fourth_title_home = get_field('fourth_title_home');

//NavBar
$paraaboutus = get_field('paraaboutus');

//NavBar
$linkaboutus = get_field('linkaboutus');

//debug($imgprestahomes);

?>

<main>
    <section>
        <article class="HomePage FirstSection">
            <div class="HomePage Title">
                <h2 id="prestahome"><?php echo ($third_title_home); ?></h2>
                <h3><?php echo ($sentenceblochome); ?></h3>
            </div>
        </article>

        <article class="HomePage SecondSection">
            <?php foreach ($blocprestahomes as $blocprestahome) :
                //debug($blocprestahome); 
            ?>
                <div class="HomePage HomeBlock">
                    <div class="HomePage ImgBlock">
                        <img src="<?php echo ($blocprestahome['imgblochome']['url']); ?>" alt="<?php echo ($blocprestahome['imgblochome']['alt']); ?>" width="<?php echo ($blocprestahome['imgblochome']['sizes']['imgblochome-width']); ?>" height="<?php echo ($blocprestahome['imgblochome']['sizes']['imgblochome-height']); ?>">
                    </div>
                    <div class="HomePage TextBlock">
                        <h4><?php echo ($blocprestahome['titleblochome']); ?></h4>
                        <p><?php echo ($blocprestahome['parablochome']); ?></p>
                        <a href="<?php echo ($blocprestahome['linkblochome']['url']); ?>">
                            <?php echo ($blocprestahome['linkblochome']['title']); ?></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </article>

        <article class="HomePage ThirdSection">
            <div class="HomePage AboutusTitle">
                <h2><?php echo ($fourth_title_home); ?></h2>
            </div>
            <div class="HomePage AboutusBlock">
                <div class="HomePage AboutusImg">
                    <img src="<?php echo ($imgaboutus['url']); ?>" alt="<?php echo ($imgaboutus['alt']); ?>" width="<?php echo ($imgaboutus['sizes']['imgaboutus-width']); ?>" height="<?php echo ($imgaboutus['sizes']['imgaboutus-height']); ?>">
                </div>
                <div class="HomePage AboutusText">
                    <p><?php echo ($paraaboutus); ?></p>
                    <a href="<?php echo ($linkaboutus['url']); ?>"><?php echo ($linkaboutus['title']); ?></a>
                </div>
            </div>
        </article>
    </section>
</main>


<?php

//------------------------------- FOOTER ---------------------------
get_footer();

?>