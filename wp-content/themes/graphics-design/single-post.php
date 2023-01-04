<!--====== HEADER PART START ======-->
<?php get_template_part('template-parts/header') ?>
<?php set_post_view(); ?>
<!--====== HEADER PART ENDS ======-->
<div class="wrapper">
    <div class="scroll-indicator"></div>
    <div class="container-single-wrapper">
        <div class="container-single">
            <div class="poster">
                <div class="poster-title">
                    <h3> <?php the_title() ?> </h3>
                </div>
                <div class="poster-buttons">
<!--                    <div>-->
<!--                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"-->
<!--                             fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">-->
<!--                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>-->
<!--                        </svg>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"-->
<!--                             fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">-->
<!--                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>-->
<!--                        </svg>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2"-->
<!--                             fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">-->
<!--                            <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>-->
<!--                        </svg>-->
<!--                    </div>-->
                </div>
            </div>
            <div class="info">
                <div class="block published">
                    <div class="mini-title">Publiée</div>
                    <?php the_modified_date() ?>
                </div>
                <div class="block published">
                    <div class="mini-title">Temps de lecture</div>
                    <?php echo get_post_meta( $post->ID, 'reading_time', true ); ?> minutes
                </div>
            </div>
            <div class="words">
                <?php $firstCharContent = substr(wp_strip_all_tags(get_the_content()), 0, 1); ?>
                <p><font class="letter"><?= $firstCharContent ?></font>
                    <?= $post->post_content; ?>
            </div>
        </div>
    </div>
</div>
<style>

    .scroll-indicator {
        position: fixed;
        top: 0;
        left: 0;
        height: 4px;
        background-color: #e72f49;
        z-index: 2;
        width: 0%;
        transition: all 0.3s linear;
    }

    .container-single {
        dispay: grid;
        width: 60%;
        margin: 0 auto;
        font-size: 16px;
        font-weight: 300;
        line-height: 1.8em;
    }

    .container-single .poster {
        width: 100%;
        height: 350px;
        display: grid;
        border-radius: 10px;
        margin-top: 40px;
        overflow: hidden;
        background: center no-repeat url(<?php echo get_the_post_thumbnail_url(); ?>);
        position: relative;
        box-shadow: 0px 4px 100px -3px #00059733;
        /*text-shadow: white 0px 0px 2px;*/
        font-size: 16px;
        background-size: 970px;
    }

    .container-single .poster .poster-title {
        position: absolute;
        bottom: 40px;
        left: 40px;
        /*width: 40%;*/
    }

    .poster-title h3 {
        color: white;
        display: inline-block;
        background-color: rgba(0,0,0,.5);
        padding: 10px;
    }

    .container-single .poster .poster-title h4 {
        font-size: 20px;
        color: white;
        font-weight: 600;
        margin: 20px 0;
    }

    .container-single .poster .poster-title .line {
        background-color: #b4c4c5;
        width: 100%;
        height: 1px;
    }

    .container-single .poster .poster-title p {
        color: #b4c4c5;
        font-size: 12px;
        line-height: 1.8em;
    }

    .container-single .poster .poster-buttons {
        position: absolute;
        bottom: 20px;
        right: 20px;
        width: 100px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        color: white;
        text-align: center;
    }

    .container-single .poster .poster-buttons div {
        cursor: pointer;
    }

    .container-single .poster .poster-buttons div:hover {
        color: #ccc;
    }
    .info {
        border-radius: 10px;
        border: 1px solid #e9e9f6;
        padding: 20px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        margin: 40px auto;
        background-color: #fdfdfd;
        overflow: hidden;
        height: 120px;
    }

    .info .block {
        text-align: center;
        font-size: 22px;
        font-weight: 300;
        color: #242e47;
    }

    .info .block .mini-title {
        font-size: 12px;
        color: #999999;
        font-weight: 700;
    }

    .words {
        padding: 0 0 0 45px;
        position: relative;
    }

    .words p {
        margin: 20px auto;
        position: relative;
        color: #777;
    }

    .words p .buttons {
        position: absolute;
        right: 10px;
        width: 40px;
        height: 100px;
        background-color: #777;
    }

    .words p .letter {
        font-size: 100px;
        position: absolute;
        top: 15px;
        left: -45px;
        color: #8787870f;
        font-weight: 700;
    }

    .words .buttons {
        position: absolute;
        opacity: 0;
        top: 0px;
        right: -30px;
        font-size: 20px;
        transition: all 0.3s linear;
        cursor: pointer;
    }

    .words:hover .buttons {
        opacity: 1;
    }


    @media (max-width: 700px) {
        .container-single {
            width: 90%;
        }

        .info {
            grid-template-columns: repeat(2, 1fr);
            height: 120px;
        }

        .container-single .poster {
            height: 250px;
        }

        .container-single .poster .poster-title h1 {
            font-size: 25px;
        }

        .container-single .poster .poster-title p, .container-single .poster .poster-title .line {
            display: none;
        }

        .quote {
            font-size: 16px;
        }

        .quote .letter {
            left: 0px;
        }

        .container-single p {
            color: #000;
        }
    }
</style>
<script>
    /* Please ❤ this */
    const indicator = document.querySelector(".scroll-indicator")

    const scroll = () => {
        const height = document.documentElement.offsetHeight
        const mx = document.documentElement.scrollHeight - document.documentElement.clientHeight
        const perc = document.documentElement.scrollTop * 100 / mx
        indicator.style.width = perc + "%"
    }

    document.addEventListener("scroll", scroll)
</script>
<!--====== FOOTER PART START ======-->
<?php get_template_part('template-parts/footer') ?>
<!--====== FOOTER PART ENDS ======-->
