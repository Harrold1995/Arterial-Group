<?php


namespace Source\Models;


use Source\Core\Model;
use Source\Support\Email;

/**
 * Class Registrations
 * @package Source\Models
 */
class Registrations extends Model
{

    /**
     * @var
     */
    private $reg;

    /**
     * Registrations constructor.
     */
    public function __construct()
    {
        parent::__construct("registrations", ["id"], ['title', 'last_name']);
    }


    /**
     * @return mixed
     */
    public function getReg()
    {
        return $this->reg;
    }


    /**
     * Get the representative formating array(representative_name, representative_email)
     * @param $postcode
     * @return array
     */
    public function getTheRepresentativeByPostcode($postcode): array
    {
        $searchDB = $this->getPostcodeFromDatabase($postcode);
        if($searchDB){
            return $searchDB;
        }

        //in case there any matches on the database:
        return $this->getStateFromPostcode($postcode);
    }


    /**
     * Get the state form postcode, representative name and state e.g.: [jo, NSW]
     * @param $postcode
     * @return array
     */
    public function getStateFromPostcode($postcode)
    {
        // NSW
        if ($this->isBetween($postcode,1000,1999) || $this->isBetween($postcode,2000,2599) || $this->isBetween($postcode,2619,2899) || $this->isBetween($postcode,2921,2999) ){
            // Jo and upa
            return ['Jo,Upa','NSW'];
        }

        //ACT
        if ($this->isBetween($postcode,200,299) || $this->isBetween($postcode,2600,2618)){
            // Jo and Upa
            return ['Jo,Upa','ACT'];
        }

        //VIC
        if ($this->isBetween($postcode,3000,3999) || $this->isBetween($postcode,8000,8999)){
            // Chett and Julia
            return ['Chett,Julia', 'VIC'];
        }

        //QLD
        if ($this->isBetween($postcode,4000,4999) || $this->isBetween($postcode,9000,9999) ){
            //megan
            return [ 'Megan' , 'QLD'];
        }

        //SA
        if ($this->isBetween($postcode,5000,5799) || $this->isBetween($postcode,5800,5999) ){
            // Sulize
            return ['Sulize', 'SA'];
        }

        //WA
        if ($this->isBetween($postcode,6000,6797) || $this->isBetween($postcode,6800,6999) ){
            //Sulize
            return ['Sulize', 'WA'];
        }


        //TAS
        if ($this->isBetween($postcode,7000,7799) || $this->isBetween($postcode,7800,7999) ){
            // Julia
            return ['Julia', 'TAS'];
        }


        //NT
        if ($this->isBetween($postcode,800,899) || $this->isBetween($postcode,900,999) ){
            // Sulize
            return [ 'Sulize', 'NT'];
        }

        return ['Empty','Not found'];
    }


    /**
     * @param $number
     * @param $min
     * @param $max
     * @return bool
     */
    public function isBetween($number, $min, $max):bool
    {
        $number = intval($number);
        $min = intval($min);
        $max = intval($max);

        if(($number >= $min ) && ($number <= $max)){
            return true;
        }

        return false;

    }

    /**
     * Get the post code from the database
     * @param $postcode
     * @return array|bool
     */
    public function getPostcodeFromDatabase($postcode)
    {
        $postcode = (new Postcode())->find("postcode = :p", "p={$postcode}")->fetch();
        if ($postcode) {
            return [ $postcode->representative, $postcode->postcode];
        }

        return false;
    }


    /**
     * @param $data
     */
    public function createRegistration($data)
    {
        // Get the representative name by the postcode
        $representative = $this->getTheRepresentativeByPostcode($data['postcode']);

        $tempEmails = '';
        foreach (explode(',',$representative[0]) as $value){
            if(empty($tempEmails)){
                $tempEmails .= (new Representative())->findEmailByName($value);
            }else{
                $tempEmails .= ",".(new Representative())->findEmailByName($value);
            }
        }

        $this->reg = new Registrations();

        if ($data['profession'] == 'Other') {
            $this->reg->profession = ucfirst($data['other_profession']);
        } else {
            $this->reg->profession = (isset($data['profession']) ? $data['profession'] : '');
        }

        $this->reg->title = (isset($data['title']) ? $data['title'] : '');
        $this->reg->first_name = (isset($data['first_name']) ? ucfirst($data['first_name']) : '');
        $this->reg->last_name = (isset($data['last_name']) ? ucfirst($data['last_name']) : '');
        $this->reg->referral = (isset($data['referral']) ? $data['referral'] : '');
        $this->reg->referral_other = (isset($data['other_referral']) ? ucfirst($data['other_referral']) : '');
        $this->reg->primary_practice = (isset($data['primary_practice']) ? ucfirst($data['primary_practice']) : '');
        $this->reg->ahpra = (isset($data['ahpra']) ? strtoupper($data['ahpra']) : '');
        $this->reg->postcode = (isset($data['postcode']) ? $data['postcode'] : '');
        $this->reg->attendance = (isset($data['attendance']) ? $data['attendance'] : '');
        $this->reg->parking_requirements = (isset($data['parking']) ? $data['parking'] : '');
        $this->reg->dietary = (isset($data['dietary']) ? $data['dietary'] : '');
        $this->reg->status = 'Pending';
        $this->reg->state = $this->getStateFromPostcode($data['postcode'])[1];

        $this->reg->representative = $representative[0];

        $this->reg->representative_email = $tempEmails;

        $this->reg->email = (isset($data['email']) ? strtolower($data['email']) : '');
        $this->reg->consent_1 = (isset($data['consent_1']) ? $data['consent_1'] : '');
        $this->reg->consent_2 = (isset($data['consent_2']) ? $data['consent_2'] : '');
        $this->reg->created_at = date("Y-m-d H:i:s");

//        var_dump($this);
//        var_dump($this->save());

        return $this->reg->save();




    }


