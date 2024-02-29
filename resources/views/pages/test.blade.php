<!doctype html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Document Title, Description, and Author -->
    <title>Wave - Bootstrap 5 One Page Template</title>
    <meta name="description" content="Wave is a Bootstrap 5 One Page Template.">
    <meta name="author" content="BootstrapBrain">

    <!-- Favicon and Touch Icons -->
    <link rel="icon" type="image/png" sizes="512x512" href="./assets/favicon/favicon-512x512.png">

    <!-- Google Fonts Files -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Satisfy&display=swap"
        rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="./assets/css/wave-bsb.css">

    <!-- BSB Head -->
</head>

<body data-bs-spy="scroll" data-bs-target="#bsb-tpl-navbar" data-bs-smooth-scroll="true" tabindex="0">
    <!-- Header -->
    @if (session()->has('header'))
        <!-- Ambil data dari session 'header' -->
        @php
            $header = session('header');
            $title = $header['title'];
            $link = $header['link'];
            $href = $header['href'];
        @endphp

        <!-- Periksa apakah ada data yang valid sebelum membuat komponen Blade -->
        @if ($title && $link)
            <x-page-navbar :title="$title" :links="$link" :href="$href" />
        @endif
    @endif

    <!-- Hero 2 - Bootstrap Brain Component -->
    @if (Session('hero'))
        <x-hero></x-hero>
    @endif
    <!-- Main -->
    <main id="main">
        @if (Session('component') !== null)
            @foreach (Session('component') as $component)
                @switch($component)
                    @case(2)
                        <x-services></x-services>
                    @break

                    @case(3)
                        <x-about></x-about>
                    @break

                    @case(4)
                        <x-contact></x-contact>
                    @break
                @endswitch
            @endforeach

        @endif
    </main>

    <!-- Footer 2 - Bootstrap Brain Component -->
    @if (Session('footer'))
        <x-footer></x-footer>
    @endif

    <!-- Javascript Files: Vendors -->
    <script src="https://unpkg.com/jquery@3.6.1/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/isotope-packery@2.0.1/packery-mode.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@5.0.0/imagesloaded.pkgd.min.js"></script>
    <script src="https://unpkg.com/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Javascript Files: Controllers -->
    <script src="./assets/controller/project-2.js"></script>
    <script src="./assets/controller/wave-bsb.js"></script>

    <!-- BSB Body End -->
</body>

</html>
