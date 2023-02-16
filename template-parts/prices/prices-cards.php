<?php $counter = 0; ?>

<?php if ( have_rows( 'czeny_za_m2_stroitelstva' ) ) : ?>
    <?php while ( have_rows( 'czeny_za_m2_stroitelstva' ) ) : the_row(); ?>

        <?php $counter++; ?>

        <div class="col-xxl-4">
            <div class="price-card price-card--<?php echo $counter; ?>">
                <div class="price-card__header">
                    <?php the_sub_field( 'price_card_header' ); ?>
                </div>
                <div class="price-card__description">
                    <?php the_sub_field( 'price_card_description' ); ?>
                </div>
                <div class="price-card__price text-center">
                    от
                    <span><?php the_sub_field( 'price_card_price' ); ?></span> руб./кв. м
                </div>
                <div class="price-card__btn text-center">
                    <a href="#rateOrder-<?php echo $counter; ?>" class="button button-popup">Заказать сейчас</a>
                </div>

                <div class="d-none">
                    <div id="rateOrder-<?php echo $counter; ?>" class="popup-form callback order-form">
                        <div class="popup-form__title">
                            <div class="form-title"></div>
                        </div>

                        <?php
                        echo do_shortcode('[contact-form-7 id="4213" title="Заказать комплектацию"]');
                        ?>
                    </div>

                    <script>
                        jQuery(document).ready(function($) {
                            let priceTitle = $('.price-card--<?php echo $counter; ?>').find('.price-card__header > p').text().trim();

                            let orderText = $('#rateOrder-<?php echo $counter; ?>').find('.order-text');

                            orderText.html(priceTitle);

                            $('#rateOrder-<?php echo $counter; ?>').find('.form-title').html(priceTitle);
                        });
                    </script>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
<?php else : ?>
    <?php // no rows found ?>
<?php endif; ?>

<div class="col-12">
    <div class="note">
        <?php the_field( 'note' ); ?>
    </div>
</div>