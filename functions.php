<?php
/**
 * namakemono-community functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package namakemono-community
 */

if (! defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (! function_exists('namakemono_community_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function namakemono_community_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on namakemono-community, use a find and replace
         * to change 'namakemono-community' to the name of your theme in all the template files.
         */
        load_theme_textdomain('namakemono-community', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'namakemono-community'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'namakemono_community_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'namakemono_community_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function namakemono_community_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('namakemono_community_content_width', 640);
}
add_action('after_setup_theme', 'namakemono_community_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function namakemono_community_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'namakemono-community'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'namakemono-community'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'namakemono_community_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function namakemono_community_scripts()
{
    wp_enqueue_style('namakemono-community-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('namakemono-community-style', 'rtl', 'replace');

    wp_register_style('normalize', get_template_directory_uri() . '/assets/css/lib/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize');

    wp_enqueue_script('namakemono-community-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

    wp_enqueue_script('namakemono-community-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true);

    wp_enqueue_script('jquery');

    wp_enqueue_script('vue-js', get_template_directory_uri() . '/assets/js/lib/vue.js', array(), '2.6.11', false);
    wp_enqueue_script('body-scroll-lock-js', get_template_directory_uri() . '/assets/js/lib/bodyScrollLock.js', array(), '', false);
    wp_enqueue_script('header-scripts', get_template_directory_uri() . '/assets/js/header.js', array(), _S_VERSION, false);
    wp_enqueue_script('footer-scripts', get_template_directory_uri() . '/assets/js/footer.js', array(), _S_VERSION, false);


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    if(is_front_page()) {
        wp_enqueue_script('home-slider', get_template_directory_uri() . '/assets/js/home.js', array(), _S_VERSION, true);
    }

    if (is_front_page() || is_archive()) {
        wp_enqueue_script('hooper-scripts', 'https://cdn.jsdelivr.net/npm/hooper@0.2.1/dist/hooper.min.js', array(), '2.1', false);
        wp_enqueue_script('namakemono-slider', get_template_directory_uri() . '/assets/js/hooper.js', array(), _S_VERSION, true);

        wp_register_style('hooper-style', 'https://cdn.jsdelivr.net/npm/hooper@0.2.1/dist/hooper.css', array(), '2.1', 'all');
        wp_enqueue_style('hooper-style');
    }

    if (is_page('noutore-shindan')) {
        wp_enqueue_script('shindan-scripts', get_template_directory_uri() . '/assets/js/diagnosis.js', array(), _S_VERSION, false);
    }

    if (is_page('online-lesson')) {
        wp_enqueue_script('online-lesson-scripts', get_template_directory_uri() . '/assets/js/online-lesson.js', array(), _S_VERSION, true);
    }

    if (is_page('startbook')) {
        wp_enqueue_script('startbook-scripts', get_template_directory_uri() . '/assets/js/startbook.js', array(), _S_VERSION, true);
    }
}
add_action('wp_enqueue_scripts', 'namakemono_community_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

/*********************************
 トップページNEWSの表示件数を変更
**********************************/

function change_posts_per_page($query)
{
    if (is_front_page()) {
        $query->set('posts_per_page', '3');
        return $query;
    }
}
add_filter('pre_get_posts', 'change_posts_per_page');


// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function official_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'prev_text' => __('PREV'),
        'next_text' => __('NEXT'),
        'mid_size' => 0,
        'total' => $wp_query->max_num_pages
    ));
}

// ContactForm7に完了画面を追加
add_action( 'wp_footer', 'add_thanks_page' );
function add_thanks_page() {
echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'http://noutorelove.local/complete/'; /* 遷移先のURL */
}, false );
</script>
EOD;
}

//合わせて読みたいショートコード
function related_func ( $atts ) {
    extract( shortcode_atts( array(
        'id' => '',
        'label' => 'あわせて読みたい',
    ), $atts ) );

    $ids = mb_split(",",$id);
    $outputTag = '';

    if($id):
        $outputTag .= '
        <div class="single__together">
        <ul class="single__togetherList">
            <h5 class="single__togetherTitle">
                <span>' . $label . '</span>
            </h5>
        ';

        foreach($ids as $value):
            if(ctype_digit($value)):
                $link = get_permalink($value);
                $title = get_the_title($value);
                $page = get_post($value);
                if(get_post_thumbnail_id($value)){
                    $thmbnail_url = wp_get_attachment_url(get_post_thumbnail_id( $value ));
                } else {
                    $thmbnail_url = '/wp-content/themes/wdd2/images/common/no-image.jpg';
                }
                $outputTag .='
                <li class="single__togetherItem">
                    <a class="single__togetherLink flex flex--bet" href="'. $link . '">
                        <figure class="single__togetherImage">
                            <img src="' . $thmbnail_url . '">
                        </figure>
                        <div class="single__togetherContent">
                            <h6 class="single__togetherArticleTitle">' . $title . '</h6>
                            <p class="single__togetherArticleExcerpt">' . $page->post_excerpt .'</p>
                        </div>
                    </a>
                </li>';
            else:
                $outputTag .='<li class="single__togetherItem">記事IDの指定が正しくありません</li>';
            endif;
        endforeach;
        $outputTag .= '</ul></div>';
        return $outputTag;
    else:
        return '
        <div class="signle">
            <h5 class="signle__title">
        <span><i class="fas fa-link"></i>' . $label . '</span>
        </h5>
        <ul class="signle__list">記事IDがありません</ul>
        </div>';
    endif;
}
add_shortcode('related', 'related_func');


/* 人気記事一覧
---------------------------------------------------------- */
//記事のビュー数メタデータを作成・更新する関数
function setPostViews() {
    $post_id = get_the_ID();
    $custom_key = 'post_views_count';
    $view_count = get_post_meta($post_id, $custom_key, true);  //現在のビュー数を取得
    //すでにメタデータがあるかどうかで処理を分ける
    if ($view_count === '') {
        delete_post_meta($post_id, $custom_key);
        add_post_meta($post_id, $custom_key, '0');
    } else {
        $view_count++;
        update_post_meta($post_id, $custom_key, $view_count);
    }
}

/*********************************
 管理画面にビュー数の表示
**********************************/

function add_views_columns($columns)
{
    $columns['name'] = '閲覧数';
    return $columns;
}
function custom_posts_column($column_name, $post_id)
{
    if ($column_name == 'name') {
        $post_metas = get_post_meta($post_id, 'post_views_count', true);
        echo ($post_metas) ? $post_metas : '0';
    }
}
add_filter('manage_posts_columns', 'add_views_columns');
add_action('manage_posts_custom_column', 'custom_posts_column', 10, 2);