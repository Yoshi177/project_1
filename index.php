<!DOCTYPE html>
<html lang="ru">
  <head>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Главная страница</title>
  </head>
  <body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand p-0" href="/">
            <img src="NC.png" alt="Logo" width="40" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="documentsForOthers.php">Документы</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="fileworking.php">Заполнение файлов</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </nav>
    <div class="container text-center my-5">
      <h1>Нормы контроля</h1>
    </div>
    <div class="container text-center my-5">
    <font size="7">
      Здравствуйте, уважаемый пользователь! Вас приветстувует команда "Brick".<br>
      Наш сайт поможет вам с ознакомиться с основными нормами для оформления файлов и с заполнением методичек, используя форму.
      </font>
      <div class="container my-5">
      <a style="margin-right: 40px; width: 200px; height: 50px;"class="btn btn-dark" href="documentsForOthers.php" role="button">Документы</a>
      <a style="margin-left: 40px; width: 200px; height: 50px;"class="btn btn-dark" href="fileworking.php" role="button">Заполнение файлов</a>
      </div>
    </div>
  </body>
</html>
