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
    <title>Документы</title>
  </head>
  <body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand p-0" href="index.php">
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
    </div>
    <div class="container text-center my-5">
      <h1>Методички и нормы</h1>
    </div>
    <div class="container my-5">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-5">
        <div class="col">
          <div class="card">
            <img
              src="metodichki.png"
              width="300"
              height="300"
              class="card-img-top"
              alt="Методички"
            />
            <div class="card-body">
              <h5 class="card-title">Методички</h5>
              <p class="card-text">Здесь вы сможете посмотреть методички.</p>
              <a href="metodichFO.php" class="btn btn-primary"
                >продолжить</a
              >
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img
              src="norms.png"
              width="300"
              height="300"
              class="card-img-top"
              alt="Нормы"
            />
            <div class="card-body">
              <h5 class="card-title">Нормы</h5>
              <p class="card-text">Здесь вы сможете посмотреть нормы.</p>
              <a href="normsForOthers.php" class="btn btn-primary">продолжить</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
