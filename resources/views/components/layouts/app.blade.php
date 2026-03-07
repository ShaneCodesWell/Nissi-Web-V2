<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nissi Technologies | IT Solutions & Services</title>
    <meta name="description"
        content="Nissi Technologies provides cutting-edge email, software, and tech solutions for modern enterprises." />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://db.onlinewebfonts.com/c/df5a9d148a0dc0f71ea287402c2dd486?family=TA+Modern+Times+RoundedExtLt"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,700;1,400;1,500&family=Outfit:wght@200;300;400;500&family=Inconsolata:wght@300;400&display=swap"
        rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('images/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('images/site.webmanifest') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Cursor -->
    <div id="cur"></div>
    <div id="cur2"></div>

    <x-navbar />
    <div>
        {{ $slot }}
    </div>
    <x-footer />
</body>

</html>
