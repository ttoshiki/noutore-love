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
        有効回答者数 96名（現役メンバー48名、卒業メンバー48名）
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
        <li class="data__peopleItem">
          <picture class="data__questionPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_1-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_1.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_1-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_1.png" alt="居住地はどこですか？">
          </picture>
        </li>
        <li class="data__peopleItem">
          <picture class="data__questionPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_2-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_2.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_2-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_2.png" alt="平均年齢はいくつ？">
          </picture>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_2_speechBubble.png" alt="幅広" class="data__question2 speechBubble">
        </li>
        <li class="data__peopleItem">
          <picture class="data__questionPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_3-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_3.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_3-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_3.png" alt="婚姻状況">
          </picture>
        </li>
        <li class="data__peopleItem">
          <picture class="data__questionPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_4-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_4.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_4-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_4.png" alt="雇用形態">
          </picture>
        </li>
        <li class="data__peopleItem">
          <picture class="data__questionPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_5-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_5.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_5-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_5.png" alt="「脳トレ」オンラインレッスンに参加したきっかけは？">
          </picture>
        </li>
        <li class="data__peopleItem">
          <picture class="data__questionPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_6-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_6.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_6-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_6.png" alt="「脳トレ」オンラインレッスンに参加してよかったことは何ですか？">
          </picture>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question01_6_speechBubble.png" alt="1位" class="data__question6 speechBubble">
        </li>
        <li class="data__peopleItem">
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
            <strong class="data__gypsyHeadingStrong">流れ流れて「脳トレ」へ…</strong><br>
            参加者さんに歴史あり！引き寄せジプシー経験に迫る!!
          </h2>
          <span class="data__gypsyCaution">※ジプシーの定義は自己申告です</span>
          <picture class="data__gypsyHeadingBackground">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/gypsy_heading_bg.webp" type="image/webp">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/gypsy_heading_bg.png" alt="">
          </picture>
        </div>
      </div>
      <ul class="data__gypsyList">
        <li class="data__gypsyItem">
          <picture class="data__gypsyPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_1-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_1.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_1-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_1.png" alt="ジプシー経験">
          </picture>
        </li>
        <li class="data__gypsyItem">
          <picture class="data__gypsyPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_2-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_2.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_2-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_2.png" alt="ジプシー期間(回答数79人)">
          </picture>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_2_speechBubble.png" alt="Long!" class="data__questionGypsy2 speechBubble">
        </li>
        <li class="data__gypsyItem">
          <picture class="data__gypsyPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_3-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_3.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_3-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_3.png" alt="ジプシー時代に学びに投資した金額は？">
          </picture>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_3_speechBubble.png" alt="うちの代表も元ジプシー" class="data__questionGypsy3 speechBubble">
        </li>
        <li class="data__gypsyItem">
          <picture class="data__gypsyPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_4-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_4.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_4-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_4.png" alt="元ジプシー経験者の方へ「脳トレ」オンラインレッスンへ辿り着いた理由は？(複数回答可)">
          </picture>
        </li>
        <li class="data__gypsyItem">
          <picture class="data__gypsyPicture">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_5-sp.webp" media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_5.webp" media="(min-width: 769px)" type="image/webp">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_5-sp.png" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_5.png" alt="">
          </picture>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/question02_arrow.png" alt="矢印" class="data__questionGypsy6 arrow">
        </li>
        <li class="data__gypsyItem">
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
      <picture class="data__imagePicture">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/data/image_girl.webp" type="image/webp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/data/image_girl.png" alt="「脳トレ」参加者さんイメージ">
      </picture>
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
