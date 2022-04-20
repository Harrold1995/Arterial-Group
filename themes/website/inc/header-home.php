<!-- Back to top button -->
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


<header>

    <nav class="navbar navbar-expand-lg navbar-light p-0">
        <div class="container wide">
            <a class="navbar-brand pt-lg-3 pb-lg-0 py-2 px-4 pl-lg-0" href="<?= url() ?>">
                <img src="<?= theme('/assets/images/arterial_group_logo_white-2.png') ?>" alt="Arterial group logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                

                <div class="toggle-icon">
                    <div class="menu-line menu-line-1"></div>
                    <div class="menu-line menu-line-2"></div>
                    <div class="menu-line menu-line-3"></div>
                </div>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?= (isset($menu_active) && $menu_active =='marketing' ? 'active' : '') ?>">
                        <a class="nav-link" href="<?= url('/marketing') ?>">MARKETING</a>
                    </li>
                    <li class="nav-item <?= (isset($menu_active) && $menu_active =='education' ? 'active' : '') ?>">
                        <a class="nav-link" href="<?= url('/education') ?>">EDUCATION</a>
                    </li>
                    <li class="nav-item <?= (isset($menu_active) && $menu_active =='consumer' ? 'active' : '') ?>">
                        <a class="nav-link" href="<?= url('/consumer') ?>">CONSUMER</a>
                    </li>
                    <li class="nav-item <?= (isset($menu_active) && $menu_active =='therapeutic' ? 'active' : '') ?>">
                        <a class="nav-link" href="<?= url('/therapeutic') ?>">THERAPEUTIC</a>
                    </li>
                    <li class="nav-item <?= (isset($menu_active) && $menu_active =='our_work' ? 'active' : '') ?>">
                        <a class="nav-link" href="<?= url('/our-work') ?>">OUR WORK</a>
                    </li>
                    <li class="nav-item <?= (isset($menu_active) && $menu_active =='testimonials' ? 'active' : '') ?>">
                        <a class="nav-link" href="<?= url('/testimonials') ?>">TESTIMONIALS</a>
                    </li>
                    <li class="nav-item <?= (isset($menu_active) && $menu_active =='contact' ? 'active' : '') ?>">
                        <a class="nav-link" href="<?= url('/contact') ?>">CONTACT</a>
                    </li>
                </ul>
            </div> <!-- .navbar-collapse -->

        </div> <!-- .container -->
    </nav>

</header>


