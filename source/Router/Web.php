<?php

namespace Source\Router;

use Source\Core\Controller;
use Source\Support\Email;


class Web extends Controller
{
    /**
     * Web constructor.
     */
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    public function home(): void
    {

        $head = $this->seo->getTags(
            CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/arterial_group_logo_white-2.png")
        );
        echo $this->view->render("home", [
            "head" => $head,
            "body_tag_class" => '',
            'menu_active' => 'home'
        ]);
    }


    public function marketing(): void
    {

        $head = $this->seo->getTags(
            'Marketing Agency | Healthcare &amp; Pharmaceutical | Arterial Group Sydney',
            'Arterial Group is a Sydney-based marketing agency that works with healthcare and pharmaceutical brands to develop integrated communication campaigns that create powerful customer connections and drive sales growth',
            url(),
            theme("/assets/images/arterial_group_logo_white-2.png")
        );
        echo $this->view->render("marketing", [
            "head" => $head,
            "body_tag_class" => 'internal marketing',
            'menu_active' => 'marketing'
        ]);
    }


    public function education(): void
    {

        $head = $this->seo->getTags(
            'Medical Education for GPs &amp; Specialists | Arterial Group Sydney',
            'We create inspiring and interactive multi-channel medical education programs for general practitioners and specialists, in both accredited and non-accredited formats, for a variety of HCP audiences.',
            url(),
            theme("/assets/images/arterial_group_logo_white-2.png")
        );
        echo $this->view->render("education", [
            "head" => $head,
            "body_tag_class" => 'internal education',
            'menu_active' => 'education'
        ]);
    }


    public function consumer(): void
    {

        $head = $this->seo->getTags(
            'Consumer Healthcare &amp; Pharmaceutical Marketing | Arterial Group Sydney',
            'We work with over the counter consumer brands to create robust strategies and develop innovative and engaging promotional campaigns that ensure the support and recommendation of healthcare professionals.',
            url(),
            theme("/assets/images/arterial_group_logo_white-2.png")
        );
        echo $this->view->render("consumer", [
            "head" => $head,
            "body_tag_class" => 'internal consumer',
            'menu_active' => 'consumer'
        ]);
    }


    public function therapeutic(): void
    {

        $head = $this->seo->getTags(
            'Therapeutic | ' . CONF_SITE_NAME,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/arterial_group_logo_white-2.png")
        );
        echo $this->view->render("therapeutic", [
            "head" => $head,
            "body_tag_class" => 'internal therapeutic',
            'menu_active' => 'therapeutic'
        ]);
    }


    public function our_work(): void
    {

        $head = $this->seo->getTags(
            'Our Work | Pharmaceutical Marketing Campaigns | Arterial Group Sydney',
            'In the ever changing pharmaceutical and healthcare marketing landscape, you need an experienced agency that can get deliver your message in the most effective campaign possible. Click here to view Arterial Group&#039;s successful pharmaceutical &amp; healthcare campaigns. If you&#039;re looking',
            url(),
            theme("/assets/images/arterial_group_logo_white-2.png")
        );
        echo $this->view->render("our-work", [
            "head" => $head,
            "body_tag_class" => 'internal ourwork',
            'menu_active' => 'our_work'
        ]);
    }


    public function testimonials(): void
    {

        $head = $this->seo->getTags(
            'Testimonials | Pharmaceutical &amp; Health Marketing | Arterial Group Sydney',
            'We have worked with the largest pharmaceutical and healthcare organisations on a variety of multi-channel marketing campaigns. Brand managers rely on Arterial Group for detailed knowledge and experience in the pharmaceutical space and the know-how to meet spec and deliver the desired results.',
            url(),
            theme("/assets/images/arterial_group_logo_white-2.png")
        );
        echo $this->view->render("testimonials", [
            "head" => $head,
            "body_tag_class" => 'internal testimonials',
            'menu_active' => 'testimonials'
        ]);
    }


    public function contact_us(): void
    {

        $head = $this->seo->getTags(
            'Contact | Arterial Group Sydney | Pharmaceutical &amp; Healthcare Marketing',
            'Contact Arterial Group today to discuss your next campaign. We work with the largest pharmaceutical and healthcare brands in the world. We employ a multi-channel marketing approach to create brand awareness.',
            url(),
            theme("/assets/images/arterial_group_logo_white-2.png")
        );
        echo $this->view->render("contact", [
            "head" => $head,
            "body_tag_class" => 'internal contact',
            'menu_active' => 'contact'
        ]);
    }


