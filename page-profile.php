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

	<main class="profile__main">
    <section class="profile__lead">
      <h2 class="profile__leadHeading">
        <span class="sr-only">「脳トレ」運営陣プロフィール</span>
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/profile_header.svg"
            alt="「脳トレ」運営陣プロフィール"
            class="-pc"
        >
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/profile_header-sp.svg"
            alt="「脳トレ」運営陣プロフィール"
            class="-sp"
        >
      </h2>
      <p class="profile__leadParagraph">
        コミュニティを盛り上げるため、<br class="-sp">日々活動中です。<br />
        レッスンやイベントでお会いしたら<br class="-sp">ぜひ声をかけてくださいね！
      </p>
    </section>
    <section class="profile__person">
      <div class="profile__personWrapper" id="saki">
        <div class="profile__personContents">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/saki.png" alt="saki" class="profile__image">
          <div class="profile__personText">
            <h3 class="profile__personInfo"><span class="profile__position">ナビゲーター</span> / <span class="profile__personName">saki</span></h3>
            <p class="profile__personDesc">
              心の学び歴20年の大ベテラン。幼少期からの波乱万丈な人生体験と培った価値観・思い込みを「脳トレ」で昇華し、どん底からの180°人生変革を体現→頼れるセラピストへ転身。女性の”駆け込み寺”として、不倫・復縁・借金など深刻な問題も軽やかに紐解き。”問題に振り回される人生から、問題をヒントに望む現実を自ら創り出す生き方へ。”
            </p>
          </div>
        </div>
        <div class="profile__personMore">
          <p class="profile__personMoreHeading">
            <span class="sr-only">コミュニティメンバーが語るmiiさんってこんな人</span>
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/member_saki.svg"
                alt="コミュニティメンバーが語るsakiさんってこんな人"
                class="-pc"
            >
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/member_saki-sp.svg"
                alt="コミュニティメンバーが語るsakiさんってこんな人"
                class="-sp"
            >
          </p>
          <a href="<?php echo get_permalink(3832) ?>" class="profile__moreButton">SEE MORE</a>
        </div>
      </div>
      <div class="profile__personWrapper" id="mii">
        <div class="profile__personContents">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/mii.png" alt="mii" class="profile__image">
          <div class="profile__personText">
            <h3 class="profile__personInfo"><span class="profile__position">ナビゲーター</span> / <span class="profile__personName">みい</span></h3>
            <p class="profile__personDesc">
              セカンド女子の恋愛～人生全般に悩み10年のセッションジプシーを経験、最後の砦として「脳トレ」の世界に足を踏み入れる。全ての元凶となっていた”いい子グセ"を手放し、人生の舵を自分で取ることを決意。自分迷子も卒業。彼とのオリジナルな関係を築きながら日々最高の人生へ。セカンド女子から本名彼女になれないなんて誰が決めたの？♡
            </p>
          </div>
        </div>
        <div class="profile__personMore">
          <p class="profile__personMoreHeading">
            <span class="sr-only">コミュニティメンバーが語るみいさんってこんな人</span>
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/member_mii.svg"
                alt="コミュニティメンバーが語るみいさんってこんな人"
                class="-pc"
            >
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/member_mii-sp.svg"
                alt="コミュニティメンバーが語るみいさんってこんな人"
                class="-sp"
            >
          </p>
          <a href="<?php echo get_permalink(3837) ?>" class="profile__moreButton">SEE MORE</a>
        </div>
      </div>
      <div class="profile__personWrapper" id="obara">
        <div class="profile__personContents">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/ayaka.png" alt="小原 彩夏" class="profile__image">
          <div class="profile__personText">
            <h3 class="profile__personInfo"><span class="profile__position">運営統括</span> / <span class="profile__personName">小原 彩夏</span></h3>
            <p class="profile__personDesc">
              大学在学中に「脳トレ」と出会い、いつしかコミュニティの規範・模範とも言える存在に。人生の伴走者として個人セッション、恋愛特化の独自HP運営を行う。「二度と好きにならない」と言われた彼と復縁5年目、幸せな恋人関係を更新中。2020年薬剤師（4年従事）を卒業＆セラピストとして独立。”人生の質=QOL"に重きを置いている。
            </p>
          </div>
        </div>
        <div class="profile__personMore">
          <p class="profile__personMoreHeading">
            <span class="sr-only">コミュニティメンバーが語る彩夏さんってこんな人</span>
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/member_ayaka.svg"
                alt="コミュニティメンバーが語る彩夏さんってこんな人"
                class="-pc"
            >
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/member_ayaka-sp.svg"
                alt="コミュニティメンバーが語る彩夏さんってこんな人"
                class="-sp"
            >
          </p>
          <a href="<?php echo get_permalink(3830) ?>" class="profile__moreButton">SEE MORE</a>
        </div>
      </div>
      <div class="profile__personWrapper" id="etoh">
        <div class="profile__personContents">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/yuki.png" alt="江藤 有紀" class="profile__image">
          <div class="profile__personText">
            <h3 class="profile__personInfo"><span class="profile__position">代表</span> / <span class="profile__personName">江藤 有紀</span></h3>
            <p class="profile__personDesc">
              冴えない”ゲロ時代"を「脳トレ」で大逆転させ、2013年セラピストとして独立、2016年「脳トレ」コミュニティ発足。"心のケア"を女性の美しさの象徴に掲げ、一切の悩みなく人生謳歌する女性を増やすべく活動中。女性の魅力は内面から。心のケアは「脳トレ」から。2017年夫婦で会社設立。公私共にパワーアップを続けている。
            </p>
          </div>
        </div>
        <div class="profile__personMore">
          <p class="profile__personMoreHeading">
            <span class="sr-only">コミュニティメンバーが語る有紀さんってこんな人</span>
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/member_yuki.svg"
                alt="コミュニティメンバーが語る有紀さんってこんな人"
                class="-pc"
            >
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/profile/member_yuki-sp.svg"
                alt="コミュニティメンバーが語る有紀さんってこんな人"
                class="-sp"
            >
          </p>
          <a href="<?php echo get_permalink(3827) ?>" class="profile__moreButton">SEE MORE</a>
        </div>
      </div>
    </section>

<?php
get_sidebar();
get_footer();
