<?php $v->layout("_theme"); ?>

<?= $v->insert("inc/header-home"); ?>

<div class="page-hero">
    <div class="hero-section">
        <div class="container text-center text-md-left">
            <div class="row">

                <div class="col-12">
                    <h1 class="display-4">Driving <br> Growth</h1>
                    <span class="subhead text-uppercase">is in our DNA</span>
                </div>
                <div class="col-12">

                </div>
            </div>

        </div>
        <div class="scroll-holder text-center">
            <p>scroll down</p>

            <a href="#row1">
                <img src="<?= theme('/assets/images/arrow.png') ?>" alt="Scroll down">
            </a>

        </div>
    </div>
</div><!-- .page-hero -->
<div class="video-background">
<video class="videoBG" src="<?= theme() ?>/assets/videos/hero-bg.mp4" autoplay loop playsinline muted></video>
</div>

<div class="page-section row-1 bg-light get-in-touch pb-3" id="row1">
    <div class="container py-5">
        <h2 class="h2">GET IN TOUCH</h2>
        <div class="row ">

            <div class="col-12">
                <div class="card-holder d-flex my-4 image-left flex-wrap">
                    <div class="card col-12 col-md-6 flex-md-row flex-column">
                        <div class="card-image col-12 col-md-4 text-center">
                            <img src="<?= theme() ?>/assets/images/vinay.png" alt="Vinay's photo">
                        </div>
                        <div class="card-body col-12 col-md-8">
                            <h5 class="card-title">Vinay Jagessar</h5>
                            <p class="card-subtitle">Principal - Founder</p>
                            <p class="email">
                                <a href="mailto:vinay@arterialgroup.com">Email Vinay</a>
                            </p>
                        </div>
                    </div>
                    <div class="card col-12 col-md-6 flex-md-row flex-column">
                        <div class="card-image col-12 col-md-4 text-center">
                            <img src="<?= theme() ?>/assets/images/christie.png" alt="Christie's photo">
                        </div>
                        <div class="card-body col-12 col-md-8">
                            <h5 class="card-title">Christie Newbon</h5>
                            <p class="card-subtitle">CEO - Director &amp; Co-Founder</p>
                            <p class="email">
                                <a href="mailto:christie@arterialgroup.com">Email Christie</a>
                            </p>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div> <!-- GET IN TOUCH -->

<div class="page-section bg-light pb-0 row-2 our-services text-center text-md-left">
    <div class="container">
        <h2 class="h2 border-top pt-5">OUR SERVICES</h2>
        <div class="row align-items-center">
            <div class="col-lg-12 ">
                <div class="card-holder d-flex three-col">
                    <div class="card">
                        <img class="card-img-top" src="<?= theme() ?>/assets/images/tile-1_resize-300x200.jpg"
                            alt="Card image cap">
                        <div class="card-body px-0">
                            <h5 class="card-title">DIGITAL/MULTI-CHANNEL
                                MARKETING</h5>
                            <p class="card-subtitle">We work with the world’s top healthcare and pharmaceutical brands
                                to develop
                                integrated multi-channel communication campaigns that create powerful customer
                                connections and drive
                                sales growth.
                            </p>
                            <a href="<?= url('/marketing') ?>" class="card-link">Read more</a>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top" src="<?= theme() ?>/assets/images/tile-2_resize-300x200.jpg"
                            alt="Card image cap">
                        <div class="card-body px-0">
                            <h5 class="card-title">CONTENT/MEDICAL
                                EDUCATION</h5>
                            <p class="card-subtitle">We create inspiring multi-channel medical education programs in
                                both
                                accredited and non-accredited formats for a variety of audiences including specialists,
                                GPs,
                                pharmacists, pharmacy assistants, nurses and patients.
                            </p>
                            <a href="<?= url('/education') ?>" class="card-link">Read more</a>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top" src="<?= theme() ?>/assets/images/tile-3_resize-300x200.jpg"
                            alt="Card image cap">
                        <div class="card-body px-0">
                            <h5 class="card-title">CREATIVE/CONSUMER
                                HEALTHCARE</h5>
                            <p class="card-subtitle">We’re always up for a challenge, and today’s challenge is making an
                                impact
                                when audiences have only seconds to spare. We can’t overemphasise the power of
                                insight-driven
                                creative for forging a brand’s identity.
                            </p>
                            <a href="<?= url('/consumer') ?>" class="card-link">Read more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> <!-- THREE CARDS -->

