<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css"/>
</head>
<body>
    
    <header>
        <a href="#" class="logo">
            Logo
        </a>
        <ul>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Work</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </header>
    <section>
        <img src="/images/stars.png" alt="" id="stars">
        <img src="/images/moon.png" alt="" id="moon">
        <img src="/images/mountains_behind.png" alt="" id="mountains_behind">
        <h2 id="text-h2">Anime<span>JS</span></h2>
        <a href="#" id="btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Play</a>
        <img src="/images/mountains_front.png" alt="" id="mountains_front">
    </section>

    <div id="id01" class="modal">
    
    <form class="modal-content animate" action="/rainy-day" method="post">
        <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Dong yeu cau">&times;</span>
        <img src="/images/img_avatar2.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
        <label for="fullname"><b>Ho va ten</b></label>
        <input type="text" placeholder="Nhap ho va ten" name="fullname" required>

        <label for="dateofbirth"><b>Ngay sinh</b></label>
        <input type="date" placeholder="Nhap ngay sinh" name="dateofbirth" required>
        
        <label for="jormar"><b>Nganh hoc</b></label>
        <input type="text" name="jormar" id="" required placeholder="Nhap nganh hoc">

        <label for="year">Nam hoc</label>
        <input type="number" name="year" id="" required placeholder="Nhap nam hoc">
        <button type="submit" onclick="testOK()" id="okrainy">Dong y</button>
        </div>

        <div class="container" style="background: #ebf5fc; border-radius: 10px;        
             box-shadow: -5px -5px 15px rgba(255, 255, 255, 0.8),
             5px 5px 10px rgba(0, 0, 0, 0.1);
             margin: 5% auto 15% auto; ">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Khong dong y? <a href="#">Click here</a></span>
        </div>
    </form>
    </div>

    <div class="sec" id="sec">
        <h2>Parallax Scrolling Effects</h2>
        <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with 
            desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
    <div class="launch-time">
      <div>
         <p id="days">00</p>
         <span>Days</span>
      </div>
      <div>
         <p id="hours">00</p>
         <span>Hours</span>
      </div>
      <div>
         <p id="minutes">00</p>
         <span>Minutes</span>
      </div>
      <div>
         <p id="seconds">00</p>
         <span>Seconds</span>
      </div>
   </div>
   <center>
        <div class="rainy">
            <h1>A rainy day!</h1>
            <p>#07/09/2022</p>
        </div>
   </center>
   <center>
   <div class="heart">

   </div>
   </center>
   
  
    <script type="text/javascript" src="{{ URL::to('/js/anime.min.js') }}">

    </script>
    <script>
        function testOk(){
            document.getElementById('okrainy').innerHTML= alert('Thank ban da dong y!'); 
        }
    </script>
    
    
<script>

   var countDownDate = new Date("Sep 7, 2023 17:02:28").getTime();
   
   var x = setInterval(function() {
   
     var now = new Date().getTime();
   
     var distance = countDownDate - now;
   
     var days = Math.floor(distance / (1000 * 60 * 60 * 24));
     var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
     var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
     var seconds = Math.floor((distance % (1000 * 60)) / 1000);
   
     document.getElementById("days").innerHTML = days;
     document.getElementById("hours").innerHTML = hours;
     document.getElementById("minutes").innerHTML = minutes;
     document.getElementById("seconds").innerHTML = seconds;
   
     if (distance < 0) {
       clearInterval(x);
       document.getElementById("days").innerHTML = "00";
       document.getElementById("hours").innerHTML = "00";
       document.getElementById("minutes").innerHTML = "00";
       document.getElementById("seconds").innerHTML = "00";
     }
   }, 1000);
   </script>

    <script>
        let stars = document.getElementById('stars');
        let moon = document.getElementById('moon');
        let mountains_behind = document.getElementById('mountains_behind');
        let text = document.getElementById('text-h2');
        let btn = document.getElementById('btn');
        let mountains_front = document.getElementById('mountains_front');
        let header = document.querySelector('header');

        window.addEventListener('scroll', function(){
            let value = window.scrollY;
            stars.style.left = value * 0.25 + 'px';
            moon.style.top = value * 1.05 + 'px';
            mountains_behind.style.top = value * 0.5 + 'px';
            mountains_front.style.top = value * 0 + 'px';
            text.style.marginRight = value * 4 + 'px';
            text.style.marginTop = value * 1.5 + 'px';
            btn.style.marginTop = value * 1.5 + 'px';
            header.style.top = value * 0.5 + 'px';
        })
    </script>
    <script>
      const text1 = document.querySelector('.text');
      text1.innerHTML = text1.textContent.replace(/\S/g, "<span>$&</span>");
      
      const animation = anime.timeline({
          targets : '.text span',
          easing: 'easeInOutExpo',
          loop: true,
      });
      
      animation
      .add({
          rotate: function(){
              return anime.random(-360,360)
          },
          translateX: function(){
              return anime.random(-500,500)
          },
          translateY: function(){
              return anime.random(-500,500)
          },
          duration: 5000,
          delay: anime.stagger(20),
      })

      .add({
          rotate: 0,
          translateX: 0,
          translateY: 0,
          duration: 5000,
          delay: anime.stagger(20),
      })

  </script>
</body>
</html>