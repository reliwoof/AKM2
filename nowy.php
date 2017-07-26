<!DOCTYPE html>
<html>
    <head>
        <title>AKM</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Lato:300&amp;subset=latin-ext" rel="stylesheet">
        <link href="style1.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/smoothScroll.js"></script>
        <script src="newjavascript.js"></script>
    </head>
    <body>
        <main>
            <?php
            if (isset($_POST["email"])) {
                $to = 'ranameth@gmail.com';
                $subject = $_POST["temat"];
                $message = $_POST["tresc"];
                $telefon = $_POST["telefon"];
                $imie = $_POST["imie"];
                $nazwisko = $_POST["nazwisko"];
                $message = "Imię: $imie Nazwisko: $nazwisko Numer telefonu: " . $telefon . "  " . $message;
                $email = $_POST["email"];
                $headers = 'From: ' . $email . "\r\n" .
                        'Reply-To: ' . $email . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();
                $success = mail($to, $subject, $message, $headers);
                if (!$success) {
                    $wynik = error_get_last()['message'];
                    echo $wynik;
                } else {
                    $wynik = "Wysłano wiadomość e-mail.";
                    $div = '<div id="mailing" style="position: fixed; width:100%; height: 50px; font-size:30px; text-align:center; z-index: 40; background-color: white;">' . $wynik . '</div>';
                }
                echo $div;
            }
            ?>
            <nav>
                <ul class="menu">
                    <li><a href="#home">Strona główna</a></li>
                    <li><a href="#tytul">Portfolio</a></li>
                    <li><a href="#home"><img href="#home" id="logo" src="Grafiki do AKM/logo.png" alt="logo"/></a></li>
                    <li><a href="#omnie">O mnie</a></li>
                    <li><a href="#kontakt">Kontakt</a></li>
                </ul>
            </nav>
            <section id="home">

                <div id="zdjecie1" class="parallax">
                    <!--<img src="Grafiki do AKM/AKM_grafika startowa.png" alt="grafika"/>-->
                </div>
            </section>
            <section id="tytul">
                <header>
                    <h1>portfolio</h1>
                </header>
            </section>

            <!--<section id="portfolio">-->
            <!--<div class="portfolio">-->

            <!--<div class="prace">-->
            <div id="lista">
                <div class="li"><img name="1" src="img/5.jpg" alt="wierzowiec"/></div>
                <div class="li"><img name="2" src="img/4.jpg" alt="wierzowiec"/></div>
                <div class="li"><img name="3" src="img/5.jpg" alt="wierzowiec"/></div>
                <div class="opis" id="zdj1"><div class="zdjecie"></div><div class="tekst"></div></div>
                <div class="opis" id="zdj2"><div class="zdjecie"></div><div class="tekst"></div></div>
                <div class="opis" id="zdj3"><div class="zdjecie"></div><div class="tekst"></div></div>
                <div class="li"><img name="4" src="img/4.jpg" alt="wierzowiec"/></div>
                <div class="li"><img name="5" src="img/5.jpg" alt="wierzowiec"/></div>
                <div class="li"><img name="6" src="img/4.jpg" alt="wierzowiec"/></div>
                <div class="opis" id="zdj4"><div class="zdjecie"></div><div class="tekst"></div></div>
                <div class="opis" id="zdj5"><div class="zdjecie"></div><div class="tekst"></div></div>
                <div class="opis" id="zdj6"><div class="zdjecie"></div><div class="tekst"></div></div>
            </div>
            <!--</div>-->
            <!--</div>-->
            <!--</section>-->
            <section id="omnie">
                <div id="zdjecie2" class="parallax">
                    <div>
                        <header>
                            <div>
                                O mnie
                            </div>
                        </header>
                        <article>
                            <p>(The whole family is having dinner. George is working on his reports and watching TV. David and Linda, Marty's siblings are there as well. David is dressed in his work clothes, a fast food restaurant outfit.) Believe me, Marty, you're better off not having to worry about all the aggravation and headaches of playing at that dance. He's absolutely right, Marty. the last thing you need is headaches. (Marty's mother, Loraine, enters and drops a cake onto the table. She's a plump woman who tends to drink somewhat.) Kids, we're gonna have to eat this cake by ourselves, Uncle Joey didn't make parole again. I think it would be nice, if you all dropped him a line.</p>
                        </article>
                    </div>
                </div>
            </section>

            <section id="kontakt">
                <div>
                    <div id="formularz">
                        <h1 class="naglowek">Napisz do mnie!</h1>
                        <form method="POST" action="" accept-charset="UTF-8">
                                <input type="text" name="imie" placeholder=" Imię"><br/>
                                <input type="text" name="nazwisko" placeholder=" Nazwisko"><br/>
                                <input type="text" name="telefon" placeholder=" Numer telefonu"><br/>
                                <input type="email" name="email" placeholder=" E-mail" required><br/>
                                <input type="text" name="temat" placeholder=" Temat"><br/>
                                <textarea name="tresc" placeholder=" Treść" required></textarea><br/>
                                <button id="submit" type="submit">Wyślij</button>
                            </form>
                    </div>
                    <div id="danekontaktowe">
                        <header>
                            <div>Kontakt</div>
                        </header>
                        <article>
                            <p>AKM - ARCHITEKT KAMIL MAZUR</p>
                            <p>Tel: 791 202 791</p>
                            <p>Mail: akm.biuro@outlook.com</p>
                            <p>ul. Świerklańska 190</p>
                            <p>44-268 Jastrzębie-Zdrój</p>
                        </article>
                    </div>
                </div>
            </section>


        </main>
        <script>
            $('a[href^="#"]').on('click', function (e) {
                var el = $(e.target.getAttribute('href'));
                var elOffset = el.offset().top;
                var elHeight = el.height();
                var offset = elOffset;
                $.smoothScroll({
                    speed: 700
                }, offset);
                return false;
            });

            $(function () {
                $("#mailing").delay(4000).fadeOut();
            });
        </script>
    </body>

</html>
