<?php

namespace Source\Router;

use Source\Core\Controller;

class Portfolio extends Controller
{

    /**
     * Web constructor.
     */
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }
    

    public function biosimilar(): void
    {
        $head = $this->seo->getTags(
            'Biosimilar Medicines | Marketing Campaign | Arterial Group Sydney',
            'The &#039;Start with One&#039; creative communicates multiple messages linked to the placement of the product within its space. Using brand colours influenced from the original logo, we were able to create a strong and contemporary design which reflected the values of the brand.',
            url(),
            theme("/assets/images/arterial_group_logo_white-2.png")
        );
        echo $this->view->render("portfolio/biosimilar", [
            "head" => $head,
            "body_tag_class" => 'internal portfolio',
            'menu_active' => 'our_work'
        ]);
    }

    public function more_than_once(): void
    {
        $head = $this->seo->getTags(
            'More Than Once a Night Man | Media Campaign | Arterial Group Sydney',
            '&#039;More Than Once a Night Man&#039; was an online &amp; radio campaign raised public awareness of the symptoms of benign prostatic hyperplasia (enlarged prostate). It employed a light-hearted and humorous approach to the issue by creating a David Attenborough-esque night vision approach.',
            url(),
            theme("/assets/images/arterial_group_logo_white-2.png")
        );
        echo $this->view->render("portfolio/more-than-once-a-night-man", [
            "head" => $head,
            "body_tag_class" => 'internal portfolio',
            'menu_active' => 'our_work'
        ]);
    }

    public function change_outlook(): void
    {
        $head = $this->seo->getTags(
            'Change the Outlook | Safety Awareness Campaign | Arterial Group Sydney',
            'Arterial created an international public awareness campaign on vaccination safety to counter unfounded concerns about vaccination promoted by the online anti-science groups and to encourage people to discuss the topic with their GPs.',
            url(),
            theme("/assets/images/arterial_group_logo_white-2.png")
        );
        echo $this->view->render("portfolio/change-the-outlook", [
            "head" => $head,
            "body_tag_class" => 'internal portfolio',
            'menu_active' => 'our_work'
        ]);
    }

    public function broken_bones(): void
    {
        $head = $this->seo->getTags(
            'Broken Bones | Osteoporosis Campaign | Arterial Group Sydney',
            'Arterial created a multi-channel direct to consumer campaign with the aim of raising awareness of potential implications of untreated osteoporosis. The &#039;Nobody Likes Broken Bones&#039; campaign was created with the target of driving 40,000 GP visits from pre-qualified people at risk of osteoporosis.',
            url(),
            theme("/assets/images/arterial_group_logo_white-2.png")
        );
        echo $this->view->render("portfolio/broken-bones", [
            "head" => $head,
            "body_tag_class" => 'internal portfolio',
            'menu_active' => 'our_work'
        ]);
    }

    public function vacctination(): void
    {
        $head = $this->seo->getTags(
            'Vaccination | Print Campaign | Arterial Group Sydney',
            '&#039;I Haven&#039;t Got Time For GERD&#039; was a regional print campaign and iPad app that repositioned this gastro-oesophageal reflux disease product in the challenging South-East Asian market.',
            url(),
            theme("/assets/images/arterial_group_logo_white-2.png")
        );
        echo $this->view->render("portfolio/vaccination", [
            "head" => $head,
            "body_tag_class" => 'internal portfolio',
            'menu_active' => 'our_work'
        ]);
    }

    public function wish_i_knew(): void
    {
        $head = $this->seo->getTags(
            'Wish I knew Then what I know Now | Brand&amp;Launch Campaign | Arterial Group Sydney',
            'Arterial Group spearheaded the brand development and campaign launch for intravenous (IV) ibuprofen to anaesthetists across Australia.',
            url(),
            theme("/assets/images/arterial_group_logo_white-2.png")
        );
        echo $this->view->render("portfolio/wish-i-knew", [
            "head" => $head,
            "body_tag_class" => 'internal portfolio',
            'menu_active' => 'our_work' 
        ]);
    }

    public function neca(): void
    {
        $head = $this->seo->getTags(
            'Creative | Patient interviews and filming | Steering Committee liaison | Medical writing | Accredited medical education.',
            'Lorem Ipsum',
            url(),
            theme("/assets/images/arterial_group_logo_white-2.png")
        );
        echo $this->view->render("portfolio/neca", [
            "head" => $head,
            "body_tag_class" => 'internal portfolio',
            'menu_active' => 'our_work' 
        ]);
    }

    public function bod(): void
    {
        $head = $this->seo->getTags(
            'Creative | Web development | KOL interviews and filming| Steering Committee liaison |HCP and patient support materials | Medical writing |Accredited medical education',
            'Lorem Ipsum',
            url(),
            theme("/assets/images/arterial_group_logo_white-2.png")
        );
        echo $this->view->render("portfolio/bod", [
            "head" => $head,
            "body_tag_class" => 'internal portfolio',
            'menu_active' => 'our_work' 
        ]);
    }

    public function seqirus(): void
    {
        $head = $this->seo->getTags(
            'Creative | Web development | KOL interviews and filming | Steering Committee liaison | Medical writing |Accredited medical education',
            'Lorem Ipsum',
            url(),
            theme("/assets/images/arterial_group_logo_white-2.png")
        );
        echo $this->view->render("portfolio/seqirus", [
            "head" => $head,
            "body_tag_class" => 'internal portfolio',
            'menu_active' => 'our_work' 
        ]);
    }

}