    public function contact_us_form(array $formData): void
    {
        // var_dump($formData['captcha']);
        if (is_array($formData)) {






            sleep(1);
            $dataDetails = explode("&", urldecode($formData['data']));
            $data = [];
            foreach ($dataDetails as $value) {
                $value = str_replace("#38;", "", $value);
                parse_str($value, $output);
                $data += $output;
            }

            //request limit
            if (request_limit('contact_form','3', 60 * 5)){
                $result = array('Action', 'alert-danger', false, '<b>Sorry, too many attempts wait a bit and try again.</b>');
                echo json_encode($result);
                return;
            }

            //check CSRF
            if (!csrf_verify($formData['csrf'])) {
                $result = array('Action', 'alert-danger', false, '<b>Sorry, invalid session, please try to refresh your page or try another browser.</b>');
                echo json_encode($result);
                return;
            }

            $data = array_map('trim', $data);
            $data = array_map('strip_tags', $data);
            $data = array_map('addslashes', $data);


            // first name
            if (empty($data['first_name']) || strlen($data['first_name']) > 255) {
                $result = array('Action', 'alert-danger', false, '<b>Please, type your first name</b>');
                echo json_encode($result);
                return;
            }

            // last name
            if (empty($data['last_name']) || strlen($data['last_name']) > 255) {
                $result = array('Action', 'alert-danger', false, '<b>Please, type your last name</b>');
                echo json_encode($result);
                return;
            }


            //email
            if (!isset($data['email']) || empty($data['email'])) {
                $result = array('Action', 'alert-danger', false, '<b>Please, type your email address</b>');
                echo json_encode($result);
                return;
            }
            if (!is_email($data['email'])) {
                $result = array('Action', 'alert-danger', false, '<b>Please, type a valid email address</b>');
                echo json_encode($result);
                return;
            }


            // Message
            if (empty($data['message'])) {
                $result = array('Action', 'alert-danger', false, '<b>Please, type your message</b>');
                echo json_encode($result);
                return;
            }


            /*
             * Body template:
             * */
            $bodyTemplate = '
            
            <h2>Message from Arterial group website</h2>
            
            <p>First name: <strong>' . $data['first_name'] . '</strong> </p>
            <p>Last name: <strong>' . $data['last_name'] . '</strong> </p>
            <p>Email: <strong>' . $data['email'] . '</strong> </p>
            
            ';

            if (!empty($data['phone'])) {
                $bodyTemplate .= '<p>Website: <strong>' . $data['website'] . '</strong> </p>';
                $bodyTemplate .= '<p>Email: <strong>' . $data['phone'] . '</strong> </p>';
            }


            $bodyTemplate .= '
            <br>
            <p>Message: <strong>' . $data['message'] . '</strong> </p>
            <p><strong>' . $data['consent'] . '</strong> I consent to Arterial Group collecting my details through this form.</p>
            
            ';


            /* * ********************************************************
            * reCAPTCHA validation
            * ******************************************************** */

            //  BEGIN Setting reCaptcha v3 validation data
            $url = "https://www.google.com/recaptcha/api/siteverify";
            $headers = [
                'secret' => CONF_GOOGLE_SECRET_KEY,
                'response' => $formData['captcha'],
                'remoteip' => $_SERVER['REMOTE_ADDR']
            ];


            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($headers)
                )
            );

            //   Creates and returns stream context with options supplied in options preset
            $context  = stream_context_create($options);
            //   file_get_contents() is the preferred way to read the contents of a file into a string
            $response = file_get_contents($url, false, $context);
            //   Takes a JSON encoded string and converts it into a PHP variable
            $res = json_decode($response, true);
            //   END setting reCaptcha v3 validation data

            if ($res['success'] == true && $res['score'] >= 0.5) {
                // END of reCAPTCHA validation ***************************/


                (new Email())->bootstrap(
                    'Arterial group website - New message',
                    $bodyTemplate,
                    'info@arterialgroup.com',
                    'Arterial group'
                )->send();


                $result = array('Action', 'alert-success', true, '<b>Thank you!</b> Your message has been sent.');
                echo json_encode($result);
                return;
            }else{
                $result = array('Action', 'alert-danger', false, '<b>Sorry, invalid session, please try to refresh your page or try another browser.</b>');
                echo json_encode($result);
                return;
            }


        }
    }


    /**
     * SITE NAV ERROR
     * @param array $data
     */
    public function error(array $data): void
    {
        $error = new \stdClass();

        $head = $this->seo->getTags(
            CONF_SITE_NAME . " 404 -  We couldn't find this page ",
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/arterial_group_logo_white-2.png")
        );
        echo $this->view->render("error", [
            "head" => $head

        ]);
    }

}
