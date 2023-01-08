<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doing Smart</title>
    <meta name="description"
        content="Prennez en main votre processus de digitalisation et augmenter votre chiffre d'affaire - Communiquer éfficacement sur les résaux sociaux" />
    <meta name="keywords"
        content="community manager, community management, réseaux sociaux, social media, formation, training, " />

    <meta property="og:url" content="{{ url('') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Agence de marketing digital | Doing Smart" />
    <meta property="og:site_name" content="Agence de marketing digital | Doing Smart" />
    <meta property="og:description"
        content="Prennez en main votre processus de digitalisation et augmenter votre chiffre d'affaire - Communiquer éfficacement sur les résaux sociaux" />
    <meta property="og:image" content="{{ asset('/images/logo_ico.png') }}" />

    <meta property="twitter:card" content="{{ asset('/images/logo_ico.png') }}" />
    <meta name="twitter:creator" content="@MarcelinSigha" />
    <meta property="twitter:url" content="{{ url('') }}" />
    <meta property="twitter:title" content="Agence de marketing digital | Doing Smart" />
    <meta property="twitter:description"
        content="Prennez en main votre processus de digitalisation et augmenter votre chiffre d'affaire - Communiquer éfficacement sur les résaux sociaux" />
    <meta property="twitter:image" content="{{ asset('/images/logo_ico.png') }}" />

    <link rel="icon" type="image/x-icon" href="{{ asset('/images/logo_ico.png') }}">

    <title>Agence de marketing digital | Doing Smart</title>
</head>

<body class="antialiased">
    <div id="app"></div>
    @vite('resources/ts/app.ts')
</body>
<script>
    !(function() {
        var e, t, n, a;
        window.MyAliceWebChat ||
            (((t = document.createElement("div")).id = "myAliceWebChat"),
                ((n = document.createElement("script")).type = "text/javascript"),
                (n.async = !0),
                (n.src = "https://myalice-widget.netlify.app/index.js"),
                (a = (e = document.body.getElementsByTagName("script"))[
                    e.length - 1
                ]).parentNode.insertBefore(n, a),
                a.parentNode.insertBefore(t, a),
                n.addEventListener("load", function() {
                    MyAliceWebChat.init({
                        selector: "myAliceWebChat",
                        number: "237657525812",
                        message: "Hello Bienvenue chez Doing Smart, votre agence de marketing digitale",
                        color: "#25D366",
                        channel: "wa",
                        boxShadow: "high",
                        text: "Whatsapp Us",
                        theme: "light",
                    });
                }));
    })();
</script>

</html>
