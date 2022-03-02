<div class="p-access-item">
            <div class="p-access-item__map">
                <iframe src="<?php the_field('map'); ?>" width="688" height="387" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="p-access-item__info">
                <dl class="p-access-item__items">
                    <div class="p-access-item__item">
                        <dt class="p-access-item__term">住所</dt>
                        <dd class="p-access-item__description"><?php the_field('address'); ?></dd>
                    </div>
                    <div class="p-access-item__item">
                        <dt class="p-access-item__term">TEL</dt>
                        <dd class="p-access-item__description"><?php the_field('phone'); ?></dd>
                    </div>
                    <div class="p-access-item__item">
                        <dt class="p-access-item__term">Mail</dt>
                        <dd class="p-access-item__description"><?php the_field('email'); ?></dd>
                    </div>
                </dl>
                <dl class="p-access-item__items">
                    <div class="p-access-item__item">
                        <dt class="p-access-item__term">営業時間</dt>
                        <dd class="p-access-item__description"><?php the_field('time'); ?></dd>
                    </div>
                    <div class="p-access-item__item">
                        <dt class="p-access-item__term">定休日</dt>
                        <dd class="p-access-item__description"><?php the_field('holiday'); ?></dd>
                    </div>
                    <div class="p-access-item__item">
                        <dt class="p-access-item__term">座席</dt>
                        <dd class="p-access-item__description"><?php the_field('seat'); ?></dd>
                    </div>
                </dl>
            </div>
        </div>