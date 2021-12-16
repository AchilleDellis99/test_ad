<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Achille Dellìs - Mail Sent!</title>
        <meta name="description" content="simple CV example created with HTML and CSS">
        <meta name="author" content="Fly Nerd">
        <link rel="icon" href="./img/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <nav>
            <div class="topnav" id="myTopnav">
                <a href="index.html" class="active">Home</a>
        </div>
        </nav>
        <header>
          <div>
            <img src="./img/avatar.jpg" />
          </div>
          <h1>ACHILLE DELLìS</h1>
          <section>
            <p>Hello! My name is Achille, I'm a Cybersecurity student in a post diploma course here in Italy. Now I'm searching for new job opportunity. I love technology, photography and OSINT investigation.</p>
            <a href="https://www.facebook.com/adellis1999" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/AchilleDellis" target="_blank">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="https://github.com/AchilleDellis99" target="_blank">
              <i class="fab fa-github-alt"></i>
            </a>
            <a href="https://www.instagram.com/achilledellis/" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/in/achille-d-07bb65149/" target="_blank">
              <i class="fab fa-linkedin-in"></i>
            </a><br><br>
            <div class="dropdown">
                <button class="dropbtn">Languages</button>
                <div class="dropdown-content">
                <a href="index_it.html">Italiano 🇮🇹</a>
                <a href="index_gr.html">Ελληνικά 🇬🇷</a>
                <a href="index.html">English 🇬🇧</a>
                <a href="index_de.html">Deutsch 🇩🇪</a>
                </div>
              </div>
            </div>
          </section>
        </header>
        <main>
        <?php
        if(isset( $_POST['name']))
        $name = $_POST['name'];
        if(isset( $_POST['email']))
        $email = $_POST['email'];
        if(isset( $_POST['message']))
        $message = $_POST['message'];
        if(isset( $_POST['subject']))
        $subject = $_POST['subject'];

        $content="From: $name \n Email: $email \n Message: $message";
        $recipient = "achilledellis2358@protonmail.com";
        $mailheader = "From: $email \r\n";
        mail($recipient, $subject, $content, $mailheader) or die("Error!");
        echo "Email sent!";
        ?>
        <br>
        <a href="index.html">Back to Homepage: </a>🏠
    </main>
    <footer>
      <p>Created by: Achille Dellìs / <a href="https://www.linkedin.com/in/achille-d-07bb65149/" target="_blank">LinkedIn</a> / 2021 </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
