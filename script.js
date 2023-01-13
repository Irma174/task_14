//функция склонения числительных
function declensionNum(num, words) {
  return words[(num % 100 > 4 && num % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][(num % 10 < 5) ? num % 10 : 5]];
}

//функция таймера
function promotionTime(timeEnd){  
  let timePeriod = timeEnd - Date.parse(new Date());  
  let seconds = Math.floor( (timePeriod/1000) % 60 );  
  let minutes = Math.floor( (timePeriod/1000/60) % 60 );  
  let hours = Math.floor( (timePeriod/(1000*60*60)) % 24 );  
  let days = Math.floor( timePeriod/(1000*60*60*24) );  
  return {  
    'total': timePeriod,  
    'days': days,  
    'hours': hours,  
    'minutes': minutes,  
    'seconds': seconds  
  };  
}
          
function сountdownTimer(id, timeEnd){  
  let timer = document.getElementById(id);
  let daysNow = timer.querySelector('.days');  
  let hoursNow = timer.querySelector('.hours');  
  let minutesNow = timer.querySelector('.minutes');  
  let secondsNow = timer.querySelector('.seconds'); 

  function updateClock(){  
    let t = promotionTime(timeEnd);  
    daysNow.innerHTML = ('0' + t.days).slice(-2);  
    hoursNow.innerHTML = ('0' + t.hours).slice(-2);  
    minutesNow.innerHTML = ('0' + t.minutes).slice(-2);  
    secondsNow.innerHTML = ('0' + t.seconds).slice(-2);
    daysNow.dataset.title = declensionNum(daysNow, ['день', 'дня', 'дней']);
    hoursNow.dataset.title = declensionNum(hoursNow, ['час', 'часа', 'часов']);
    minutesNow.dataset.title = declensionNum(minutesNow, ['минута', 'минуты', 'минут']);
    secondsNow.dataset.title = declensionNum(secondsNow, ['секунда', 'секунды', 'секунд']);

    if(t.total<=0){  
     clearInterval(timeinterval);  
    }  
  }  
  updateClock();  
  let timeinterval = setInterval(updateClock,1000); 
}
сountdownTimer('timer', deadline);
              
