<?php

/**
 * Hathor functions and definitions
 *
 * For more information on hooks, actions, and filters, @link http://codex.wordpress.org/Plugin_API
 */

/*
 * Set up the content width value based on the theme's design.
 *
 */

/*
 * Include expand functions
 */
// include './expand-functions.php';

if ( ! isset( $content_width ) )
	$content_width = 630;



//Load Other CSS files

function hathor_other_css() {
if ( !is_admin() ) {
wp_enqueue_style( 'hathor_other', get_template_directory_uri() . '/css/foundation.css' );
wp_enqueue_style( 'hathor_other', get_template_directory_uri() . '/css/nivo-slider.css' );
wp_enqueue_style( 'hathor_other', get_template_directory_uri() . '/fonts/awesome/css/font-awesome.min.css' );


}  }
add_action('wp_enqueue_scripts', 'hathor_other_css');

function hathor_other1_css() {
if ( !is_admin() ) {
wp_enqueue_style( 'hathor_other1', get_template_directory_uri() . '/css/nivo-slider.css' );
wp_enqueue_style( 'hathor_other1', get_template_directory_uri() . '/fonts/awesome/css/font-awesome.min.css' );


}  }
add_action('wp_enqueue_scripts', 'hathor_other1_css');

function hathor_other2_css() {
if ( !is_admin() ) {
wp_enqueue_style( 'hathor_other2', get_template_directory_uri() . '/fonts/awesome/css/font-awesome.min.css' );


}  }
add_action('wp_enqueue_scripts', 'hathor_other2_css');








function hathor_fonts_css() {
if ( !is_admin(
) ) {
{ ?>
<?php wp_enqueue_style('customfont',get_template_directory_uri().'/fonts/'.$os_fonts = of_get_option('font_select', 'raleway' ).'.css'); }
	}
}
add_action('wp_enqueue_scripts', 'hathor_fonts_css');

//Load Custom CSS
function hathor_customstyle() { ?>
<?php if(of_get_option('sldrtxt_checkbox') == "0"){ ?>
<style type="text/css">
body .nivo-caption {
	display: none!important;
}
</style>
<?php } ?>


<?php if(of_get_option('sldrtitle_checkbox') == "0"){ ?>
<style type="text/css">
.nivo-caption h3 {
	display: none!important;
}
</style>
<?php } ?>

<?php if(of_get_option('sldrdes_checkbox') == "0"){ ?>
<style type="text/css">
.nivo-caption p {
	display: none!important;
}
</style>
<?php } ?>


<style type="text/css">
/*Secondary Elements Color*/



.postitle, .postitle a,.postitle2 a, .widgettitle,.widget-title, .entry-title a, .widgettitle2, #reply-title, #comments span, .catag_list a, .lay2 h2, .nivo-caption a, .nivo-caption,.entry-title,.content_blog .post_title a,.title h2.blue1,.title h2.green1 ,.postitle_lay a,#wp-calendar tr td a,.vcard a,.post_content a:link,.post_content p a,.comments_template,.post_info_wrap a{
color:<?php echo of_get_option('flavour_colorpicker');
?>!important;

}

.midrow_block,.style2.icon_img,.icon_img {border-color:<?php echo of_get_option('flavour_colorpicker');
?>!important;}

 .midbutton,.nivo-controlNav a.active,#sub_banner,#wp-calendar #today,#searchsubmit,#content .more-link,#submit,.nivo-caption h3,.post_info_1 .post_date,#navmenu ul > li::after,.scrollup{
background-color:<?php echo of_get_option('flavour_colorpicker');
?>!important;
}

.view a.info:hover,#navmenu ul > li ul li:hover,#submit:hover,.midbutton:hover,#searchsubmit:hover  {
background-color:<?php echo of_get_option('hover_colorpicker');
?>!important; background:<?php echo of_get_option('hover_colorpicker');?>!important;

}
.ch-info a:hover,.widget_tag_cloud a:hover,.post_info a:hover,.post_views a:hover,
.post_comments a:hover,.wp-pagenavi:hover, .alignleft a:hover, .wp-pagenavi:hover ,.alignright a:hover,.comment-form a:hover,.port a:hover,.previous a:hover, .next a:hover,.our_team p.port_team a:hover{
color:<?php echo of_get_option('hover_colorpicker');
?>!important;}

