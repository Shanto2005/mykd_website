<?php
$ftrm_main = wp_nav_menu(array('theme_location' => 'footer_menu_m', 'menu_id' => 'ftrm_main', 'menu_class' => 'footer_menu', 'echo' => false));
$ftrm_main = str_replace(array('<div class="menu-footer-main-container">', '</div>'), '', $ftrm_main);

$ftrb_main = wp_nav_menu(array('theme_location' => 'footer_menu_b', 'menu_id' => 'ftrm_btm', 'menu_class' => 'footer_bmenu', 'echo' => false));
$ftrb_main = str_replace(array('<div class="menu-footer-bottom-container">', '</div>'), '', $ftrb_main);

$f_logo = get_field('footer_logo', 'options');

$head_ofc = get_field('main_office_info', 'options');
$h_name = $head_ofc['branch_name'];
$h_num = $head_ofc['phone_number'];
$h_mail = $head_ofc['mail_address'];
$h_loc = $head_ofc['location_info'];

$sub_ofc = get_field('branch_office_info', 'options');
$s_name = $sub_ofc['branch_name'];
$s_num = $sub_ofc['phone_number'];
$s_mail = $sub_ofc['mail_address'];
$s_loc = $sub_ofc['location_info'];

$cpr_field = get_field('copy_right_info', 'options');
$cpr_txt = $cpr_field['copy_right_text'];
$cpr_by = $cpr_field['by_name'];
$cpr_url = $cpr_field['by_url'];
?>
<footer class="footer">
    <div class="footer_country">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6"><h3><?php echo $s_name;?></h3></div>
                <div class="col-6 text-end"><h3><?php echo $h_name;?></h3></div>
            </div>
        </div>
    </div>
    <div class="footer_top">
        <div class="container">
            <div class="footertop_content">
                <div class="row justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-2">
                        <div class="footerHolder">
                            <div class="heading">
                                <h4>INFORMATION</h4>
                            </div>
                            <div class="info_box">
                                <ul>
                                    <li><a href="tel:<?php echo $h_num;?>"><?php echo $h_num;?></a></li>
                                    <li><a href="mailto:<?php echo $h_mail;?>"><?php echo $h_mail;?></a></li>
                                    <li><?php echo $h_loc;?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 order-first order-lg-0 logo_col">
                        <div class="footerHolder">
                            <div class="imgbox heading">
                                <a href="<?php echo site_url(); ?>"><img src="<?php
                                    if($f_logo){
                                        echo $f_logo;
                                    }
                                ?>" alt="My e-sports"></a>
                            </div>
                            <div class="menu_box text-start text-lg-center">
                                <?php echo $ftrm_main; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-2 text-start text-lg-end">
                        <div class="footerHolder">
                            <div class="heading">
                                <h4>HEAD OFFICE</h4>
                            </div>
                            <div class="info_box">
                                <ul>
                                    <li><a href="tel:<?php echo $s_num;?>"><?php echo $s_num;?></a></li>
                                    <li><a href="mailto:<?php echo $s_num;?>"><?php echo $s_mail;?></a></li>
                                    <li><?php echo $s_loc;?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_btm">    
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between text-center text-lg-start">
                <div class="col-12 col-lg-6">
                    <div class="copyright_box mt-2 mt-lg-0">
                        <p><?php echo $cpr_txt;?>  <a href="<?php echo $cpr_url ? $cpr_url : '#';?>"><?php echo $cpr_by?></a></p>
                    </div>   
                </div>     
                <div class="col-12 col-lg-6  order-first order-lg-0">
                    <div class="link_box">
                        <?php echo $ftrb_main; ?>
                    </div>   
                </div>
            </div>
        </div>     
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>