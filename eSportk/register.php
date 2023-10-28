<?php
session_start();
require_once __DIR__. '/sss/helpers.php';

?>

<!DOCTYPE html>
<html lang="ru" data-theme="light">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="jsFiles/register.js" defer></script>
    <link rel="stylesheet" href="cssfiles/registerr.css" />
    <script src="
https://cdn.jsdelivr.net/npm/@picocss/pico@1.5.10/css/postcss.config.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@picocss/pico@1.5.10/css/pico.min.css
" rel="stylesheet">
  </head>
  <body>
    <div class="reg">
      <p class="register"></p>
      <form class="vecReg" method="post" enctype="multipart/form-data" action="sss/act/reg.php" >
        <label for="login">
          
          <input id="login" value="<?php echo old('login') ?>" name="login" class="login" type="text" placeholder="Введите логин" 
         
          <?php echo validationErrorAttr('login'); ?>
        >
        <?php if(hasValidationError('login')): ?>
            <small><?php echo validationErrorMessage('login'); ?></small>
        <?php endif; ?>
        </label>
       
        <label for="email">
          <input id="email" value="<?php echo old('email') ?>" name="email" class="email" type="email" placeholder="Введите почту" 
          <?php echo validationErrorAttr('email'); ?>
        >
        <?php if(hasValidationError('email')): ?>
            <small><?php echo validationErrorMessage('email'); ?></small>
        <?php endif; ?>
        </label>
        <label for="password">
          <input
            id="password"
            name="password"
            class="password"
            type="password"
            placeholder="Придумайте пароль"
            <?php echo validationErrorAttr('password'); ?>
          />
          <?php if(hasValidationError('password')): ?>
                <small><?php echo validationErrorMessage('password'); ?></small>
            <?php endif; ?>
        </label>
        <label for="podPass">
          <input
            id="podPass"
            name="podPass"
            class="podPass"
            type="password"
            placeholder="Подвердите пароль"
          />
        </label>

        <button class="accept" type="submit" id="submit">Продолжить</button>
      </form>
<?php claerValidation(); ?>

    </div>

    <p><a href="log.php">зайди</a></p>
    <p><a href="index.php">qwe</a></p>
  </body> 
</html>