    /**
     *
     */
    public function sendEmailToRepresentativeForApproval()
    {
        $mailTemplate = file_get_contents(__DIR__ . '/../../email/mail_template/ANU-Registration-NOTIFIES-UCB-PRODUCT-SPECIALIST.html');
        $mailTemplate = str_replace("{{title}}", 'ANU Registration', $mailTemplate);
        $mailTemplate = str_replace("*|MC_PREVIEW_TEXT|*", 'ANU Registration', $mailTemplate);
        $mailTemplate = str_replace("[TITLE]", str_output($this->reg->title), $mailTemplate);
        $mailTemplate = str_replace("[FIRST_NAME]", str_output($this->reg->first_name), $mailTemplate);
        $mailTemplate = str_replace("[SURNAME]", str_output($this->reg->last_name), $mailTemplate);
        $mailTemplate = str_replace("[PROFESSION]", str_output($this->reg->profession), $mailTemplate);
        $mailTemplate = str_replace("[PRIMARY_PRACTICE]", str_output($this->reg->primary_practice), $mailTemplate);
        $mailTemplate = str_replace("[ATTENDANCE]", str_output(strtoupper($this->reg->attendance)), $mailTemplate);
        $mailTemplate = str_replace("[AHPRANUMBER]", str_output($this->reg->ahpra), $mailTemplate);

        $emails = explode(',',$this->reg->representative_email);

        foreach ($emails as $email){

//            $aceptLink = url('/approval/'.str_encrypt($email).'/'.str_encrypt($this->reg->email).'/accept');
//            $denyLink = url('/approval/'.str_encrypt($email).'/'.str_encrypt($this->reg->email).'/deny');
//
//            $mailTemplate = str_replace("[ACCEPT]", $aceptLink, $mailTemplate);
//            $mailTemplate = str_replace("[DENY]", $denyLink, $mailTemplate);

//                    echo $mailTemplate;
        //needs to change the digital to the ucb email
            (new Email())->bootstrap(
                'ACTION REQUIRED: New Registration Pending - '.str_output($this->reg->title).' '.str_output($this->reg->last_name),
                $mailTemplate,
                $email,
                $this->reg->representative
            )->send(
                'noreply@ucbneurology.com.au',
                'UCB Neurology website'
            );
        }
    }


    public function sendEmailToArterialForApproval()
    {
        $mailTemplate = file_get_contents(__DIR__ . '/../../email/mail_template/ANU-Registration-NOTIFIES-ARTERIAL.html');
        $mailTemplate = str_replace("{{title}}", 'ANU Registration', $mailTemplate);
        $mailTemplate = str_replace("*|MC_PREVIEW_TEXT|*", 'ANU Registration', $mailTemplate);
        $mailTemplate = str_replace("[TITLE]", str_output($this->reg->title), $mailTemplate);
        $mailTemplate = str_replace("[FIRST_NAME]", str_output($this->reg->first_name), $mailTemplate);
        $mailTemplate = str_replace("[SURNAME]", str_output($this->reg->last_name), $mailTemplate);
        $mailTemplate = str_replace("[PROFESSION]", str_output($this->reg->profession), $mailTemplate);
        $mailTemplate = str_replace("[PRIMARY_PRACTICE]", str_output($this->reg->primary_practice), $mailTemplate);
        $mailTemplate = str_replace("[ATTENDANCE]", str_output(strtoupper($this->reg->attendance)), $mailTemplate);
        $mailTemplate = str_replace("[AHPRANUMBER]", str_output($this->reg->ahpra), $mailTemplate);

        $emails = explode(',',$this->reg->representative_email);

        foreach ($emails as $email){

            $aceptLink = url('/approval/'.str_encrypt($email).'/'.str_encrypt($this->reg->email).'/accept');
            $denyLink = url('/approval/'.str_encrypt($email).'/'.str_encrypt($this->reg->email).'/deny');

            $mailTemplate = str_replace("[ACCEPT]", $aceptLink, $mailTemplate);
            $mailTemplate = str_replace("[DENY]", $denyLink, $mailTemplate);

//                    echo $mailTemplate;
            //needs to change the digital to the ucb email
            (new Email())->bootstrap(
                'TEST***ARTERIAL - ACTION REQUIRED: New Registration Pending - '.str_output($this->reg->title).' '.str_output($this->reg->last_name),
                $mailTemplate,
                'digital@arterialgroup.com',
                'Arterial'
            )->send(
                'noreply@ucbneurology.com.au',
                'UCB Neurology website'
            );
        }
    }

