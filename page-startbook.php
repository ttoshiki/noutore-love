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

	<main class="startbook__main">
    <h1 class="startbook__startbookHeading">
      <span class="sr-only">「脳トレ」スタートブック</span>
      <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/startbook_header.svg"
          alt="「脳トレ」スタートブック"
          class="-pc"
      >
      <img
          src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/startbook_header-sp.svg"
          alt="「脳トレ」スタートブック"
          class="-sp"
      >
    </h1>
    <div class="startbook__mainVisualWrapper">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/main_visual.png" alt="「脳トレ」スタートブック" class="startbook__mainVisual -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/main_visual-sp.png" alt="「脳トレ」スタートブック" class="startbook__mainVisual -sp">
    </div>
    <section class="startbook__lead">
      <p class="startbook__leadParagraph">
        <mark class="startbook__leadMark"><strong class="startbook__leadStrong">引き寄せ</strong></mark>・<mark class="startbook__leadMark"><strong class="startbook__leadStrong">心理学ジプシー</strong>の<strong class="startbook__leadStrong">終着点</strong></mark><br class="-sp">ってどういうこと？<br />
        「脳トレ」興味あるけど、オンラインレッスンに<br />
        参加するのはまだ気が引ける…<br />
        <mark class="startbook__leadMark"><strong class="startbook__leadStrong">もっと気軽に学べる</strong>ものは<strong>ないの</strong></mark>？
      </p>
      <div class="startbook__leadPhotos">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/lead.jpg" alt="">
      </div>
    </section>
    <section class="startbook__intro">
      <p class="startbook__introParagraph">
        そんなリクエストをたくさんいただき、<br />
        「脳トレ」の基礎をまとめたキットが<br class="-sp">完成しました！<br />
        「脳トレ」レッスン卒業生５名を<br class="-sp">プロジェクトメンバーに迎え、<br />
        入門編としてベストな1冊に仕上げました。
      </p>
      <div class="startbook__speechBubbleWrapper">
        <div class="startbook__speechBubbleSpeaker -iguana">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/iguana.jpg" alt="イグアナさんイラスト" class="startbook__iguana">
          <div><span class="startbook__speakerName">イグアナさん</span></div>
        </div>
        <p class="startbook__speech -iguana">「脳トレ」®︎スタートブックってどんな人にオススメなの？</p>
      </div>
      <div class="startbook__speechBubbleWrapper">
        <div class="startbook__speechBubbleSpeaker -namakemono">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/namakemono.jpg" alt="ナマケモノ有紀イラスト" class="startbook__namakemono">
          <div><span class="startbook__speakerName">ナマケモノ有紀</span></div>
        </div>
        <p class="startbook__speech -namakemono">「脳トレ」を独学でやってみたい人かな！直に質問できる機会があったほうが現実の変化は早いのだけど、まずはじっくり一人で学びたい人にオススメ。</p>
      </div>
    </section>
    <?php get_template_part('template-parts/startbook-button'); ?>
    <section class="startbook__case">
      <h2 class="startbook__caseHeading">
        <span class="sr-only">350名以上の卒業メンバーの事例がたっぷり</span>
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/case_header.svg"
            alt="350名以上の卒業メンバーの事例がたっぷり"
            class="-pc"
        >
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/case_header-sp.svg"
            alt="350名以上の卒業メンバーの事例がたっぷり"
            class="-sp"
        >
      </h2>
      <p class="startbook__caseParagraph">
        2020年5月現在で、合計15期の<br class="-sp">レッスンを開講しており、卒業メンバーは<br class="-sp">合計350名以上。<br />
        5年ほど続いている安心のレッスンをもとに<br class="-sp">作られたスタートブックです。
      </p>
      <div class="startbook__caseImageWrapper">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/case01.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/case01.jpg 1x" alt="" class="startbook__caseImage -pc">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/case-sp.jpg" alt="" class="startbook__caseImage -sp">
      </div>
      <a href="#" class="startbook__caseButton">
        <?php echo file_get_contents(get_template_directory() . '/assets/img/icons/icon_angle.svg'); ?>
        <span>「脳トレ」メンバーの<br class="-sp">体験談はこちら</span>
      </a>
    </section>
    <section class="startbook__content">
      <div class="startbook__contentInner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/content_text.svg" alt="「脳トレ」スタートブック中身チラ見せ！" class="startbook__contentText -pc">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/content_text-sp.svg" alt="「脳トレ」スタートブック中身チラ見せ！" class="startbook__contentText -sp">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/content_image.png" alt="「脳トレ」コンテンツ内容" class="startbook__contentImage -pc">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/content_image-sp.png" alt="「脳トレ」コンテンツ内容" class="startbook__contentImage -sp">
      </div>
    </section>
    <section class="startbook__contents">
      <div class="startbook__contentsHeadingWrapper">
        <h2 class="startbook__contentsHeading">
          <span class="sr-only">350名以上の卒業メンバーの事例がたっぷり</span>
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/table_of_contents_header.svg"
              alt="目次"
          >
        </h2>
        <div class="startbook__moreButtonWrapper -contents">
          <button href="" class="startbook__moreButton">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/more_button.svg" class="startbook__moreButtonText">
          </button>
        </div>
      </div>
      <div class="startbook__contentsContent -hidden">
        <h3 class="startbook__contentsHeader -first">はじめに</h3>
        <h3 class="startbook__contentsHeader">Lesson.1 「脳トレ」とは？</h3>
        <p class="startbook__contentsParagraph">脳内設定を変えると、現実がサクッと変わる理由と魔法の質問。</p>
        <h3 class="startbook__contentsHeader">ジャンル別お悩みQ&A（恋愛編）</h3>
        <ol class="startbook__contentsList">
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentsOrderList">①</span>出会いを引き寄せるには？</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentsOrderList">②</span>気のない彼とお付き合いするには？</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentsOrderList">③</span>復縁したい時にはどうしたらいい？</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentsOrderList">④</span>パートナーにイライラして<br class="-sp" />険悪になってます。</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentsOrderList">⑤</span>好きな彼が既婚者の場合は？</div>
          </li>
        </ol>
        <h3 class="startbook__contentsHeader">Lesson.3 オーダーとは？<br class="-sp">現実はこう動かす！</h3>
        <p class="startbook__contentsParagraph">自分発信のオーダーを出すことで、<br class="-sp">人の気持ちすら変えられる秘訣。</p>
        <h3 class="startbook__contentsHeader">Lesson.4 オーダーの出し方決定版！４ステップマニュアル</h3>
        <h3 class="startbook__contentsHeader">ジャンル別お悩みQ&A（仕事編）</h3>
        <ol class="startbook__contentsList">
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentsOrderList">①</span>居心地の悪い職場を変えるには？</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentsOrderList">②</span>起業したい！どうしたらいい？</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentsOrderList">③</span>好きなことで成功したい場合は？</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentsOrderList">④</span>お金が欲しいけどバリバリ働くのはイヤ。こんなオーナーは通る？</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentsOrderList">⑤</span>天職に出会いたい時は？</div>
          </li>
        </ol>
        <h3 class="startbook__contentsHeader">Lesson.5 行動せずとも現実が動く仕組みをマスターする</h3>
        <p class="startbook__contentsParagraph">頑張って行動してるのに現実が変わらない「裏側」を見破って、サクサク現実を動かす方法</p>
        <h3 class="startbook__contentsHeader">Lesson.6 「脳トレ」を始めると起こる変化３ステップ</h3>
        <p class="startbook__contentsParagraph">学ぶ前に知っておきたい、オーダーが通り始めてから完了するまでの流れ</p>
        <h3 class="startbook__contentsHeader">ジャンル別お悩みQ&A（その他編）</h3>
        <ol class="startbook__contentsList">
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentOrderList">①</span>「脳トレ」はダイエット・美容にも使える？</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentOrderList">②</span>お金は出したら返ってくると聞いたのに金欠になりました。なぜ？</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentOrderList">③</span>心の学びをすることを周りに<br class="-sp">反対されてます。</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentOrderList">④</span>何が欲しいのか？よくわかりません。</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentOrderList">⑤</span>自分以外の人に代わって欲しい時はどうしたらいい？</div>
          </li>
        </ol>
        <h3 class="startbook__contentsHeader">Lesson.7 オーダーを加速させる“臨場感”の話</h3>
        <p class="startbook__contentsParagraph">脳内を変えて現実もサクッと変わる手っ取り早い方法とは？</p>
        <h3 class="startbook__contentsHeader">「脳トレ」体験談</h3>
        <ol class="startbook__contentsList">
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentOrderList">①</span>結婚して寿退社したいのに恋愛がボロボロだったAさんの体験談。</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentOrderList">②</span>ブラック企業OLからフリーランスデザイナーの夢を叶えたIさんの体験談。</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentOrderList">③</span>こっぴどく振られた彼と復縁して溺愛されているOさんの体験談。</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentOrderList">④</span>人生の迷子から心豊かな毎日を送るようになったKさんの体験談。</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentOrderList">⑤</span>安定した立場のまま日本と海外を行き来する生活を手に入れたTさんの体験談。</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentOrderList">⑥</span>天職探しで疲れはてたママが見つけた最高の人生の送り方、Nさんの体験談。</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentOrderList">⑦</span>気が付いたら夫が別人になった愛され妻Nさんの体験談。</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentOrderList">⑧</span>残業だらけの職場が味方だらけになったHさんの体験談。</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentOrderList">⑨</span>自分は働かずに年収1,000万円を越したHさんの体験談。</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentOrderList">⑩</span>社内ニートでまったりしながら感謝されるようになったUさんの体験談。</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentOrderList">⑪</span>シングルマザーから１３歳年下の旦那さんに溺愛される妻に変身したMさんの体験談。</div>
          </li>
          <li class="startbook__contentsItem">
            <div class="startbook__contentsItemContainer"><span class="startbook__contentOrderList">⑫</span>家庭でも職場でもどんどん希望が叶っていったYさんの体験談。</div>
          </li>
        </ol>
        <h3 class="startbook__contentsHeader">おわりに</h3>
        <h3 class="startbook__contentsHeader">別冊　「脳トレ」®︎主宰者・江藤有紀エピソード集</h3>
      </div>
    </section>
    <section class="startbook__flow" id="flow-slide">
      <h2 class="startbook__flowHeading">
          <span class="sr-only">お申し込みから発送の流れ</span>
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/flow_header.svg"
              alt="お申し込みから発送の流れ"
              class="-pc"
          >
          <img
              src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/flow_header-sp.svg"
              alt="お申し込みから発送の流れ"
              class="-sp"
          >
      </h2>
      <div class="startbook__moreButtonWrapper -flow">
        <button class="startbook__moreButton">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/more_button.svg" class="startbook__moreButtonText">
        </button>
      </div>
      <div class="startbook__flowContents -hidden">
        <div class="startbook__flowApplication">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/flow_application.svg" alt="お申し込み">
          <p class="startbook__flowParagraph">ご住所はお間違いのないようにお願いします。お申込み後のキャンセル返金は承っておりませんので、あらかじめご了承くださいませ。商品に不備があった場合は交換対応させていただきます。</p>
        </div>
        <div class="startbook__flowPay">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/flow_pay.svg" alt="お支払い">
          <p class="startbook__flowParagraph">PayPal(ペイパル)アカウントによるネット決済システム（クレジットカード・銀行口座振替）にて承ります。恐れ入りますがPayPal(ペイパル)のアカウントをお持ちでない方はご登録のほどお願いいたします。</p>
          <p class="startbook__flowLinkParagraph">→<a href="#" class="startbook__flowLink">PayPal(ペイパル)のアカウント登録・銀行口座振替に関するご案内ページはこちら</a></p>
        </div>
        <div class="startbook__flowShipping">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/flow_shipping.svg" alt="発送">
          <p class="startbook__flowParagraph">電子書籍は決済完了後すぐ、通常冊子は入金確認後一週間以内に発送いたします。万が一、10日ほど経っても届かない場合、恐れ入りますが配達事故の可能性もございますので、お問い合わせくださいませ。</p>
          <p class="startbook__flowLinkParagraph">→<a href="<?php echo home_url('/contact/') ?>" class="startbook__flowLink">お問い合わせフォームはこちら</a></p>
        </div>
      </div>
    </section>
    <?php get_template_part('template-parts/startbook-button'); ?>
    <footer class="startbook__footer">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/footer_text.svg" alt="lets's give it try" class="startbook__footerText">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/footer.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/footer.jpg 1x <?php echo get_template_directory_uri(); ?>/assets/img/startbook/footer@2x.jpg 2x" alt="lets's give it try" class="startbook__footerImage -pc">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/startbook/footer-sp.jpg" alt="lets's give it try" class="startbook__footerImage -sp">
    </footer>

<?php
get_sidebar();
get_footer();
