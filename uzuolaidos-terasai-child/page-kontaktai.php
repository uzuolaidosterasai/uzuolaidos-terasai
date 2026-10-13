<?php
/**
 * Template Name: Kontaktų puslapis
 * Description: Individualus Užuolaidos terasai kontaktų puslapis.
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="contact-page">
        <div class="contact-page__inner">

            <div class="contact-page__content">

                <p class="contact-page__intro">
                    Kilus klausimams arba norint pasikonsultuoti
                    kviečiu susisiekti Jums patogiu būdu:
                </p>

                <ul class="contact-page__links">

                    <li>
                        <a href="mailto:info@uzuolaidosterasai.lt">
                            info@uzuolaidosterasai.lt
                        </a>
                    </li>

                    <li>
                        <a href="tel:+37067285777">
                            +370 672 85777
                        </a>
                    </li>

                    <li>
                        <a href="https://www.facebook.com/uzuolaidosterasai"
                           target="_blank"
                           rel="noopener">
                            Facebook žinutė
                        </a>
                    </li>

                    <li>
                        <a href="https://www.instagram.com/uzuolaidos_terasai/"
                           target="_blank"
                           rel="noopener">
                            Instagram žinutė
                        </a>
                    </li>

                    <li>
                        <a href="https://wa.me/37067285777"
                           target="_blank"
                           rel="noopener">
                            WhatsApp
                        </a>
                    </li>

                    <li>
                        <a href="viber://chat?number=%2B37067285777">
                            Viber
                        </a>
                    </li>

                    <li>
                        <a href="https://t.me/+37067285777"
                           target="_blank"
                           rel="noopener">
                            Telegram
                        </a>
                    </li>

                    <li>
                        <a href="https://signal.me/#p/+37067285777"
                           target="_blank"
                           rel="noopener">
                            Signal
                        </a>
                    </li>

                </ul>

                <div class="contact-page__details">

                    <p>
                        Dirbu pagal individualios veiklos pažymą Nr.1491588
                    </p>

                    <p>
                        Lina Aužbikavičienė
                    </p>

                    <p>
                        Pabalių g. 72B, Šiauliai
                    </p>

                    <a class="contact-page__button"
                       href="https://www.uzuolaidosterasai.lt/el-parduotuve/">
                        Parduotuvė
                    </a>

                </div>

            </div>

            <figure class="contact-page__photo">
                <img
                    src="https://www.uzuolaidosterasai.lt/wp-content/uploads/2026/09/GRA08742-karpyta-scaled.webp"
                    alt="Lina – Užuolaidos terasai kūrėja"
                    width="220"
                    loading="eager"
                >
            </figure>

        </div>
    </section>

    <?php echo do_shortcode('[Sassy_Social_Share]'); ?>

</main>

<?php get_footer(); ?>
