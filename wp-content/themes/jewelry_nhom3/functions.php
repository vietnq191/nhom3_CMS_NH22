<?php
add_filter('show_admin_bar', '__return_true');
if (!function_exists('mytheme_setup')) {
	function mytheme_setup()
	{
		register_nav_menu('primary-menu', 'Primary menu');
	}
	add_action('init', 'mytheme_setup');
}
function load_stylesheets()
{
	wp_enqueue_style('canonical', 'https://www.pnj.com.vn');
	wp_enqueue_style('icon', 'https://cdn.pnj.io/images/image-update/favicon/pnj-icon.ico');
	wp_enqueue_style('font', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');
	wp_enqueue_style('apple-touch-icon', 'https://cdn.pnj.io/images/image-update/pnjLite/icon-192x192.png');
	wp_enqueue_style('text', 'https://cdn.pnj.io/assets/design/themes/pnjrovski/css/standalone.5.4.5.1.4.3.4.2044.4b9975dc2c194e59ef90c5b8438b9dba1659946932.css');
	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css');
	wp_register_style('main-style', get_template_directory_uri() . '/style.css', 'all');
	wp_enqueue_style('main-style');
	
	
}
add_action('wp_enqueue_scripts', 'load_stylesheets');
function my_scripts()
{
	wp_enqueue_script('bootstrap-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js');
	wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js');
	wp_enqueue_script('mytheme-js', get_template_directory_uri() . '/script.js');
}
add_action('wp_enqueue_scripts', 'my_scripts');


function custom_header_metadata()
{
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" data-ca-mode="full" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="description"
    content="Jewelry tự hào là công ty bán lẻ trang sức hàng đầu tại châu Á ❤️Khách hàng là trọng tâm ✔️Mua Online nhanh chóng, đơn giản ☎️12345678 (Miễn Phí)" />
<meta name="keywords" content=" noc jewelry, trang suc noc jewelry" />
<meta name="facebook-domain-verification" content="kettd0n55emqoq27m2tphfbyanxups" />
<meta name="robots" content="index,follow" />
<meta name="format-detection" content="telephone=no">
<meta name="pnj:s" content="217" />
<meta name="twitter:card" content="product">
<meta name="twitter:site" content="@Twitter">
<meta name="twitter:title" content="Trang Sức Cao Cấp | Công Ty Cổ Phần Vàng Bạc Đá Quý Nọc Jewelry">
<meta name="twitter:description"
    content="Jewelry tự hào là công ty bán lẻ trang sức hàng đầu tại châu Á ❤️Khách hàng là trọng tâm ✔️Mua Online nhanh chóng, đơn giản ☎️12345678 (Miễn Phí)">
<meta name="twitter:creator" content="@Twitter">
<meta name="twitter:image" content="https://jewelry-cms.com/wp-content/uploads/2022/11/Jewelry-Logo.png"> <!-- FACEBOOK OPEN GRAPH -->
<meta property="og:title" content="Trang Sức Cao Cấp | Công Ty Cổ Phần Vàng Bạc Đá Quý Nọc Jewelry" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://www.jewelry-cms.com/" />
<meta property="og:image" content="https://jewelry-cms.com/wp-content/uploads/2022/11/Jewelry-Logo.png" />
<meta property="og:description"
    content="Jewelry tự hào là công ty bán lẻ trang sức hàng đầu tại châu Á ❤️Khách hàng là trọng tâm ✔️Mua Online nhanh chóng, đơn giản ☎️12345678 (Miễn Phí)" />
<meta property="og:site_name" content="Jewelry" />
<meta property="fb:app_id" content="420750076123621" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Jewelry">
<meta name="theme-color" content="#003468" />
<?php

}
add_action('wp_head', 'custom_header_metadata');
if (!function_exists('mytheme_menu')) {
	function mytheme_menu($slug)
	{
		$menu = array(
			'theme_location' => $slug,
			'container' => 'nav',
			'container_class' => $slug,
			'items_wrap'      => '<ul class="ty-menu__items cm-responsive-menu">%3$s</ul>',
			'add_li_class'  => 'ty-menu__item cm-menu-item-responsive',
			'add_a_class'     => 'ty-menu__item-link',
			'link_before' => '<span >',
			'link_after' => '</span>',
			//  'walker' => new submenu_walker
		);
		wp_nav_menu($menu);
	}
}
if (!function_exists('mytheme_mega_menu')) {
	function mytheme_mega_menu($slug)
	{
		require_once('include/walker.php');
		$menu = array(
			'theme_location' => $slug,
			'depth' => 0,
			'menu_class'  => 'nav navbar-nav',
			'container' => 'nav',
			'walker'  => new BootstrapNavMenuWalker()
			//  'walker' => new submenu_walker
		);
		wp_nav_menu($menu);
	}
}
function add_additional_class_on_li($classes, $item, $args)
{
	if (isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
function add_class_on_a_tag($classes, $item, $args)
{
	if (isset($args->add_a_class)) {
		$classes['class'] = $args->add_a_class;
	}
	return $classes;
}
add_filter('nav_menu_link_attributes', 'add_class_on_a_tag', 1, 3);
// class submenu_walker extends Walker_Nav_Menu {
//     public function start_lvl( &$output, $depth = 0, $args = array() )
//     {
//       $output .= "<div class=\"ty-menu__submenu\">";
//       $output .= "<ul class=\"ty-menu__submenu-items cm-responsive-menu-submenu no-picture\">\n";
//     }
//     public function end_lvl( &$output, $depth = 0, $args = array() )
//     {
//         $output .= "</ul>\n";
//         $output .= "</div>";
//     }
//     public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )
//     {
//       $class_li = $class_a = '';
//       $arr_class_li = empty($item->classes) ? array() : (array) $item->classes;
//       array_push($arr_class_li, 'menu-item-'.$item->ID);
//     }
//     public function end_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )
//     {
//       $output .= "</li>\n";


//     }
// }
function slider_post_type()
{
	$label = array(
		'name' => 'Slider', //Tên post type dạng số nhiều
		'singular_name' => 'Slider' //Tên post type dạng số ít
	);

	$args = array(
		'labels' => $label, //Gọi các label trong biến $label ở trên
		'description' => 'Slider', //Mô tả của post type
		'supports' => array(
			'title',
			'thumbnail'
		), //Các tính năng được hỗ trợ trong post type
		'hierarchical' => false,
		'public' => true, //Kích hoạt post type
		'show_ui' => true, //Hiển thị khung quản trị như Post/Page
		'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
		'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
		'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
		'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
		'menu_icon' => 'dashicons-format-image', //Đường dẫn tới icon sẽ hiển thị
		'can_export' => true, //Có thể export nội dung bằng Tools -> Export
		'has_archive' => true, //Cho phép lưu trữ (month, date, year)
		'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
		'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
		'capability_type' => 'post', //
        'taxonomies'  => array( 'category' ),
	);

	add_theme_support('post-thumbnails');
	register_post_type('slider', $args);
}
add_action('init', 'slider_post_type');


//add image for category
/**
 * Plugin class
 **/
if (!class_exists('CT_TAX_META')) {

	class CT_TAX_META
	{

		public function __construct()
		{
			//
		}

		/*
    * Initialize the class and start calling our hooks and filters
    * @since 1.0.0
   */
		public function init()
		{
			add_action('category_add_form_fields', array($this, 'add_category_image'), 10, 2);
			add_action('created_category', array($this, 'save_category_image'), 10, 2);
			add_action('category_edit_form_fields', array($this, 'update_category_image'), 10, 2);
			add_action('edited_category', array($this, 'updated_category_image'), 10, 2);
			add_action('admin_enqueue_scripts', array($this, 'load_media'));
			add_action('admin_footer', array($this, 'add_script'));
		}

		public function load_media()
		{
			wp_enqueue_media();
		}

		/*
    * Add a form field in the new category page
    * @since 1.0.0
   */
		public function add_category_image($taxonomy)
		{ ?>
<div class="form-field term-group">
    <label for="category-image-id"><?php _e('Image', 'hero-theme'); ?></label>
    <input type="hidden" id="category-image-id" name="category-image-id" class="custom_media_url" value="">
    <div id="category-image-wrapper"></div>
    <p>
        <input type="button" class="button button-secondary ct_tax_media_button" id="ct_tax_media_button"
            name="ct_tax_media_button" value="<?php _e('Add Image', 'hero-theme'); ?>" />
        <input type="button" class="button button-secondary ct_tax_media_remove" id="ct_tax_media_remove"
            name="ct_tax_media_remove" value="<?php _e('Remove Image', 'hero-theme'); ?>" />
    </p>
</div>
<?php
		}

		/*
    * Save the form field
    * @since 1.0.0
   */
		public function save_category_image($term_id, $tt_id)
		{
			if (isset($_POST['category-image-id']) && '' !== $_POST['category-image-id']) {
				$image = $_POST['category-image-id'];
				add_term_meta($term_id, 'category-image-id', $image, true);
			}
		}

		/*
    * Edit the form field
    * @since 1.0.0
   */
		public function update_category_image($term, $taxonomy)
		{ ?>
<tr class="form-field term-group-wrap">
    <th scope="row">
        <label for="category-image-id"><?php _e('Image', 'hero-theme'); ?></label>
    </th>
    <td>
        <?php $image_id = get_term_meta($term->term_id, 'category-image-id', true); ?>
        <input type="hidden" id="category-image-id" name="category-image-id" value="<?php echo $image_id; ?>">
        <div id="category-image-wrapper">
            <?php if ($image_id) { ?>
            <?php echo wp_get_attachment_image($image_id, 'thumbnail'); ?>
            <?php } ?>
        </div>
        <p>
            <input type="button" class="button button-secondary ct_tax_media_button" id="ct_tax_media_button"
                name="ct_tax_media_button" value="<?php _e('Add Image', 'hero-theme'); ?>" />
            <input type="button" class="button button-secondary ct_tax_media_remove" id="ct_tax_media_remove"
                name="ct_tax_media_remove" value="<?php _e('Remove Image', 'hero-theme'); ?>" />
        </p>
    </td>
</tr>
<?php
		}

		/*
   * Update the form field value
   * @since 1.0.0
   */
		public function updated_category_image($term_id, $tt_id)
		{
			if (isset($_POST['category-image-id']) && '' !== $_POST['category-image-id']) {
				$image = $_POST['category-image-id'];
				update_term_meta($term_id, 'category-image-id', $image);
			} else {
				update_term_meta($term_id, 'category-image-id', '');
			}
		}

		/*
   * Add script
   * @since 1.0.0
   */
		public function add_script()
		{ ?>
<script>
jQuery(document).ready(function($) {
    function ct_media_upload(button_class) {
        var _custom_media = true,
            _orig_send_attachment = wp.media.editor.send.attachment;
        $('body').on('click', button_class, function(e) {
            var button_id = '#' + $(this).attr('id');
            var send_attachment_bkp = wp.media.editor.send.attachment;
            var button = $(button_id);
            _custom_media = true;
            wp.media.editor.send.attachment = function(props, attachment) {
                if (_custom_media) {
                    $('#category-image-id').val(attachment.id);
                    $('#category-image-wrapper').html(
                        '<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />'
                    );
                    $('#category-image-wrapper .custom_media_image').attr('src', attachment.url)
                        .css('display', 'block');
                } else {
                    return _orig_send_attachment.apply(button_id, [props, attachment]);
                }
            }
            wp.media.editor.open(button);
            return false;
        });
    }
    ct_media_upload('.ct_tax_media_button.button');
    $('body').on('click', '.ct_tax_media_remove', function() {
        $('#category-image-id').val('');
        $('#category-image-wrapper').html(
            '<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />'
        );
    });
    // Thanks: http://stackoverflow.com/questions/15281995/wordpress-create-category-ajax-response
    $(document).ajaxComplete(function(event, xhr, settings) {
        var queryStringArr = settings.data.split('&');
        if ($.inArray('action=add-tag', queryStringArr) !== -1) {
            var xml = xhr.responseXML;
            $response = $(xml).find('term_id').text();
            if ($response != "") {
                // Clear the thumb image
                $('#category-image-wrapper').html('');
            }
        }
    });
});
</script>
<?php }
	}

	$CT_TAX_META = new CT_TAX_META();
	$CT_TAX_META->init();
}

//register MegaMenu widget if the Mega Menu is set as the menu location
$location = 'primary-menu';
$css_class = 'mega-menu-parent';
$locations = get_nav_menu_locations();
if (isset($locations['primary-menu'])) {
	$bla_menu = get_term($locations['primary-menu'], 'nav_menu');
	if ($items = wp_get_nav_menu_items($bla_menu->name)) {
		foreach ($items as $item) {
			if (in_array($css_class, $item->classes)) {
				register_sidebar(array(
					'id'   => 'mega-menu-item-' . $item->ID,
					'description' => 'Mega Menu items',
					'name' => $item->title . ' - Mega Menu',
					'before_widget' => '<li id="%1$s" class="mega-menu-item">',
					'after_widget' => '</li>',
				));
			}
		}
	}
}
// add_action('widgets_init', 'my_register_sidebars');
// function my_register_sidebars()
// {
// 	/* Register the 'right' sidebar. */
// 	register_sidebar(
// 		array(
// 			'id' => 'right',
// 			'name' => __('Right Sidebar'),
// 			'description' => __('A short description of the sidebar.'),
// 			'before_widget' => '<div id="%1$s" class="widget %2$s">',
// 			'after_widget' => '</div>',
// 			'before_title' => '<h3 class="widget-title">',
// 			'after_title' => '</h3>',
// 		)
// 	);
// }
/*
sidebar layout tin tuc
 */
function custom_sidebar_tintuc()
{
	$args = array(

		'id' =>

		'layout_tintuc',

		'name' => __(
			'Layout Tin Tuc',

			'text_domain'
		),

		'description' => __(
			'Layout Tin Tuc',

			'text_domain'
		),
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
		'before_widget' => '<div id="%1$s" class="widget

%2$s">',
		'after_widget' => '</div>'
	);
	register_sidebar($args);
}
add_action('widgets_init', 'custom_sidebar_tintuc');
/* widget banner*/
function custom_sidebar_widget()
{
    $args = array(
        'id' =>
        'sidebar-widget',
        'name' => __(
            'Sidebar',
            'text_domain'
        ),
        'description' => __(
            'Banner',
            'text_domain'
        ),
        'before_title' => '<h3 class="title">',
        'after_title' => '</h3>',
        'before_widget' => '<div id="%1$s" class="widget
%2$s">',
        'after_widget' => '</div>'
    );
    register_sidebar($args);
}
add_action('widgets_init', 'custom_sidebar_widget');
/*
LOGO FOOTER
 */
function custom_logo_footer()
{
	$args = array(

		'id' =>

		'logo_footer',

		'name' => __(
			'Logo Footer',

			'text_domain'
		),

		'description' => __(
			'Logo Footer',

			'text_domain'
		),
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
		'before_widget' => '<div id="%1$s" class="widget

%2$s">',
		'after_widget' => '</div>'
	);
	register_sidebar($args);
}
add_action('widgets_init', 'custom_logo_footer');
function custom_footer_widget_one()
{
	$args = array(

		'id' =>

		'footer-widget-col-one',

		'name' => __(
			'Footer Column One',

			'text_domain'
		),

		'description' => __(
			'Column One',

			'text_domain'
		),
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
		'before_widget' => '<div id="%1$s" class="widget

%2$s">',
		'after_widget' => '</div>'
	);
	register_sidebar($args);
}
add_action('widgets_init', 'custom_footer_widget_one');
/**
 * Footer Widget Two
 */
function custom_footer_widget_two()
{
	$args = array(
		'id' =>
		'footer-widget-col-two',
		'name' => __(
			'Footer Column Two',
			'text_domain'
		),
		'description' => __(
			'Column Two',
			'text_domain'
		),
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
		'before_widget' => '<div id="%1$s" class="widget
%2$s">',
		'after_widget' => '</div>'
	);
	register_sidebar($args);
}

add_action('widgets_init', 'custom_footer_widget_two');
/**
 * Footer Widget Three
 */
function custom_footer_widget_three()
{
	$args = array(
		'id' =>
		'footer-widget-col-three',
		'name' => __(
			'Footer Column Three',
			'text_domain'
		),
		'description' => __(
			'Column Three',
			'text_domain'
		),
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
		'before_widget' => '<div id="%1$s" class="widget
%2$s">',
		'after_widget' => '</div>'
	);
	register_sidebar($args);
}
add_action('widgets_init', 'custom_footer_widget_three');
/**
 * Footer Widget Three
 */
function custom_footer_widget_four()
{
	$args = array(
		'id' =>
		'footer-widget-col-four',
		'name' => __(
			'Footer Column Four',
			'text_domain'
		),
		'description' => __(
			'Column Four',
			'text_domain'
		),
		'before_title' => '<h3 class="title">',
		'after_title' => '</h3>',
		'before_widget' => '<div id="%1$s" class="widget
%2$s">',
		'after_widget' => '</div>'
	);
	register_sidebar($args);
}
add_action('widgets_init', 'custom_footer_widget_four');

/* Ẩn sidebar admin */
if (!current_user_can('administrator') && !is_admin()) {
add_filter( 'show_admin_bar', '__return_false' );
}

function wpbeginner_numeric_posts_nav($max_num_pages = 0)
{

    /** Stop execution if there's only 1 page */
    if ($max_num_pages <= 1)
        return;
    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;

    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max_num_pages) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    echo '<div class="navigation"><ul id="paginate" style="display: inline-flex">' . "\n";

    // /** Previous Post Link */
    // if ( get_previous_posts_link() )
    //     printf( '<li style="padding-right: 5px;">%s</li>' . "\n", get_previous_posts_link() );

    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : '';
        printf('<li%s style="padding-right: 5px;"><a class="btn-page" href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');
        if (!in_array(2, $links))
            echo '<li style="padding-right: 5px;">…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s style="padding-right: 5px;"><a class="btn-page" href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max_num_pages, $links)) {
        if (!in_array($max_num_pages - 1, $links))
            echo '<li style="padding-right: 5px;">…</li>' . "\n";
        $class = $paged == $max_num_pages ? ' class="active"' : '';
        printf('<li%s style="padding-right: 5px;"><a class="btn-page" href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max_num_pages)), $max_num_pages);
    }

    /** Next Post Link */
    if (get_next_posts_link())
        printf('<li style="padding-right: 5px;">%s</li>' . "\n", get_next_posts_link());
    echo '</ul></div>' . "\n";
}
/* widget gioi thieu*/
add_action('widgets_init', 'create_aboutus_widget');
function create_aboutus_widget()
{
    register_widget('Aboutus_Widget');
}

class Aboutus_Widget extends WP_Widget
{
   
    function __construct()
    {
        parent::__construct(
            'gioithieu_widget', // id của widget
            'Giới thiệu', // tên của widget
            array(
                'description' => 'Giới thiệu' // mô tả
            )
        );
    }


    
    function form($instance)
    {
        $default = array(
            'tencongty' => 'Tên công ty',
            'address' => 'Địa chỉ công ty',
            'phone' => '1234567890',
            'fax' => '1234567890',
            'tongdai' => 'Tổng đài hỗ trợ',
            'somuahang' => 'Số mua hàng',
            'sokhieunai' => 'Số khiếu nại'
        );
        $instance = wp_parse_args((array) $instance, $default);
        $tencongty = esc_attr($instance['tencongty']);
        $address = esc_attr($instance['address']);
        $phone = esc_attr($instance['phone']);
        $fax = esc_attr($instance['fax']);
        $tongdai = esc_attr($instance['tongdai']);
        $somuahang = esc_attr($instance['somuahang']);
        $sokhieunai = esc_attr($instance['sokhieunai']);
        echo '<p>Nhập tên công ty <input type="text" class="widefat" name="' . $this->get_field_name('tencongty') . '" value="' . $tencongty . '"/></p>';
        echo '<p>Nhập địa chỉ <input type="text" class="widefat" name="' . $this->get_field_name('address') . '" value="' . $address . '"/> </p>';
        echo '<p>Nhập số phone <input type="text" class="widefat" name="' . $this->get_field_name('phone') . '" value="' . $phone . '" placeholder="' . $phone . '" max="10" /></p>';
        echo '<p>Nhập số fax <input type="text" class="widefat" name="' . $this->get_field_name('fax') . '" value="' . $fax . '" placeholder="' . $fax . '" max="10" /></p>';
        echo '<p>Nhập tổng đài hỗ trợ <input type="text" class="widefat" name="' . $this->get_field_name('tongdai') . '" value="' . $tongdai . '"/></p>';
        echo '<p>Nhập số mua hàng <input type="text" class="widefat" name="' . $this->get_field_name('somuahang') . '" value="' . $somuahang . '" max="10" /></p>';
        echo '<p>Nhập số khiếu nại <input type="text" class="widefat" name="' . $this->get_field_name('sokhieunai') . '" value="' . $sokhieunai . '" max="10" /></p>';
    }


   
    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['tencongty'] = strip_tags($new_instance['tencongty']);
        $instance['address'] = strip_tags($new_instance['address']);
        $instance['phone'] = strip_tags($new_instance['phone']);
        $instance['fax'] = strip_tags($new_instance['fax']);
        $instance['tongdai'] = strip_tags($new_instance['tongdai']);
        $instance['somuahang'] = strip_tags($new_instance['somuahang']);
        $instance['sokhieunai'] = strip_tags($new_instance['sokhieunai']);
        return $instance;
    }
    

    function widget($args, $instance)
    {
        extract($args);
        $tencongty = apply_filters('widget_tencongty', $instance['tencongty']);
        $address = apply_filters('widget_addrerss', $instance['address']);
        $phone = apply_filters('widget_phone', $instance['phone']);
        $fax = apply_filters('widget_fax', $instance['fax']);
        $tongdai = apply_filters('widget_tongdai', $instance['tongdai']);
        $somuahang = apply_filters('widget_somuahang', $instance['somuahang']);
        $sokhieunai = apply_filters('widget_sokhieunai', $instance['sokhieunai']);
        echo $before_widget;
        ?>
        <div class="group-name">
            <div class="content">
                <p><?php echo  $tencongty ?></p>
                <p style="text-align:left;"><?php echo  $address ?><br>ĐT: <a href="tel:02839951703" style="color: blue;"> <?php echo  $phone; ?></a> -
                    Fax: <a href="fax:02839951702" style="color: blue;"><?php echo  $fax  ?></a>
                </p>
                <p>
                    <!--<br>Email: <a href="mailto: shop@pnj.com.vn" style="color: blue;">shop@pnj.com.vn</a>-->
                    <br><?php echo  $tongdai ?> <br>Gọi mua:
                    <a href="tel:1800545457" style="color: blue;"><?php echo  $somuahang ?></a>
                    (phím 1) <br>Khiếu nại: <a href="tel:1800545457" style="color: blue;"><?php echo  $sokhieunai ?></a> (phím 2)
                </p>
            </div>
        </div>
<?php
        echo $after_widget;
    } 
}


//     add_filter( 'woocommerce_add_to_cart_message', 'custom_add_to_cart_message' );
//     function custom_add_to_cart_message() {
//         global $woocommerce;
//         // Output success messages
//         if (get_option('woocommerce_cart_redirect_after_add')=='yes') :
//             $return_to  = get_permalink(woocommerce_get_page_id('shop'));
//             $message    = sprintf('<a href="%s" class="button">%s</a> %s', $return_to, __('Continue Shopping &rarr;', 'woocommerce'), __('Product successfully added to your cart.', 'woocommerce') );
//         else :
//             $message    = sprintf('<a href="%s" class="button">%s</a> %s', get_permalink(woocommerce_get_page_id('cart')), __('View Cart &rarr;', 'woocommerce'), __('Product successfully added to your cart.', 'woocommerce') );
//     endif;
//         return $message;
// }
// add_action('woocommerce_add_to_cart', 'refresh_function');



add_filter( 'comment_form_default_fields', 'wc_comment_form_hide_cookies' );
function wc_comment_form_hide_cookies( $fields ) {
	unset( $fields['cookies'] );
	return $fields;
}

add_filter( 'woocommerce_add_to_cart_fragments', 'iconic_cart_count_fragments', 10, 1 );

function iconic_cart_count_fragments( $fragments ) {
    
    $fragments['span.number-sp'] = '<span class="number-sp">' . WC()->cart->get_cart_contents_count() . '</span>';
    
    return $fragments;
}


// Search box and ajax search
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() 
{ ?>
<script type="text/javascript">
  function fetch(){ 
    jQuery.ajax({
      url: '<?php echo admin_url('admin-ajax.php'); ?>',
      type: 'post',
      data: { action: 'data_fetch', keyword:jQuery('#keyword').val()    
    },
   success: function(data) 
    {
     jQuery('#ul-search').html( data );
    }
   });
  }
</script>
<?php }

add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){

    $the_query = new WP_Query( 
      array( 
        'posts_per_page' => 5, 
        's' => esc_attr( $_POST['keyword'] ), 
        'post_type' => 'product'
      ) 
    );


    if( $the_query->have_posts() ) :
        while( $the_query->have_posts() ): $the_query->the_post();

        $myquery = esc_attr( $_POST['keyword'] );
        $a = $myquery;
        $search = get_the_title();
        if( stripos("/{$search}/", $a) !== false) {?>
            <li style="margin: 10px"><img style="width: 50px" src ="<?php the_post_thumbnail()?> <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title();?></a></li>
        <?php
                                  }
    endwhile;
        wp_reset_postdata();  
    endif;

    die();
}

// function mytheme_add_woocommerce_support() {
// 	add_theme_support( 'woocommerce' );
// }
// add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
