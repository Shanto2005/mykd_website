<?php get_header();

$featured_image_url = get_the_post_thumbnail_url(get_option('page_for_posts'), 'full');
$fallback_image_url = get_template_directory_uri() . '/assets/images/about_bg01.jpg';
$background_image_url = $featured_image_url ? $featured_image_url : $fallback_image_url;
?>

<div class="ab_banner_section">
    <div class="bgImg" style="background-image: url('<?php echo esc_url($background_image_url); ?>');">
        <div class="container">
            <div class="ab_bannerContent">
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 text-center">
                        <div class="banner_holder">
                            <div class="banner_tittle">
                                <h2><?php echo esc_html(get_the_title(get_option('page_for_posts'))); ?></h2>
                            </div>
                            <div class="bread_cumbs">
                                <?php if (function_exists('bcn_display')) {?>
                                    <ol class="breadcrumb">
                                        <?php bcn_display(); ?>
                                    </ol>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog_section">
    <div class="container">
        <div class="blog_ceontent">
            <div class="row">
                <!-- blog -->
                <div class="col-12 col-lg-8">
                    <div class="row row-gap-5 inner_row">                        
                        <?php
                            if (have_posts()) {
                                while (have_posts()) : the_post();
                                    get_template_part("template-parts/post-card");
                                endwhile;
                                the_posts_pagination();
                            } else {
                                echo '<p class="alert alert-danger text-center">No blog here!</p>';
                            }
                        ?>
                    </div>
                </div>
                <!-- sidebar -->
                <div class="col-12 col-lg-4">
                    <div class="blog_holder">
                        <div class="sideber_input mt-5">
                            <div class="input_box">
                                <input type="text" placeholder="SEARCH HERE...">
                            </div>
                            <div class="link_box">
                                <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                            </div>
                        </div>
                        <div class="category_item">
                            <div class="ct_list_box mt-5">
                                <?php if ( is_active_sidebar( 'myespt_ost_sidebar' ) ) : ?>
                                    <?php dynamic_sidebar( 'myespt_ost_sidebar' ); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>