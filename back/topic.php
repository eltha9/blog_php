<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/topic.css">
</head>
<body>
    <?php include 'modules/header.php'?>

    <main>
        <section class="text">
            <h2>aurfgyouyg</h2>
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Architecto vitae nostrum quod, 
                fugiat excepturi optio voluptatibus velit vero provident magni nesciunt id vel repellat aliquam explicabo ab cumque, reiciendis amet?
            </div>
        </section>
        <section class="to-comment">
            <form action="topic.html" method="GET">
                <label>
                    commentaire <br>
                    <textarea name="comment"></textarea>
                </label>
                <div>
                    <label>
                        Nom 
                        <input type="text" name="name">
                    </label>
                    <label>
                        adress mail 
                        <input type="email" name="mail">
                    </label>
                    <input type="submit" value="Laissez votre commentaire">
                </div>
               
            </form>
        </section>
        <section class="comments">
            <div class="nb-comments">
                10 comments
            </div>
            <div class="comment">
                <div class="info">
                    <span class="name">Eric Dupont</span>
                    <span class="date">09/11/2015</span>
                    à <span class="hour">12h04</span>
                </div>
                <div class="text-comment">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, ipsam. Magnam nulla incidunt vel, ipsam enim hic eos labore neque voluptatibus assumenda. Soluta, facere? Eum praesentium tenetur animi saepe sapiente? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium, ullam laborum? Nam veniam ducimus dolor fuga, modi dicta. Officia omnis soluta reiciendis vel fugiat? Exercitationem modi officiis sequi non neque!
                </div>
            </div>
            <div class="comment">
                    <div class="info">
                        <span class="name">Eric Dupont</span>
                        <span class="date">09/11/2015</span>
                        à <span class="hour">12h04</span>
                    </div>
                    <div class="text-comment">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, ipsam. Magnam nulla incidunt vel, ipsam enim hic eos labore neque voluptatibus assumenda. Soluta, facere? Eum praesentium tenetur animi saepe sapiente? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium, ullam laborum? Nam veniam ducimus dolor fuga, modi dicta. Officia omnis soluta reiciendis vel fugiat? Exercitationem modi officiis sequi non neque!
                    </div>
                </div>
        </section>
    </main>

    <footer>

    </footer>
</body>
</html>