</style>
<?php }

add_action( 'wp_head', 'hathor_customstyle' );



//Load Java Scripts to header
function hathor_head_js() {
if ( !is_admin() ) {
wp_enqueue_script('jquery');
wp_enqueue_script('hathor_js',get_template_directory_uri().'/other2.js');
wp_enqueue_script('hathor_other',get_template_directory_uri().'/js/other.js');



if(of_get_option('slider_select') == "nivo"){ wp_enqueue_script('hathor_nivo',get_template_directory_uri().'/js/jquery.nivo.js');}
if(of_get_option('disslight_checkbox') == "0")
if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
}
}
add_action('wp_enqueue_scripts', 'hathor_head_js');

//Load Java Scripts to Footer
add_action('wp_footer', 'hathor_load_js');

function hathor_load_js() { ?>

<script type="text/javascript">
    jQuery(window).load(function() {
		// nivoslider init
		jQuery('#nivos').nivoSlider({
				effect: 'random',
				animSpeed:700,
				pauseTime:<?php echo of_get_option('sliderspeed_text'); ?>,
				startSlide:0,
				slices:10,
				directionNav:true,
				directionNavHide:true,
				controlNav:true,
				controlNavThumbs:false,
				keyboardNav:true,
				pauseOnHover:true,
				captionOpacity:0.8,
				afterLoad: function(){
						if (jQuery(window).width() < 480) {
					jQuery(".nivo-caption ").animate({"opacity": "1", "right":"0"}, {easing:"easeOutBack", duration: 500});

						}else{
					jQuery(".nivo-caption").animate({"opacity": "1", "bottom":"15%"}, {easing:"easeOutBack", duration: 500});
					jQuery(".nivo-caption ").has('.sld_layout3').addClass('sld3wrap');
							}
				},
				beforeChange: function(){
					jQuery(".nivo-caption ").animate({bottom:"-500px"}, {easing:"easeInBack", duration: 500});
					//jQuery(".nivo-caption").delay(400).removeClass('sld3wrap');
					jQuery('.nivo-caption ').animate({"opacity": "0"}, 100);
					jQuery('.nivo-caption ').delay(500).queue(function(next){
						jQuery(this).removeClass("sld3wrap");next();});

				},
				afterChange: function(){
						if (jQuery(window).width() < 480) {
					jQuery(".nivo-caption ").animate({"opacity": "1", "bottom":"0"}, {easing:"easeOutBack", duration: 500});
						}else{
					jQuery(".nivo-caption ").animate({"opacity": "1", "bottom":"15%"}, {easing:"easeOutBack", duration: 500});
					jQuery(".nivo-caption ").has('.sld_layout3').addClass('sld3wrap');
							}
				}
			});
	});
</script>

<?php if(of_get_option('slider_select') == "nivo"){ ?>

<script type="text/javascript">
    jQuery(window).load(function() {
		// nivoslider init
		jQuery('#nivo').nivoSlider({
				effect: 'random',
				animSpeed:700,
				pauseTime:<?php echo of_get_option('sliderspeed_text'); ?>,
				startSlide:0,
				slices:10,
				directionNav:true,
				directionNavHide:true,
				controlNav:true,
				controlNavThumbs:false,
				keyboardNav:true,
				pauseOnHover:true,
				captionOpacity:0.8,
				afterLoad: function(){
						if (jQuery(window).width() < 480) {
					jQuery(".nivo-caption ").animate({"opacity": "1", "right":"0"}, {easing:"easeOutBack", duration: 500});

						}else{
					jQuery(".nivo-caption").animate({"opacity": "1", "bottom":"15%"}, {easing:"easeOutBack", duration: 500});
					jQuery(".nivo-caption ").has('.sld_layout3').addClass('sld3wrap');
							}
				},
				beforeChange: function(){
					jQuery(".nivo-caption ").animate({bottom:"-500px"}, {easing:"easeInBack", duration: 500});
					//jQuery(".nivo-caption").delay(400).removeClass('sld3wrap');
					jQuery('.nivo-caption ').animate({"opacity": "0"}, 100);
					jQuery('.nivo-caption ').delay(500).queue(function(next){
						jQuery(this).removeClass("sld3wrap");next();});

				},
				afterChange: function(){
						if (jQuery(window).width() < 480) {
					jQuery(".nivo-caption ").animate({"opacity": "1", "bottom":"0"}, {easing:"easeOutBack", duration: 500});
						}else{
					jQuery(".nivo-caption ").animate({"opacity": "1", "bottom":"15%"}, {easing:"easeOutBack", duration: 500});
					jQuery(".nivo-caption ").has('.sld_layout3').addClass('sld3wrap');
							}
				}
			});
	});
</script>

<?php } ?>



<script type="text/javascript">
	/* <![CDATA[ */
		jQuery().ready(function() {

	jQuery('#navmenu').prepend('<div id="menu-icon"><?php _e('Menu', 'hathor') ?></div>');
	jQuery("#menu-icon").on("click", function(){
		jQuery("#navmenu .menu").slideToggle();
		jQuery(this).toggleClass("menu_active");
	});

		});
	/* ]]> */
	</script>

<script type="text/javascript" charset="utf-8">

    jQuery(window).load(function() {
      jQuery('.tf-header-slider').flexslider({
        animation: "fade",
        maxItems: 11,
        controlNav: true
      });
    });

    jQuery(window).load(function() {
      jQuery('.tf-work-carousel').flexslider({
        animation: "slade",
        animationLoop: false,
        itemWidth: 280,
        itemMargin: 30,
        move: 1,
        start: function(slider){
          jQuery('body').removeClass('loading');
        }
      });
    });

   jQuery(window).load(function() {
      jQuery('.tf-footer-carousel').flexslider({
        animation: "slide",
        animationLoop: true,
        itemWidth: 140,
        itemMargin: 15,
        minItems: 1,
        maxItems: 6,
        move:1
      });
    });





    jQuery(document).ready(function($) {
				jQuery('#work-carousel' ).carouFredSel({
					next : "#work-carousel-next",
					prev : "#work-carousel-prev",
					auto: false,
					circular: false,
					infinite: true,
					width: '100%',
					scroll: {
						items : 1
					}
				});
			});


	jQuery(document).ready(function($) {
				jQuery('#work-carousel3' ).carouFredSel({
					next : "#work-carousel-next3",
					prev : "#work-carousel-prev3",
					auto: false,
					circular: false,
					infinite: true,
					width: '100%',
					scroll: {
						items : 1
					}
				});
			});


		jQuery(document).ready(function($) {
				jQuery('#work-carousels' ).carouFredSel({
					next : "#work-carousel-next2",
					prev : "#work-carousel-prev2",
					auto: false,
					circular: false,
					infinite: true,
					width: '100%',
					scroll: {
						items : 1
					}
				});
			});

  </script>
<?php }






