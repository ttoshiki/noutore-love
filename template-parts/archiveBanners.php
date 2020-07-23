<section class="archive__bannerArea">
  <picture>
    <source media="(min-width: 769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/archive/brain_training_editor.png" class="bannerImage -full -pc">
    <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/archive/brain_training_editor-sp.png" class="bannerImage -full -sp">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/archive/brain_training_editor.png 1x <?php echo get_template_directory_uri(); ?>/assets/img/archive/brain_training_editor@2x.png 2x" alt="こちら「脳トレ」編集部" class="bannerImage -full">
  </picture>
  <?php get_template_part('template-parts/banners'); ?>
  <div class="banners">
    <div class="banner">
      <h3 class="prHeading">「脳トレ」セミナー動画＆マニュアル</h3>
      <a href="<?php echo home_url('/seminar-video/') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner03.jpg" alt="「脳トレ」セミナー動画＆マニュアル" class="bannerImage"></a>
    </div>
    <div class="banner">
      <h3 class="prHeading">「脳トレ」スタートブック</h3>
      <a href="<?php echo home_url(); ?>/startbook"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner04.jpg" alt="「脳トレ」スタートブック" class="bannerImage"></a>
    </div>
  </div>
</section>