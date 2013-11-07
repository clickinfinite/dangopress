<?php
/*
YARPP Template: List
Description: This template returns the related posts as a comma-separated list.
Author: mitcho (Michael Yoshitaka Erlewine)
*/
?>
<?php if (have_posts()) { ?>

<div class="clearfix related-posts">
    <div class="caption">
        <i class="icon-plus-sign-alt"></i> 与<h2><?php the_tags(' ', ', ', ' '); ?></h2>相关的文章
    </div>
<?php
    echo '<ul>';

    if (function_exists('the_user_views')) {
        while (have_posts()) {
            the_post();

            echo '<li><span class="post-time">'. get_the_time('Y年m月d日') . '</span>';
            echo '<a href="' . get_permalink() . '" rel="bookmark">' . get_the_title() . '</a>';
            echo '<span class="post-view">';
            the_user_views();
            echo '</span></li>';
        }
    } else {
        while (have_posts()) {
            the_post();

            echo '<li><span class="post-time">'. get_the_time('Y年m月d日') . '</span>';
            echo '<a href="' . get_permalink() . '" rel="bookmark">' . get_the_title() . '</a>';
            echo '<span class="post-comment">' . get_comments_number() . ' 次评论</span>';
            echo '</li>';
        }
    }
?>

</div>

<?php } ?>