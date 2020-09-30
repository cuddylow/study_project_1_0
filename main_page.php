<!DOCTYPE html>
<html lang="RU">
<head>
    <meta charset="utf-8">
    <title>Меняем стили</title>
    <link rel="stylesheet" href="default_style.css">
    <?php if ($isRandomStyleNeeded === true) {
    ?> <link rel="stylesheet" href="<?php echo $result; ?>">
    <?php }; ?>
</head>
<body class="background">
    <div class="text_holder">
    <div class="text">
    Привет! Это сайт позволяет сменить разом стиль всего содержимого по нажатию кнопки под этим текстом.
    Нажми на нее и увидишь как внешне изменится содержимое страницы.
    </div>
    <div class="button_holder">
    <form action="/" method="get">
    <input type="submit" value="Следующий стиль">
    <input type="hidden" name="randomStyleNeeded" value="1">
    </form>
    </div>
    </div>
</body>
</html>
