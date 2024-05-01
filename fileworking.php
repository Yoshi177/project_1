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
    <title>Заполнение форм</title>
    <style>
      input {
        width: 300px;
        height: 50px;
        display: block;
        margin-bottom: 10px;
      }
      button {
        width: 300px;
        display: block;
      }
      h1 {
        font-size: 70px;
        font-weight: 100;
        text-align: center;
      }
    </style>
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
    <h1>Выберите тип методички и заполните форму</h1>
    <div class="container my-5">
      <form method="post" action="">
          <select name="methodType">
              <option value="">Выберите тип...</option>
              <option value="method1">Титульник по Истории</option>
              <option value="method2">Итоговая работа</option>
              <option value="method3">Лабораторная работа</option>
              <option value="method4">Реферат Физика</option>
              <option value="method5">Публикация эссе</option>
          </select>
          <input type="submit" value="Показать форму">
      </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedValue = $_POST['methodType'];
        if ($selectedValue == "method1") {
            echo "<div class=container my-5>";
            echo "<form method='post' action='History.php' enctype='multipart/form-data'>";
            echo "<h2>Титульник по Истории:</h2>";
            echo "<label>Введите данные:</label>";
            echo "<input type='text' name='theme' placeholder='Введите тему работы'>";
            echo "<input type='text' name='name' placeholder='Введите ФИО'>";
            echo "<input type='text' name='group' placeholder='Введите группу'>";
            echo "<input type='number' name='numbergr' placeholder='Введите номер группы'>";
            echo "<input type='text' name='Pr' placeholder='Введите ФИО преподавателя'>";
            echo "<input type='text' name='university' placeholder='Введите университет'>";
            echo "<input type='tel' name='tel' placeholder='Введите телефон'>";
            echo "<input type='text' name='city' placeholder='Введите город проживания'>";
            echo "<input type='submit' onclick='this.parentNode.submit();' value='Отправить'>";
            echo "</form>";
            echo "</div>";
        } elseif ($selectedValue == "method2") {
          echo "<div class=container my-5>";
          echo "<form method='post' action='finalwork.php' enctype='multipart/form-data'>";
          echo "<h2>Итоговой работы:</h2>";
          echo "<label>Введите данные:</label>";
          echo "<input type='text' name='discipline' placeholder='Введите название дисциплины'>";
          echo "<input type='text' name='theme' placeholder='Введите тему работы'>";
          echo "<input type='text' name='group' placeholder='Введите группу'>";
          echo "<input type='number' name='numbergr' placeholder='Введите номер группы'>";
          echo "<input type='text' name='name' placeholder='Введите ФИО'>";
          echo "<input type='text' name='professor' placeholder='Проверяющий'>";
          echo "<input type='number' name='Year' placeholder='Введите год'>";
          echo "<input type='submit' onclick='this.parentNode.submit();' value='Отправить'>";
          echo "</form>";
          echo "</div>";
        } elseif ($selectedValue == "method3"){
          echo "<div class=container my-5>";
          echo "<form method='post' action='laboratornRabota.php' enctype='multipart/form-data'>";
          echo "<h2>Лабораторная работа:</h2>";
          echo "<label>Введите данные:</label>";
          echo "<input type='number' name='number' placeholder='Введите номер лабораторной работыㅤ'>";
          echo "<input type='text' name='discipline' placeholder='Введите название дисциплины'>";
          echo "<input type='text' name='theme' placeholder='Введите тему работы'>";
          echo "<input type='text' name='name' placeholder='Введите ФИО'>";
          echo "<input type='text' name='groupN' placeholder='Введите группу и номер'>";
          echo "<input type='text' name='professor' placeholder='Проверяющий'>";
          echo "<input type='number' name='Year' placeholder='Введите год'>";
          echo "<input type='submit' onclick='this.parentNode.submit();' value='Отправить'>";
          echo "</form>";
          echo "</div>";
        }elseif ($selectedValue == "method4"){
          echo "<div class=container my-5>";
          echo "<form method='post' action='PhysicRef.php' enctype='multipart/form-data'>";
          echo "<h2>Реферат по Физике:</h2>";
          echo "<label>Введите данные:</label>";
          echo "<input type='text' name='university' placeholder='Введите университет'>";
          echo "<input type='text' name='group' placeholder='Введите группу'>";
          echo "<input type='number' name='numbergr' placeholder='Введите номер группы'>";
          echo "<input type='text' name='name' placeholder='Введите ФИО'>";
          echo "<input type='text' name='prepod' placeholder='Преподаватель'>";
          echo "<input type='text' name='theme' placeholder='Введите тему работы'>";
          echo "<input type='submit' onclick='this.parentNode.submit();' value='Отправить'>";
          echo "</form>";
          echo "</div>";
        } elseif ($selectedValue == "method5"){
          echo "<div class=container my-5>";
          echo "<form method='post' action='Esse.php' enctype='multipart/form-data'>";
          echo "<h2>Согласие на публикацию эссе:</h2>";
          echo "<label>Введите данные:</label>";
          echo "<input type='text' name='theme' placeholder='Введите тему работы'>";
          echo "<input type='text' name='name' placeholder='Введите ФИО'>";
          echo "<input type='text' name='university' placeholder='Введите университет'>";
          echo "<input type='text' name='group' placeholder='Введите группу'>";
          echo "<input type='number' name='numbergr' placeholder='Введите номер группы'>";
          echo "<input type='text' name='city' placeholder='Введите город проживания'>";
          echo "<input type='date' name='dat' placeholder='Введите дату'>";
          echo "<input type='submit' onclick='this.parentNode.submit();' value='Отправить'>";
          echo "</form>";
          echo "</div>";
        }
    }
    ?>
  </body>
</html>
