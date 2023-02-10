<?php

$title_footernavlist = get_field('title_footernavlist', 'option');

$subtitle_one_footernavlist = get_field('subtitle_one_footernavlist', 'option');

$subtitle_two_footernavlist = get_field('subtitle_two_footernavlist', 'option');

$subtitle_third_footernavlist = get_field('subtitle_third_footernavlist', 'option');

$img_footer = get_field('img_footer', 'option');

$first_text_footer = get_field('first_text_footer', 'option');

$second_text_footer = get_field('second_text_footer', 'option');

$third_text_footer = get_field('third_text_footer', 'option');

// debug($img_footer);
?>

<footer>
    <div class="FooterNav">
        <div>
            <?php wp_nav_menu(array(
                'menu' => ID_FOOTER_NAV,
                'container_class' => 'FooterContainer',
                'menu_class' => 'FooterListOne',
                'menu_id' => false
            )); ?>
        </div>
        <div class="ListFooterSupp">
            <ul>
                <li><a href="<?php echo ($title_footernavlist['url']); ?>"><?php echo ($title_footernavlist['title']); ?></a></li>
                <li><?php echo ($subtitle_one_footernavlist) ?></li>
                <li><?php echo ($subtitle_two_footernavlist) ?></li>
                <li><?php echo ($subtitle_third_footernavlist) ?></li>
            </ul>
        </div>
    </div>
    <div class="FooterSubPart">
        <img src="<?php echo ($img_footer['url']); ?>" alt="<?php echo ($img_footer['alt']); ?>" width="<?php echo ($img_footer['sizes']['imgblockservice-width']); ?>" height="<?php echo ($img_footer['sizes']['imgblockservice-height']); ?>">
        <p class="FooterText"><?php echo ($first_text_footer) ?></p>
        <a class="FooterText" href="<?php echo ($second_text_footer['url']); ?>"><?php echo ($second_text_footer['title']); ?></a>
        <p class="FooterText"><?php echo ($third_text_footer) ?> <?php echo (date('Y')); ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>