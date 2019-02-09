<?php
setcookie('test','coucou', time()+1000, '/');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/left-menu.css">
</head>
<body>
    <?php include 'modules/header.php'?>


    <main>
        <?php include 'modules/left-menu.php'?>
        <section class="topics-info">
            <h2>Top topics</h2>
            <!-- top topics -->
            <div class="top-topics">
                <div class="top-topic">
                    <img src="https://picsum.photos/200/300/?image=387" alt="">
                    <a href="#" class="text-topic">
                        <h3>azrt</h3>
                        <p>huheriyauzeoryar azuteirfuoazefruoia zauerfguofzaer</p>
                    </a>
                </div>
                <div class="top-topic">
                    <img src="https://picsum.photos/200/300/?image=387" alt="">
                    <a href="#" class="text-topic">
                        <h3>    azeraert</h3>
                        <p>ujaegvuykvertfuv auzveruvauerv izagverouvaer</p>
                    </a>
                </div>
                <div class="top-topic">
                    <img src="https://picsum.photos/200/300/?image=387" alt="">
                    <a href="#" class="text-topic">
                        <h3>aertgoeariutget</h3>
                        <p>rpiauezhruioghr aieugroygeauorgvrevtuyert eiurathpiueartgvrtaog</p>
                    </a>
                </div>
            </div>

            <!-- last topics -->
            <h2>Last topics</h2>

            <div class="last-topics">
                <div class="last-topic">
                    <img src="https://picsum.photos/200" alt="">
                    <a href="#">
                        <h4>AZERTYU</h4>
                    </a>
                </div>
                <div class="last-topic">
                    <img src="https://picsum.photos/200" alt="">
                    <a href="#">
                        <h4>AZERTYU</h4>
                    </a>
                </div>
                <div class="last-topic">
                    <img src="https://picsum.photos/200" alt="">
                    <a href="#">
                        <h4>AZERTYU</h4>
                    </a>
                </div>
                <div class="last-topic">
                    <img src="https://picsum.photos/200" alt="">
                    <a href="#">
                        <h4>AZERTYU</h4>
                    </a>
                </div>
                <div class="last-topic">
                    <img src="https://picsum.photos/200" alt="">
                    <a href="#">
                        <h4>AZERTYU</h4>
                    </a>
                </div>
                <div class="last-topic">
                    <img src="https://picsum.photos/200" alt="">
                    <a href="#">
                        <h4>AZERTYU</h4>
                    </a>
                </div>
                <div class="last-topic">
                    <img src="https://picsum.photos/200" alt="">
                    <a href="#">
                        <h4>AZERTYU</h4>
                    </a>
                </div>
                <div class="last-topic">
                    <img src="https://picsum.photos/200" alt="">
                    <a href="#">
                        <h4>AZERTYU</h4>
                    </a>
                </div>
                <div class="last-topic">
                    <img src="https://picsum.photos/200" alt="">
                    <a href="#">
                        <h4>AZERTYU</h4>
                    </a>
                </div>
                <div class="last-topic">
                    <img src="https://picsum.photos/200" alt="">
                    <a href="#">
                        <h4>AZERTYU</h4>
                    </a>
                </div>
                <div class="last-topic">
                    <img src="https://picsum.photos/200" alt="">
                    <a href="#">
                        <h4>AZERTYU</h4>
                    </a>
                </div>
                <div class="last-topic">
                    <img src="https://picsum.photos/200" alt="">
                    <a href="#">
                        <h4>AZERTYU</h4>
                    </a>
                </div>
                <div class="last-topic">
                    <img src="https://picsum.photos/200" alt="">
                    <a href="#">
                        <h4>AZERTYU</h4>
                    </a>
                </div>
                <div class="last-topic">
                    <img src="https://picsum.photos/200" alt="">
                    <a href="#">
                        <h4>AZERTYU</h4>
                    </a>
                </div>
                <div class="last-topic">
                    <img src="https://picsum.photos/200" alt="">
                    <a href="#">
                        <h4>AZERTYU</h4>
                    </a>
                </div>
                <div class="last-topic">
                    <img src="https://picsum.photos/200" alt="">
                    <a href="#">
                        <h4>AZERTYU</h4>
                    </a>
                </div>
                <div class="last-topic">
                    <img src="https://picsum.photos/200" alt="">
                    <a href="#">
                        <h4>AZERTYU</h4>
                    </a>
                </div>
                <div class="last-topic">
                    <img src="https://picsum.photos/200" alt="">
                    <a href="#">
                        <h4>AZERTYU</h4>
                    </a>
                </div>
            </div>

        </section>
    </main>
    <section class="login off">
        <form action="index.html" method="post">
            <label>
                your name
                <input type="text" name="log" placeholder="login name">
            </label>
            <label>
                your password
                <input type="password" name="psw" placeholder="your password">
            </label>
            
            <input type="submit">

        </form>
    </section>
    <section class="sing-in off">
        <form action="index.html" method="GET">
            <label>
                Pseudo
                <input type="text" name="log" placeholder="login">
            </label>

            <label>
                password
                <input type="password" name="psw" placeholder="password">
            </label>

            <label>
                age
                <input type="number" name="age" placeholder="age">
            </label>
            <label>
                adesse mail
                <input type="email" name="mail" placeholder="your mail">
            </label>
            <input type="submit">

            
        </form>
    </section>

    <footer>

    </footer>
    <script src="scripts/main.js"></script>
</body>
</html>