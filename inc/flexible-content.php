<?php
$theme_dir = get_template_directory_uri();
if (have_rows('easy_content')) {
    $j = 1;
    while (have_rows('easy_content')) : the_row(); ?>
    
    <?php
    // Hero Banner
    if (get_row_layout() == 'hero_banner') :
        $bg_img = get_sub_field('bg_image');
        $bnr_title = get_sub_field('banner_title');
        $bnr_s_txt = get_sub_field('sub_text');
        $bnr_btn = get_sub_field('page_link');
    ?>
        <div class="banner_section">
            <div class="bgImg" style="background-image: url('<?php echo $bg_img;?>');">
                <div class="container">
                    <div class="bannerContent">
                        <div class="bannerHeading">
                            <h1><?php echo $bnr_title?></h1>
                        </div>
                        <div class="btm_text">
                            <p><?php echo $bnr_s_txt?></p>
                        </div>
                        <div class="quoet_box">
                            <a href="<?php echo esc_url($bnr_btn);?>" class="bttn">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif;?>
    
    <?php
    // Page Banner
    if (get_row_layout() == 'page_banner') :
        $title = get_sub_field('title');
        $bgImg = get_sub_field('bg_image');
        $ftImg = get_sub_field('floting_image');
    ?>
        <div class="ab_banner_section">
            <div class="bgImg" style="background-image: url('<?php echo $bgImg?>');">
                <div class="container">
                    <div class="ab_bannerContent">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6 text-start">
                                <div class="banner_holder">
                                    <div class="banner_tittle">
                                        <h2><?php echo $title?></h2>
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
                            <div class="col-lg-6 order-first order-lg-0 text-lg-end">
                                <div class="sp_img_box">
                                    <img src="<?php echo $ftImg?>" alt="floting image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif;?>

    <?php
    // NFT & STREAMERS
    if (get_row_layout() == 'nft_&_streamers') :
        $nftDsc = get_sub_field('nft_description');
        $nft_ttl = $nftDsc['title'];
        $nft_dsc = $nftDsc['description'];
        $nft_btn = $nftDsc['more_info_page'];
        $nft_vdoSrc = $nftDsc['how_to_video_src'];
        $nftrfrImg = get_sub_field('nft_refarance_image');
    ?>

        <div class="areaBackgroung" style="background-image: url('<?php echo $theme_dir;?>/assets/images/area_bg02.jpg');">
            <div class="nft_journey">
                <div class="container">
                    <div class="nft_content">
                        <div class="row justify-content-between">
                            <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                                <div class="nft_holder">
                                    <div class="tittle text-start">
                                        <h3><?php echo $nft_ttl;?></h3>
                                    </div>
                                    <div class="nft_text">
                                        <p><?php echo $nft_dsc;?></p>
                                    </div>
                                    <div class="nft_count d-flex column-gap-5 mt-3 mt-lg-5">
                                        <h6>40K <p>MEMBER</p>
                                        </h6>
                                        <h6>50K <P>NFT</P>
                                        </h6>
                                        <h6>60K <P>ARTIST</P>
                                        </h6>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-5 col-md-3 col-lg-3 col-xl-3">
                                            <a href="<?php echo esc_url($nft_btn);?>" class="bttn p-2">READ MORE</a>
                                        </div>
                                        <?php if($nft_vdoSrc == 'yt' || $nft_vdoSrc == 'uplocal'){
                                            ?>
                                            <div class="col-7 col-md-3 col-lg-5 col-xl-4">
                                                <div class="tutorial_box d-flex align-items-center">
                                                    <div class="icon_box me-3"><a href="#"><i class="fa-solid fa-play"></i></a>
                                                    </div>
                                                    <div class="text_box"><a href="#">How It Work</a></div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 order-first order-lg-0 funfact_col">
                                <div class="nft_holder">
                                    <div class="funfactBg"
                                        style="background-image: url('<?php echo $theme_dir?>/assets/images/fun_fact_shape.png');">
                                        <div class="funfact_img">
                                            <img src="<?php echo $nftrfrImg;?>" alt="funfact">
                                        </div>
                                    </div>
                                    <div class="trophy_box">
                                        <div class="text">
                                            <h6>TOURNAMENT</h6>
                                            <P>DEVELOPMENT</P>
                                        </div>
                                        <div class="trophy ms-3">
                                            <img src="<?php echo $theme_dir?>/assets/images/trophy.png" alt="trophy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stramesr_section">
                <div class="container">
                    <div class="streamers_content">
                        <?php
                            $ssHead = get_sub_field('streamers_section_header');
                            $title = $ssHead['title'];
                            $subtitle = $ssHead['sub_title'];
                        ?>
                        <div class="sub_tittle">
                            <p><?=$subtitle?></p>
                        </div>
                        <div class="tittle">
                            <h3><?=$title?></h3>
                        </div>
                        <div class="swiper streamers_slid">
                            <div class="swiper-wrapper">
                                <?php
                                    $streamers = get_sub_field('streamers');
                                    foreach($streamers as $streamer):
                                        $name = $streamer['name'];
                                        $img = $streamer['image'];
                                ?>
                                <div class="swiper-slide">
                                    <div class="card_content">
                                        <div class="imgBox">
                                            <img src="<?php echo $img?>" alt="image">
                                            <div class="inner_box"></div>
                                        </div>
                                        <div class="content">
                                            <h6><?php echo $name?></h6>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>
                            <div class="swiper-pagination slide_pagi"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif;?>

    <?php
    // Project Gallery
    if (get_row_layout() == 'project_gallery') :
        $images = get_sub_field('project_image');
    ?>
        <div class="project_section">
            <div class="container">
                <div class="project_content">
                    <div class="row">
                        <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center">
                            <div class="tittle_holder mb-4 mb-lg-0">
                                <div class="protect_tittle">
                                    <h3>PROJECTS MYKD</h3>
                                </div>
                                <div class="sub_tittle">
                                    OUR LATEST GALLERY
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="swiper mykd_project">
                                <div class="swiper-wrapper">
                                    <?php foreach( $images as $image ): ?>
                                        <div class="swiper-slide">
                                            <div class="img_box">
                                                <img src="<?php echo $image;?>" alt="image">
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif;?>

    <?php
    // Social_section
    if (get_row_layout() == 'our_socials') :
        $socials = get_sub_field('socials');
    ?>
        <div class="social_section">
            <div class="bgImg" style="background-image: url('<?php echo $theme_dir;?>/assets/images/social_bg.png');">
                <div class="container">
                    <div class="social_content">
                        <div class="sub_tittle">
                            <p>CONNECT WITH US</p>
                        </div>
                        <div class="tittle">
                            <h3>STAY CONNECTED</h3>
                        </div>
                        <div class="row row-gap-4 justify-content-center social_row">
                            <?php foreach($socials as $social):
                                $icon = $social['icon'];
                                $name = $social['name'];
                                $link = $social['link'];
                            ?>
                                <div class="col-12 col-sm-6 col-lg-4 col-xl-2">
                                    <div class="social_hc">
                                        <div class="social_holder">
                                            <div class="icon_box">
                                                <a href="<?php echo $link;?>"><?php echo $icon;?></a>
                                            </div>
                                            <div class="sub_tittle">
                                                <a href="<?php echo $link;?>"><?php echo $name;?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif;?>

    <?php
    // Upcoming Matches
    if (get_row_layout() == 'upcoming_matches') :
    ?>
        <div class="match_section">
            <div class="bg_img" style="background-image: url('<?php echo $theme_dir;?>/assets/images/match_bg.jpg');">
                <div class="container">
                    <div class="sub_tittle">
                        <p>MATCHES LIST</p>
                    </div>
                    <div class="tittle">
                        <h3>UPCOMING MATCHES</h3>
                    </div>
                    <?php echo do_shortcode('[upcoming_matches]'); ?>
                </div>
            </div>
        </div>
    <?php endif;?>

    <?php
    // Match Results
    if (get_row_layout() == 'match_result') :
    ?>
        <div class="match_resultSec">
            <div class="bgImg" style="background-image: url('<?php echo $theme_dir?>/assets/images/result_bg.png');">
                <div class="container">
                    <div class="result_content">
                        <div class="sub_tittle">
                            <p>LATEST RESULTS FOR</p>
                        </div>
                        <div class="tittle_box">
                            <div class="tittle">
                                <h3>EXPERIENCE JUST FOR</h3>
                            </div>
                        </div>
                        <?php echo do_shortcode('[matche_result]'); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif;?>

    <?php
    // About Info
    if (get_row_layout() == 'about_info') :
        $fstImg = get_sub_field('first_img');
        $sndImg = get_sub_field('second_img');
        $infoIxt = get_sub_field('info_text');
    ?>
        <div class="nft_gm_section">
            <div class="container">
                <div class="row row-gap-4 row-gap-xxl-0">
                    <div class="col-12 col-xl-4">
                        <div class="nft_holder">
                            <div class="nft_tittle text-center text-xl-start">
                                <P>WE ARE <span class="dev">DEVELOPER</span> ERN NFT<span class="gm">GAMING</span></P>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-8">
                        <div class="row row-gap-4 row-gap-sm-0 nft_innerrow">
                            <div class="col-12 col-sm-6">
                                <div class="nft_holder">
                                    <div class="nft_Limg text-center">
                                        <img src="<?php echo $fstImg['url']?>" alt="<?php echo $fstImg['alt']?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="nft_holder nft_Rholder">
                                    <div class="nft_Rimg">
                                        <img src="<?php echo $sndImg['url']?>" alt="<?php echo $sndImg['alt']?>">
                                    </div>
                                    <div class="nft_text">
                                        <p><?php echo $infoIxt?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif;?>

    <?php
    // Hero Banner
    if (get_row_layout() == 'member_slider') :
        $slider = get_sub_field('info_slides');
        $bgImg = get_sub_field('bg_image');
    ?>
        <div class="about_card_sec">
            <div class="bgImg" style="background-image: url('<?php echo $bgImg?>');">
                <div class="container">
                    <div class="card_content">
                        <div class="card_heading">
                            <div class="sub_tittle">
                                <p>OUR TEAM MEMBER</p>
                            </div>
                            <div class="tittle">
                                <h3>ACTIVE TEAM MEMBERS</h3>
                            </div>
                        </div>
                        <div class="row ab_cardrow">
                            <?php foreach($slider as $slide):
                                $img = $slide['image'];
                                $name = $slide['name'];
                                $exp = $slide['experience'];
                            ?>
                                <div class="col-sm-6 col-lg-3 ab_cardcol">
                                    <div class="card_holder">
                                        <div class="img_box">
                                            <img src="<?php echo $img['url']?>" alt="<?php echo $img['alt']?>">
                                        </div>
                                        <div class="author_box mt-4">
                                            <h4><?php echo $name?></h4>
                                            <p><?php echo $exp?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <?php
    $j++;
    endwhile;
} else {
    echo '<section class="defaultSection"><div class="container">';
    while (have_posts()) : the_post();
        the_content();
    endwhile;
    echo '</div></section>';
}
?>
