<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="Stylesheet" type="text/css" href="/style.css">
        <script src="/js/jquery-3.7.1.min.js"></script>
        <script src="/js/timer.js"></script>
        <link rel="icon" type="image/png" href="/img/favicon.png">
        <title>Minus 10 Urodziny</title>
    </head>
    <body>
        <div id="main">
            <div id="navigation" class="glass">
                <div>
                    <h1>Minus 10 urodziny</h1>
                </div>
                <div>
                    <ul>
                        <li><a href="/o-idei/">O idei</a></li>
                        <li><a href="/historia/">Historia</a></li>
                        <li><a href="/swieczki/">Ujemne świeczki</a></li>
                        <li><a href="/autorzy/">Kto za tym stoi?</a></li>
                        <li class="happy"><a href="/konkurs/">Konkurs</a></li>
                    </ul>
                </div>
            </div>
            <div id="countdown" class="happy-glass">
                <h2>Do zerowych urodzin już tylko</h2>
                <span class="date-entry"><span class="date-number" id="d100"></span><span class="date-number" id="d10"></span><span class="date-number" id="d1"></span><span class="date-unit">dni</span></span>
                <span class="date-entry"><span class="date-number" id="h10" ></span><span class="date-number" id="h1" ></span><span class="date-unit">godzin</span></span>
                <span class="date-entry"><span class="date-number" id="m10" ></span><span class="date-number" id="m1" ></span><span class="date-unit">minut</span></span>
                <span class="date-entry"><span class="date-number" id="s10" ></span><span class="date-number" id="s1" ></span><span class="date-unit">sekund</span></span>
            </div>

            <div id="content" class="glass">
                <?php
                    $requestedContent = "o-idei";
                    if (isset($_GET['requested_content'])) {
                        $requestedContent = $_GET['requested_content'];
                    }
                    $pagesList = array("o-idei", "historia", "swieczki", "autorzy", "konkurs");;
                    if (in_array($requestedContent, $pagesList)) {
                        include("./content/${requestedContent}.html");
                    } else {
                ?>
                    <h2>404<h2>
                    <p>Niestety, taka strona nie istnieje!</p>
                <?php
                    }
                ?>
            </div>
        </div>
    </body>
</html>