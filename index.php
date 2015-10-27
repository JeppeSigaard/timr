<?php get_header(); ?>
<div class="page-wrap">
<?php 

if ( is_single() ) {
    include 'page-templates/single.php';
}

else {
    include 'page-templates/main.php';
}
?>
</div>
<?php get_footer(); ?>