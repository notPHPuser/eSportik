<?php 
require_once __DIR__ . '/sss/helpers.php'
?>




<!DOCTYPE html>
<html data-theme="light" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="jsFiles/register.js" defer></script>
    <link rel="stylesheet" href="cssfiles/login.css" />
    <link rel="stylesheet" href="cssfiles/registerr.css" />
    <script src="
https://cdn.jsdelivr.net/npm/@picocss/pico@1.5.10/css/postcss.config.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@picocss/pico@1.5.10/css/pico.min.css
" rel="stylesheet">
    
  </head>
  <body>
  <form class="card" action="/sss/act/login.php" method="post">
    <h2>Вход</h2>

    <?php if(hasMessage('error')): ?>
        <div class="notice error"><?php echo getMessage('error') ?></div>
    <?php endif; ?>

    <label for="email">
      Имя
      <input 
      type="text"
      id="email"
      name="email"
      value="<?php echo old('email') ?>"
      <?php echo validationErrorAttr('email'); ?>
    >
    <?php if(hasValidationError('email')): ?>
            <small><?php echo validationErrorMessage('email'); ?></small>
        <?php endif; ?>
    </label>
<label for="password">
      Пароль
      <input
      type="password"
      id="password"
      name="password"
    >
</label>
<button 
      type="submit"
      id="sub">
    Продолжить
    </button>
  </form>
  <form action="/sss/act/logout.php" method="post">
    <button role="button">Выйти из аккаунта</button>
  </form>
  <p>У меня еще нет <a href="/register.php">аккаунта</a></p>
  </body>
</html>
