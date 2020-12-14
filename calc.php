<?php
if (isset($_POST['sum'])){
  $res;
  $v1 = $_POST['v1']; //значение 1
  $v2 = $_POST['v2']; //значение 2
  if (preg_match('/^[\d.]{1,}$/', $v1) && preg_match('/^[\d.]{1,}$/', $v2)) {
    switch ($_POST['d']) { //выборка действия
      case 1:
        $res = $v1 + $v2;
        break;
      case 2:
        $res = $v1 - $v2;
        break;
      case 3:
        $res = $v1 * $v2;
        break;
      case 4:
        $res = $v1 / $v2;
        break;

      default:
        $res = 'Нет такого действия';
        break;
    }
  } else {
    $res = 'Введите целое число либо дробное.';
  }
}
?>
