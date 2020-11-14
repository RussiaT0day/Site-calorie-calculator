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

     <?


        $page = $_GET['id'];
        $result = mysqli_query( $link,"SELECT * FROM `articles` WHERE id=$page ");




     if(mysqli_num_rows($result) > 0)

     {

     while ($row = mysqli_fetch_array($result))

     {


             if ($row["img_page"] != "" && file_exists("./img-page/".$row["img_page"]))

             {

                 $img_path = './img-page/' . $row["img_page"];
                 $max_width = 400;
                 $max_height = 400;



                 list($width, $height) = getimagesize($img_path);
                 $ratioh = $max_height / $height;
                 $ratiow = $max_width / $width;
                 $ratio = min($ratioh, $ratiow);
                 $width = intval($ratio * $width);
                 $height = intval($ratio * $height);
             }



     ?>



        <div class="page-name">

            <h1><? echo  $row ['full_title']?></h1>

        </div>





        <div class="page-title">


              <img  class="page-photo" src="<? echo $img_path ?>" width=" <? echo $width ?>" height="<? echo $height ?>"  >





            <? echo $row['discription']; ?>



                <? }} ?>


        </div>













    </div>







</div>

</body>

</html>