/* hathor welcome text */








//hathor get the first image of the post Function
function hathor_get_images($overrides = '', $exclude_thumbnail = false)
{
    return get_posts(wp_parse_args($overrides, array(
        'numberposts' => -1,
        'post_parent' => get_the_ID(),
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'order' => 'ASC',
        'exclude' => $exclude_thumbnail ? array(get_post_thumbnail_id()) : array(),
        'orderby' => 'menu_order ID'
    )));
}




//ADD FULL WIDTH BODY CLASS
add_filter( 'body_class', 'hathor_fullwdth_body_class');
function hathor_fullwdth_body_class( $classes ) {
     if(of_get_option('nosidebar_checkbox') == "1")
          $classes[] = 'hathor_fullwdth_body';
     return $classes;
}

//Custom Excerpt Length
function hathor_excerptlength_teaser($length) {
    return 30;
}
function hathor_excerptlength_index($length) {
    return 12;
}
function hathor_excerptmore($more) {
    return '...';
}

function hathor_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
}


/*-----------------------------------------------------------------------------------*/
/* Display <title> tag
/*-----------------------------------------------------------------------------------*/

// filter function for wp_title
function hathor_filter_wp_title( $old_title, $sep, $sep_location ){

    // add padding to the sep
    $ssep = ' ' . $sep . ' ';

    // find the type of index page this is
    if( is_category() ) $insert = $ssep . __('Category','hathor');
    elseif( is_tag() ) $insert = $ssep . __('Tag','hathor');
    elseif( is_author() ) $insert = $ssep . __('Author','hathor');
    elseif( is_year() || is_month() || is_day() ) $insert = $ssep . __('Archives','hathor');
    elseif( is_home() ) $insert = $ssep . get_bloginfo('description');
    else $insert = NULL;

    // get the page number we're on (index)
    if( get_query_var( 'paged' ) )
    $num = $ssep . __('Page ','hathor') . get_query_var( 'paged' );

    // get the page number we're on (multipage post)
    elseif( get_query_var( 'page' ) )
    $num = $ssep . __('Page ','hathor') . get_query_var( 'page' );

    // else
    else $num = NULL;


    // concoct and return new title
    return get_bloginfo( 'name' ) . $insert . $old_title . $num;
}

