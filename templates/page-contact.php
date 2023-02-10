<?php

/* 
    Template Name: Page Contact
*/

//------------------------------- HEADER ---------------------------
get_header();

$mainblocks_contact = get_field('mainblocks_contact');
//debug($imgcertification_contacts);

?>

<main>
    <section>
        <div class="ContactIcon">
            <?php foreach ($mainblocks_contact as $mainblock_contact) : ?>
                <article class="ContactPage FirstSection">
                    <div class="ContactPage Block">
                        <div class="ContactPage BlockContain">
                            <img src="<?php echo ($mainblock_contact['icon_contact']['url']); ?>" alt="<?php echo ($mainblock_contact['icon_contact']['alt']); ?>" width="<?php echo ($mainblock_contact['icon_contact']['sizes']['imgblockcontact-width']); ?>" height="<?php echo ($mainblock_contact['icon_contact']['sizes']['imgblockcontact-height']); ?>">
                            <p><?php echo ($mainblock_contact['texte_icon_contact']); ?></p>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <?php echo (do_shortcode('[wpforms id="225"]')); ?>
</main>

<?php

//------------------------------- FOOTER ---------------------------
get_footer();

?>