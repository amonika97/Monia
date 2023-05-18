<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'facetwp' => true,
    'orderby' => 'date',
    'order' => 'ASC'
);

$query = new WP_Query($args);

get_header();
?>

<section>
    <div class="blog-card">
        <div class="container">
            <div class="row">
                <?php if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        get_template_part('template-parts/content', 'archive');
                    }
                } ?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();

?>