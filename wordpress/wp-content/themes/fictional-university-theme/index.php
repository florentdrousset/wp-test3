<?php
get_header();

function greet($name, $color) {
    echo "<p>Hi, my name is " . $name . " and my favorite color is " . $color . ".</p>";
}

greet("Flo", "blue");
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>

<?php
    while(have_posts()) {
        the_post(); ?>
        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
        <p><?php the_content(); ?></p>
        <hr>
        <?php
    }

    get_footer();
?>