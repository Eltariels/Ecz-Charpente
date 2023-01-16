<?php

/* 
    Template Name: Vente
*/

//------------------------------- HEADER ---------------------------
get_header();

//Price
$price = get_field('price');
$address = get_field('address');
$image = get_field('image');

?>

<p><?php echo ($price) ?> €</p>

<?php if (get_field($address)) : ?>
    <p><?php echo ($address); ?></p>
<?php else : ?>
    <p>Aucune adresse renseigné !</p>
<?php endif; ?>

<img src="<?php echo ($image['sizes']['medium_large']); ?>" height="<?php echo ($image['sizes']['medium_large-height']); ?>" width="<?php echo ($image['sizes']['medium_large-width']); ?>" alt="<?php echo ($image['alt']); ?>" title="<?php echo ($image['title']); ?>">



<?php

//------------------------------- FOOTER ---------------------------
get_footer();

?>