    /**
     *
     */
    public function sendEmailToUserWaitingApproval()
    {

        switch ($this->reg->representative) {
            case 'Chett':
                $mailTemplate = file_get_contents(__DIR__ . '/../../email/mail_template/ANU-Registration-PENDING-CONFIRMATION-Chett.html');
                break;
            case 'Jo':
                $mailTemplate = file_get_contents(__DIR__ . '/../../email/mail_template/ANU-Registration-PENDING-CONFIRMATION-Jo.html');
                break;
            case 'Julia':
                $mailTemplate = file_get_contents(__DIR__ . '/../../email/mail_template/ANU-Registration-PENDING-CONFIRMATION-Julia.html');
                break;
            case 'Megan':
                $mailTemplate = file_get_contents(__DIR__ . '/../../email/mail_template/ANU-Registration-PENDING-CONFIRMATION-Megan.html');
                break;
            case 'Sulize':
                $mailTemplate = file_get_contents(__DIR__ . '/../../email/mail_template/ANU-Registration-PENDING-CONFIRMATION-Sulize.html');
                break;
            case 'Upa':
                $mailTemplate = file_get_contents(__DIR__ . '/../../email/mail_template/ANU-Registration-PENDING-CONFIRMATION-Upa.html');
                break;
            default:
                $mailTemplate = file_get_contents(__DIR__ . '/../../email/mail_template/ANU-Registration-PENDING-CONFIRMATION-Chett.html');
        }


//        if (strpos($this->reg->email, 'health.nsw.gov.au') !== false) {
////            $bcc = 'Joanne.ferguson-batte@ucb.com;Upa.jay@ucb.com';
//            $bcc = 'david@arterialgroup.com;lucas@arterialgroup.com';
//        }
//        if (strpos($this->reg->email, 'arterialgroup.com') !== false) {
//            $bcc = 'arterialdigital1@gmail.com;arterialdigital3@gmail.com';
//        }


        $mailTemplate = str_replace("{{title}}", 'ANU Registration', $mailTemplate);
        $mailTemplate = str_replace("*|MC_PREVIEW_TEXT|*", 'ANU Registration', $mailTemplate);
        $mailTemplate = str_replace("[title]", str_output($this->reg->title), $mailTemplate);
        $mailTemplate = str_replace("[SURNAME]", " ".str_output($this->reg->last_name), $mailTemplate);

//        echo $mailTemplate;

        (new Email())->bootstrap(
            'Registration for the UCB Australian Neurology Update 2021',
            $mailTemplate,
            $this->reg->email,
            str_output($this->reg->first_name)." ".str_output($this->reg->last_name),
            (isset($bcc) ? $bcc : null)
        )->send(
            'noreply@ucbneurology.com.au',
            'UCB Neurology website'
        );
    }


