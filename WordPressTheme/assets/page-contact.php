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
  <div class="page-contact page-contact-layout">
    <div class="page-contact__icon-image1">
      <img src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
    </div>
    <div class="page-contact__inner inner">
      <main>
        <div class="page-contact page-contact-layout">
          <div class="page-contact__icon-image1">
            <img src="<?php echo get_theme_file_uri(); ?>/images/common/hanadai_img2.png" alt="キンギョハナダイのアイコン">
          </div>
          <div class="page-contact__inner inner">
            <?php echo do_shortcode('[contact-form-7 id="2aa6578" title="お問い合わせ"]'); ?>

            <!-- <form class="contact__form form" action="">
              <dl class="form__wrap">
                <dt class="form__label">名前<span>必須</span></dt>
                <dd class="form__input form-input ">
                  <input type="text" placeholder="沖縄&emsp;太郎" name="name" required>
                </dd>
              </dl>
              <dl class="form__wrap">
                <dt class="form__label">メールアドレス<span>必須</span></dt>
                <dd class="form__input form-input">
                  <input type="email" placeholder="aaa000@ggmail.com" name="email" required>
                </dd>
              </dl>
              <dl class="form__wrap">
                <dt class="form__label">電話番号<span>必須</span></dt>
                <dd class="form__input form-input">
                  <input type="tel" placeholder="000-0000-0000" name="tel" required>
                </dd>
              </dl>

              <dl class="form__wrap">
                <dt class="form__label">お問合わせ項目<span>必須</span></dt>
                <dd class="form__checkbox form-checkbox">
                  <label><input type="checkbox" name="sns" value="Practice"><span>ダイビング講習について</span></label>
                  <label><input type="checkbox" name="sns" value="Diving"><span>ファンデイビングについて</span></label>
                  <label><input type="checkbox" name="sns" value="Experience"><span>体験ダイビングについて</span></label>
                </dd>
              </dl>
              <dl class="form__wrap">
                <dt class="form__label">キャンペーン</dt>
                <dd class="form__select form-select">
                  <select>
                    <option hidden>キャンペーン内容を選択</option>
                    <option value="東京">東京</option>
                    <option value="大阪">大阪</option>
                    <option value="福岡">福岡</option>
                    <option value="その他">その他</option>
                  </select>
                </dd>
              </dl>

              <dl class="form__wrap form__wrap--textarea">
                <dt class="form__label">お問い合わせ内容<span>必須</span></dt>
                <dd class="form__textarea form-textarea">
                  <textarea name="message"></textarea>
                </dd>
              </dl>

              <div class="form__privacy">
                <div class="form__checkbox form-checkbox--privacy">
                  <div class="form__privacy-text form-checkbox">
                    <label><input type="checkbox" name="text" value="privacy"><span>個人情報の取り扱いについて同意のうえ送信します</span></label>
                  </div>
                </div>
              </div>
              <div class="form__submit form-submit">
                <div class="button"><span>Send</span></div>
              </div>
            </form> -->
          </div>
        </div>
      </main>
    </div>
  </div>
</main>

<?php get_footer(); ?>