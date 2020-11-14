<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $result =1;
    //Вид калькулятора
    $type = $_POST['k-type'];

    //Пол
    $floor = $_POST['k-floor'];
    //Возраст
    $age= $_POST['age'];
    //Рост
    $height = $_POST['height'];
    //Начанльный вес
    $SR= $_POST['result-start'];

    //Кол-во нагрузка
    $act= $_POST['act'];

    //Конечный вес
    $ER = $_POST['result-eng'];
    //Количество дней
    $DR= $_POST['days-end'];
    //Задача
    $task= $_POST['task'];

    $result = 0;

    //Формула Миффлина-Сан Жеора
    if($type == 1)
    {
        //Расчет для мужчин
        if ($floor=="man")
        {

            $result = (10*$SR + 6.25 * $height - 5 * $age + 5 )*$act;


            if ( $task == "1")
            {
                $result = $result*0.85;

            }
            if ($task == "3")
            {
                $result = $result*1.15;

            }

        }

        //Расчет для девушек
        else
        {
            $result = (10*$SR + 6.25 * $height - 5 * $age - 161 ) * $act;

            if ( $task == "1")
            {
                $result = $result*0.85;
            }
            if ($task == "3")
            {
                $result = $result*1.15;
            }

        }
    }
    //харриса-бенедикта формула
    else
    {
        //Расчет для мужчин
        if ($floor == "man")
        {
            $result = (447.593 + (9.247 * $SR) + (3.098 * $height) - (4.330 * $age))*$act;

            if ( $task == "1")
            {
                $result = $result*0.85;

            }
            if ($task == "3")
            {
                $result = $result*1.15;

            }
        }
        //Расчет для девушек
        else
        {

            $result = (447.593 + (9.247 * $SR) + (3.098 * $height) - (4.330 * $age))*$act;
            if ( $task == "1")
            {
                $result = $result*0.85;

            }
            if ($task == "3")
            {
                $result = $result*1.15;
            }
        }


    }
//Округлчение ОБЩЕГО ЧИСЛА
    do $resultkal +=50;
    while($result>$resultkal && $result-25 > $resultkal);

    // Расчет калорий

    $breackfast =(int)($result*0.2);
    $lunch =(int)($result *0.4);
    $dinner =(int)($result *0.3);
    $snack = (int)($result*0.1);


    //Округлчение Завтрака
    do $breackfastkal +=100;
    while($breackfast>$breackfastkal && $breackfast-50 > $breackfastkal);

    //Округлчение Обеда
    do $lunchkal +=100;
    while($lunch>$lunchkal && $lunch-50 > $lunchkal);

    //Округлчение ужина
    do $dinnerkal +=100;
    while($dinner>$dinnerkal && $dinner-50 > $dinnerkal);

    $snack = $resultkal - ( $breackfastkal + $lunchkal +$dinnerkal);



}

?>