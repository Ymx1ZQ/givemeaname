<?php
function s3_make_url($relative_filename) {
	return 'http://files.vubi.co/'.$relative_filename;
}

function s3_exists($relative_filename) {
	$CI =& get_instance();
    $CI->load->library('s3');
    return $CI->s3->exists($relative_filename);
}

// LOGO
function s3_exists_logo($alias) {
	return s3_exists('logos/'.$alias.'.jpg');
}

function s3_logo_url($alias) {
	return s3_make_url('logos/'.$alias.'.jpg');
}

function s3_delete_logo($alias){
	$CI =& get_instance();
    $CI->load->library('s3');
    return $CI->s3->delete('logos/'.$alias.'.jpg');	
}

// PROFILE PICTURE
function s3_exists_profile_picture($alias) {
	return s3_exists('profile/lar/'.$alias.'.jpg');
}

function s3_profile_picture_url($alias, $style='medium') {

    switch ($style) {
        case 'small':
            $style_folder = 'sma';
            break;

        case 'medium':
            $style_folder = 'med';
            break;

        case 'large':
            $style_folder = 'lar';
            break;

        case '80x80':
            $style_folder = '80';
            break;

        default:
            $style_folder = 'med';
            break;
    }
    return s3_make_url('profile/'.$style_folder.'/'.$alias.'.jpg');
}

function s3_delete_profile_picture($alias){
	$CI =& get_instance();
    $CI->load->library('s3');
    $result_0 = $CI->s3->delete('profile/ori/'.$alias.'.jpg');
    $result_1 = $CI->s3->delete('profile/sma/'.$alias.'.jpg');
    $result_2 = $CI->s3->delete('profile/med/'.$alias.'.jpg');
    $result_3 = $CI->s3->delete('profile/lar/'.$alias.'.jpg');
    $result_4 = $CI->s3->delete('profile/80/'.$alias.'.jpg');

    return ($result_0 && $result_1 && $result_2 && $result_3 && $result_4);    
}

?>
