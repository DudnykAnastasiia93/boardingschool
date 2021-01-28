<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>


<div class="container">
  <h1>Звернення до адміністрації закладу</h1>

  <div class="form__wrapper">
    <!-- Форма обратной связи -->
    <form id="feedback-form" action="process/process.php" enctype="multipart/form-data" novalidate>
      <div class="form-row">
        <!-- Имя пользователя -->
        <div class="form-group">
          <label for="name" class="control-label">Ім'я</label>
          <input id="name" type="text" name="name" class="form-control" value="" placeholder="Ім'я" minlength="2"
                 maxlength="30" required="required">
          <div class="invalid-feedback"></div>
        </div>
        <!-- Email пользователя -->
        <div class="form-group">
          <label for="email" class="control-label">Email</label>
          <input id="email" type="email" name="email" required="required" class="form-control" value=""
                 placeholder="Email">
          <div class="invalid-feedback"></div>
        </div>
      </div>
      <!-- Сообщение пользователя -->
      <div class="form-group">
        <label for="message" class="control-label">Повідомлення</label>
        <textarea id="message" name="message" class="form-control" rows="3"
                  placeholder="(не менше 20 символів)" minlength="20" maxlength="500"
                  required="required"></textarea>
        <div class="invalid-feedback"></div>
      </div>

      <!-- Файлы, для прикрепления к форме -->
      <div class="form-group form-attachments" data-count="5">
        <div class="form-attachments__wrapper">
          <input type="file" name="attachment[]" multiple>
          <div class="form-attachments__items">
            <div class="form-attachments__description">
              <div>Натисніть для прикріплення файлів до повідомлення.</div>
              <div>Можна додати до 5 файлів у форматі jpg, jpeg, bmp, gif, png и розміром до 512 Кбайт.</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Капча -->
      <div class="form-group form-captcha">
        <img class="form-captcha__image" src="captcha/captcha.php" data-src="captcha/captcha.php"
             width="132" height="46" alt="Капча">
        <div class="form-captcha__refresh">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="16" height="16">
            <path fill="currentColor"
                  d="M440.65 12.57l4 82.77A247.16 247.16 0 0 0 255.83 8C134.73 8 33.91 94.92 12.29 209.82A12 12 0 0 0 24.09 224h49.05a12 12 0 0 0 11.67-9.26 175.91 175.91 0 0 1 317-56.94l-101.46-4.86a12 12 0 0 0-12.57 12v47.41a12 12 0 0 0 12 12H500a12 12 0 0 0 12-12V12a12 12 0 0 0-12-12h-47.37a12 12 0 0 0-11.98 12.57zM255.83 432a175.61 175.61 0 0 1-146-77.8l101.8 4.87a12 12 0 0 0 12.57-12v-47.4a12 12 0 0 0-12-12H12a12 12 0 0 0-12 12V500a12 12 0 0 0 12 12h47.35a12 12 0 0 0 12-12.6l-4.15-82.57A247.17 247.17 0 0 0 255.83 504c121.11 0 221.93-86.92 243.55-201.82a12 12 0 0 0-11.8-14.18h-49.05a12 12 0 0 0-11.67 9.26A175.86 175.86 0 0 1 255.83 432z">
            </path>
          </svg>
        </div>
        <div class="form-group form-captcha__input">
          <label for="captcha" class="control-label d-none">Код на зображенні</label>
          <input type="text" name="captcha" maxlength="6" required="required" id="captcha"
                 class="form-control captcha" placeholder="******" autocomplete="off" value="">
          <div class="invalid-feedback"></div>
        </div>
      </div>

      <!-- Пользовательское солашение -->
      <div class="form-group form-agreement">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" name="agree" class="custom-control-input" id="customCheck">
          <label class="custom-control-label" for="customCheck">Натискаючи кнопку, я погоджуюсь з 
            угодою користувача та надаю дозвіл на обробку моїх персональних даних.</label>
        </div>
      </div>

      <!-- Сообщение при ошибке -->
      <div class="form-error d-none">
        Виправте дані та надішліть повторно.
      </div>

      <!-- Индикация отправки данных формы на сервер -->
      <div class="progress d-none">
        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"
             style="width: 0"></div>
      </div>

      <!-- Кнопка для отправки формы на сервер -->
      <div class="form-submit">
        <button type="submit" disabled>Відправити повідомлення</button>
      </div>

    </form>

    <!-- Сообщение об успешной отправки формы -->
    <div class="form-result-success d-none">
      <div>Форма надіслана успішно. Натисніть на <a href="#" data-target="#feedback-form">посилання</a>, щоб відправити ще одне повідомлення.
      </div>
    </div>

  </div>

</div>

<script src="vendors/jquery/jquery-3.4.1.min.js"></script>
<script src="js/process-forms.js"></script>
<script>
    //после загрузки DOM
    $(function () {
        /*
        Параметры указываются в виде:
        {
        ключ: значение;
        ключ: значение;
        ...
        }
        Основные параметры
        selector - селектор формы (по умолчанию '#feedback-form')
        attachmentsMaxFileSize - максимальный размер файла в Кбайтах (по умолчанию 512)
        attachmentsFileExt - допустимые расширения файлов для загрузки (по умолчанию 'jpg','jpeg','bmp','gif','png')
        isUseDefaultSuccessMessage - отображать дефолтное сообщение после отправки
        */
        var form1 = new ProcessForm();
        form1.init();

    });
</script>

</body>

</html>