 <?php
  $home = esc_url(home_url('/'));
  $campaign = esc_url(home_url('/campaign/'));
  $about = esc_url(home_url('/about/'));
  $information = esc_url(home_url('/information/'));
  $blog = esc_url(home_url('/blog/'));
  $voice = esc_url(home_url('/voice/'));
  $price = esc_url(home_url('/price/'));
  $faq = esc_url(home_url('/faq/'));
  $privacypolicy = esc_url(home_url('/privacypolicy/'));
  $termsofservise = esc_url(home_url('/terms-of-service/'));
  $contact = esc_url(home_url('/contact/'));
  $sitemap = esc_url(home_url('/sitemap/'));
  ?>
 <!-- contact -->
 <?php if (!is_page('contact') && !is_404()) : ?>
   <section id="contact" class="contact top-contact-layout">
     <div class="contact__icon-image">
       <img src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img4.png" alt="キンギョハナダイのアイコン">
     </div>
     <div class="contact__inner inner">
       <div class="contact__wrapper">
         <div class="contact__wrap">
           <div class="contact__contain">
             <div class="contact__logo">
               <img src="<?php echo get_theme_file_uri(); ?>/images/common/contact-logo_img.svg" alt="Codeups">
             </div>
             <div class="contact__box">
               <div class="contact__form-item">
                 <p class="content__address">沖縄県那覇市1-1</p>　
                 <p class="content__tel">TEL:0120-000-0000</p>
                 <p class="content__time">営業時間:8:30-19:00</p>
                 <p class="content__holiday">定休日:毎週火曜日</p>
               </div>
               <div class="contact__form-map">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57273.02319561034!2d127.64350234147601!3d26.21085943029272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5697141a6b58b%3A0x2cd8aff616585e98!2z5rKW57iE55yM6YKj6KaH5biC!5e0!3m2!1sja!2sjp!4v1693098102181!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
             </div>
           </div>
           <div class="contact__body">
             <div class="contact__title section-header">
               <p class="section-header__sub section-header__sub--large">Contact</p>
               <h2 class="section-header__main">お問合わせ</h2>
               <p class="contact__text">ご予約・お問い合わせはコチラ</p>
             </div>
             <div class="contact__button">
               <a href="<?php echo $contact; ?>" class="button"><span>view&nbsp;more</span></a>
             </div>
           </div>
         </div>
       </div>
       <div class="to-top">
         <a href="#top"><span></span></a>
       </div>
     </div>
   </section>
 <?php endif; ?>
 </main>

 <footer>
   <div id="footer" class="footer footer-layout<?php if (is_404()) {
                                                  echo 'page-footer-layout--mt0';
                                                } ?>">
     <div class="footer__inner inner">
       <nav class="footer__nav">
         <div class="footer__logo-body">
           <div class="footer__logo">
             <a href="<?php echo $home; ?>">
               <div>
                 <img src="<?php echo get_theme_file_uri(); ?>/images/common/CodeUps.svg" alt="CodeUps">
               </div>
             </a>
           </div>
           <div class="footer__icon">
             <a href="https://www.facebook.com/" class="footer__icon-facebook">
               <div>
                 <img src="<?php echo get_theme_file_uri(); ?>/images/common/facebooklogo.svg" alt="facebook">
               </div>
             </a>
             <a href="https://www.instagram.com/" class="footer__icon-instagram">
               <div>
                 <img src="<?php echo get_theme_file_uri(); ?>/images/common/instagramlogo.svg" alt="instagram">
               </div>
             </a>
           </div>
         </div>
         <div class="footer__nav-body">
           <div class="footer__nav-left">
             <ul class="footer__nav-items">
               <li class="footer__nav-item">
                 <div class="footer__box">
                   <a href="<?php echo $campaign; ?>">キャンペーン</a>
                 </div>
                 <ul class="footer__sub-item">
                   <li class="footer__sub-list">
                     <a href="<?php echo $campaign; ?>">ライセンス取得</a>
                     <a href="<?php echo $campaign; ?>">貸切体験ダイビング</a>
                     <a href="<?php echo $campaign; ?>">ナイトダイビング</a>
                   </li>
                 </ul>
               </li>
               <li class="footer__nav-item">
                 <div class="footer__box">
                   <a href="<?php echo $about; ?>">私たちについて</a>
                 </div>
               </li>
               <li class="footer__nav-item">
                 <div class="footer__box">
                   <a href="<?php echo $information; ?>">ダイビング情報</a>
                 </div>
                 <ul class="footer__sub-item">
                   <li class="footer__sub-list">
                     <a href="<?php echo $information; ?>">ライセンス講習</a>
                     <a href="<?php echo $information; ?>">体験ダイビング</a>
                     <a href="<?php echo $information; ?>">ファンダイビング</a>
                   </li>
                 </ul>
               </li>
               <li class="footer__nav-item">
                 <div class="footer__box">
                   <a href="<?php echo $blog; ?>">ブログ</a>
                 </div>
               </li>
             </ul>
           </div>
           <div class="footer__nav-right">
             <ul class="footer__nav-items">
               <li class="footer__nav-item">
                 <div class="footer__box">
                   <a href="<?php echo $voice; ?>">お客様の声</a>
                 </div>
               </li>
               <li class="footer__nav-item">
                 <div class="footer__box">
                   <a href="<?php echo $price; ?>">料金一覧</a>
                 </div>
                 <ul class="footer__sub-item">
                   <li class="footer__sub-list">
                     <a href="<?php echo $price; ?>">ライセンス取得</a>
                     <a href="<?php echo $price; ?>">体験ダイビング</a>
                     <a href="<?php echo $price; ?>">ファンダイビング</a>
                   </li>
                 </ul>
               </li>
               <li class="footer__nav-item">
                 <div class="footer__box">
                   <a href="<?php echo $faq; ?>">よくある質問</a>
                 </div>
               </li>
               <li class="footer__nav-item">
                 <div class="footer__box">
                   <a href="<?php echo $privacypolicy; ?>">プライバシー<br class="u-mobile">
                     ポリシー</a>
                 </div>
               </li>
               <li class="footer__nav-item">
                 <div class="footer__box">
                   <a href="<?php echo $termsofservise; ?>">利用規約</a>
                 </div>
               </li>
               <li class="footer__nav-item">
                 <div class="footer__box">
                   <a href="<?php echo $contact; ?>">お問い合わせ</a>
                 </div>
               </li>
             </ul>
           </div>
         </div>
         <div class="footer__copyright">
           <small>
             <?php
              $current_year = date('Y');
              echo 'Copyright &copy; 2021 - ' . $current_year . ' CodeUps LLC. All Rights Reserved.';
              ?>
           </small>
         </div>
       </nav>
     </div>
   </div>
 </footer>
 <?php wp_footer(); ?>
 <script>
   document.addEventListener('wpcf7:invalid', function(event) {
     location.href = 'http://codeups-wp.local/contact-error/';
   });
 </script>
 </body>

 </html>