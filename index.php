<?php include 'head.php';?>

<div class="container1">
    <div class="container_name">
        <h1>Play Day</h1>
        <span>BEAUTY BAR</span>
    </div>
</div>

<div class="container2">
    <div class="container2_hello">
        <?php if ($login === null):?>         
            <h2>ДОБРО ПОЖАЛОВАТЬ!</h2>
        <?php else: ?>
            <h2><?= 'ДОБРО ПОЖАЛОВАТЬ, '.$login.'!' ?></h2>
        
            <?php 
                $dateRegistr = getDateRegistr($login);
                $dateEntrySite = $_COOKIE['timeEntrySite'];
                $dateEntrySiteFormat = date('m.d.Y H:i:s', $dateEntrySite);
                $result = $dateEntrySite - $dateRegistr;
                $deadLine = $dateEntrySite + 86400;
                $deadLineDate = date('m.d.Y H:i:s', $deadLine);

                if($result < 86400):
               
                ?>

                <p>В первые сутки после регистрации дарим скидку 25%. <br>
                До конца акции осталось: </p>

            <?php echo "<script>let deadline = $deadLineDate</script>";?>

            <div class="timer">
                <div class="timer__items">
                    <div class="timer__item timer__days">00</div>
                    <div class="timer__item timer__hours">00</div>
                    <div class="timer__item timer__minutes">00</div>
                    <div class="timer__item timer__seconds">00</div>
                </div>
            </div>

            <script type="text/javascript" src="script.js"></script>
            
        <?php endif; ?> 
        <?php endif; ?> 
        
        <a href="#individual" class="birthday_data"> Получить индивидуальное предложение</a>
		<div class="div_p2">
		    <p>Сеть спа-студий Play Day  - это все оттенки красивой жизни 
		    	в одном месте, это именно то место, куда Вы мечтали попасть! Любовь 
		    	и доброта к нашим клиентам, профессиональный подход и заботливые    руки мастеров, поднимут Ваше настроение 
				и воплотят все Ваши мечты в реальность.</p>
		</div>
    </div>
</div>
<div class="container3">
    <h2>SPA-УСЛУГИ</h2>
    <div class="spa_uslugi">
        <p>
			Наш Spa-салон поможет Вам ощутить волшебство изысканных Spa-процедур, возможность окунуться в атмосферуспокойствия и забыть на время о проблемах безумного мегаполиса.<br>
            Свой собственный рай Вы можете найти в нашем Spa-салоне"
		</p>
    </div>
    <div class="uslugi">
        <div class="block-usluga">
            <h3>МАССАЖИ</h3>
            <div class="div-img">
                <img src="./images/main-massazhi.JPG" alt="">
            </div>
            <a href="#" class="green_button">Перейти</a>                
        </div>
        <div class="block-usluga">
            <h3>SPA-ПРОГРАММЫ</h3>
            <div class="div-img">
                <img src="./images/main-spa-programmy.JPG" alt="">
            </div>
            <a href="#" class="green_button">Перейти</a>                
        </div>
        <div class="block-usluga">
            <h3>SPA-ДЕВИЧНИКИ</h3>
            <div class="div-img">
                <img src=".\images\devichniki.JPG" alt="">
            </div>
                <a href="#" class="green_button">Перейти</a>                
        </div>
        <div class="block-usluga">
            <h3>SPA-ВЕЧЕРИНКИ</h3>
            <div class="div-img">
                <img src=".\images\vecherinki.JPG" alt="">
            </div>
                <a href="#" class="green_button">Перейти</a>                
        </div>
        <div class="block-usluga">
            <a name="individual"><h3>ИНДИВИДУАЛЬНЫЕ ПРЕДЛОЖЕНИЯ</h3></a>
            <div class="div-img">
                <img src=".\images\premium.jpg" alt="">
            </div>
                <a href='offer.php' class="green_button">Перейти</a>                
        </div>
    </div>
</div>