    /**
     *
     */
    public function sendEmailApproved(object $data, $repEmail)
    {

        $repName = (new Representative())->findNameByEmail($repEmail);

        if($repName){
            switch ($data->attendance){
                case 'perth':
                    $cal = file_get_contents(__DIR__ . '/../../email/calendar/ANU-2021-wa.ics');
                    $mailTemplate = file_get_contents(__DIR__ . '/../../email/mail_template/ANU-Registration-CONFIRMED-ONSITE-WA.html');
                    $state = 'WA';
                    break;
                case 'brisbane':
                    $cal = file_get_contents(__DIR__ . '/../../email/calendar/ANU-2021-qld.ics');
                    $mailTemplate = file_get_contents(__DIR__ . '/../../email/mail_template/ANU-Registration-CONFIRMED-ONSITE-QLD.html');
                    $state = 'QLD';
                    break;
                case 'melbourne':
                    $cal = file_get_contents(__DIR__ . '/../../email/calendar/ANU-2021-vic.ics');
                    $mailTemplate = file_get_contents(__DIR__ . '/../../email/mail_template/ANU-Registration-CONFIRMED-ONSITE-VIC.html');
                    $state = 'VIC';
                    break;
                case 'sydney':
                    $cal = file_get_contents(__DIR__ . '/../../email/calendar/ANU-2021-nsw.ics');
                    $mailTemplate = file_get_contents(__DIR__ . '/../../email/mail_template/ANU-Registration-CONFIRMED-ONSITE-NSW.html');
                    $state = 'NSW';
                    break;
                case 'virtual':
                    if ($data->state == 'NSW'){
                        $cal = file_get_contents(__DIR__ . '/../../email/calendar/ANU-2021-virtual.ics');
                        $mailTemplate = file_get_contents(__DIR__ . '/../../email/mail_template/ANU-Registration-CONFIRMED-VIRTUAL-NSW.html');
                        $state = 'VIRTUAL';
                        break;
                    }else{
                        $cal = file_get_contents(__DIR__ . '/../../email/calendar/ANU-2021-virtual.ics');
                        $mailTemplate = file_get_contents(__DIR__ . '/../../email/mail_template/ANU-Registration-CONFIRMED-VIRTUAL.html');
                        $state = 'VIRTUAL';
                        break;
                    }

                default:
                    $cal = file_get_contents(__DIR__ . '/../../email/calendar/ANU-2021-virtual.ics');
                    $mailTemplate = file_get_contents(__DIR__ . '/../../email/mail_template/ANU-Registration-CONFIRMED-VIRTUAL.html');
                    $state = 'VIRTUAL';

            }

            $mailTemplate = str_replace("{{title}}", 'ANU Registration', $mailTemplate);
            $mailTemplate = str_replace("*|MC_PREVIEW_TEXT|*", 'ANU Registration', $mailTemplate);
            $mailTemplate = str_replace("[title]", str_output($data->title), $mailTemplate);
            $mailTemplate = str_replace("[SURNAME]", " ".str_output($data->last_name), $mailTemplate);
            $mailTemplate = str_replace("[REP_NAME]", str_output($repName->fullname),$mailTemplate);
            $mailTemplate = str_replace("[REP_PHONE_TRIM]", str_replace(" ","",str_output($repName->phone)),$mailTemplate);
            $mailTemplate = str_replace("[REP_PHONE]", str_output($repName->phone),$mailTemplate);
            $mailTemplate = str_replace("[REP_EMAIL]", str_output($repName->showemail),$mailTemplate);

            (new Email())->bootstrap(
                'Registration confirmation for UCB Australian Neurology Update 2021',
                $mailTemplate,
                str_output($data->email),
                str_output($data->first_name)." ".str_output($data->last_name)
            )->send(
                'noreply@ucbneurology.com.au',
                'UCB Neurology website',
                $cal,
                'ANU Event - '.$state
            );
        }
    }


    /**
     * Send email to the subscriber showing deny
     * @param $email
     * @param $surname
     * @param $title
     */
    public function sendEmailDeny($email, $surname, $title)
    {
        $mailTemplate = file_get_contents(__DIR__ . '/../../email/mail_template/ANU-Registration-REGISTRATION-DENIED.html');
//        $mailTemplate = str_replace("{{title}}", 'ANU Registration', $mailTemplate);
//        $mailTemplate = str_replace("*|MC_PREVIEW_TEXT|*", 'ANU Registration', $mailTemplate);
//        $mailTemplate = str_replace("[title]", str_output($title)." ", $mailTemplate);
//        $mailTemplate = str_replace("[SURNAME]", str_output($surname), $mailTemplate);
//
//        if (strpos($email, 'health.nsw.gov.au') !== false) {
////            $bcc = 'Joanne.ferguson-batte@ucb.com;Upa.jay@ucb.com';
//            $bcc = 'arterialdigital1@gmail.com;lucas@arterialgroup.com';
//            $emails = explode(";", $bcc);
//            foreach($emails as $value){
//                (new Email())->bootstrap(
//                    'Registration for the UCB Australian Neurology Update 2021',
//                    $mailTemplate,
//                    str_output($value),
//                    str_output($title)." ".str_output($surname)
//
//                )->send(
//                    'noreply@ucbneurology.com.au',
//                    'UCB Neurology website'
//                );
//            }
//
//
//        }else{
//            (new Email())->bootstrap(
//                'Registration for the UCB Australian Neurology Update 2021',
//                $mailTemplate,
//                str_output($email),
//                str_output($title)." ".str_output($surname)
//
//            )->send(
//                'noreply@ucbneurology.com.au',
//                'UCB Neurology website'
//            );
//        }




    }


    /**
     * Check on the database if the email exists on the register
     * @param $email
     * @return bool
     */
    public function alreadyRegisteres($email): bool
    {
        $alreadyExists = $this->find("email = :e", "e={$email}")->fetch();

        if ($alreadyExists) {
            return true;
        }

        return false;

    }




}