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
            include ("include/calkul.php");
            include ("include/db_connect.php");
            ?>


                <div id="m-calcul">
                    <h1>КАЛЬКУЛЯТОР КАЛЛОРИЙ </h1>
                    <form class="form-k" method="POST" >
                        <div id="m-label-row">
                            <ul>
                                <li>
                                    <label for = "k-type">Тип калькулятора: </label>
                                </li>

                                 <li class="m-block-input">

                                    <input type="radio" class="radio" name="k-type" value="1" checked><label for="k-type" >Миффлина-Сан Жеора</label>
                                    <br><input  value="2" class="radio" type="radio" name="k-type"><label for="k-type" >Харриса-Бенедикта</label>
                                </li>
                                <li>
                                    <label for="k-floor">Выберите ваш пол: </label>
                                </li>
                                <li class="m-block-input">
                                    <input  value="man" class="radio" type="radio" name="k-floor" checked></label><label for="k-floor" >Мужской</label>
                                    <br><input value="woman" class="radio" type="radio" name="k-floor"><label for="k-floor" >Женский</label>
                                </li>
                                <li>
                                    <label for="age">Возраст:</label>
                                    <br><input class="m-inpt" type="text" name="age" value="22"><input class="m-inpt-dis" value="лет">
                                </li>
                                <li>
                                    <label for="height">Рост:</label>
                                    <br><input class="m-inpt" type="number" name="height" value="172"><input class="m-inpt-dis" value="см">
                                </li>
                                <li>
                                    <label for="result-start">Вес:</label>
                                    <br><input class="m-inpt" type="number" name="result-start" value="70"><input class="m-inpt-dis" value="кг">
                                </li>
                                <li>
                                    <label for="act">Уровень нагрузок:</label>
                                    <br><select class="m-inpt1" name="act" size="1">
                                        <option value="1.2">Минимальная активность</option>
                                        <option value="1.375" >Слабый уровень активности</option>
                                        <option value="1.55">Умеренный уровень активности:</option>
                                        <option value="1.7">Тяжелая или трудоемкая активность</option>
                                        <option value="1.9">Экстремальный уровень</option>
                                    </select>
                                </li>
                                <li>
                                    <label for="task">Цель:</label>
                                    <br><select  class="m-inpt1" name="task" size="1">
                                        <option value="2">Поддержание веса</option>
                                        <option value="1">Снижение веса</option>
                                        <option value="3">Набор веса</option>
                                    </select>
                                </li>
                                <li>
                                    <button type="submit">РАСЧИТАТЬ</button>
                                </li>
                                <li>
                                    <label >Требуемое потребеление:</label>
                                </li>
                                <li id="m-itog">
                                    <?php echo floor($result)?><label >калл</label>
                                </li>
                                <li>
                                    <label for="m-disctription">Рацион на:</label>
                                </li>
                                <li id="m-disctription">
                                    <?
                                    echo $resultkal;?>калл
                                </li>


                            </ul>
                        </div>
                    </form>
                </div>


        <div id="">

                <br></h3>
        </div>


        <div id="calcul">
            <h1 >КАЛЬКУЛЯТОР КАЛЛОРИЙ</h1>
            <form class="form-k" method="POST" >
                <div id="label-row">
                    <ul>
                        <li>
                            <label>Выберите тип калькулятора: </label>
                        </li>
                        <li>
                            <label>Выберите ваш пол: <label>
                        </li>
                        <li>
                            <label for="age">Возраст:</label>
                        </li>
                        <li>
                            <label for="height">Рост:</label>
                        </li>
                        <li>
                            <label for="result-start">Вес:</label>
                        </li>
                        <li>
                            <label for="act">Уровень нагрузок:</label>
                        </li>
                        <li>
                            <label for="task">Цель:</label>

                        </li>
                        <li>
                            <label >Ваше потребеление каллорий:</label>
                        </li>

                    </ul>
                </div>
                <div id="box-row">
                    <ul >
                        <li>
                            <input type="radio" class="radio" name="k-type" value="1" checked><label for="k-type" >Формула Миффлина-Сан Жеора</label>
                        </li>
                        <li>
                            <input  value="2" class="radio" type="radio" name="k-type"><label for="k-type" >Харриса-Бенедикта</label>
                        </li>
                        <li>
                            <input  value="man" class="radio" type="radio" name="k-floor" checked></label><label for="k-floor" >Мужской</label><input value="woman" class="radio" type="radio" name="k-floor"><label for="k-floor" >Женский</label>
                        </li>

                        <li>

                            <input class="inpt" type="text" name="age" value="22"><label> лет</label>
                        </li>

                        <li>
                            <input class="inpt" type="number" name="height" value="172"><label> см</label>
                        </li>

                        <li>
                            <input class="inpt" type="number" name="result-start" value="70"><label> кг</label>
                        </li>
                        <li>
                            <select class="inpt1" name="act" size="1">
                                <option value="1.2">Минимальная активность</option>
                                <option value="1.375" >Слабый уровень активности</option>
                                <option value="1.55">Умеренный уровень активности:</option>
                                <option value="1.7">Тяжелая или трудоемкая активность</option>
                                <option value="1.9">Экстремальный уровень</option>
                            </select>
                        </li>
                        <li>
                            <select  class="inpt1" name="task" size="1">
                                <option value="2">Поддержание веса</option>
                                <option value="1">Снижение веса</option>
                                <option value="3">Набор веса</option>
                            </select>
                        </li>
                        <li>
                            <?php echo floor($result)?> <label>калл</label>
                        </li>

                        <li>
                            <button type="submit">РАСЧИТАТЬ</button>
                        </li>
                    </ul>
                </div>


            </form>

        </div>


        <div id="disctription">
            <h3>Рацион составлен на = <? echo $resultkal;?> калл</h3>
        </div>





        <div id="row-food">
            <div class="view-row-f">
                <div class="row-f">
                    <div class="m-name-row" id="main-menu1"><h2>ЗАВТРАКИ НА <? echo $breackfastkal ?></h2> </div>

                    <!----------------------------------------------------------------  ВЫВОД ЗАВТРАКОВ-------------------------------------------------------------------------------------- -->
                    <div class="sub-menu" id="sub1">
                        <?php
                        $nav=0;
                        if( $resultkal> 1)
                        {
                            $result = mysqli_query($link,"SELECT * FROM `brakfast` WHERE kal = $breackfastkal ORDER BY `id` ");

                            while ($myrow = mysqli_fetch_array($result)){
                                $nav++; ?>
                              <p><?echo "№ ".$nav." - ".$myrow['kal']."калл <br> ".$myrow['discription']."";?></p>

                            <?}
                        }

                        ?>
                    </div>
                </div>
            </div>

            <div class="view-row-f">
                <div class="row-f">

                    <div class="m-name-row" id="main-menu2"><h2>ОБЕДЫ НА <? echo $lunchkal ?></h2></div>
                    <!----------------------------------------------------------------  ВЫВОД ОБЕДЕОВ-------------------------------------------------------------------------------------- -->
                    <div class="sub-menu" id="sub2">
                        <?php
                        $nav=0;
                        $resultl = mysqli_query($link,"SELECT * FROM `lunch` WHERE kal = $lunchkal ORDER BY `id` ");

                        if( $resultkal> 1)
                        {

                            while ($myrow = mysqli_fetch_array($resultl)){
                                $nav++; ?>
                                <p><?echo "№ ".$nav." - ".$myrow['kal']."калл <br> ".$myrow['discription']."";?></p>

                            <?}
                        }

                        ?>


                    </div>
                </div>
            </div>
            <div class="view-row-f">
                <div class="row-f">

                    <div class="m-name-row" id="main-menu3"> <h2>УЖИНЫ НА <? echo $dinnerkal ?></h2></div>
                    <!----------------------------------------------------------------  ВЫВОД УЖИНОВ-------------------------------------------------------------------------------------- -->
                    <div class="sub-menu" id="sub3">
                    <?php
                    $nav=0;
                    $resultd = mysqli_query($link,"SELECT * FROM `dinner` WHERE kal = $dinnerkal ORDER BY `id` ");

                    if( $resultkal> 1)
                    {


                        while ($myrow = mysqli_fetch_array($resultd)) {
                            $nav++; ?>
                            <p><? echo "№ " . $nav . " - " . $myrow['kal'] . "калл <br> " . $myrow['discription'] . "<br>"; ?></p>

                            <?
                        }
                    }?>
                    </div>
                </div>
            </div >
            <div class="view-row-f">
                <div class="row-f">

                    <div class="m-name-row" id="main-menu4"> <h2>ПЕРЕКУСЫ НА <? echo $snack ?></h2></div>


                    <!--                            ВЫВОД ПЕРЕКУСОВ-->
                    <div class="sub-menu" id="sub4">
                    <?php
                    $nav=0;
                    if( $resultkal> 1)
                    {
                        $result = mysqli_query($link,"SELECT * FROM `snack` WHERE kal < $snack ORDER BY `id` ");


                        while ($myrow = mysqli_fetch_array($result)) {
                            $nav++; ?>
                            <p><? echo "№ " . $nav . " - " . $myrow['kal'] . "калл <br> " . $myrow['discription'] . "<br>"; ?></p>

                            <?
                        }
                    }?>
                    </div>


    </div>


    </body>
</html>