<div class="page-section bg-light pb-0 row-2">
    <div class="video-container d-flex my-5">
        <video width="100%" id="video-player-18" data-id="18" poster="<?= theme('/assets/images/cover-video-2.jpg') ?>"
            preload="auto" autoplay controls="controls" loop="">
            <source type="video/mp4" src="<?= theme('/assets/videos/arterialgroupshowreel-low.mp4') ?>">
        </video>
    </div>
</div>

<div class="page-section bg-light testimonials pb-2 pb-md-5">
    <div class="container">
        <h2 class="h2 pt-5">TESTIMONIALS</h2>
        <div class="row px-md-3 align-items-end">
            <div class="col-lg-5 ">
                <div class="testimonial icon-left one-icon d-flex">
                    <div class="image small-mark pr-4">
                        <img src="<?= theme() ?>/assets/images/small-quote-top.png" alt="">
                    </div>
                    <div class="text">
                        <p>
                            The eDetailer we created and built together went down really well with the sales team!<br>
                            <br>
                            <b>Senior Brand Manager</b><br>
                            Top 5 Global Pharma Company, Australia
                        </p>

                    </div>
                </div>

                <div class="testimonial icon-bg my-5 d-flex">
                    <div class="image">
                        <img src="<?= theme() ?>/assets/images/big-quote-top.png" alt="">
                    </div>
                    <div class="text p-5">
                        <p>
                            The presentation worked very well today. Thanks for your excellent support. I really
                            appreciate your
                            efforts in getting the e-compendium in working condition even though it was a very tight
                            timeline.
                            Thanks very much and great work!
                            <br><br>
                            <b>Senior Brand Manager</b><br>
                            Top 3 Global Pharma Company
                        </p>
                    </div>
                </div>

                <div class="testimonial icon-left two-icons d-flex">
                    <div class="image reverse-icon small-mark pr-4">
                        <img src="<?= theme() ?>/assets/images/small-quote-bottom.png" alt="">
                        <img src="<?= theme() ?>/assets/images/small-quote-bottom.png" alt="">
                    </div>
                    <div class="text">
                        <p>
                            Incredible outcome all - you have indeed set the bar very high! <br>
                            <br>
                            Thank you for all of your efforts in making this a success.<br>
                            <br>
                            <b>Senior Brand Manager</b><br>
                            Top 3 Global Pharma Company
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-5">
                <div class="testimonial px-5">

                    <div class="text ">
                        <p>
                            Well done guys! The hard work you all put in is really paying off! The program is working
                            its socks
                            off!<br>
                            <br>
                            <b>Senior Brand Manager</b><br>
                            Top 10 Global Pharma Company, Australia
                        </p>

                    </div>
                    <div class="image small-mark mt-3">
                        <img src="<?= theme() ?>/assets/images/small-quote-bottom.png" alt="">
                        <img src="<?= theme() ?>/assets/images/small-quote-bottom.png" alt="">
                    </div>
                </div>
                <div class="testimonial icon-bg icon-bg-reverse mt-5">
                    <div class="image">
                        <img src="<?= theme() ?>/assets/images/big-quote-bottom.png" alt="">
                    </div>
                    <div class="text p-5">
                        <p>
                            Fantastic! Thank you so much for your assistance this weekend. I was particularly impressed
                            with your
                            management of the technical side of things. You made me feel all was under control.
                            <br><br>
                            <b>Assoc. Brand Manager</b><br>
                            Top 10 Pharma Company, Australia
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-lg-2 p-lg-0">
                <div class="testimonial m-0">
                    <div class="image small-mark icon-top text-right mb-3">
                        <img src="<?= theme() ?>/assets/images/small-quote-top.png" alt="">
                        <img src="<?= theme() ?>/assets/images/small-quote-top.png" alt="">
                    </div>
                    <div class="text">
                        <p>
                            The reps just loved the three new apps you developed for me. I'd really like to thank you
                            for all your
                            great work on these projects.<br>
                            <br>
                            <b>Brand Manager</b><br>
                            Top 5 Global Pharma Company, Australia
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-section bg-dark orange-bg py-4">
    <div class="container text-center text-md-left">
        <div class="row px-md-3 align-items-end">
            <div class="col-sm-12 col-lg-12 py-3">

                <div class="card-holder d-flex two-col flex-sm-wrap justify-content-between flex-wrap">
                    <div class="card my-md-5 my-2 col-12 col-md-6 mb-sm-0 pr-0 pr-md-4 p-0 px-0">
                        <img class="card-img-top" src="<?= theme() ?>/assets/images/our_services-1.jpg"
                            alt="Card image cap">
                        <div class="card-body px-0 pb-0 mt-2">
                            <h5 class="card-title">PRESCRIPTION <br> PHARMACEUTICALS</h5>
                            <p class="card-subtitle mb-3">We have invested in a medical team rich in experience and
                                expertise to
                                help you master the challenges of pharmaceutical marketing. We strive to transform
                                scientific data
                                into something dynamic and engaging, whoever the audience.
                            </p>

                        </div>
                    </div>

                    <div class="card my-md-5 my-3 col-12 col-md-6 pl-0 pl-md-4 px-0">
                        <img class="card-img-top" src="<?= theme() ?>/assets/images/our_services-2-300x199.jpg"
                            alt="Card image cap">
                        <div class="card-body px-0 pb-0 mt-2">
                            <h5 class="card-title mb-3">CONSUMER <br> HEALTHCARE</h5>
                            <p class="card-subtitle">We work with large over the counter brands to create robust
                                strategies and
                                develop innovative and engaging promotional campaigns that ensure the support and
                                recommendation of
                                healthcare professionals
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<div class="page-section bg-light growth pb-5">
    <div class="container">
        <h2 class="h2 pt-5">GROWTH WE HAVE ACHIEVED <br> FOR OUR CLIENTS</h2>
        <div class="row px-md-3 align-items-end">
            <div class="col-lg-12 ">
                <div class="card-holder d-flex six-col flex-wrap justify-content-between">
                    <div class="card mb-3">
                        <img class="card-img-top" src="<?= theme() ?>/assets/images/circle-33-percent.gif"
                            alt="Card image cap">
                        <div class="card-body px-0">
                            <h5 class="card-title">GROWTH</h5>
                            <p class="card-subtitle"><strong>CATEGORY:</strong> COPD <br><strong>CLIENT:</strong>
                                LEADING GLOBAL
                                PHARMA <br><strong>MARKET:</strong> AUSTRALIA
                            </p>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <img class="card-img-top" src="<?= theme() ?>/assets/images/box-60-percent.gif"
                            alt="Card image cap">
                        <div class="card-body px-0">
                            <h5 class="card-title">EMAIL CAMPAIGN OPEN RATE</h5>
                            <p class="card-subtitle"><strong>CATEGORY:</strong> PAIN
                                MANAGEMENT<br><strong>MARKET:</strong> AUSTRALIA
                            </p>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <img class="card-img-top" src="<?= theme() ?>/assets/images/circle-40-percent.gif"
                            alt="Card image cap">
                        <div class="card-body px-0">
                            <h5 class="card-title">GROWTH</h5>
                            <p class="card-subtitle">
                                <strong>CATEGORY:</strong> OSTEOPOROSIS<br><strong>CLIENT:</strong> LEADING GLOBAL
                                PHARMA<br><strong>MARKET:</strong> AUSTRALIA
                            </p>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <img class="card-img-top" src="<?= theme() ?>/assets/images/tube-70-percent.gif"
                            alt="Card image cap">
                        <div class="card-body px-0">
                            <h5 class="card-title">GROWTH</h5>
                            <p class="card-subtitle"><strong>CATEGORY:</strong> MEN’S HEALTH<br><strong>CLIENT:</strong>
                                LEADING
                                GLOBAL PHARMA<br><strong>MARKET:</strong> AUSTRALIA</p>

                        </div>
                    </div>

                    <div class="card mb-3">
                        <img class="card-img-top" src="<?= theme() ?>/assets/images/circle-95-percent.gif"
                            alt="Card image cap">
                        <div class="card-body px-0">
                            <h5 class="card-title">GROWTH</h5>
                            <p class="card-subtitle">
                                <strong>CATEGORY:</strong> OPHTHALMOLOGY<br><strong>CLIENT:</strong> GLOBAL
                                PHARMA<br><strong>MARKET:</strong> AUSTRALIA
                            </p>

                        </div>
                    </div>

                    <div class="card mb-3">
                        <img class="card-img-top" src="<?= theme() ?>/assets/images/pyramid-40-percent.gif"
                            alt="Card image cap">
                        <div class="card-body px-0">
                            <h5 class="card-title">GROWTH</h5>
                            <p class="card-subtitle"><strong>CATEGORY:</strong>HOSPITAL
                                PRODUCT<br><strong>CLIENT:</strong>GLOBAL
                                PHARMA<br><strong>MARKET:</strong> AUSTRALIA</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="page-section bg-light associated-logos pb-4">
    <div class="container">
        <h2 class="h2 pt-5">OUR CLIENTS</h2>
        <div class="underline"></div>
        <div class="logos d-flex flex-wrap justify-content-around my-md-5 mx-0 ">
            <!-- 1 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/allergyconcepts.png" alt="allergy concepts">
            </div>
            <!-- 2 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/amgen.png" alt="amgen">
            </div>
            <!-- 3 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/ampco.png" alt="ampco">
            </div>
            <!-- 4 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/astrazeneca.png" alt="astrazeneca">
            </div>
            <!-- 5 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/astellas.png" alt="astellas">
            </div>
            <!-- 6 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/biogen.png" alt="biogen">
            </div>
            <!-- 7 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/badaustralia.png" alt="badaustralia">
            </div>
            <!-- 8 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/boehringer.png" alt="boehringer">
            </div>
            <!-- 9 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/chiesi.png" alt="chiesi">
            </div>
            <!-- 10 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/csl-behring.png" alt="CSL behring">
            </div>
            <!-- 11 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/eisai.png" alt="eisai">
            </div>
            <!-- 12 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/gbma.png" alt="GBMA">
            </div>
            <!-- 13 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/gsk.png" alt="gsk">
            </div>
            <!-- 14 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/ironshore.png" alt="ironshore">
            </div>
            <!-- 15 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/lilly.png" alt="lilly">
            </div>
            <!-- 16 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/m-logo.png" alt="m">
            </div>
            <!-- 17 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/mundipharma.png" alt="Mundi Pharma">
            </div>
            <!-- 18 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/mylan.png" alt="mylan">
            </div>
            <!-- 19 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/neuroendocrine.png" alt="NeuroEndocrine">
            </div>
            <!-- 20 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/novartis.png" alt="novatris">
            </div>
            <!-- 21 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/nutricia.png" alt="nutricia">
            </div>
            <!-- 22 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/pfizer.png" alt="pfizer">
            </div>
            <!-- 23 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/sandoz.png" alt="sandoz">
            </div>
            <!-- 24 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/sanofipasteur.png" alt="sanofi pasteur">
            </div>
            <!-- 25 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/seqirus.png" alt="seqirus">
            </div>
            <!-- 26 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/takeda.png" alt="takeda">
            </div>
            <!-- 27 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/teleflex.png" alt="teleflex">
            </div>
            <!-- 28 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/terumo.png" alt="terumo">
            </div>
            <!-- 29 -->
            <div class="image-logo">
                <img src="<?= theme() ?>/assets/images/industry-logo/ucb.png" alt="ucb">
            </div>
        </div>
    </div>
</div>

<div class="page-section bg-dark orange-gradient orange-bg py-4">
    <div class="container">
        <div class="row px-md-3 align-items-end">
            <div class="col-12 py-md-5 text-center text-md-left">
                <h2 class="h2 pt-4">CONTACT US TO DISCUSS YOUR NEXT CAMPAIGN
                </h2>
                <a class="btn-link red" href="<?= url('/contact') ?>" title="">CONTACT</a>
            </div>
        </div>
    </div>
</div>
