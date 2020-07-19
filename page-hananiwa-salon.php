<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package namakemono-community
 */

get_header();
?>

	<main class="hananiwa__main">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hananiwa-salon/main_visual.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/hananiwa-salon/main_visual@2x.jpg" alt="花庭サロンイメージ" class="hananiwa__mainVisual">
        <section class="hananiwa__about" id="about">
            <h1 class="hananiwa__aboutHeading">
                <span class="sr-only">「脳トレ」コミュニティの拠点について</span>
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/hananiwa-salon/about_header.svg"
                    alt="「脳トレ」コミュニティの拠点について"
                    class="-pc"
                >
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/hananiwa-salon/about_header-sp.svg"
                    alt="「脳トレ」コミュニティの拠点について"
                    class="-sp"
                >
            </h1>
            <div class="hananiwa__desc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hananiwa-salon/base_image.jpg" alt="花庭サロンイメージ" class="hananiwa__descImage">
                <p class="hananiwa__descParagraph">
                    「脳トレ」コミュニティでは自社サロンを有しております。<br />
                    2019年、東京・銀座からほど近い都会に「花庭サロン」は誕生しました。<br />
                    旬の花と緑が溢れ、日々新芽が成長する生きている空間です。<br />
                    東京でのグループセッション・セミナーは<br />こちらの花庭サロンにて開催しています。<br />
                    ※「脳トレ」メンバーの皆様には特別価格にてご利用いただけます。
                </p>
            </div>
        </section>
        <section class="hananiwa__base">
            <h2 class="hananiwa__baseHeading">
                <span class="sr-only">設備一覧</span>
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/hananiwa-salon/base_header.svg"
                    alt="設備一覧"
                >
            </h2>
            <ul class="hananiwa__baseList">
                <li class="hananiwa__baseItem">
                    <div class="hananiwa__baseContents">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_power.svg" alt="電源アイコン">
                        <p class="hananiwa__baseText"><span>電源</span></p>
                    </div>
                </li>
                <li class="hananiwa__baseItem">
                    <div class="hananiwa__baseContents">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_wifi.svg" alt="無料Wi-fiアイコン">
                        <p class="hananiwa__baseText"><span>無料<br class="-pc" />Wi-fi</span></p>
                    </div>
                </li>
                <li class="hananiwa__baseItem">
                    <div class="hananiwa__baseContents">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_projector.svg" alt="ホワイトボードアイコン">
                        <p class="hananiwa__baseText"><span>ホワイトボード<br class="-sp" />(固定)<br />プロジェクター</span></p>
                    </div>
                </li>
                <li class="hananiwa__baseItem">
                    <div class="hananiwa__baseContents">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_mic.svg" alt="マイクアイコン">
                        <p class="hananiwa__baseText"><span>マイク音響設備</span></p>
                    </div>
                </li>
                <li class="hananiwa__baseItem">
                    <div class="hananiwa__baseContents">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_drink.svg" alt="ドリンクアイコン">
                        <p class="hananiwa__baseText"><span>フリードリンク</span></p>
                    </div>
                </li>
                <li class="hananiwa__baseItem">
                    <div class="hananiwa__baseContents">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_make.svg" alt="メイクルームアイコン">
                        <p class="hananiwa__baseText"><span>メイクルーム</span></p>
                    </div>
                </li>
            </ul>
        </section>
        <div class="buttonWrapper">
            <a href="https://hana-niwa-salon.com/" class="button -secondary">
                <div class="buttonInner">
                <div class="buttonIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
                <span>詳しくはこちら</span>
                </div>
            </a>
        </div>
<?php
get_sidebar();
get_footer();