add_filter( 'wp_title', 'hathor_filter_wp_title', 10, 3 );

function hathor_rss_title($title) {
    /* need to fix our add a | blog name to wp_title */
    $ft = str_replace(' | ','',$title);
    return str_replace(get_bloginfo('name'),'',$ft);
}
add_filter('get_wp_title_rss', 'hathor_rss_title',10,1);









//SIDEBAR
function hathor_widgets_init(){
	register_sidebar(array(
	'name'          => __('Right Sidebar', 'hathor'),
	'id'            => 'sidebar',
	'description'   => __('Right Sidebar', 'hathor'),
	'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget_wrap">',
	'after_widget'  => '</div></div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>'
	));

	register_sidebar(array(
	'name'          => __('Footer Widgets', 'hathor'),
	'id'            => 'foot_sidebar',
	'description'   => __('Widget Area for the Footer', 'hathor'),
	'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="widget_wrap">',
	'after_widget'  => '</div></div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>'
	));






}

add_action( 'widgets_init', 'hathor_widgets_init' );


// Search Form
function my_search_form( $form ) {

    $form = '<form role="search" method="get" id="searchform" action="'.home_url( '/' ).'" >
    <div><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
    </div>
    </form>';

    return $form;
}

add_filter( 'get_search_form', 'my_search_form' );

/*
老害ウォッチ
*/

add_action('init', 'create_post_type');
function create_post_type() {
    $params = array(
            'labels' => array(
                    'name' => '老害ウォッチ',
                    'singular_name' => '老害ウォッチ',
                    'add_new' => '老害を新規追加',
                    'add_new_item' => '新しい老害を追加',
                    'edit_item' => '老害を編集する',
                    'new_item' => '新規老害',
                    'all_items' => '老害一覧',
                    'view_item' => '老害の説明を見る',
                    'search_items' => '検索する',
                    'not_found' => '老害が見つかりませんでした。',
                    'not_found_in_trash' => 'ゴミ箱内に老害が見つかりませんでした。'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                    'title',
                    'editor',
                    'author',
                    'custom-fields',
                    'thumbnail',
            ),
            'taxonomies' => array('websites_category','websites_tag')
    );
    register_post_type('rougai_watch', $params);
}

/*
11 All Members
*/

