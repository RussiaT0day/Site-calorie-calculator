

<!doctype html>

<html>

    <head>

        <meta charset="utf-8">

        <title>Документ без названия</title>

        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
        <script src="include/js.js"></script>


    </head>



    <body>

    <div class="toner">

            <?php
            include("include/header.php");
            include ("include/db_connect.php");
            ?>

        <div class="news">

            <h1>Cтатьи о питании</h1>

         <?

         $result = mysqli_query($link,"SELECT * FROM `articles` ");

         while ($myrow = mysqli_fetch_array($result))
         {

           ?> <div class="block-news"  style=' background-image: url("img/<?php echo $myrow['img'];?>")   '><a href=page.php?id=<?php echo $myrow['id']; ?>><p><? echo  $myrow['title']  ?></p></a></div>

             <?

         }


         ?>

        </div>


        <div class="m-news">

            <h1>Cтатьи о питании</h1>

            <?

            $result = mysqli_query($link,"SELECT * FROM `articles` ");

            while ($myrow = mysqli_fetch_array($result))
            {

                ?> <div class="block-news"  style=' background-image: url("img/<?php echo $myrow['img'];?>")   '><a href=page.php?id=<?php echo $myrow['id']; ?>><p><? echo  $myrow['title']  ?></p></a></div>

                <?

            }


            ?>

        </div>


    </div>

    </body>

</html>