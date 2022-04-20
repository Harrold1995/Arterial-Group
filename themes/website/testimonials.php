<?php $v->layout("_theme"); ?>

<?= $v->insert("inc/header-home"); ?>

<div class="page-hero overlay">
      <div class="hero-section">
        <div class="container text-center text-md-left">
          <div class="row">

            <div class="col-12">
              <h1 class="display-4">WHAT OUR CLIENTS<br> HAVE TO SAY</h1>

            </div>
            <div class="col-12">

            </div>
          </div>

        </div>
        <div class="scroll-holder text-center">
          <p>scroll down</p>

          <a href="#row1">
            <img src="<?= theme() ?>/assets/images/arrow.png" alt="">

          </a>

        </div>
      </div>
    </div>

    <div class="page-section row-1 pb-3 bg-light" id="row1">
      <div class="container py-2 py-md-5">
        <div class="row ">
          <div class="col-12">
            <div class="testimonial-content p-3 px-5 border my-5">
              <p class="testimonial-quote my-4">The presentation worked very well today. Thanks for your excellent
                support. I
                really appreciate your efforts in getting the e-compendium in working condition even though it was a
                very tight timeline. Thanks very much and great work!</p>
              <p class="testimonial-author mb-0 "><strong>Senior Brand Manager</strong></p>
              <p class="testimonial-company mb-0">Top 3 Global Pharma Company</p>
            </div>

            <div class="testimonial-content p-3 px-5 border my-5">
              <p class="testimonial-quote my-4">Fantastic! Thank you so much for your assistance this weekend. I was
                particularly impressed with your management of the technical side of things. You made me feel all was
                under control.</p>
              <p class="testimonial-author mb-0 "><strong>Assoc. Brand Manager</strong></p>
              <p class="testimonial-company mb-0">Top 10 Pharma Company, Australia</p>
            </div>

            <div class="testimonial-content p-3 px-5 border my-5">
              <p class="testimonial-quote my-4">The reps just loved the three new apps you developed for me. I’d really
                like to thank you for all your great work on these projects.</p>
              <p class="testimonial-author mb-0 "><strong>Brand Manager</strong></p>
              <p class="testimonial-company mb-0">Top 5 Global Pharma Company, Australia</p>
            </div>

            <div class="testimonial-content p-3 px-5 border my-5">
              <p class="testimonial-quote my-4">The eDetailer we created and built together went down really well with
                the sales team!</p>
              <p class="testimonial-author mb-0 "><strong>Senior Brand Manager</strong></p>
              <p class="testimonial-company mb-0">Top 5 Global Pharma Company, Australia</p>
            </div>

            <div class="testimonial-content p-3 px-5 border my-5">
              <p class="testimonial-quote my-4">Well done guys! The hard work you all put in is really paying off! The
                program is working its socks off!</p>
              <p class="testimonial-author mb-0 "><strong>Senior Brand Manager</strong></p>
              <p class="testimonial-company mb-0">Top 10 Global Pharma Company, Australia</p>
            </div>

          </div>

        </div>
      </div>
    </div> <!-- CARDS -->


    <div class="page-section bg-light contactUs grey-bg pb-4 ">
      <div class="container text-center text-md-left">
        <div class="row px-md-3 align-items-end">
          <div class="col-sm-12 col-lg-12 py-0 py-md-5">
            <h2 class="h2 pt-4">LET’S TALK GROWTH!</h2>
            <a class="btn-link btn-orange-bg" href="<?= url('/contact') ?>" title="">CONTACT</a>
          </div>
        </div>
      </div>
    </div> <!-- CONTACT -->