<?php

require __DIR__ . './Models/Product.php';

require __DIR__ . './Models/Category.php';

require __DIR__ . './Models/Toy.php';

require __DIR__ . './Models/Food.php';

require __DIR__ . './Models/Kennel.php';

// CATEGORIE
$catCategory = new Category('Gatto');
$dogCategory = new Category('Cane');

$friskies = new Food($dogCategory, 'Friskies', 6.60, 'DOGFX', "https://www.carrefour.it/on/demandware.static/-/Sites-carrefour-master-catalog-IT/default/dw04c55dcd/large/BISCCANIDELIMIXFRISKIES-7613031802968-1.png", 0.5);

$felix = new Food($catCategory, 'Felix', 4.50, 'CATFX', "https://images-eu.ssl-images-amazon.com/images/I/81PyPUCjLDL._AC_UL200_SR200,200_.jpg", 0.5);

$spiky = new Toy($dogCategory, 'Spiky Ball', 12, 'DOGTX', "https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/spiky/ball/large/palla/in/tpr/6/400/62906_PLA_TPR_Spiky_Ball_large_12_FG__53_6.jpg", 'Plastica');

$catToys = new Toy($catCategory, 'Gioco per Gatto', 8, 'CATTX', "https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSTiiThgF2M0jVM63ijDJsCTvDOpuum1rdXKH17tMuUBlFjWzqcCv4FMY6q6xxggPyf-RxkKHIOWZHrJfqN23X7DuNeDJSTHQh8nsa7dKXCWZ2Z1vpsOaiMyHJYuBVqR_5XxwKcu1Jxt8A&usqp=CAc", 'Cuoio');

$cuccia = new Kennel ($dogCategory, 'Cuccia per Cane', 15, 'DOGKX', "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdvlbJ1QHP7356G2Bm5lrbYMJyniR_6aGjdg&usqp=CAU", 50, 20, 10);

$lettiera = new Kennel ($catCategory, 'Lettiera per Gatto', 15, 'CATKX', "https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQvJAjl1mtJJ8Tq_bAvs8TSrkG7iZSHtE_JNM13dL1lqkKHwIQqTkYqULFHHOu5PUAcGFQSyTdANr87R7EUJ93V-hrfpYqyeu6CgLUWEzpL3P3v7yA-LEpy-Rme66P6GE-Z1UXe82Clpw&usqp=CAc", 40,30,10);



$listaProdotti = [];
array_push($listaProdotti,
$friskies, $felix, $spiky, $catToys, $cuccia, $lettiera);