<head>
    <style>
        a {
            font-size: 1vw;
            color: black;
            text-decoration: none;
            transition: 5s;
        }
        a:hover{
            transform: scale(1.1);
            color: gray;
        }

    </style>
</head>
<div class="col-md-6">
    <div class="card mt-4">
        <div class="card-header">
            <h2 class="text-center">Список заказов</h2>
        </div>
        <div class="card-body">
            <ul class="list">
                <?php
                $res = $connect->query("SELECT * FROM orders");
                while ($row = $res->fetch()) {
                    ?>
                    <li><a target="_blank" href="/thx.php?id=<?php echo $row['id']; ?>"><?php echo $row['title'];?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>


    <div class="card mt-4">
        <div class="card-body text-center">
            <a href="admino4ka.php?do=add" class="btn btn-primary">Добавить заказ</a>
        </div>
    </div>
</div>
