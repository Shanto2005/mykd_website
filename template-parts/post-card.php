<?php
$categories = get_the_category();
$title = get_the_title();
$url = get_the_permalink();
$author_id = get_the_author_meta('ID');
$author_name = get_the_author_meta('display_name');
$author_url = get_author_posts_url($author_id);

// Get WordPress comment count
$comment_count = get_comments_number();
?>
<div class="col-12">
    <div class="blog_holder">
        <div class="img_box">
            <a href="<?= $url ?>">
                <?php
                if (has_post_thumbnail()) {
                    $thumbUrl = get_the_post_thumbnail_url();
                    ?>
                    <img src="<?= $thumbUrl ?>" alt="<?= $title ?>">
                    <?php
                } else {
                    ?>
                    <img src="<?= get_template_directory_uri() ?>/assets/images/noImg.jpg" alt="<?= $title ?>">
                    <?php
                }
                ?>
            </a>
        </div>
        <div class="holder_content">
            <div class="list_box">
                <ul>
                    <li>BY<a href="<?= $author_url ?>"><?= $author_name ?></a></li>
                    <li><i class="fa-solid fa-calendar-days"></i> <?php echo get_the_date(); ?></li>
                    <li class="ps-0 ps-sm-2"><a href="#"><i class="fa-regular fa-comments"></i> <?php echo $comment_count; ?> COMMENTS</a></li>
                </ul>
            </div>
            <div class="tittle_box">
                <h3><a href="<?= $url ?>"><?= $title ?></a></h3>
                <p><?php the_excerpt(); ?></p>
            </div>
            <div class="bmtList_box">
                <div class="read_more">
                    <a href="<?= $url ?>">READ MORE<i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div class="share_item">
                    <span>SHERE :</span>
                    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_x"></a>
                        <a class="a2a_button_linkedin"></a>
                    </div>
                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                </div>
            </div>
        </div>
    </div>
</div>