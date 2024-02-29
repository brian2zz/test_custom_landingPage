@push('styles')
    <!-- Google Fonts Files -->
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('assets/favicon/favicon-512x512.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Satisfy&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/wave-bsb.css') }}">
@endpush
<div class="right_col" role="main">

    <x-page-navbar :title="'Title'" :links="['Home', 'services', 'About', 'Contact']" :href="['#scrollspyHero', '#scrollspyServices', '#scrollspyAbout', '#scrollspyContact']" />

    <!-- Hero 2 - Bootstrap Brain Component -->
        <x-hero></x-hero>
    <!-- Main -->
    <main id="main">

        <!-- Section - Services -->
        <!-- Service 3 - Bootstrap Brain Component -->
        <x-services></x-services>

        <!-- Call To Action 1 - Bootstrap Brain Component -->
        <x-recruitment></x-recruitment>

        <!-- Section - Portfolio -->
        <!-- Project 2 - Bootstrap Brain Component -->
        <x-portofolio></x-portofolio>

        <!-- Section - About -->
        <x-about></x-about>

        <!-- Section - Contact -->
        <!-- Contact 2 - Bootstrap Brain Component -->
        <x-contact></x-contact>

    </main>

    <!-- Footer 2 - Bootstrap Brain Component -->
    <x-footer></x-footer>
</div>
@push('scripts')
    <!-- Javascript Files: Vendors -->
    <script src="https://unpkg.com/jquery@3.6.1/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/isotope-packery@2.0.1/packery-mode.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@5.0.0/imagesloaded.pkgd.min.js"></script>
    <script src="https://unpkg.com/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Javascript Files: Controllers -->
    <script src="{{ asset('assets/controller/project-2.js') }}"></script>
    <script src="{{ asset('assets/controller/wave-bsb.js') }}"></script>

    <!-- BSB Body End -->
@endpush
