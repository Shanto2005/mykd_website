<?php
function myesptGetElement_ID($i){
    $id = '';
    if(is_page()){
        $id = get_the_ID();
    }
    $id = 'myespt_element_'.$id.'_00'.$i;
    return $id;
}
function myesptGetElementExtraClass($classes){  
    // $classes = filter_var($classes, FILTER_SANITIZE_STRING);  
    $classes = wp_strip_all_tags($classes, true);
    return $classes;
}
function myespt_custom_css($css){
    wp_register_style( 'myespt-custom-inline-style', false );
    wp_enqueue_style( 'myespt-custom-inline-style' );
    wp_add_inline_style( 'myespt-custom-inline-style', $css );
}
function myesptLoadSectionCSS($cssID, $argDesktop, $argTab, $argMobile, $customCSS = ''){
    // echo '<pre>';
    // print_r($argDesktop);
    // print_r($argTab);
    // print_r($argMobile);
    // echo '</pre>';
    $cssMobile = $cssTab = $cssDesktop = '';
    // Padding
    if($argMobile['padding'] || $argTab['padding'] || $argDesktop['padding']){
        $padding = ($argMobile['padding'])? $argMobile['padding'] : (($argTab['padding'])? $argTab['padding'] : (($argDesktop['padding'])? $argDesktop['padding'] : '0px'));
        $cssMobile .= 'padding: '. $padding .';';
        $padding = ($argTab['padding'])? $argTab['padding'] : (($argDesktop['padding'])? $argDesktop['padding'] : '0px');
        $cssTab .= 'padding: '. $padding .';';
        $padding = ($argDesktop['padding'])? $argDesktop['padding'] : '0px';
        $cssDesktop .= 'padding: '. $padding .';';
    }

    // Margin
    if($argMobile['margin'] || $argTab['margin'] || $argDesktop['margin']){
        $margin = ($argMobile['margin'])? $argMobile['margin'] : (($argTab['margin'])? $argTab['margin'] : (($argDesktop['margin'])? $argDesktop['margin'] : '0px'));
        $cssMobile .= 'margin: '. $margin .';';
        $margin = ($argTab['margin'])? $argTab['margin'] : (($argDesktop['margin'])? $argDesktop['margin'] : '0px');
        $cssTab .= 'margin: '. $margin .';';
        $margin = ($argDesktop['margin'])? $argDesktop['margin'] : '0px';
        $cssDesktop .= 'margin: '. $margin .';';
    }

    // Font Color
    if($argMobile['fg_color'] || $argTab['fg_color'] || $argDesktop['fg_color']){
        $color = ($argMobile['fg_color'])? $argMobile['fg_color'] : (($argTab['fg_color'])? $argTab['fg_color'] : (($argDesktop['fg_color'])? $argDesktop['fg_color'] : 'unset'));
        $cssMobile .= 'color: '. $color .';';
        $color = ($argTab['fg_color'])? $argTab['fg_color'] : (($argDesktop['fg_color'])? $argDesktop['fg_color'] : 'unset');
        $cssTab .= 'color: '. $color .';';
        $color = ($argDesktop['fg_color'])? $argDesktop['fg_color'] : 'unset';
        $cssDesktop .= 'color: '. $color .';';
    }

    // Background Color
    if($argMobile['bg_color'] || $argTab['bg_color'] || $argDesktop['bg_color']){
        $bgColor = ($argMobile['bg_color'])? $argMobile['bg_color'] : (($argTab['bg_color'])? $argTab['bg_color'] : (($argDesktop['bg_color'])? $argDesktop['bg_color'] : 'unset'));
        $cssMobile .= 'background-color: '. $bgColor .';';
        $bgColor = ($argTab['bg_color'])? $argTab['bg_color'] : (($argDesktop['bg_color'])? $argDesktop['bg_color'] : 'unset');
        $cssTab .= 'background-color: '. $bgColor .';';
        $bgColor = ($argDesktop['bg_color'])? $argDesktop['bg_color'] : 'unset';
        $cssDesktop .= 'background-color: '. $bgColor .';';
    }    

    // Background image
    if($argMobile['bg_img'] || $argTab['bg_img'] || $argDesktop['bg_img']){
        $bgImg = ($argMobile['bg_img'])? $argMobile['bg_img'] : (($argTab['bg_img'])? $argTab['bg_img'] : (($argDesktop['bg_img'])? $argDesktop['bg_img'] : 'unset'));
        if($bgImg == 'unset'){
            $cssMobile .= 'background-image: '. $bgImg .';';
        }else{
            $cssMobile .= 'background-image: url('. $bgImg .');';
        }
        $bgImg = ($argTab['bg_img'])? $argTab['bg_img'] : (($argDesktop['bg_img'])? $argDesktop['bg_img'] : 'unset');
        if($bgImg == 'unset'){
            $cssTab .= 'background-image: '. $bgImg .';';
        }else{
            $cssTab .= 'background-image: url('. $bgImg .');';
        }
        $bgImg = ($argDesktop['bg_img'])? $argDesktop['bg_img'] : 'unset';
        if($bgImg == 'unset'){
            $cssDesktop .= 'background-image: '. $bgImg .';';
        }else{
            $cssDesktop .= 'background-image: url('. $bgImg .');';
        }
    }

    // Background Position, Size, Attachment, Repeat
    if($argMobile['bg_img'] || $argTab['bg_img'] || $argDesktop['bg_img']){
        $bgPosition = ($argMobile['bg_img'])? $argMobile['bg_psn'] : (($argTab['bg_img'])? $argTab['bg_psn'] : (($argDesktop['bg_img'])? $argDesktop['bg_psn'] : ''));
        $cssMobile .= 'background-position: '. $bgPosition .';';
        $bgSize = ($argMobile['bg_img'])? $argMobile['bg_sz'] : (($argTab['bg_img'])? $argTab['bg_sz'] : (($argDesktop['bg_img'])? $argDesktop['bg_sz'] : ''));
        $cssMobile .= 'background-size: '. $bgSize .';';
        $bgAuth = ($argMobile['bg_img'])? $argMobile['bg_ath'] : (($argTab['bg_img'])? $argTab['bg_ath'] : (($argDesktop['bg_img'])? $argDesktop['bg_ath'] : ''));
        $cssMobile .= 'background-attachment: '. $bgAuth .';';
        $bgRepeat = ($argMobile['bg_img'])? $argMobile['bg_repeat'] : (($argTab['bg_img'])? $argTab['bg_repeat'] : (($argDesktop['bg_img'])? $argDesktop['bg_repeat'] : ''));
        $cssMobile .= 'background-repeat: '. $bgRepeat .';';
    }
    if($argTab['bg_img'] || $argDesktop['bg_img']){
        $bgPosition = ($argTab['bg_img'])? $argTab['bg_psn'] : (($argDesktop['bg_img'])? $argDesktop['bg_psn'] : '');
        $cssTab .= 'background-position: '. $bgPosition .';';
        $bgSize = ($argTab['bg_img'])? $argTab['bg_sz'] : (($argDesktop['bg_img'])? $argDesktop['bg_sz'] : '');
        $cssTab .= 'background-size: '. $bgSize .';';
        $bgAuth = ($argTab['bg_img'])? $argTab['bg_ath'] : (($argDesktop['bg_img'])? $argDesktop['bg_ath'] : '');
        $cssTab .= 'background-attachment: '. $bgAuth .';';
        $bgRepeat = ($argTab['bg_img'])? $argTab['bg_repeat'] : (($argDesktop['bg_img'])? $argDesktop['bg_repeat'] : '');
        $cssTab .= 'background-repeat: '. $bgRepeat .';';
    }
    if($argDesktop['bg_img']){
        $bgPosition = ($argDesktop['bg_img'])? $argDesktop['bg_psn'] : '';
        $cssDesktop .= 'background-position: '. $bgPosition .';';
        $bgSize = ($argDesktop['bg_sz'])? $argDesktop['bg_sz'] : 'unset';
        $cssDesktop .= 'background-size: '. $bgSize .';';
        $bgAuth = ($argDesktop['bg_ath'])? $argDesktop['bg_ath'] : 'unset';
        $cssDesktop .= 'background-attachment: '. $bgAuth .';';
        $bgRepeat = ($argDesktop['bg_repeat'])? $argDesktop['bg_repeat'] : 'unset';
        $cssDesktop .= 'background-repeat: '. $bgRepeat .';';
    }

    // Min Width    
    if($argMobile['min_width'] || $argTab['min_width'] || $argDesktop['min_width']){
        $minWidth = ($argMobile['min_width'])? $argMobile['min_width'] : (($argTab['min_width'])? $argTab['min_width'] : (($argDesktop['min_width'])? $argDesktop['min_width'] : 'none'));
        $cssMobile .= 'min-width: '. $minWidth .';';
        $minWidth = ($argTab['min_width'])? $argTab['min_width'] : (($argDesktop['min_width'])? $argDesktop['min_width'] : 'none');
        $cssTab .= 'min-width: '. $minWidth .';';
        $minWidth = ($argDesktop['min_width'])? $argDesktop['min_width'] : 'none';
        $cssDesktop .= 'min-width: '. $minWidth .';';
    }

    // Width
    if($argMobile['width'] || $argTab['width'] || $argDesktop['width']){
        $width = ($argMobile['width'])? $argMobile['width'] : (($argTab['width'])? $argTab['width'] : (($argDesktop['width'])? $argDesktop['width'] : 'auto'));
        $cssMobile .= 'width: '. $width .';';
        $width = ($argTab['width'])? $argTab['width'] : (($argDesktop['width'])? $argDesktop['width'] : 'auto');
        $cssTab .= 'width: '. $width .';';
        $width = ($argDesktop['width'])? $argDesktop['width'] : 'auto';
        $cssDesktop .= 'width: '. $width .';';
    }

    // Max Width
    if($argMobile['max_width'] || $argTab['max_width'] || $argDesktop['max_width']){
        $maxWidth = ($argMobile['max_width'])? $argMobile['max_width'] : (($argTab['max_width'])? $argTab['max_width'] : (($argDesktop['max_width'])? $argDesktop['max_width'] : 'auto'));
        $cssMobile .= 'max-width: '. $maxWidth .';';
        $maxWidth = ($argTab['max_width'])? $argTab['max_width'] : (($argDesktop['max_width'])? $argDesktop['max_width'] : 'auto');
        $cssTab .= 'max-width: '. $maxWidth .';';
        $maxWidth = ($argDesktop['max_width'])? $argDesktop['max_width'] : 'auto';
        $cssDesktop .= 'max-width: '. $maxWidth .';';
    }

    // Min Height    
    if($argMobile['min_height'] || $argTab['min_height'] || $argDesktop['min_height']){
        $minHeight = ($argMobile['min_height'])? $argMobile['min_height'] : (($argTab['min_height'])? $argTab['min_height'] : (($argDesktop['min_height'])? $argDesktop['min_height'] : 'none'));
        $cssMobile .= 'min-height: '. $minHeight .';';
        $minHeight = ($argTab['min_height'])? $argTab['min_height'] : (($argDesktop['min_height'])? $argDesktop['min_height'] : 'none');
        $cssTab .= 'min-height: '. $minHeight .';';
        $minHeight = ($argDesktop['min_height'])? $argDesktop['min_height'] : 'none';
        $cssDesktop .= 'min-height: '. $minHeight .';';
    }

    // Height
    if($argMobile['height'] || $argTab['height'] || $argDesktop['height']){
        $height = ($argMobile['height'])? $argMobile['height'] : (($argTab['height'])? $argTab['height'] : (($argDesktop['height'])? $argDesktop['height'] : 'auto'));
        $cssMobile .= 'height: '. $height .';';
        $height = ($argTab['height'])? $argTab['height'] : (($argDesktop['height'])? $argDesktop['height'] : 'auto');
        $cssTab .= 'height: '. $height .';';
        $height = ($argDesktop['height'])? $argDesktop['height'] : 'auto';
        $cssDesktop .= 'height: '. $height .';';
    }

    // Max Height
    if($argMobile['max_height'] || $argTab['max_height'] || $argDesktop['max_height']){
        $maxHeight = ($argMobile['max_height'])? $argMobile['max_height'] : (($argTab['max_height'])? $argTab['max_height'] : (($argDesktop['max_height'])? $argDesktop['max_height'] : 'auto'));
        $cssMobile .= 'max-height: '. $maxHeight .';';
        $maxHeight = ($argTab['max_height'])? $argTab['max_height'] : (($argDesktop['max_height'])? $argDesktop['max_height'] : 'auto');
        $cssTab .= 'max-height: '. $maxHeight .';';
        $maxHeight = ($argDesktop['max_height'])? $argDesktop['max_height'] : 'auto';
        $cssDesktop .= 'max-height: '. $maxHeight .';';
    }


    if($cssMobile){
        $cssMobile = '#'.$cssID.'{'. $cssMobile .'}';
    }
    if($cssTab){
        $cssTab = '#'.$cssID.'{'. $cssTab .'}';
        $cssTab = '@media (min-width: 768px){'.$cssTab.'}';
    }
    if($cssDesktop){
        $cssDesktop = '#'.$cssID.'{'. $cssDesktop .'}';
        $cssDesktop = '@media (min-width: 1200px){'.$cssDesktop.'}';
    }

    $render = $cssMobile . $cssTab . $cssDesktop;
    myespt_custom_css($render);
    if($customCSS){
        $customCSS = str_replace("&", '#'.$cssID, $customCSS);
        myespt_custom_css($customCSS);
    }
}
function myespt_get_section_title($title){
    if(!$title){
        return false;
    }
    return $title;
}