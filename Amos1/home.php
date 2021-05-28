<!Doctype html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" type="text/css" href="static/home.css">
    <script type="text/javascript">
   var textWrapper = document.querySelector('.ml12');
  textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

  anime.timeline({loop: true})
    .add({
      targets: '.ml12 .letter',
      translateX: [40,0],
      translateZ: 0,
      opacity: [0,1],
      easing: "easeOutExpo",
      duration: 1200,
      delay: (el, i) => 500 + 30 * i
    }).add({
      targets: '.ml12 .letter',
      translateX: [0,-30],
      opacity: [1,0],
      easing: "easeInExpo",
      duration: 1100,
      delay: (el, i) => 100 + 30 * i
    });

  </script>
 </head>
 <style>

  .card_text h2
  {
    padding: 34px 0 66px;
    color: #6da3c7;
    letter-spacing: 6px;
  }

  .card-body h4
  {
    font-family: "Montserrat-Bold", sans-serif;
    font-size: 24px;
    color: #025377;
    margin-bottom: 5px;
    text-transform: uppercase;
  }
  .card-body h5
  {
    font-size: 18px;
    color: #318570;
    margin-bottom: 18px
  }
  .card-body p{
    font-size: 16px;
    color: #949494;
    line-height: 20px;
    font-family: "Open Sans", sans-serif;
  }
 ul li{
  font-size: 14px;
  font-weight: 20px;
 }
.navbar-nav li:hover .dropdown-menu {
    display: block;
}

.w-100{
  height:100vh;
}

@media only screen and (max-width:640px){
.navbar-nav{
  background:rgba(75,0,130,.4);
  color:white;
  border-radius: 20px;
  box-shadow: 5px; 
}
.navbar-toggler{
  padding:1px 5px;
  font-size:18px;
  line-weight:0.3;
}

.navbar-brand{
  height:60px;
  width:100px;
  left:0%;
}
.card_body h4{
  font-size:20px;
}
.card-body h5{
  font-size: 16px;
  margin-bottom: 15px
}
.card-body p{
  font-size: 14px;
    line-height: 18px;
}
.card_text h2{
  padding: 20px 0;
}
.image img{
  margin-left:60px;
}
}
}
}
h2
{
  color: #ffffff;
  padding-top: 170px;
  margin-bottom: 0px;
  letter-spacing: 3.5px;
  font-weight:200;
  font-family: "Montserrat-Regular", sans-serif;
}

*{
  margin:0;
  padding:0;
}
.load{
  animation:slide 2s;
}
.slider{
  width: 100%;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;         
  animation: slide 30s infinite;
}
.content{
  color:#fff;
  width:100%;
  height:100vh;
  background-color: rgba(0,0,0,0.5);
}
.principal
{
  left:50%;
  top:50%;
  transform: translate(-50%,-100%);
  position: absolute;
  letter-spacing:5px; 
  width: 100%;
  text-align: center;
}
.principal p span{
  position: relative;
  color: transparent;
}
.principal p span:before{
  content: attr(data-text);
  position: absolute;
  top:0;
  left: 0;
  height:100%;
  width:100%; 
  overflow: hidden;
  color: #fff; 
  border-right:2px solid #FC6D6D;
  animation:typing 1.5s steps(10) infinite; 
}
@keyframes typing{
  0%{
    width:0%;
    margin:0 -0px 0 0px;
  }
  50%{
    width:100%;
    margin:0 -0px 0 0px;
  }
  100%{
    width:100%;
    margin:0 -0px 0 0px;
  }
}
@keyframes slide{
  0%{
    background-image: url('img/water.jpg');
    height: 150%;
  }
  33%{
    background-image: url('img/water.jpg');  
  }
  33.01%{
    background-image: url('img/drone.jpg');
  }
  66%{
    background-image: url('img/drone.jpg');
  }
  66.01%{
    background-image:url('img/Drone-sunset.jpg'); 
  }
  100%{
    background-image: url('img/Drone-sunset.jpg');
  }

  @media only screen and (max-width: 767px){
    @keyframes slide{
       0%{
    background-image: url('img/water.jpg');
    height: 150%;
  }
  33%{
    background-image: url('img/water.jpg');  
  }
  33.01%{
    background-image: url('img/drone.jpg');
  }
  66%{
    background-image: url('img/drone.jpg');
  }
  66.01%{
    background-image:url('img/Drone-sunset.jpg'); 
  }
  100%{
    background-image: url('img/Drone-sunset.jpg');
    }
  }
</style>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top ">
      <a href="index.php"><img class="navbar-brand ml-5 pl-5" src="img/amos.png" width="150px" height="100px"></a>
      <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#menu">
      <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ml-5 pl-5" style="font-size: 20px;">
        <li class="nav-item">
          <a class="nav-link text-light" href="starthere.php"><strong>START HERE</strong></a>
        </li>
        <li class="nav-item dropdown">
           <a class="nav-link text-light" href="/DRONE TRAINING/" data-toggle="dropdown"><strong>DRONE TRAINING</strong> </a>
            <ul class="dropdown-menu bg-dark">
            <li class="dropdown-item bg-dark"><a class="nav-link text-light" href="DRONETRAINING/cerificateguide.php">FAA CERTIFICATION GUIDE</a><li>
            <li class="dropdown-item bg-dark"><a class="nav-link text-light" href="#">HANDS ON DRONE TRAINIG</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
           <a class="nav-link text-light" href="/GUIDES/" data-toggle="dropdown"><strong>GUIDES</strong> </a>
            <ul class="dropdown-menu bg-dark">
            <li class="dropdown-item bg-dark"><a class="nav-link text-light" href="#">TOP CAMERA DRONES</a><li>
            <li class="dropdown-item bg-dark"><a class="nav-link text-light" href="#">TOP CHEAP DRONES (UNDER $180)</a></li>
            <li class="dropdown-item bg-dark"><a class="nav-link text-light" href="#">TOP PROFESSIONAL DRONES</a></li>
            <li class="dropdown-item bg-dark"><a class="nav-link text-light" href="#">TOP PLACES TO FLY A DRONE</a></li>
            <li class="dropdown-item bg-dark"><a class="nav-link text-light" href="#">DRONE FLYING GUIDE</a></li>
            <li class="dropdown-item bg-dark"><a class="nav-link text-light" href="#">DRONE JOBS GUIDE</a></li>
            <li class="dropdown-item bg-dark"><a class="nav-link text-light" href="#">DRONE LAWS GUIDE</a></li>
            <li class="dropdown-item bg-dark"><a class="nav-link text-light" href="#">DRONE INSUREANCE GUIDE</a></li>
            <li class="dropdown-item bg-dark"><a class="nav-link text-light" href="#">DRONE PHPTOGRAPHY GUIDE</a></li>
            </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light" href="Blog.php"><strong>Blog</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#"><strong>NEWS</strong></a>
        </li>
      </ul>
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script type="text/javascript">
        $(document).on('click','ul li',function(){
          $(this).addClass('active').siblings().removeClass('active')
        })
      </script>
      </div>
    </nav>
</body>
</html>
