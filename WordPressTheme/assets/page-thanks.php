<?php get_header(); ?>

<!-- 下層ページのメインビュー -->
<div class="sub-mv sub-mv__contact">
  <div class="sub-mv__header">
    <h1 class="sub-mv__title">Contact</h1>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb') ?>


<main>
  <section class="page-contact-thanks page-contact-layout">
    <div class="page-contact-thanks__icon-image1">
      <img src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
    </div>
    <div class="page-contact-thanks__inner inner">
      <div class="page-contact-thanks">
        <div class="page-contact-thanks">
          <h2 class="page-contact-thanks__title">お問い合わせ内容を送信完了しました。</h2>
          <p class="page-contact-thanks__text">このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br>
            お送り頂きました内容を確認の上、<br class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。<br>
            また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。</p>
        </div>
      </div>
    </div>
    <div class="to-top">
      <a href="#top"><span></span></a>
    </div>
  </section>
</main>

<?php get_footer(); ?>