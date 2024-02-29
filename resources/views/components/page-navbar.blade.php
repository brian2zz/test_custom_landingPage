<header id="header" class="sticky-top bsb-tpl-header-sticky bsb-tpl-header-sticky-animationX">
    <!-- Navbar 1 - Bootstrap Brain Component -->
    <nav id="scrollspyNav"
        class="navbar navbar-expand-lg bsb-tpl-bg-blue bsb-navbar bsb-navbar-hover bsb-navbar-caret bsb-tpl-navbar-sticky"
        data-bsb-sticky-target="#header">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('assets/img/branding/wave-logo.svg') }}" class="bsb-tpl-logo" alt="">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                    class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul id="bsb-tpl-navbar" class="navbar-nav justify-content-end flex-grow-1">
                        @foreach ($links as $index => $link)
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ $href[$index] }}" aria-current="page"
                                    data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar"
                                    style="color: black;">{{ $link }}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </nav>

</header>
