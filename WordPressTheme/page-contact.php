<?php get_header(); ?>

<?php get_template_part('templates/sub-head'); ?>

<section class="p-contact">
    <div class="p-contact__inner l-inner l-inner--slim">
        <h2 class="p-contact__title">お問い合わせフォーム</h2>
        <p class="p-contact__text">お問い合わせ内容に応じて、項目をご選択のうえ、お気軽にお問い合わせください。</p>
        <div class="p-contact__form p-form">
            <form>
                <dl class="p-form__items">
                    <div class="p-form__item">
                        <dt class="p-form__label">お問い合わせ項目<span class="p-form__required">必須</span></dt>
                        <dd class="p-form__input">
                            <label><input type="radio" name="radio-name" checked><span>お店のご利用・ご予約について</span></label>
                            <label><input type="radio" name="radio-name"><span>ギフト(贈り物)について</span></label>
                            <label><input type="radio" name="radio-name"><span>アルバイト応募について</span></label>
                            <label><input type="radio" name="radio-name"><span>その他</span></label>
                        </dd>
                    </div>
                    <div class="p-form__item">
                        <dt class="p-form__label">お名前<span class="p-form__required">必須</span></dt>
                        <dd class="p-form__input">
                            <input type="text" placeholder="お名前を入力してください" required>
                        </dd>
                    </div>
                    <div class="p-form__item">
                        <dt class="p-form__label">メールアドレス<span class="p-form__required">必須</span></dt>
                        <dd class="p-form__input">
                            <input type="email" placeholder="example@mail.com" required>
                        </dd>
                    </div>
                    <div class="p-form__item">
                        <dt class="p-form__label">電話番号</dt>
                        <dd class="p-form__input">
                            <input type="number" placeholder="09012345678">
                        </dd>
                    </div>
                    <div class="p-form__item">
                        <dt class="p-form__label">お問い合わせ内容<span class="p-form__required">必須</span></dt>
                        <dd class="p-form__input">
                            <textarea name="" placeholder="お問い合わせ内容を入力してください" required></textarea>
                        </dd>
                    </div>
                </dl>
                <p class="p-form__text">当社は、お客様の個人情報の流出・漏洩の防止、その他個人情報の安全管理のために必要かつ適切な措置を講じるものとし、法令などに正当な理由がある場合を除き、お客様の同意なく目的外での利用および第三者への提供は行いません。</p>
                <div class="p-form__btn">
                    <div class="c-btn--input">
                        <input type="submit" value="送　信" class="c-btn">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>