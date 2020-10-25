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

	<main class="data__main">
    <div class="data__mainVisualWrapper">
      <h2 class="data__mainVisual">
        <span class="sr-only">数字でひも解く「脳トレコミュニティ」</span>
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/data/main_visual.svg"
          alt="「脳トレ」診断"
        >
      </h2>
      <img
        src="<?php echo get_template_directory_uri(); ?>/assets/img/data/magnifying_glass.svg"
        class="data__magnifying_glass"
      >
    </div>
    <section class="data__target">
      <div class="data__targetWrapper">
        <h2 class="data__targetHeading">対象</h2>
      </div>
      <p class="data__targetParagraph">
        2019年8月～2020年8月までに<br>
        脳トレオンラインレッスンに参加したメンバー<br>
        有効回答者数 96名<br class="-sp">（現役メンバー48名、卒業メンバー48名）
      </p>
    </section>
    <picture class="data__subheading">
      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/sub_heading-illust.webp" type="image/webp">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/sub_heading-illust.png" alt="数字は嘘つかない">
    </picture>
    <section class="data__people">
      <div class="data__peopleHeadings">
        <div class="data__peopleHeadingWrapper">
          <h2 class="data__peopleHeading">
            <span class="sr-only">数字でひも解く「脳トレコミュニティ」</span>
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/data/page_title_text.svg"
              alt="数字でひも解く「脳トレコミュニティ」"
            >
          </h2>
        </div>
        <div class="data__peopleSubHeadingWrapper">
          <h3 class="data__peopleSubheading">質問項目は全部で10問!!</h3>
        </div>
      </div>
      <ul class="data__peopleList">
        <li class="data__peopleItem -first">
          <picture class="data__questionPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_1-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_1.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_1-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_1.png" alt="居住地はどこですか？">
          </picture>
        </li>
        <li class="data__peopleItem -second">
          <picture class="data__questionPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_2-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_2.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_2-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_2.png" alt="平均年齢はいくつ？">
          </picture>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_2_speechBubble.png" alt="幅広" class="data__question2 speechBubble">
        </li>
        <li class="data__peopleItem -third">
          <picture class="data__questionPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_3-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_3.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_3-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_3.png" alt="婚姻状況">
          </picture>
        </li>
        <li class="data__peopleItem -fourth">
          <picture class="data__questionPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_4-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_4.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_4-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_4.png" alt="雇用形態">
          </picture>
        </li>
        <li class="data__peopleItem -fifth">
          <picture class="data__questionPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_5-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_5.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_5-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_5.png" alt="「脳トレ」オンラインレッスンに参加したきっかけは？">
          </picture>
        </li>
        <li class="data__peopleItem -sixth">
          <picture class="data__questionPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_6-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_6.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_6-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_6.png" alt="「脳トレ」オンラインレッスンに参加してよかったことは何ですか？">
          </picture>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_6_speechBubble.png" alt="1位" class="data__question6 speechBubble -pc">
        </li>
        <li class="data__peopleItem -seventh">
          <picture class="data__questionPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_7-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_7.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_7-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_7.png" alt="">
          </picture>
        </li>
      </ul>
    </section>
    <section class="data__gypsy">
      <div class="data__gypsyHeadingWrapper">
        <div class="data__gypsyHeadingInner">
          <h2 class="data__gypsyHeading">
            <strong class="data__gypsyHeadingStrong">流れ流れて<br class="-sp">「脳トレ」へ…</strong>
            参加者さんに歴史あり！<br class="-sp">引き寄せジプシー経験に迫る!!
          </h2>
          <span class="data__gypsyCaution">※ジプシーの定義は自己申告です</span>
          <picture class="data__gypsyHeadingBackground">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/gypsy_heading_bg-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/gypsy_heading_bg.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/gypsy_heading_bg-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/gypsy_heading_bg.png" alt="">
          </picture>
        </div>
      </div>
      <ul class="data__gypsyList">
        <li class="data__gypsyItem -first">
          <picture class="data__gypsyPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_1-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_1.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_1-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_1.png" alt="ジプシー経験">
          </picture>
        </li>
        <li class="data__gypsyItem -second">
          <picture class="data__gypsyPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_2-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_2.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_2-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_2.png" alt="ジプシー期間(回答数79人)">
          </picture>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_2_speechBubble.png" alt="Long!" class="data__questionGypsy2 speechBubble -pc">
        </li>
        <li class="data__gypsyItem -third">
          <picture class="data__gypsyPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_3-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_3.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_3-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_3.png" alt="ジプシー時代に学びに投資した金額は？">
          </picture>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_3_speechBubble.png" alt="うちの代表も元ジプシー" class="data__questionGypsy3 speechBubble -pc">
        </li>
        <li class="data__gypsyItem -fourth">
          <picture class="data__gypsyPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_4-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_4.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_4-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_4.png" alt="元ジプシー経験者の方へ「脳トレ」オンラインレッスンへ辿り着いた理由は？(複数回答可)">
          </picture>
        </li>
        <li class="data__gypsyItem -fifth">
          <picture class="data__gypsyPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_5-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_5.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_5-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_5.png" alt="">
          </picture>
          <picture class="data__gypsy">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_arrow-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_arrow.png" alt="矢印" class="data__questionGypsy6 arrow">
          </picture>
        </li>
        <li class="data__gypsyItem -sixth">
          <picture class="data__gypsyPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_6-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_6.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_6-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_6.png" alt="考察">
          </picture>
        </li>
      </ul>
    </section>
    <section class="data__image">
      <h2 class="data__imageHeading">
        <span class="sr-only">データから割り出す 「脳トレ」参加者さんIMAGE</span>
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/data/image_header.svg"
          alt="「脳トレ」診断"
        >
      </h2>
      <div class="data__imageWrapper">
        <span class="data__imagePicture">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/image_girl-sp.webp" media="(max-width: 768px)" type="image/webp">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/image_girl.webp" media="(min-width: 769px)" type="image/webp">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/image_girl-sp.png" media="(max-width: 768px)">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/image_girl.png" alt="「脳トレ」参加者さんイメージ">
        </span>
        <span>
          <span class="sr-only">関東在住</span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/image_speech_bubble01.svg" alt="関東在住" class="data__imageSpeechBubble -first">
        </span>
        <span>
          <span class="sr-only">33歳</span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/image_speech_bubble02.svg" alt="33歳" class="data__imageSpeechBubble -second">
        </span>
        <span>
          <span class="sr-only">未婚</span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/image_speech_bubble03.svg" alt="未婚" class="data__imageSpeechBubble -third">
        </span>
        <span>
          <span class="sr-only">会社員</span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/image_speech_bubble04.svg" alt="会社員" class="data__imageSpeechBubble -fourth">
        </span>
        <span>
          <span class="sr-only">悩み 恋愛＆結婚</span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/image_speech_bubble05.svg" alt="悩み 恋愛＆結婚" class="data__imageSpeechBubble -fifth">
        </span>
        <span>
          <span class="sr-only">目標 新たなビジョンを見つけたい！</span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/image_speech_bubble06.svg" alt="目標 新たなビジョンを見つけたい！" class="data__imageSpeechBubble -sixth">
        </span>
        <span>
          <span class="sr-only">1年の引き寄せジプシー経験有 25万円散財</span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/image_speech_bubble07.svg" alt="1年の引き寄せジプシー経験有 25万円散財" class="data__imageSpeechBubble -seventh">
        </span>
        <span>
          <span class="sr-only">学びの場では理論的な説明を欲します！</span>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/image_speech_bubble08.svg" alt="学びの場では理論的な説明を欲します！" class="data__imageSpeechBubble -eighth">
        </span>
      </div>
    </section>
    <section class="data__footer">
      <h2 class="data__footerHeading">
        <span class="sr-only">お楽しみいただけましたか？</span>
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/data/footer_heading.svg"
          alt="お楽しみいただけましたか？"
        >
      </h2>
      <div class="data__footerPageTitleWrapper">
        <h2 class="data__footerPageTitleHeading">
          <span class="sr-only">数字でひも解く「脳トレコミュニティ」</span>
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/data/page_title_text-primary.svg"
            alt="数字でひも解く「脳トレコミュニティ」"
          >
        </h2>
      </div>
      <p class="data__footerParagraph">
        ご興味ある方は<br>
        「脳トレ」オンラインレッスンへの<br>
        ご参加をお待ちしております。
      </p>
      <div class="buttonWrapper dataButton">
        <a href="<?php echo home_url('/online-lesson/'); ?>" class="button">
          <div class="buttonInner">
            <div class="buttonIcon"><?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?></div>
            <span>レッスン詳細</span>
          </div>
        </a>
      </div>
    </section>
<?php
get_sidebar();
get_footer();
