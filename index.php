<?php
require_once 'calc.php';
?>
<html>
<header>
<title>
  Калькулятор
</title>
</header>
<body>
  <form action="index.php" method="post">
    <input type="" name="v1" value="<?$_POST['v1']?>" placeholder="введите значение 1" autocomplete="false"><br>

    <select name="d">
      <option disabled>Выберите действие</option>
      <option selected value="1">+</option>
      <option value="2">-</option>
      <option value="3">*</option>
      <option value="4">/</option>
    </select><br>

    <input type="" name="v2" value="<?$_POST['v2']?>" placeholder="введите значение 2"><br><br>
    <button type="submit" name="sum">Посчитать</button>
  </form>
  <span><?=$res?></span>
</body>
</html>
