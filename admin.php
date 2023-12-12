<?php
include_once 'vendor/db.php';
$do = trim(strip_tags($_GET['do']));

if($do == "save") {
    $title = trim($_POST['title']);
    $executor = trim($_POST['executor']);
    $type = trim($_POST['type']);
    $price = trim($_POST['price']);
    $new = trim($_POST['new']);
    $url = trim($_POST['url']);

    $res = $connect->prepare("INSERT IGNORE INTO orders (`title`, `executor`, `type`, `price`, `new`, `url`) VALUES (:title, :executor, :type, :price, :new, :url)");
    $res->execute([
        ':title' => $title,
        ':executor' => $executor,
        ':type' => $type,
        ':price' => $price,
        ':new' => $new,
        ':url' => $url,
    ]);


    header('Location: admino4ka.php?do=list');

}

if($do != 'add'){
    $do = 'list';
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админка | EStudio</title>
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
</head>
<body>
    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">EStudio ADMIN</a>
    </header>

    <div class="container-fluid">
        <div class="row">

            <div class="row justify-content-center">

                <?php include_once 'include/' . $do . '.php'; ?>


            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
