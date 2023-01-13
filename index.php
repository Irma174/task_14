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
                $deadLine = (($dateRegistr + 86400)*1000);
                $deadLineDate = date('m.d.Y H:i:s', $deadLine);

                if($result < 86400):
               
                ?>

                <p>В первые сутки после регистрации дарим скидку 10%. <br>
                До конца акции осталось: </p>

            <?php echo "<script>let deadline = $deadLine</script>";?>

            <div id="timer">
                <div class="timer__items">
                    <div class="days timer__item">00</div>
                    <div class="hours timer__item">00</div>
                    <div class="minutes timer__item">00</div>
                    <div class="seconds timer__item">00</div>
                </div>
            </div>                        
        <?php endif; ?> 
        <?php endif; ?> 
        
        <a href="#" class="birthday_data birthday"> Получить индивидуальное предложение</a>

        <script>
                const linkPromotion = document.querySelector('.birthday_data');
                function promtEnter(){   
                    
                    const birthday = prompt('Чтобы получать индивидуальные предложения укажите дату вашего рождения. Пишите в формате ДД.ММ.ГГГГ: ');
                    let text = birthday.split('.');
                    let day = text[0];
                    let month = text[1];
                    let years = text[2];
                    let birthdayDay = new Date("'"+ month + '.' + day + '.' + years+"'");
                    let today = new Date();
                    let birthdayDayNumber = birthdayDay.getDate();
                    let birthdayMonthNumber = birthdayDay.getMonth();
                    let todayDay = today.getDate();
                    let todayMonth = today.getMonth();
                    if ((todayMonth == birthdayMonthNumber)&&(todayDay==birthdayDayNumber)){
                        linkPromotion.textContent = `Поздравляем с днем рождения! Дарим скидку 5% на все услуги салона. Скидка действует в течение недели после дня рождения!`;
                    }else {
                        linkPromotion.textContent = 'Индивидуальное предложение можно получить за неделю до и неделю после дня рождения!';
                    }               
                    event.preventDefault();
                }
                linkPromotion.addEventListener('click', promtEnter);
        </script>
           
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
                <a href='#' class="green_button">Перейти</a>                
        </div>
    </div>
</div>
<script type="text/javascript" src="script.js"></script>