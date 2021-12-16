<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Contact Me: - Achille Dellìs</title>
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
        <a href="index_de.html">Deutsch 🇩🇪</a>
        <a href="index.html">English 🇬🇧</a>
        </div>
      </div>
    </section>
  </header>
  <main>
      <!--Section: Contact v.2-->
      <section class="mb-4">

          <!--Section heading-->
          <h2 class="h1-responsive font-weight-bold text-center my-4">Contact Me:</h2>
          <!--Section description-->
          <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact me directly.<br> I will reply as soon as possible.</p>

          <div class="row">

              <!--Grid column-->
              <div class="col-md-9 mb-md-0 mb-5">
                  <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <input type="text" id="name" name="name" class="form-control">
                                  <label for="name" class="">Your name</label>
                              </div>
                          </div>
                          <!--Grid column-->

                          <!--Grid column-->
                          <div class="col-md-6">
                              <div class="md-form mb-0">
                                  <input type="text" id="email" name="email" class="form-control">
                                  <label for="email" class="">Your email</label>
                              </div>
                          </div>
                          <!--Grid column-->

                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row">
                          <div class="col-md-12">
                              <div class="md-form mb-0">
                                  <input type="text" id="subject" name="subject" class="form-control">
                                  <label for="subject" class="">Subject</label>
                              </div>
                          </div>
                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row">

                          <!--Grid column-->
                          <div class="col-md-12">

                              <div class="md-form">
                                  <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                  <label for="message">Your message</label>
                              </div>

                              <div class="h-captcha" data-sitekey="76eb5646-118a-44d3-a2dd-1860332f2370"></div>

                          </div>
                      </div>
                      <!--Grid row-->

                  </form>

                  <div class="text-center text-md-left">
                      <a class="btn btn-dark" onclick="document.getElementById('contact-form').submit();">Send</a>
                  </div>
                  <div class="status"></div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-md-3 text-center">
                  <ul class="list-unstyled mb-0">
                      <li><i class="fas fa-map-marker-alt fa-2x"></i>
                          <p>Padua, Veneto 35123, Italy</p>
                      </li>

                      <li><i class="fas fa-phone-square fa-2x"></i>
                          <p>+ 39 345 661 5514</p>
                      </li>

                      <li><i class="fas fa-envelope-square fa-2x"></i>
                          <p>achilledellis2358@protonmail.com</p>
                      </li>
                  </ul>
              </div>
              <!--Grid column-->

          </div>

      </section>
      <!--Section: Contact v.2-->
  </main>
  <footer>
    <p>Created by: Achille Dellìs / <a href="https://www.linkedin.com/in/achille-d-07bb65149/" target="_blank">LinkedIn</a> / 2021 </p>
  </footer>
  <script src='https://www.hCaptcha.com/1/api.js' async defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
