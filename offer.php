<!-- страница пользователя -->

<?php include 'head.php';
?>

<div class="container2">
    <div class="container2_hello">
        <?php
            if ($login === null):?>         
            <h2>ДОБРО ПОЖАЛОВАТЬ!</h2>
            <?php else: ?>
            <h2><?= 'ДОБРО ПОЖАЛОВАТЬ, '.$login.'!' ?></h2>
            <?php endif; ?> 
            

            <p>В первые сутки после регистрации дарим скидку 25%</p>
            <p>До конца акции осталось: </p>

            <div class="timer">
                <div class="timer__items">
                    <div class="timer__item timer__days">00</div>
                    <div class="timer__item timer__hours">00</div>
                    <div class="timer__item timer__minutes">00</div>
                    <div class="timer__item timer__seconds">00</div>
                </div>
            </div>
            <script> </script>

            <a href="#individual" class="birthday_data"> Получить индивидуальное предложение</a> 
            
            <script>
                const linkPromotion = document.querySelector('.birthday_data');
                function promtEnter(){   
                    const birthday = prompt('Чтобы получать индивидуальные предложения укажите дату вашего рождения. Пишите в формате ДД.ММ.ГГГГ: ');
                    linkPromotion.textContent = birthday;
                    let text = birthday.split('.');
                    let day = text[0];
                    let month = text[1];
                    let years = text[2];
                    event.preventDefault();
                }
                linkPromotion.addEventListener('click', promtEnter);

            </script> 


    </div>
</div>