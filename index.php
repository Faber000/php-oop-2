<?php
    require_once __DIR__ . '/User.php';
    require_once __DIR__ . '/Product.php';
    require_once __DIR__ . '/Food.php';
    require_once __DIR__ . '/CreditCard.php';

    $user = new User('Fabio', 'Moro', 'fabio.moro2000@gmail.com');
    $card = new CreditCard('1234 5678 9999 0000', '08/25', 'MasterCard', 'Fabio', 'Moro', '123');
    $user->setCreditCard($card);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>