add_action('init', 'add_post_type_util');
function add_post_type_util() {
    $params = array(
            'labels' => array(
                    'name' => '11 All Members',
                    'singular_name' => '11 All Members',
                    'add_new' => 'メンバーを追加',
                    'add_new_item' => 'メンバーを追加',
                    'edit_item' => 'メンバーを編集する',
                    'new_item' => '新規メンバー',
                    'all_items' => 'メンバー一覧',
                    'view_item' => 'メンバーの説明を見る',
                    'search_items' => '検索する',
                    'not_found' => 'そんな奴はいない。',
                    'not_found_in_trash' => 'ゴミ箱内にメンバーのデータが見つかりませんでした。'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                    'title',
                    'editor',
                    'author',
                    'custom-fields',
                    'thumbnail',
            ),
            'taxonomies' => array('websites_category','websites_tag')
    );
    register_post_type('11members', $params);
    register_taxonomy(
		'team',
		'11members',
		array(
			'label' => '班',
			'singular_label' => '班',
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'public' => true,
			'show_ui' => true
		)
	);
}


/*
バンドページ
*/
add_action('init', 'add_post_type');
function add_post_type() {
    $params = array(
            'labels' => array(
                    'name' => 'Bands',
                    'singular_name' => 'Bands',
                    'add_new' => 'バンドを追加',
                    'add_new_item' => 'バンドを追加',
                    'edit_item' => 'バンドを編集する',
                    'new_item' => '新規バンド',
                    'all_items' => 'バンド一覧',
                    'view_item' => 'バンドの説明を見る',
                    'search_items' => '検索する',
                    'not_found' => 'そんなバンドはない。',
                    'not_found_in_trash' => 'ゴミ箱内にバンドのデータが見つかりませんでした。'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                    'title',
                    'editor',
                    'author',
                    'custom-fields',
                    'thumbnail',
            ),
            'taxonomies' => array('websites_category','websites_tag')
    );
    register_post_type('bands', $params);
    register_taxonomy(
		'kousei',
		'bands',
		array(
			'label' => '構成',
			'singular_label' => '構成',
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'public' => true,
			'show_ui' => true
		)
	);
}

/*
老害ウォッチfacebook連動
*/
add_action( 'init', 'rougai_facebook' );
function rougai_facebook() {
    add_post_type_support( 'rougai_watch', 'publicize' );
}

/*
新着記事一覧
*/
function new_post_list() {
    global $post;
    $newlist = get_posts( array(
    	'post_type' => array('post','rougai_watch','11members'),
    	'posts_per_page' => 5
    ));
    foreach( $newlist as $post) {
    	setup_postdata( $post );
	?>
            <?php the_time('Y/n/j G:i'); ?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php echo esc_html(get_post_type_object(get_post_type())->label ); ?></br>

        <?php
    }
    wp_reset_postdata();
}

/*
投稿と言うダサい名前を変える革新的なコード
*/
function change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'ブログ';
	$submenu['edit.php'][5][0] = 'ブログ一覧';
	$submenu['edit.php'][10][0] = '新しいブログ記事';
	$submenu['edit.php'][16][0] = 'タグ';
	//echo ”;
}
function change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'ブログ';
	$labels->singular_name = 'ブログ';
	$labels->add_new = _x('書く', 'ブログ');
	$labels->add_new_item = '新しい記事';
	$labels->edit_item = '記事の編集';
	$labels->new_item = '新しい記事';
	$labels->view_item = '記事を表示';
	$labels->search_items = '記事を検索';
	$labels->not_found = '記事が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱の記事にも見つかりませんでした';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );


//**************hathor SETUP******************//
function hathor_setup() {
//Custom Background
add_theme_support( 'custom-background', array(
	'default-color' => '',
	'default-image' => get_template_directory_uri() . ''
) );

add_theme_support('automatic-feed-links');

//Post Thumbnail
   add_theme_support( 'post-thumbnails' );


//Register Menus
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation(Header)', 'hathor' ),

	) );

 // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');


// Make theme available for translation
 load_theme_textdomain('asteria', get_template_directory() . '/languages');


/*
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/admin/' );
require_once dirname( __FILE__ ) . '/admin/options-framework.php';

include(get_template_directory() . '/lib/widgets.php');


}
add_action( 'after_setup_theme', 'hathor_setup' );


?>
<?php
