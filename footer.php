<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package namakemono-community
 */

?>
	<div id="toTop">
		<transition name="totop-fade">
			<button class="toTop__link" v-if="isShow">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/namakemono_top.png" alt="topへ" class="toTop__image" @click="toTop">
			</button>
		</transition>
	</div>
	</main><!-- #main -->

	<footer class="footer<?php if (is_page('online-lesson')) {
    echo(' bg-brown');
} ?>">
		<ul class="footer__upperList">
			<li class="footer__upperItem"><a href="<?php echo home_url(); ?>" class="footer__upperItemLink">トップページ</a></li>
			<li class="footer__upperItem"><a href="<?php echo home_url('/news/'); ?>" class="footer__upperItemLink">Information</a></li>
			<li class="footer__upperItem"><a href="<?php echo home_url(); ?>" class="footer__upperItemLink">会社情報</a></li>
			<li class="footer__upperItem"><a href="//team.noutore-love.com" class="footer__upperItemLink">運営コミュニティ<br class="-sp">サイト</a></li>
			<li class="footer__upperItem"><a href="//reservation.noutore-love.com" class="footer__upperItemLink">個人セッション予約<br class="-sp">サイト</a></li>
		</ul>
		<div class="footer__middle">
			<ul class="footer__middleList">
				<li class="footer__middleItem">
					<h2 class="footer__middleHeader">
						<div class="footer__arrowIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
						<span>「脳トレ」を知る</span>
					</h2>
					<ul class="footer__middleSubList">
						<li class="footer__middleSubItem"><a href="<?php echo home_url('#home-about') ?>">「脳トレ」とは？</a></li>
						<li class="footer__middleSubItem"><a href="<?php echo home_url('#home-genre') ?>">「脳トレ」が効果的なジャンル</a></li>
						<li class="footer__middleSubItem"><a href="<?php echo home_url('/profile') ?>">運営チームプロフィール</a></li>
						<li class="footer__middleSubItem"><a href="<?php echo home_url('/hananiwa-salon') ?>">コミュニティの拠点</a></li>
					</ul>
				</li>
			</ul>
			<ul class="footer__middleList">
				<li class="footer__middleItem">
					<h2 class="footer__middleHeader">
						<div class="footer__arrowIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
						<span>「脳トレ」を学ぶ</span>
					</h2>
					<ul class="footer__middleSubList">
						<li class="footer__middleSubItem"><a href="<?php echo home_url('#home-support') ?>">オンラインレッスン6つのサポート</a></li>
						<li class="footer__middleSubItem"><a href="<?php echo home_url('#home-flow') ?>">レッスン参加までの流れ</a></li>
						<li class="footer__middleSubItem"><a href="<?php echo home_url('#home-flow-lesson') ?>">レッスン費用について</a></li>
						<li class="footer__middleSubItem"><a href="<?php echo home_url('#home-howto-noutore') ?>">オンラインレッスン以外で「脳トレ」を学びたい場合は？</a></li>
						<li class="footer__middleSubItem"><a href="<?php echo home_url('#home-recommend') ?>">もっと「脳トレ」を知りたい方にオススメコンテンツ！</a></li>
					</ul>
				</li>
			</ul>
			<div class="footer__middleContacts">
				<ul class="footer__middleList">
					<li class="footer__middleItem">
						<h2 class="footer__middleHeader">
							<div class="footer__arrowIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
							<span>お問い合わせ先</span>
						</h2>
						<ul class="footer__middleSubList">
							<li class="footer__middleSubItem"><a href="https://line.me/R/ti/p/%40496jcxcd">LINE公式アカウント</a></li>
							<li class="footer__middleSubItem"><a href="<?php echo home_url('/contact/') ?>">お問い合わせフォーム</a></li>
						</ul>
					</li>
				</ul>
				<ul class="footer__middleList">
					<li class="footer__middleItem">
						<h2 class="footer__middleHeader">
							<div class="footer__arrowIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
							<span>SNS</span>
						</h2>
						<ul class="footer__middleSubList -sns">
							<li class="footer__middleSubItem"><a href="https://twitter.com/noutore_info?s=20">twitter</a></li>
							<!-- <li class="footer__middleSubItem">Youtube</li> -->
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="footer__lower">
			<div class=footer__links>
				<div class="footer__lowerLink">
					<a href="<?php echo home_url('/privacy/') ?>" class="footer__lowerLink">プライバシーポリシー</a>
					・<a href="<?php echo home_url('/law/') ?>" class="footer__lowerLink">免責事項</a>
				</div>
				<small class="footer__copyright">Copyright © 2020 「脳トレ」NOUTORE online lesson. <br class="-sp" />All Rights Reserved.</small>
			</div>
			<div class="footer__banner">
				<a href="//team.noutore-love.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner_community.png" alt="「脳トレ」コミュニティ"></a>
				<a href="//reservation.noutore-love.com"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner_reservation.png" alt="「脳トレ」セッション予約"></a>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
