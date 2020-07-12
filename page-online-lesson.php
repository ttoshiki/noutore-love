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

	<main class="online-lesson__main">
    <h2 class="online-lesson__online-lessonHeading">
      <span class="sr-only">「脳トレ」オンラインレッスンご案内</span>
      <img
      src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/online_lesson_header.svg"
      alt="「脳トレ」オンラインレッスンご案内"
      class="-pc"
      >
      <img
      src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/online_lesson_header-sp.svg"
      alt="「脳トレ」オンラインレッスンご案内"
      class="-sp"
      >
    </h2>
    <div class="online-lesson__mainVisualWrapper">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/main_visual.png" alt="" class="online-lesson__mainVisual -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/main_visual-sp.png" alt="" class="online-lesson__mainVisual -sp">
    </div>
    <section class="online-lesson__about">
      <h2 class="online-lesson__aboutHeading">
        <span class="sr-only">「脳トレ」オンラインレッスンとは？</span>
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/about_header.svg"
            alt="「脳トレ」オンラインレッスンとは？"
            class="-pc"
        >
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/about_header-sp.svg"
            alt="「脳トレ」オンラインレッスンとは？"
            class="-sp"
        >
      </h2>
      <p class="online-lesson__aboutParagraph">
        <mark class="online-lesson__aboutParagraphMark">引き寄せの法則・脳科学・量子力学</mark>をベースに「現実がどのように創られているか？」の仕組みを学び、<br class="-pc" /><mark class="online-lesson__aboutParagraphMark">現実を意図的に動かすスキルを身につける</mark>、6ヶ月のオンライン＆リアルスクールです。<br />
        2016年にスタートし、在籍・卒業メンバーは<mark class="online-lesson__aboutParagraphMark">350名以上</mark>。<br />
        “特定の誰かがうまくいった方法”ではなく、<mark class="online-lesson__aboutParagraphMark">“誰にでも適用されるスキルと仕組み”</mark>を<br class="-pc" /><mark class="online-lesson__aboutParagraphMark">体系的に学べる</mark>ため、<mark class="online-lesson__aboutParagraphMark">再現性の高さに定評</mark>があります。
      </p>
      <div class="buttonWrapper online-lesson">
        <a href="#" class="button">
          <div class="buttonInner">
          <div class="buttonIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
          <span>メンバーの声</span>
          </div>
        </a>
      </div>
      <h2 class="online-lesson__overviewHeading">
        <span class="sr-only">レッスン内容の概要</span>
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/overview_header.svg"
            alt="レッスン内容の概要"
        >
      </h2>
      <p class="online-lesson__aboutParagraph">
        <mark class="online-lesson__aboutParagraphMark">6つのサポートで現実をサクサク動かしていく</mark>「脳トレ」を効果的に身につけることができます。<br />
        <mark class="online-lesson__aboutParagraphMark">世界中どこに住んでいても、忙しい人でも、ご自身のペースでトレーニングできる</mark>よう、<br />
        サポート体制を整えていますので、安心してご自分のペースで進めてくださいね。<br class="-pc" />さらに「脳トレ」を深めたい人に向けて、<mark class="online-lesson__aboutParagraphMark">再受講制度</mark>や<mark class="online-lesson__aboutParagraphMark">セッション提供者向けコース</mark>もあります。
      </p>
    </section>
    <section class="online-lesson__steps">
      <h2 class="online-lesson__stepsHeading">
        <span class="sr-only">このボリュームがあなたの頑固な現実にアプローチする！</span>
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/approach_board.png"
            alt="このボリュームがあなたの頑固な現実にアプローチする！"
        >
      </h2>
      <div class="online-lesson__step -step1">
        <h2 class="online-lesson__step1Heading">
          <span class="sr-only">「脳トレ」の基本知識を動画で学ぶ</span>
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step1_header.svg"
              alt="「脳トレ」の基本知識を動画で学ぶ"
          >
        </h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step1_text-sp.svg" alt="充実の動画26本!!" class="online-lesson__step1Text -sp">
        <div class="online-lesson__stepsFeatures">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step1_text.svg" alt="充実の動画26本!!" class="online-lesson__step1Text -pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step1_icon.svg" alt="24H" class="online-lesson__step1Icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step1_image.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step1_image@2x.jpg" alt="" class="online-lesson__step1Image">
        </div>
        <p class="online-lesson__stepParagraph">ネット環境があれば、<strong>パソコンでもスマホでも、24時間いつでもどこでも見ることが可能。</strong>繰り返し動画を視聴することで、自然と<strong>「サクサク現実を変えていく人の脳内設定」を取り入れることができます。</strong></p>
        <div id="online-lesson__modal">
          <button href="" class="online-lesson__stepsButton" @click="openModal">
            <div class="buttonIcon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/icon_angle-pink.svg" alt=""></div>
            <span>動画目次はこちら</span>
          </button>
          <open-modal v-show="showContent" v-on:from-child="closeModal">
            <h2 class="online-lesson-movie__heading">
              <span class="sr-only">「脳トレ」オンラインレッスン動画目次</span>
              <img
                src="/wp/wp-content/themes/noutore-love/assets/img/online-lesson/online-lesson_movie_header.svg"
                alt="「脳トレ」オンラインレッスン動画目次"
                class="-pc"
              >
              <img
                src="/wp/wp-content/themes/noutore-love/assets/img/online-lesson/online-lesson_movie_header-sp.svg"
                alt="「脳トレ」オンラインレッスン動画目次"
                class="-sp"
              >
            </h2>
            <h3 class="online-lesson-movie__subHeading">プロローグ</h3>
            <ol class="online-lesson-movie__list">
              <li class="online-lesson-movie__item">①オーダーは１００％通る</li>
            </ol>
            <h3 class="online-lesson-movie__subHeading">【STEP１】「脳トレ」入門講座</h3>
            <ol class="online-lesson-movie__list">
              <li class="online-lesson-movie__item">② want toとhave toについて</li>
              <li class="online-lesson-movie__item">③ ピュアハート満たしの重要性</li>
              <li class="online-lesson-movie__item">④ オーダーを最速で通す自分至上主義</li>
              <li class="online-lesson-movie__item">⑤ エフィカシー（クロックサイクル）について</li>
              <li class="online-lesson-movie__item">⑥ 現実が作られる仕組みについて</li>
            </ol>
            <h3 class="online-lesson-movie__subHeading">【STEP2】「脳トレ」基礎講座</h3>
            <ol class="online-lesson-movie__list">
              <li class="online-lesson-movie__item">⑦ ゲスい・かっこ悪い自分を認めることのメリット</li>
              <li class="online-lesson-movie__item">⑧ 必ず通るオリジナルオーダーの作り方</li>
              <li class="online-lesson-movie__item">⑨ ネガティブ感情の美味しい使い方</li>
              <li class="online-lesson-movie__item">⑩ 重要度を自由自在に操る方法</li>
            </ol>
            <h3 class="online-lesson-movie__subHeading">【STEP3】脳の機能について学ぶ講座</h3>
            <ol class="online-lesson-movie__list">
              <li class="online-lesson-movie__item">⑪ 心理的盲点（スコトーマ）とフレーム</li>
              <li class="online-lesson-movie__item">⑫ オーダー力を下げる意識の出張について</li>
              <li class="online-lesson-movie__item">⑬ 引き寄せ力を上げるRASについて</li>
              <li class="online-lesson-movie__item">⑭ 知識があっても現実が動かない事例</li>
              <li class="online-lesson-movie__item">⑮ 叶う意図と叶わない期待について</li>
            </ol>
            <h3 class="online-lesson-movie__subHeading">【STEP4】<br class="-sp">人間関係マスターになる講座</h3>
            <ol class="online-lesson-movie__list">
              <li class="online-lesson-movie__item">⑯ 相手が別人になるパラレルオーダー</li>
              <li class="online-lesson-movie__item">⑰ の可能性を引き出す「高く観る」スキルについて</li>
              <li class="online-lesson-movie__item">⑱ オーダーの進み具合を把握する方法</li>
              <li class="online-lesson-movie__item">⑲ 損得勘定を手放すと莫大な利息がついてくる件について</li>
              <li class="online-lesson-movie__item">⑳ 人生を変えるメンターとの付き合い方</li>
            </ol>
            <h3 class="online-lesson-movie__subHeading">【STEP5】恋愛・結婚・<br class="-sp">パートナーシップを深める講座</h3>
            <ol class="online-lesson-movie__list">
              <li class="online-lesson-movie__item">㉑ 相手が離れるクレーム・相手を虜にするピュアハート</li>
              <li class="online-lesson-movie__item">㉒ 恋愛・結婚をサクッと進める脳内設定を手に入れる</li>
              <li class="online-lesson-movie__item">㉓ 最高にカッコイイ彼を登場させる方法</li>
              <li class="online-lesson-movie__item">㉔ ２人揃って進化し続ける最強パートナーシップの作り方</li>
              <li class="online-lesson-movie__item">㉕ 言えない恋愛（不倫）が起こる仕組みと進め方</li>
            </ol>
            <h3 class="online-lesson-movie__subHeading">番外編　季節診断</h3>
            <ol class="online-lesson-movie__list">
              <li class="online-lesson-movie__item">㉖ 人間関係をスムーズに構築する４つの季節の活用法・相性について</li>
            </ol>
          </open-modal>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_bubble.png" alt="" class="online-lesson__stepsBubble -pc">
        <div class="online-lesson__step1_2_roadWrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step1_2_road-sp.svg" alt="" class="online-lesson__step1_2 -sp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_snake-sp.png" alt="" class="online-lesson__stepsSnake -sp">
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_trees.png" alt="" class="online-lesson__stepsTrees -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step1_2_road.svg" alt="" class="online-lesson__step1_2 -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_snake.png" alt="" class="online-lesson__stepsSnake -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_kusa.png" alt="" class="online-lesson__stepsKusa -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_flower.png" alt="" class="online-lesson__stepsFlower -pc">
      <div class="online-lesson__step -step2">
        <h2 class="online-lesson__step2Heading">
          <span class="sr-only">月2回のグループセッションでメンターに直接相談する（対面・オンライン）</span>
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_header.svg"
              alt="月2回のグループセッションでメンターに直接相談する（対面・オンライン）"
              class="-pc"
          >
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_header-sp.svg"
              alt="月2回のグループセッションでメンターに直接相談する（対面・オンライン）"
              class="-sp"
          >
        </h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_text-sp.svg" alt="レッスン改定で回数が倍以上に！" class="online-lesson__step2Text -sp">
        <div class="online-lesson__stepsFeatures">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_text.svg" alt="レッスン改定で回数が倍以上に！" class="online-lesson__step2Text -pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_icon.svg" alt="" class="online-lesson__step2Icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_image.jpg" alt="" class="online-lesson__step2Image">
        </div>
        <p class="online-lesson__stepParagraph">現実をダイナミックに動かすためには、その人<strong>専用に個別カスタマイズされたアドバイス・サポートが必須</strong>です。ただ知識を入れるだけではなく、<strong>直接メンターに相談することでインプットとアウトプットを行います。</strong></p>
        <div class="online-lesson__chargeWrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/charge.svg" alt="担当" class="online-lesson__chargeImage">
          <div class="online-lesson__charger">
            <div class="online-lesson__chargerIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
            <span class="online-lesson__chargeName">saki</span>
          </div>
          <div class="online-lesson__charger">
            <div class="online-lesson__chargerIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
            <span class="online-lesson__chargeName">みい</span>
          </div>
        </div>
        <h2 class="online-lesson__step2SubHeading">
          <div class="online-lesson__step2SubHeadingWrapper">
            <span class="sr-only">毎回10回、主要都市で開催！</span>
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_subHeader.svg"
                alt="毎月10回、主要都市で開催！"
                class="online-lesson__step2SubHeadingImage -pc"
            >
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_subHeader-sp.svg"
                alt="毎月10回、主要都市で開催！"
                class="online-lesson__step2SubHeadingImage -sp"
            >
          </div>
        </h2>
        <div class="online-lesson__stepsSchedules">
          <span class="online-lesson__stepsSchedule">
            <div class="online-lesson__stepsEvenAlignment">
              <span>東</span><span>京</span>
            </div>
            <span class="online-lesson__stepsSmall">（対面）</span>
          </span>
          <span class="online-lesson__stepsSchedule">
            <div class="online-lesson__stepsEvenAlignment">
              <span>京</span><span>都</span>
            </div>
            <span class="online-lesson__stepsSmall">（対面）</span>
          </span>
          <span class="online-lesson__stepsSchedule">
            zoom
            <span class="online-lesson__stepsSmall">（オンライン）</span>
          </span>
          <span class="online-lesson__stepsSchedule">
            全国各地
            <span class="online-lesson__stepsSmall">（対面or<br />オンライン）</span>
          </span>
        </div>
        <p class="online-lesson__stepsScheduleParagraph">ご都合の良い回を選んで<br class="-sp"><mark class="online-lesson__stepsMark">月2回まで</mark>ご参加ください</p>
        <div class="online-lesson__step2_3_roadWrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_3_road-sp.svg" alt="" class="online-lesson__step2_3 -sp">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_kusa-sp.png" alt="" class="online-lesson__stepsKusa -sp">
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_butterfly.png" alt="" class="online-lesson__stepsButterfly -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step2_3_road.svg" alt="" class="online-lesson__step2_3 -pc">
      <div class="online-lesson__step -step3">
        <h2 class="online-lesson__step3Heading">
          <span class="sr-only">過去メンバーの相談・回答を読んでヒントを得る</span>
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step3_header.svg"
              alt="過去メンバーの相談・回答を読んでヒントを得る"
          >
        </h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step3_text-sp.svg" alt="恋愛・結婚・夫婦間・仕事・お金・家族・美容etc" class="online-lesson__step3Text -sp">
        <div class="online-lesson__stepsFeatures">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step3_text.svg" alt="恋愛・結婚・夫婦間・仕事・お金・家族・美容etc" class="online-lesson__step3Text -pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step3_icon.svg" alt="" class="online-lesson__step3Icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step3_image.jpg" alt="" class="online-lesson__step3Image">
        </div>
        <p class="online-lesson__stepParagraph">
          今まで投稿されたメンバーからの相談を公開しています。<br />
          <strong>相談件数は500件超</strong>。相談投稿に対して、江藤有紀を含む、今は<strong>予約も取れないセッション提供者から返信</strong>をしています。過去のメンバーからのリアルな相談と、それに対しての回答は、あなたの<strong>オーダーを通すヒントの宝庫</strong>です。
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step3_4_road-sp.svg" alt="" class="online-lesson__step3_4 -sp">
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step3_4_road.svg" alt="" class="online-lesson__step3_4 -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_bird.png" alt="" class="online-lesson__stepsBird -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_flamingo.png" alt="" class="online-lesson__stepsFlamingo -pc">
      <div class="online-lesson__step -step4">
        <h2 class="online-lesson__step4Heading">
          <span class="sr-only">コミュニティメンバー限定の成功報告コーナーを使う</span>
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step4_header.svg"
              alt="コミュニティメンバー限定の成功報告コーナーを使う"
          >
        </h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step4_text-sp.svg" alt="よりリアルにイメージ！" class="online-lesson__step4Text -sp">
        <div class="online-lesson__stepsFeatures">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step4_text.svg" alt="よりリアルにイメージ！" class="online-lesson__step4Text -pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step4_icon.svg" alt="" class="online-lesson__step4Icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step4_image.jpg" alt="" class="online-lesson__step4Image">
        </div>
        <p class="online-lesson__stepParagraph">
          現役メンバーはもちろん卒業メンバーも含め、<strong>オーダーが通った報告や、現実が動いている進捗シェアコーナー</strong>を設けています。<br />
          表にはなかなか出てこない、<strong>オーダーを通している最中のリアルな情報</strong>を知ることができます。ぜひ読むだけではなく、ご自身のシェアも投稿してみてくださいね。
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step4_5_road-sp.svg" alt="" class="online-lesson__step4_5 -sp">
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_leafs.png" alt="" class="online-lesson__stepsLeafs -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step4_5_road.svg" alt="" class="online-lesson__step4_5 -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_apple.png" alt="" class="online-lesson__stepsApple -pc">
      <div class="online-lesson__step -step5">
        <h2 class="online-lesson__step5Heading">
          <span class="sr-only">タイムリーなコラムを読む</span>
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step5_header.svg"
              alt="タイムリーなコラムを読む"
              class="-pc"
          >
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step5_header-sp.svg"
              alt="タイムリーなコラムを読む"
              class="-sp"
          >
        </h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step5_text-sp.svg" alt="150本超え！" class="online-lesson__step5Text -sp">
        <div class="online-lesson__stepsFeatures">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step5_text.svg" alt="150本超え！" class="online-lesson__step5Text -pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step5_icon.svg" alt="" class="online-lesson__step5Icon">
        </div>
        <p class="online-lesson__stepParagraph"><strong>リアルタイムでオーダーを通しているサンプル</strong>をコラムでお届けします。</p>
        <div class="online-lesson__chargeWrapper -step5">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/charge.svg" alt="担当" class="online-lesson__chargeImage">
          <div class="online-lesson__chargerWrapper">
            <div class="online-lesson__charger">
              <div class="online-lesson__chargerIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
              <span class="online-lesson__chargeName">江藤有紀</span>
            </div>
            <div class="online-lesson__charger">
              <div class="online-lesson__chargerIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
              <span class="online-lesson__chargeName">小原彩夏</span>
            </div>
          </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step5_6_road-sp.svg" alt="" class="online-lesson__step5_6 -sp">
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step5_6_road.svg" alt="" class="online-lesson__step5_6 -pc">
      <div class="online-lesson__step -step6">
        <h2 class="online-lesson__step6Heading">
          <span class="sr-only">限定セミナーに参加する</span>
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step6_header.svg"
              alt="限定セミナーに参加する"
              class="-pc"
          >
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step6_header-sp.svg"
              alt="限定セミナーに参加する"
              class="-sp"
          >
        </h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step6_text-sp.svg" alt="突き抜けるきっかけ作りに！" class="online-lesson__step6Text -sp">
        <div class="online-lesson__stepsFeatures">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step6_text.svg" alt="突き抜けるきっかけ作りに！" class="online-lesson__step6Text -pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step6_icon.svg" alt="" class="online-lesson__step6Icon">
        </div>
        <p class="online-lesson__stepParagraph"><strong>不定期でゲストを迎えたセミナー</strong>を開催します。（東京対面・録画あり）</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step6_end_road-sp.svg" alt="" class="online-lesson__step6_end -sp">
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/step6_end_road.svg" alt="" class="online-lesson__step6_end -pc">
      <div class="online-lesson__welcome">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/welcome_text.svg" alt="">
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/flow_petal.png" alt="" class="online-lesson__stepsPetal -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/flow_petal.png" alt="" class="online-lesson__stepsPetal -sp">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/steps_footer.png" alt="" class="online-lesson__stepsFooter -pc">
    </section>
    <section class="online-lesson__flow">
      <div class="online-lesson__flowInner">
        <h2 class="online-lesson__flowHeading">
          <span class="sr-only">レッスン参加までの流れ</span>
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/flow_header.svg"
              alt="レッスン参加までの流れ"
              class="-pc"
          >
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/flow_header-sp.svg"
              alt="レッスン参加までの流れ"
              class="-sp"
          >
        </h2>
        <h2 class="online-lesson__flowSubHeading">【申込フォームよりエントリー】</h2>
        <p class="online-lesson__flowParagraph">
          奇数月の25日～新メンバー募集開始になります。（メルマガ会員優先）<br />
          エントリー完了後に届く自動返信メールの決済URLからお手続きをお願いします。<br />
          レッスン開始月の1日になりましたら会員サイトへログインするための会員登録用メールが届きます。
        </p>
        <h2 class="online-lesson__flowSubHeading">【レッスン参加後の流れ】</h2>
        <p class="online-lesson__flowParagraph">はじめに会員サイトの「レッスンの進め方」をご確認ください。</p>
        <h2 class="online-lesson__flowSubHeading">【月額決済につきまして】</h2>
        <p class="online-lesson__flowParagraph">月会費はStripeというオンラインクレジット決済を利用しています。最初に決済いただいた日が、毎月の決済日となります。</p>
      </div>
    </section>
    <section class="online-lesson__recruit">
      <h2 class="online-lesson__recruitHeading">
        <span class="sr-only">2020年8月スタートメンバー募集要綱</span>
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/online-lesson/recruit_header.svg"
            alt="2020年8月スタートメンバー募集要綱"
        >
      </h2>
      <ul class="online-lesson__recruitOverviewList">
        <li class="online-lesson__recruitOverviewItem">
          <dl>
            <dt>募集人数</dt>
            <dd>30名</dd>
          </dl>
        </li>
        <li class="online-lesson__recruitOverviewItem">
          <dl>
            <dt>募集期間</dt>
            <dd>7月25日〜末日</dd>
          </dl>
        </li>
        <li class="online-lesson__recruitOverviewItem">
          <dl class="online-lesson">
            <dt>参加費用</dt>
            <dd class="-pc">月額30,000円（税別）+入学金30,000円（税別）</dd>
            <dd class="-sp">月額30,000円（税別）<span class="online-lesson__recruitSpan">+</span>入学金30,000円（税別）</dd>
          </dl>
        </li>
      </ul>
      <span class="online-lesson__flowCaution">※事務手続きの関係上、原則クレジット決済のみとなります。</span>
      <div class="online-lesson__terms">
        <h3 class="online-lesson__termsHeading">利用規約</h3>
        <p>・お申し込みをいただいた時点で、下記の内容に同意いただいたものとして進めます。</p>
        <p>・本レッスンは「脳トレ」の概念を伝えるものです。取得度には個人差がありますので、オンラインレッスンに参加するだけで希望の変化が現れることをお約束するものではありません。</p>
        <p>・デジタルコンテンツという特性上、レッスン開始後（会員サイトへのログイン後）のキャンセルは承ることができません。</p>
        <p>・お申し込み後3日以内にレッスン費用を決済いただき、決済を持って確定といたします。決済後のキャンセルはレッスン開始月の1日以前の場合、入学金を除いた金額を返金いたします。</p>
        <p>・レッスン規約等が改定された場合の告知は、ウェブサイト上への表示と申込者への連絡先へ通知します。</p>
      </div>
      <div id="online-lesson__termsAgreeWrapper">
        <div class="online-lesson__termsAgree">
          <input type="checkbox" id="agree" value="同意する" :checked="isChecked" @change="toggleChecked" class="online-lesson__termsCheckbox">
          <label for="agree">利用規約に同意する</label>
        </div>
        <span v-if="hasError" class="online-lesson__termsError">※利用規約に同意が行われていません</span>
        <div class="buttonWrapper">
          <a href="https://39auto.biz/namakemono-yuki/touroku/entryform15.htm" class="button" @click="consentCheck">
            <div class="buttonInner">
              <span>お申し込みはこちら</span>
            </div>
          </a>
        </div>
      </div>
    </section>

<?php
get_sidebar();
get_footer();
