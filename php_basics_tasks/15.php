<?php
$a = 5;
$b = 3;
$operator = '/';
if ($b == 0 & $operator == '/'){      // Проверка деления на 0
echo "Ошибка деления на ноль";
}    
else {
switch ($operator){
    case '+': echo $a + $b;break;
    case '-': echo $a - $b;break;
    case '/': echo $a / $b;break;
    case '*': echo $a * $b;break;
    case '%': echo $a % $b;break;
}     
}
    

?>
