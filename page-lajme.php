<?php

get_header();


?>

<div class="container my-5">
    <h1 class="mb-4">Lajme</h1>

    <?php
    $args = array(
        'post_type'       => 'post',
        'posts_per_page'  => 10,
        'category_name'   => 'lajme'
    );
    $query = new WP_Query($args);


    if($query->have_posts()):
        while ($query->have_posts()) : $query->the_post();
    ?>
    <div class="mb-4 p-3 border rounded">
        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
    </div>

    <?php 
    endwhile;
else:
    echo '<p> Nuk ka postime ne kategorine lajme </p>';
endif;

wp_reset_postdata();
?>
</div>

<?php get_footer();?>