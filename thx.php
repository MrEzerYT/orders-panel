<?php
include_once 'vendor/db.php';

$orderid = $_GET['id'];

if ($orderid < 1) {
    header ('location: index.php');
}

$res = $connect->query("SELECT * FROM orders WHERE id IN ($orderid);");
$row = $res->fetch();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спасибо за покупку | <?php echo $orderid; ?> | EStudio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to right, aqua, white);
        }

        .btn:hover {
            transform: scale(1.1);
            transition: 1s;
        }
    </style>

    <!-- Primary meta tags -->
    <meta
            name="title"
            content="Спасибо за покупку!"
    />
    <meta
            name="description"
            content="Заказ #<?php echo $orderid; ?>"
    />

    <!-- Open Graph / Facebook -->
    <meta
            property="og:title"
            content="Спасибо за покупку!"
    />
    <meta
            property="og:description"
            content="Заказ #<?php echo $orderid; ?>"
    />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en" />
    <meta property="og:site_name" content="EStudio - лучшая студия." />
</head>
<body cz-shortcut-listen="true">
    <div class="container px-4 overflow-hidden">
        <div class="card m-5">
            <div class="alert alert-success text-center m-5 h3" role="alert">
                Спасибо за покупку!
            </div>
            <div class="card-body text-center">
                <h3 class="card-title">Заказ <b>"<?php echo $row['title']; ?>"</b></h3>
                <div class="card-text">
                    <ul class="list-group">
                        <li class="list-group-item">Заказ #<?php echo $orderid; ?></li>
                        <li class="list-group-item">Исполнитель: <?php echo $row['executor']; ?></li>
                        <li class="list-group-item">Тип: <?php echo $row['type']; if($row['new'] != 127 ){
                            echo ' <span class="badge bg-secondary">TOP</span>';
                            } else {
                                echo ' <span class="badge bg-secondary">NEW</span>';
                            }?></li>
                    </ul>
                </div>
                <a href="https://discord.gg/5JpFd3Jnsy" class="btn btn-primary m-5">Наша студия</a>
                <p class="d-inline-flex gap-1">
                    <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Поддержка
                    </button>
                </p>
                <a href="<?php echo $row['url'];?>" class="btn btn-success  m-5" target="_blank">Скачать </a>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Discord: mrezer</li>
                            <li class="list-group-item"><a href="https://discord.gg/5JpFd3Jnsy" target="_blank">Discord сервер</a></li>
                            <li class="list-group-item">Telegram: ezer1337</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <h3 class="card-title">
                <div class="alert alert-info text-center m-5 h3" role="alert">
                    На чай
                </div>
            </h3>
            <div class="card-body text-center">
                <iframe class="m-5" src='https://anypay.io/widget/form?merchant_id=11453&pay_id=316149853&amount=100&currency=RUB&desc=%D0%9F%D0%BE%D0%B4%D0%B4%D0%B5%D1%80%D0%B6%D0%B0%D1%82%D1%8C%20%D1%81%D1%82%D1%83%D0%B4%D0%B8%D1%8E&text=%D0%9F%D0%BE%D0%B6%D0%B5%D1%80%D1%82%D0%B2%D0%BE%D0%B2%D0%B0%D1%82%D1%8C&theme=0&desc_type=0&amount_type=0&fio=0&phone=0&address=0&sign=93FFC9D82BD17AAECD82D2D408D65D8A3C68E318B5A730EDD9A888918FE2A5BB' width='400' height='230' scrolling='no' frameBorder='0' noresize></iframe>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
