<?php $v->layout("_theme"); ?>

<?= $v->insert("inc/header-home"); ?>
    <!-- reCAPTCHA -->
    <!--<script src="https://www.google.com/recaptcha/api.js" async defer></script>-->
    

<div class="page-hero overlay">
    <div class="hero-section">
        <div class="container text-center text-md-left">
            <div class="row">

                <div class="col-12">
                    <h1 class="display-4">CONTACT US <br> TODAY
                    </h1>
                    <span class="subhead">We love meeting new people and chatting about new projects! Get in touch today.
              </span>
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

<section class="page-section row-1 py-3 bg-light" id="row1">
    <div class="container py-5 py-md-5">
        <form action="<?= url("/send-contact-form") ?>" id="contactForm" name="sendContactForm" method="post" autocomplete="off">
            <?= csrf_input() ?>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="fancy-input">
                        <input type="text" name="first_name" autocomplete="off" required="" autocomplete="off">
                        <label for="postcode" class="label-name">
                            <span class="content-name"> First name*</span>
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="fancy-input">
                        <input type="text" name="last_name" autocomplete="off" required="" autocomplete="off">
                        <label for="postcode" class="label-name">
                            <span class="content-name"> Last name*</span>
                        </label>
                    </div>
                </div>
            </div><!-- .row -->

            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="fancy-input">
                        <input type="text" name="email" autocomplete="off" required="" autocomplete="off">
                        <label for="postcode" class="label-name">
                            <span class="content-name"> Email*</span>
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fancy-input">
                        <input type="text" name="website" autocomplete="off" required="">
                        <label for="postcode" class="label-name">
                            <span class="content-name"> website </span>
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fancy-input">
                        <input type="text" name="phone" autocomplete="off" required="" autocomplete="off">
                        <label for="postcode" class="label-name">
                            <span class="content-name"> Phone </span>
                        </label>
                    </div>
                </div>
            </div><!-- .row -->


            <div class="row">
                <div class="div col-12">
                    <div class="fancy-textarea">
                        <textarea name="message" id="message" required rows="10"></textarea>
                        <label for="message" class="label-name">
                            <span class="content-name"> Message*</span>
                        </label>
                    </div>
                </div>
            </div><!-- .row -->

            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="form-group consent-block">
                        <label class="consent-container align-items-center">I consent to Arterial Group collecting my details through this form.
                            <input type="checkbox" checked="checked" value="Checked" name="consent"
                                   id="consent">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                </div>
            </div><!-- .row -->


            <div class="alert  alert-dismissible fade show" role="alert">
                <p></p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="row">
                <div class="col-md-6 d-flex justify-content-md-start justify-content-center">
                    <!-- google captcha -->
                    <!--<div class="g-recaptcha" name="g-recaptcha" data-sitekey="<?= CONF_GOOGLE_SITE_KEY ?>"></div>-->
                    
                    <input type="hidden" id="token" name="token">
                </div>
                <div class="col-md-6 d-flex justify-content-md-end justify-content-center">
                    <button class="radius btn btn-contact-us " >
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Submit
                    </button>
                </div>
            </div>

            <div class="py-1"></div>
        </form>


    </div><!-- .container -->
</section><!-- .page-section -->




<div class="page-section row-2 py-3 bg-light" id="row2">
    <div class="container py-5 py-md-5">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="map">
                    <div style="width: 100%">
                        <iframe width="100%" height="250" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=21/26a%20Lime%20Street%20Sydney%20NSW%202000%20Australia+(ARTERIAL%20GROUP%20SYDNEY)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 text-center py-3 tel-no">
                <h2 id="title-10" class="">
              <span>
                    You can call us on
                  </span>
                </h2>
                <p>+61 2 8001 1900</p>
                <h2 id="title-10" class="mt-5">
                    <span>You’ll find us located at</span>
                </h2>
                <p>21/26a Lime Street, Sydney NSW 2000</p>
            </div>
        </div>
    </div>
</div>




<?php $v->start("scripts"); ?>
    <script src="https://www.google.com/recaptcha/api.js?render=<?= CONF_GOOGLE_SITE_KEY ?>"></script>
    <script>
       grecaptcha.ready(function() {
        grecaptcha.execute('<?= CONF_GOOGLE_SITE_KEY ?>', {action: 'homepage'}).then(function(token) {
            // console.log(token);
           document.getElementById("token").value = token;
        });
        // refresh token every minute to prevent expiration
        setInterval(function(){
          grecaptcha.execute('<?= CONF_GOOGLE_SITE_KEY ?>', {action: 'homepage'}).then(function(token) {
            console.log( 'refreshed token:', token );
            document.getElementById("token").value = token;
          });
        }, 60000);
    
      });
        
        $( function() {
            
            

            $(".alert").hide();
            $(".spinner-border").hide();

            $('.btn-contact-us').on('click', function(e){
                e.preventDefault();
                $(".spinner-border").show();
                $(".alert").hide();
                $(".alert").removeClass("alert-danger");
                $(".alert").removeClass("alert-success");

                 
               


                var request = $.ajax({
                    url: $('form[name="sendContactForm"]').attr('action'),
                    dataType: "json",
                    type: 'POST',
                    data: {
                        action: 'contact-us',
                        csrf: $('input[name="csrf"]').val(),
                        captcha: $('input[name="token"]').val(),
                        // captcha: responseCaptcha,
                        data: $('form').serialize(),
                    },
                });
                request.done(function (data) {
                    $(".alert p").html(data[3]);
                    $(".alert").show().addClass(data[1]);
                    $('.spinner-border').hide();

                    if (data[2] == true){
                        $('form')[0].reset();
                    }

                });
                request.fail(function (jqXHR, textStatus) {
                    $('.spinner-border').hide();
                });
            })




        });

    </script>
    
<?php $v->end(); ?>