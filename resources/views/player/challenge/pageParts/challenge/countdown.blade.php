<h1>Countdown Clock</h1>
<div id="clockdiv" style="font-family: sans-serif;color: #fff;display: inline-block;font-weight: 100;text-align: center;font-size: 30px;">
  <div style="padding: 10px;border-radius: 3px;background: #00BF96;display: inline-block;">
    <span class="days" style="padding: 15px;border-radius: 3px;background: #00816A;display: inline-block;"></span>
    <div class="smalltext" style="padding-top: 5px;font-size: 16px;">Days</div>
  </div>
  <div style="padding: 10px;border-radius: 3px;background: #00BF96;display: inline-block;">
    <span class="hours" style="padding: 15px;border-radius: 3px;background: #00816A;display: inline-block;"></span>
    <div class="smalltext" style="padding-top: 5px;font-size: 16px;">Hours</div>
  </div>
  <div style="padding: 10px;border-radius: 3px;background: #00BF96;display: inline-block;">
    <span class="minutes" style="padding: 15px;border-radius: 3px;background: #00816A;display: inline-block;"></span>
    <div class="smalltext" style="padding-top: 5px;font-size: 16px;">Minutes</div>
  </div>
  <div style="padding: 10px;border-radius: 3px;background: #00BF96;display: inline-block;">
    <span class="seconds" style="padding: 15px;border-radius: 3px;background: #00816A;display: inline-block;"></span>
    <div class="smalltext" style="padding-top: 5px;font-size: 16px;">Seconds</div>
  </div>
</div>
<script>
    function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);
</script>