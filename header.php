<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package namakemono-community
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/64x64.png">
	<meta property="og:url" content="https://noutore-love.com" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="「脳トレ」オンラインレッスン" />
	<meta property="og:description" content="「脳トレ」オンラインレッスンは、脳と心の仕組みを学んで、現実を思う通りに創造していくスキルを学ぶ場所です。" />
	<meta property="og:image" content="<?php echo get_template_directory(); ?>/assets/img/ogp.jpg" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="body">
<?php wp_body_open(); ?>
<div class="loader-wrap" id="loading">
	<div class="loader">Loading...</div>
</div>
<?php if (is_home()) { ?>
	<div class="opening__animation" id="opening-animation"></div>
<?php } ?>
<div id="page" class="site">
	<header id="header" class="header">
		<?php if (is_front_page() && is_home()): ?>
			<h1 class="header__logo">
		<?php else: ?>
			<p class="header__logo">
		<?php endif; ?>
			<span class="sr-only">「脳トレ」オンラインレッスン</span>
			<div class="header__logoWrapper">
				<a href="<?php echo home_url(); ?>">
					<?php if (is_archive()) { ?>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_vertical.svg"
							alt="「脳トレ」オンラインレッスン"
							class="header__logoImage -vertical"
							>
					<?php } else { ?>
						<img
							src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg"
							alt="「脳トレ」オンラインレッスン"
							class="header__logoImage"
							>
					<?php } ?>
				</a>
			</div>
		<?php if (is_front_page() && is_home()): ?>
			</h1>
		<?php else: ?>
			</p>
		<?php endif; ?>
		<div class="header__fixed" :class="isFixed">
			<div :class="isFixed">
				<transition name="trans_slide">
					<div class="header__menuLogo" :class="isShow" v-if="isShow">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="サイトロゴ" class="header__logoImage -pc">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-sp.svg" alt="「脳トレ」オンラインレッスン" class="header__logoImage -sp"
									>
						</a>
					</div>
				</transition>
				<div class="header__fixedMenu">
					<ul class="header__iconList">
						<transition name="trans_slide">
							<div class="header__fixedIcon" :class="isIconShow" v-if="isIconShow">
								<li class="header__iconItem header__iconTwitter" :class="isIconShow"><a href="https://twitter.com/noutore_info?s=20" class="header__iconLink"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_twitter.svg"></a></li>
								<!-- <li class="header__iconItem header__iconYoutube" :class="isIconShow"><a href="" class="header__iconLink"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_youtube.svg"></a></li> -->
								<li class="header__iconItem header__iconLine" :class="isIconShow"><a href="https://39auto.biz/namakemono-yuki/touroku/entryform15.htm" class="header__iconLink"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_line.svg"></a></li>
								<li class="header__iconItem header__iconMail" :class="isIconShow"><a href="<?php echo home_url('/contact/') ?>" class="header__iconLink"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_mail.svg"></a></li>
								<li class="header__iconItem header__iconMap" :class="isIconShow"><a href="<?php echo home_url('/hananiwa-salon') ?>" class="header__iconLink"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_map.svg"></a></li>
							</div>
						</transition>
						<li class="header__iconItem header__iconSearch -isIconShow">
							<form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
								<input ref="focusField" :class="searchFieldOpened" class="search-input" type="search" name="s" placeholder="キーワードを入力してEnter">
							</form>
							<button @click="toggleSearchField" :class="searchFieldOpened" class="header__iconButton"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_search.svg"></button>
						</li>
					</ul>
					<nav id="site-navigation" class="header__navigation">
						<span class="header__trigger" href="#" @click="toggleMenu" id="hoge">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</nav>
				</div>
			</div>
		</div>
		<transition name="menu_fade">
			<div id="hammenu" :class="isOpened" v-if="isMenuOpened">
				<span class="hammenu__closeButton" @click="toggleMenu">CLOSE</span>
				<div class="hammenu__inner">
					<div class="hammenu__block">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/menu_heading01.svg" alt="About「NOUTORE」" id="hammenu__headingAbout" class="hammenu__heading">
						<ul class="hammenu__list">
							<li class="hammenu__item"><a href="<?php echo home_url('#home-about') ?>" @click="toggleMenu">「脳トレ」とは？</a></li>
							<li class="hammenu__item"><a href="<?php echo home_url('#home-genre') ?>" @click="toggleMenu">「脳トレ」が効果的なジャンル</a></li>
							<li class="hammenu__item"><a href="<?php echo home_url('/profile') ?>" @click="toggleMenu">運営チームプロフィール</a></li>
							<li class="hammenu__item"><a href="<?php echo home_url('/hananiwa-salon') ?>" @click="toggleMenu">コミュニティの拠点</a></li>
						</ul>
					</div>
					<div class="hammenu__block">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/menu_heading02.svg" alt="To learn「NOUTORE」" id="hammenu__headingNoutore" class="hammenu__heading">
						<ul class="hammenu__list">
							<li class="hammenu__item"><a href="<?php echo home_url('#home-support') ?>" @click="toggleMenu">オンラインレッスン6つのサポート</a></li>
							<li class="hammenu__item"><a href="<?php echo home_url('#home-flow') ?>" @click="toggleMenu">レッスン参加までの流れ</a></li>
							<li class="hammenu__item"><a href="<?php echo home_url('#home-flow-lesson') ?>" @click="toggleMenu">レッスン費用について</a></li>
							<li class="hammenu__item"><a href="<?php echo home_url('#home-howto-noutore') ?>" @click="toggleMenu">オンラインレッスン以外で<br class="-sp">「脳トレ」を学びたい場合は？</a></li>
							<li class="hammenu__item"><a href="<?php echo home_url('#home-recommend') ?>" @click="toggleMenu">もっと「脳トレ」を知りたい<br class="-sp">方にオススメコンテンツ！</a></li>
						</ul>
					</div>
					<div class="hammenu__block">
						<img src="<?php echo get_template_directory_uri();?>/assets/img/menu_heading03.svg" alt="Contact" id="hammenu__headingContact" class="hammenu__heading">
						<ul class="hammenu__list">
							<li class="hammenu__item"><a href="<?php echo home_url('/contact/') ?>">お問い合わせはこちら</a></li>
						</ul>
					</div>
					<div class="hammenu__sns -sp">
						<span class="hammenu__span">follow me！</span>
						<ul class="hammenu__footerList">
							<li class="hammenu__footerItem hammenu__iconTwitter"><a href="https://twitter.com/noutore_info?s=20" class="header__iconLink"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_twitter.svg"></a></li>
							<!-- <li class="hammenu__footerItem hammenu__iconYoutube"><a href="" class="header__iconLink"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_youtube.svg"></a></li> -->
							<li class="hammenu__footerItem hammenu__iconLine"><a href="https://39auto.biz/namakemono-yuki/touroku/entryform15.htm" class="header__iconLink"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_line.svg"></a></li>
						</ul>
					</div>
					<footer class="hammenu__footer">
						<div class="-pc">
							<span class="hammenu__span">follow me！</span>
							<ul class="hammenu__footerList">
								<li class="hammenu__footerItem hammenu__iconTwitter"><a href="https://twitter.com/noutore_info?s=20" class="header__iconLink"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_twitter.svg"></a></li>
								<!-- <li class="hammenu__footerItem hammenu__iconYoutube"><a href="" class="header__iconLink"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_youtube.svg"></a></li> -->
								<li class="hammenu__footerItem hammenu__iconLine"><a href="https://39auto.biz/namakemono-yuki/touroku/entryform15.htm" class="header__iconLink"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_line.svg"></a></li>
							</ul>
						</div>
						<small class="hammenu__copyright">Copyright © 2020 「脳トレ」NOUTORE online lesson. <br class="-sp">All Rights Reserved.</small>
						<div class="hammenu__communityLinkWrapper -sp">
							<a href="https://team.noutore-love.com" class="hammenu__relationLink">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/community_text.png" alt="脳トレコミュニティ">
							</a>
						</div>
						<div class="hammenu__reservationLinkWrapper -sp">
							<a href="https://reservation.noutore-love.com" class="hammenu__relationLink">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/reservation_text.png" alt="脳トレコミュニティ">
							</a>
						</div>
					</footer>
				</div>
				<div class="hammenu__communityLinkWrapper -pc">
					<a href="https://team.noutore-love.com" class="hammenu__relationLink">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/community_text.png" alt="脳トレコミュニティ">
					</a>
				</div>
				<div class="hammenu__reservationLinkWrapper -pc">
					<a href="https://reservation.noutore-love.com" class="hammenu__relationLink">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/reservation_text.png" alt="脳トレコミュニティ">
					</a>
				</div>
			</div>
		</transition>

	</header><!-- #masthead -->