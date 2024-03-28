<?php
// Альтернативный синтаксис управляющих структур можно использовать с
// if, while, for, foreach, switch
// вместо открывающей { используем :
//вместо } используем endif, endwhile, endfor, endforeach, endswitch
// перед case в switch не должно быть ничего - даже пробела
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda hic id laudantium porro quibusdam
    voluptate? At consequuntur delectus distinctio id mollitia numquam provident, quas quod rem repellendus
    reprehenderit unde?</p>

<?php
$nums = [1,2,3,4,5,];
foreach ($nums as $num){
    echo "<h2>Начало</h2>";
    echo "<p>$num</p>";
    echo "<h2>Конец</h2>";
}

?>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, deserunt eaque, eius eveniet excepturi iste iusto
    laboriosam laudantium maiores maxime, neque nostrum numquam possimus quas sed similique sint sunt veniam.</p>
<?php foreach ($nums as $n): ?>
<div class="ee">Кукушка говорит <?= $n; ?></div>
<?php endforeach;?>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, deserunt eaque, eius eveniet excepturi iste iusto
    laboriosam laudantium maiores maxime, neque nostrum numquam possimus quas sed similique sint sunt veniam.</p>
</body>
</html>

