<!doctype html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <title>Strona w budowie</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="reset.css" type="text/css">
  <link rel="stylesheet" href="style.css" type="text/css">
  <link rel="stylesheet" href="typography.css" type="text/css">
  <link rel="stylesheet" href="slider.css" type="text/css">
  <link rel="stylesheet" href="animation.css" type="text/css">
  <link rel="stylesheet" href="alignment.css" type="text/css">
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="js/resolution.js"></script>
</head>

<body>
    <?php
$errorMessage = null;
$successMessage = null;

if ($_POST) {
    $name = isset($_POST['name']) ? filter_var($_POST['name'], FILTER_SANITIZE_STRING) : null;
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : null;
    $message = htmlspecialchars($_POST['message']);

    if (empty($name) || empty($email) || empty($message)) {
        $errorMessage = 'Wypełnij wszystkie pola!';
    }

    if (is_null($errorMessage)) {
        mail(
            'piotr.maliszewski@gmail.com',
            'Formularz kontaktowy',
            "Treść wiadomości: $message \n\n Imię: $name \n\n Adres e-mail: $email",
            "From: $name <$email>"
        );

        $successMessage = 'Wiadomość została wysłana';
    }
}
?>
  <div class="container-fluid">
    <div class="header row">
      <div class="logo col-lg-3">
        <a href="#">
          <img src="images/logo.webp" alt="Piotr Maliszewski - Frontend Developer">
        </a>
      </div>
      <div class="menu col-lg-6">
        <nav>
          <ul>
            <li>
              <a href="#about-me" data-hover="O mnie">O mnie</a>
            </li>
            <li>
              <a href="#projects" data-hover="Projekty">Projekty</a>
            </li>
            <li>
              <a href="#contact" data-hover="Kontakt">Kontakt</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="phone col-lg-3">
        <a class="btn" href="#contact">Napisz wiadomość</a>
      </div>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="images/slide-1.webp" class="d-block w-100" alt="kod html">
          <div class="carousel-caption d-none d-md-block">
            <p class="slider-header">Poczytaj o moim wykształceniu i doświadczeniu</p>
            <p class="slider-description">Ukończone studia magisterskie i Lider zespołu... Jeżeli chcesz wiedzieć o mnie
              więcej przejdź do sekcji "Wykształcenie i doświadczenie zawodowe"!</p>
            <a href="#experience" class="btn">Przejdź</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/slide-2.webp" class="d-block w-100" alt="trzy monitory">
          <div class="carousel-caption d-none d-md-block">
            <p class="slider-header">Sprawdź wykonane przeze mnie projekty</p>
            <p class="slider-description">Przejdź do sekcji "Wykonane projekty" by przejrzeć różnorodne projekty, które
              zostały wykonane przeze mnie w przeszłości!</p>
            <a href="#projects" class="btn">Przejdź</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/slide-3.webp" class="d-block w-100" alt="laptop na biurku">
          <div class="carousel-caption d-none d-md-block">
            <p class="slider-header">Skontaktuj się ze mną</p>
            <p class="slider-description">Przejdź do sekcji "Kontakt" by napisać wiadomość do mnie poprzez formularz
              kontaktowy!</p>
            <a href="#contact" class="btn">Przejdź</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="col-xs-12">
      <div class="row">
        <div id="about-me">
          <div class="col-lg-6">
            <div class="text">
              <h1>Kim jestem?</h1>
              <p>Nazywam się <b>Piotr Maliszewski</b>. Obecnie zajmuję stanowisko <strong>Lidera produkcji stron
                  internetowych</strong> w jednej
                z największym firm doradztwa internetowego w Polsce. Z wykształcenia jestem informatykiem - ukończyłem
                <strong>studia magisterskie</strong> na kierunku Informatyka. Pracę łączę ze służbą w 1 Podlaskiej
                Brygadzie Obrony
                Terytorialnej. Jest to moje wielkie hobby, które wiąże się również z pomocą lokalnej społeczności.
                Służba umożliwiła mi udziała w specjalistycznych szkoleniach (nie tylko na terenie kraju). Do moich
                wielkich zainteresować należą również piłka nożna, programowanie oraz motoryzacja. Za swoje największe
                zalety wyróżniam <strong>umiejętność szybkiego uczenia się</strong> oraz determinacja w osiągnięciu
                zamierzonych celów.
                Świadczy o tym krótki czas, w którym zająłem stanowisko, które obecnie piastuję.
              </p>
            </div>
          </div>
          <div class="col-lg-6 image">
            <img src="images/about-me.webp" alt="twarz developera">
          </div>
        </div>
      </div>
    </div>
    <div class="experience section" id="experience">
      <div class="col-xs-12">
        <div class="section-title">
          <h2>Wykształcenie i doświadczenie zawodowe</h2>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="boxes">
          <div class="row">
            <div class="col-xl-4 box">
              <img src="images/education-icon.webp" alt="ikona edukacji">
              <h3>Studia licencjackie i magisterskie</h3>
              <p class="boxes-description">Oba poziomy studiów ukończyłem na Uniwersytecie w Białymstoku. Zaczynałem od
                studiów licencjackich na kierunku "<b>Informatyka i ekonometria</b>". Odbyły się one w trybie
                stacjonarnym. Moją oceną końcową po tym etapie była okazała "5". Po ukończeniu studiów licencjackich i
                poszedłem za ciosem - zdecydowałem się na stacjonarne studia magisterskie na kierunku
                "<b>Informatyka</b>".
                Mogę pochwalić się osiągniętą oceną "4.5", która zwieńczyła mój okres nauki - tylko i wyłącznie tej na
                uczelni ;)</p>
            </div>
            <div class="col-xl-4 box">
              <img src="images/coding-icon.webp" alt="ikona kodowania">
              <h3>Webmaster Joomla</h3>
              <p class="boxes-description">Swoją karierę w obecnej firmie zaczynałem od stanowiska <b>Webmaster
                  Joomla</b> w październiku 2019 roku. Do moich zadań należało kodowanie stron internetowych na
                podstawie przygotowanego projektu
                graficznego oraz w oparciu o standardy RWD i SEO. Proces produkcji stron był oparty o autorską nakładkę
                CMS Joomla. Stanowisko to wymagało ode mnie dobrej znajomości typowo WEBowych technologii takich jak
                Bootstrap, CSS, HTML, JavaScript. Również niejednokrotnie musiałem wykazać się znajomością narzędzia
                Gimp, by wykonać obróbkę plików graficznych.</p>
            </div>
            <div class="col-xl-4 box">
              <img src="images/team-icon.webp" alt="ikona zarządzania">
              <h3>Lider produkcji stron internetowych</h3>
              <p class="boses-education">Po niecałych dwóch latach pracy na stanowisku Webmaster'a Joomla, zostałem
                mianowany Liderem produkcji stron internetowych. Był to dla mnie wielki zaszczyt i zarówno wielka
                odpowiedzialność. Moim głównym zadaniem była koordynacja grupą Webmasterów. Mierzę się z wieloma
                trudnymi i odpowiedzialnymi zadaniami. Odpowiadam za wszystkich członków mojego Zespołu. Wyznaję przy
                tym zasadę braterstwa - moi ludzie wiedzą, że mogą się zwrócić do mnie z każdą sprawą. Czują się również
                odpowiedzialni za każdą czynność, którą wykonają. Jest to wielka lekcja dla mnie i dla mojego
                charakteru.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="technologies section">
      <div class="col-xs-12">
        <div class="section-title">
          <h2>Zdobyte umiejętności i technologie</h2>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="boxes tech-stars">
          <div class="row">
            <div class="col-md-6 col-lg-3 box" id="css">
              <p>CSS</p>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
            </div>
            <div class="col-md-6 col-lg-3 box" id="html">
              <p>HTML</p>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
            </div>
            <div class="col-md-6 col-lg-3 box" id="js">
              <p>JavaScript</p>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
            </div>
            <div class="col-md-6 col-lg-3 box" id="bootstrap">
              <p>Bootstrap</p>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
            </div>
            <div class="col-md-6 col-lg-3 box" id="rwd">
              <p>RWD</p>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
            </div>
            <div class="col-md-6 col-lg-3 box" id="c-plus">
              <p>C++</p>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
            </div>
            <div class="col-md-6 col-lg-3 box" id="gimp">
              <p>Gimp</p>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
            </div>
            <div class="col-md-6 col-lg-3 box" id="seo">
              <p>SEO</p>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
              <div class="star"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="tech-bg">
        <div class="css-bg">CSS</div>
        <div class="css-bg">CSS</div>
        <div class="css-bg">CSS</div>
        <div class="css-bg">CSS</div>
        <div class="css-bg">CSS</div>
        <div class="html-bg">HTML</div>
        <div class="html-bg">HTML</div>
        <div class="html-bg">HTML</div>
        <div class="html-bg">HTML</div>
        <div class="html-bg">HTML</div>
        <div class="js-bg">JavaScript</div>
        <div class="js-bg">JavaScript</div>
        <div class="js-bg">JavaScript</div>
        <div class="js-bg">JavaScript</div>
        <div class="js-bg">JavaScript</div>
      </div>
      <div class="toggle-btn btn">Ukryj tło</div>
    </div>
    <div class="parallax">
      <div class="col-xs-12">
        <div class="row">
          <div class="parallax-content">
            <p class="parallax-description">"Nie musisz być świetny, by zacząć, ale musisz zacząć, by być świetnym"</p>
          </div>
        </div>
      </div>
    </div>
    <div id="projects" class="section">
      <div class="col-xs-12">
        <div class="section-title">
          <h2>Wykonane projekty</h2>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="row">
          <div class="projects-items">
            <div class="item">
              <div class="image">
                <img src='images/project-coronavirus.webp'>
              </div>
              <div class="text">
                <div class="expand-header">
                  <h3>Model 3D koronawirusa</h3>
                </div>
                <div class="expand-desc">
                  <p>Lorem ipsum dolor sit amet</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="text">
                <div class="expand-header">
                  <h3>Przykładowy projekt #1</h3>
                </div>
                <div class="expand-desc">
                  <p>Lorem ipsum dolor sit amet</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="text">
                <div class="expand-header">
                  <h3>Przykładowy projekt #2</h3>
                </div>
                <div class="expand-desc">
                  <p>Lorem ipsum dolor sit amet</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="text">
                <div class="expand-header">
                  <h3>Przykładowy projekt #3</h3>
                </div>
                <div class="expand-desc">
                  <p>Lorem ipsum dolor sit amet</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="contact" class="section">
      <div class="col-xs-12">
        <div class="section-title">
          <h2>Kontakt</h2>
        </div>
      </div>
      <div class="col-xs-12 form">
        <div class="row">

          <?php if ($errorMessage) : ?>
          <div class="alert alert-danger">
            <?php echo $errorMessage; ?>
          </div>
          <?php endif; ?>

          <?php if ($successMessage) : ?>
          <div class="alert alert-success">
            <?php echo $successMessage; ?>
          </div>
          <?php endif; ?>

          <form method="POST">
            <div class="row">
              <div class="col-md-4 cell">
                <label for="topic" class="form-label">Temat wiadomości</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Wpisz temat wiadomości">
              </div>
              <div class="col-md-4 cell">
                <label for="name" class="form-label">Imię i nazwisko</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Podaj imię i nazwisko">
              </div>
              <div class="col-md-4 cell">
                <label for="email" class="form-label">Adres e-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Wpisz adres e-mail">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 cell">
                <label for="message" class="form-label">Treść wiadomości</label>
                <textarea class="form-control" id="message" name="message" rows="5"
                  placeholder="Wpisz swoją wiadomość"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <input class="btn" type="submit" value="Wyślij formularz">
              </div>
          </form>
        </div>
      </div>
    </div>
    <div class="go-to-top">
      <p>Do góry</p>
    </div>
  </div>
  <div class="copyright">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright 2022 by Piotr Maliszewski</p>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
  <script src="js/jquery.matchHeight.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
  <script src="js/stars.js"></script>
  <script src="js/techBg.js"></script>
  <script src="js/style.js"></script>
  <script src="js/alignment.js"></script>
  <script src="js/projects-rotator.js"></script>
</body>

</html>