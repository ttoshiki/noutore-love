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

	<main class="home__main">
    <h2 class="home__diagnosisButtonWrapper">
      <span class="sr-only">「脳トレ」診断</span>
      <a href="<?php echo home_url('/noutore-shindan/') ?>">
			<img
				src="<?php echo get_template_directory_uri(); ?>/assets/img/home/diagnosis_button.svg"
        alt="「脳トレ」診断"
        class="home__diagnosisButtonImage -pc"
      >
			<img
				src="<?php echo get_template_directory_uri(); ?>/assets/img/home/diagnosis_button-sp.svg"
        alt="「脳トレ」診断"
        class="home__diagnosisButtonImage -sp"
      >
      </a>
		</h2>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/main_visual.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/main_visual@2x.jpg" alt="" class="home__mainVisual -pc">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/main_visual-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/main_visual-sp@2x.jpg" alt="" class="home__mainVisual -sp">
    <section class="home__news">
      <div class="home__newsArea">
        <div class="home__newsAreaIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_leaf.svg'); ?></div>
        <ul class="home__newsList">
          <?php
            $args = array(
              'post_type' => 'news',
              'posts_per_page' => 3
            );
            $the_query = new WP_Query($args); if($the_query->have_posts()):
          ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <li id="post-<?php the_ID(); ?>" <?php post_class('home__newsItem'); ?>>
              <h2 class="home__newsItemHeader"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
            </li>
            <?php endwhile; ?>
            <?php else: ?>
            <!-- 投稿が無い場合の処理 -->
          <?php endif; ?>
        </ul>
      </div>
      <a href="<?php echo home_url('/news/') ?>" class="home__newsButton">NEWS LIST</a>
    </section>
    <section class="home__about" id="home-about">
      <div class="home__aboutInner">
        <div class="home__aboutContents">
          <h3 class="home__aboutHeadingSub">
            <span class="sr-only">現役＆卒業メンバー350名超え！</span>
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/home/about_noutore_header01.svg"
              alt="現役＆卒業メンバー350名超え！"
              class="-pc"
            >
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/home/about_noutore_header01-sp.svg"
              alt="現役＆卒業メンバー350名超え！"
              class="-sp"
            >
          </h3>
          <h2 class="home__aboutHeading">
            <span class="sr-only">「脳トレ」オンラインレッスンとは？</span>
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/home/about_noutore_header02.svg"
              alt="「脳トレ」オンラインレッスンとは？"
              class="-pc"
            >
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/home/about_noutore_header02-sp.svg"
              alt="「脳トレ」オンラインレッスンとは？"
              class="-sp"
            >
          </h2>
          <p class="home__leadSentence">
            「脳トレ」オンラインレッスンは、<br class="-sp">脳と心の仕組みを学んで、<br class="-pc" /><mark class="highlight">現実を思う通りに<br class="-sp">創造していくスキルを学ぶ場所</mark>です。<br />
            <mark class="highlight">引き寄せの法則</mark>・<mark class="highlight">脳科学</mark>・<mark class="highlight">コーチングを<br class="-sp">ベース</mark>にしており、<br class="-pc" />誰にでも体得できるよう<br class="-sp">体系化されたカリキュラムです。<br />
            メンバーからは<mark class="highlight">「再現性の高さが１番の魅力」</mark><br class="-sp">という声をいただいています。<br />
            <span class="home__leadSentencePeriod">（2016年7月開始・2020年現在15期目）</span>
          </p>
          <h2 class="home__aboutSlideHeading">
            <span class="sr-only">直接手をくださずとも現実が動く「脳トレ」って何？</span>
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/home/about_noutore_header03.svg"
              alt="直接手をくださずとも現実が動く「脳トレ」って何？"
              class="-pc"
            >
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/home/about_noutore_header03-sp.svg"
              alt="直接手をくださずとも現実が動く「脳トレ」って何？"
              class="-sp"
            >
          </h2>
          <div id="slider">
            <hooper :wheel-control="false">
              <slide>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/slide_1.jpg" alt="">
              </slide>
              <slide>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/slide_2.jpg" alt="">
              </slide>
              <slide>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/slide_3.jpg" alt="">
              </slide>
              <slide>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/slide_4.jpg" alt="">
              </slide>
              <slide>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/slide_5.jpg" alt="">
              </slide>
              <hooper-navigation slot="hooper-addons"></hooper-navigation>
              <hooper-pagination slot="hooper-addons"></hooper-pagination>
            </hooper>
          </div>

        </div>
      </div>
    </section>
    <section class="home__genre" id="home-genre">
      <h2 class="home__genreHeading">
        <span class="sr-only">「脳トレ」が効果的なジャンル</span>
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/home/genre_header01.svg"
          alt="「脳トレ」が効果的なジャンル"
          class="-pc"
        >
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/home/genre_header01-sp.svg"
          alt="「脳トレ」が効果的なジャンル"
          class="-sp"
        >
      </h2>
      <p class="home__leadSentence">
        全てのジャンルに対応可能です！<br />お悩みの元を紐解いていくと、実は<br class="-sp">「人間関係」に行き着くことがほとんど。<br />
        根っことなる人間関係全般が<br class="-sp">「脳トレ」は得意分野です！
      </p>
      <div class="home__genreChart">
        <div class="home__genreChartInner">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/genre_heading_icon.svg" alt="" class="home__genreChartHeadingIcon">
          <h2 class="home__genreChartHeading">人間関係全般</h2>
          <div class="home__genreChartArrows">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/genre_arrow01.svg" alt="" class="home__genreArrow -left -pc">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/genre_arrow02.svg" alt="" class="home__genreArrow -center -pc">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/genre_arrow03.svg" alt="" class="home__genreArrow -right -pc">
          </div>
          <ul class="home__genreList">
            <li class="home__genreItem">
              <h3 class="home__genreContents">
                <span class="sr-only">パートナーシップ系</span>
                <span class="sr-only">恋愛・結婚・夫婦間・復縁・秘密の関係</span>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/home/genre_item01.svg"
                  alt="パートナーシップ系"
                  class=""
                  >
              </h3>
            </li>
            <li class="home__genreItem">
              <h3 class="home__genreContents">
                <span class="sr-only">お仕事系</span>
                <span class="sr-only">転職・昇格・独立・ビジネス・同僚上司</span>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/home/genre_item02.svg"
                  alt="お仕事系"
                  class=""
                  >
              </h3>
            </li>
            <li class="home__genreItem">
              <h3 class="home__genreContents">
                <span class="sr-only">その他</span>
                <span class="sr-only">家族・美容・借金・親子関係</span>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/home/genre_item03.svg"
                  alt="お仕事系"
                  class=""
                  >
              </h3>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="home__support" id="home-support">
      <h3 class="home__supportSubHeading">
        <span class="sr-only">いつでもどこでも学べます</span>
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/home/support_header01.svg"
          alt="いつでもどこでも学べます"
          >
      </h3>
      <h2 class="home__supportHeading">
        <span class="sr-only">オンラインレッスン6つのサポート</span>
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/home/support_header02.svg"
          alt="オンラインレッスン6つのサポート"
          class="-pc"
        >
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/home/support_header02-sp.svg"
          alt="オンラインレッスン6つのサポート"
          class="-sp"
        >
      </h2>
      <p class="home__leadSentence">
        「脳トレ」を身につけることに特化した<br />
        ボリュームたっぷりな<br class="-sp">ご提供内容となっております！
      </p>
      <ul class="home__supportList">
        <li class="home__supportItem -big">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/support01.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/support01@2x.png" alt="30本の動画" class="home__supportContent -large">
        </li>
        <li class="home__supportItem -big">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/support02.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/support02@2x.png" alt="月2回のグループセッション" class="home__supportContent -large">
        </li>
        <li class="home__supportItem -big">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/support03.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/support03@2x.png" alt="過去の相談500件超公開" class="home__supportContent -large">
        </li>
        <li class="home__supportItem -small">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/support04.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/support04@2x.png" alt="成功報告コーナー250件超公開" class="home__supportContent -small">
        </li>
        <li class="home__supportItem -small">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/support05.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/support05@2x.png" alt="タイムリーなコラム配信" class="home__supportContent -small">
        </li>
        <li class="home__supportItem -small">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/support06.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/support06@2x.png" alt="限定セミナー" class="home__supportContent -small">
        </li>
      </ul>
    </section>
    <section class="home__profile">
      <h2 class="home__profileHeading">
        <span class="sr-only">「脳トレ」運営チームプロフィール</span>
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/home/profile_header.svg"
          alt="「脳トレ」運営チームプロフィール"
          class="-pc"
        >
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/home/profile_header-sp.svg"
          alt="「脳トレ」運営チームプロフィール"
          class="-sp"
        >
      </h2>
      <ul class="home__profileList">
        <li class="home__profileItem">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/profile_saki.jpg" alt="ナビゲーター saki">
          <span class="home__profilePosition">ナビゲーター</span>
          <span class="home__profileName">saki</span>
        </li>
        <li class="home__profileItem">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/profile_mii.jpg" alt="ナビゲーター みい">
          <span class="home__profilePosition">ナビゲーター</span>
          <span class="home__profileName">みい</span>
        </li>
        <li class="home__profileItem">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/profile_s-ohara.jpg" alt="運営統括 小原 彩夏">
          <span class="home__profilePosition">運営統括</span>
          <span class="home__profileName">小原 彩夏</span>
        </li>
        <li class="home__profileItem">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/profile_y-etoh.jpg" alt="代表 江藤 有紀">
          <span class="home__profilePosition">代表</span>
          <span class="home__profileName">江藤 有紀</span>
        </li>
      </ul>
    </section>
    <section class="home__flow" id="home-flow">
      <div class="home__flowBlock">
        <h2 class="home__flowHeading">
          <span class="sr-only">レッスン参加までの流れ</span>
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/home/flow_header01.svg"
            alt="レッスン参加までの流れ"
            class="-pc"
          >
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/home/flow_header01-sp.svg"
            alt="レッスン参加までの流れ"
            class="-sp"
          >
        </h2>
        <ul class="home__flowList">
          <li class="home__flowItem">
            <dl>
              <dt>STEP1</dt>
              <dd>奇数月の25日〜新メンバー募集</dd>
            </dl>
          </li>
          <li class="home__flowItem">
            <dl>
              <dt>STEP2</dt>
              <dd>レッスン申し込み・決済</dd>
            </dl>
          </li>
          <li class="home__flowItem">
            <dl>
              <dt>STEP3</dt>
              <dd>会員サイトIDのお渡し</dd>
            </dl>
          </li>
        </ul>
        <span class="home__flowTriangle"></span>
        <p class="home__flowParagraph">開始月1日、<br class="-sp">会員アカウント連絡・ログイン開始</p>
        <hr class="home__flowDivider" />
        <h2 class="home__flowLessonHeading" id="home-flow-lesson">
          <span class="sr-only">レッスン費用について</span>
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/home/flow_header02.svg"
            alt="レッスン費用について"
            class="-pc"
          >
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/home/flow_header02-sp.svg"
            alt="レッスン費用について"
            class="-sp"
          >
        </h2>
        <p class="home__flowParagraph">入会金も含めて<br />30,000円×7回支払い</p>
      </div>
      <div class="buttonWrapper">
        <a href="#" class="button">
          <div class="buttonInner">
            <div class="buttonIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
            <span>お申し込みはこちら</span>
          </div>
        </a>
      </div>
    </section>
    <section class="home__howtoNoutore" id="home-howto-noutore">
      <h2 class="home__howtoNoutoreHeading">
        <span class="sr-only">オンラインレッスン以外で「脳トレ」を学びたい場合は？</span>
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/home/howto_noutore_header.svg"
          alt="オンラインレッスン以外で「脳トレ」を学びたい場合は？"
          class="-pc"
        >
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/home/howto_noutore_header-sp.svg"
          alt="オンラインレッスン以外で「脳トレ」を学びたい場合は？"
          class="-sp"
        >
      </h2>
      <div class="home__howtoNoutoreMethodWrapper">
        <div class="home__howtoNoutoreMethod -private">
          <h3 class="sr-only">マンツーマン</h3>
          <a href="http://reservation.noutore-love.com">
            <div class="home__howtoGroup -session">
              <div class="home__howtoNoutoreMethodIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
              <span class="home__howtoContent">個人<br />セッション</span>
            </div>
          </a>
        </div>
        <div class="home__howtoNoutoreMethod -selfLearning">
          <h3 class="sr-only">自主学習</h3>
          <a href="<?php echo home_url('/startbook/') ?>">
            <div class="home__howtoGroup -startbook">
              <div class="home__howtoNoutoreMethodIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
              <span class="home__howtoContent">スタート<br />ブック</span>
            </div>
          </a>
          <a href="https://noutore30days.info/">
            <div class="home__howtoGroup -challenge">
              <div class="home__howtoNoutoreMethodIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
              <span class="home__howtoContent">チャレンジ<br />30days</span>
            </div>
          </a>
          <a href="<?php echo home_url('/seminar-video/') ?>">
            <div class="home__howtoGroup -seminar">
              <div class="home__howtoNoutoreMethodIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
              <span class="home__howtoContent">セミナー<br />動画各種</span>
            </div>
          </a>
        </div>
      </div>
    </section>
    <hr class="home__sectionArrow">

    <section class="home__recommend" id="home-recommend">
      <h2 class="home__recommendHeading">
        <span class="sr-only">もっと「脳トレ」を知りたい方にオススメコンテンツ！</span>
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/home/recommend_header.svg"
          alt="もっと「脳トレ」を知りたい方にオススメコンテンツ！"
          class="-pc"
        >
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/home/recommend_header-sp.svg"
          alt="もっと「脳トレ」を知りたい方にオススメコンテンツ！"
          class="-sp"
        >
      </h2>
      <ul class="home__recommendList">
        <li class="home__recommendItem">
          <a href="<?php echo home_url("/column/") ?>">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>./assets/img/home/recommend_column.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/recommend_column@2x.jpg" alt="どんどん更新！コラム集" class="-pc">
              <img src="<?php echo get_template_directory_uri(); ?>./assets/img/home/recommend_column-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/recommend_column-sp@2x.jpg" alt="どんどん更新！コラム集" class="-sp">
            </div>
          </a>
        </li>
        <li class="home__recommendItem">
          <a href="<?php echo home_url("/noutore-shindan/") ?>">
            <img src="<?php echo get_template_directory_uri(); ?>./assets/img/home/recommend_diagnosis.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/recommend_diagnosis@2x.jpg" alt="あなたは何タイプ？脳トレ4タイプ診断" class="-pc">
            <img src="<?php echo get_template_directory_uri(); ?>./assets/img/home/recommend_diagnosis-sp.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/recommend_diagnosis-sp@2x.jpg" alt="あなたは何タイプ？脳トレ4タイプ診断" class="-sp">
          </a>
        </li>
      </ul>
    </section>
    <section class="home__lineAccount">
      <h2 class="home__lineAccountHeading">
        <span class="sr-only">相談したい！公式LINEアカウントはこちら</span>
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/home/line_account_header01.svg"
          alt="相談したい！公式LINEアカウントはこちら"
          class="-pc"
        >
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/home/line_account_header01-sp.svg"
          alt="相談したい！公式LINEアカウントはこちら"
          class="-sp"
        >
      </h2>
      <div class="home__lineAccountContents">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/line_account_smartphone.png" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/home/line_account_smartphone@2x.png" alt="" class="home__lineAccountImage">
        <div class="home__lineAccountContent">
          <p class="home__lineAccountParagraph">
            「私に合った学び方は？」など<br />
            ご相談を受け付けております。
          </p>
          <a href="https://39auto.biz/namakemono-yuki/touroku/entryform15.htm" class="home__lineAccountButton">@496jcxcd</a>
        </div>
      </div>
    </section>
    <section class="home__prArea">
      <?php get_template_part('template-parts/banners'); ?>
      <div class="home__twitterArea">
        <h3 class="home__prHeading">Twitter</h3>
        <a class="twitter-timeline" data-height="480" href="https://twitter.com/noutore_info?ref_src=twsrc%5Etfw">Tweets by noutore_info</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </section>

<?php
get_sidebar();
get_footer();
