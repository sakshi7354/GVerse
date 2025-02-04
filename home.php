<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <title>GVerse</title> -->
    
    
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    /* nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        font-family: 'Poppins', sans-serif;
    }  */
    nav a.navbar-brand{
        color: #fff;
        font-size: 19px!important;
        font-weight: 500;
        size: 20px;
    }
    button a{
        color: #6665ee;
        font-weight: 500;
    }
    button a:hover{
        text-decoration: none;
    }
    /* h1{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 50px;
        font-weight: 600;
    } */
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="technofinal\style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

</nav> 

    <header>
        <aside>
            <h1>Game <i class="bi bi-joystick"></i></h1>
            <button>Get Game Prime</button>
            <ul >
                <li class="active_li"><a href="project/index.html"><i class="bi bi-archive-fill"></i>Browse</a></li>
                <li><a href="#"><i class="bi bi-clipboard-check-fill"></i>Channels</a></li>
                <li><a href="#"><i class="bi bi-calendar-event-fill"></i>Events</a></li>
                <li><a href="#"><i class="bi bi-people-fill"></i>Friends</a></li>
                <li><a href="#"><i class="bi bi-controller"></i>Games</a></li>
                <li><a href="#"><i class="bi bi-bookmark-check-fill"></i>Store</a></li>
               <li> <a href="logout-user.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>

            </ul>
            
                </div>
            </div>
        </aside>
        <article>
            <nav>
                  <!-- <button>Stream</button> 
                <div class="search">
                    <input type="text" name="" id="" placeholder="search...">
                    <i class="bi bi-search"></i>
                </div>   -->
                <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#" >Welcome - <?php echo $fetch_info['name'] ?></a>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <!-- <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="../loginsystem/welcome.php">Home</a>
      </li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
            <li></li>
        </ul>
    </div>
    </div>
                <div class="right_bx">
                  <i class="bi bi-moon-fill" id="day_night"></i>
                   <i class="bi bi-brightness-high-fill" id="day_night2" ></i>   
                  <i class="bi bi-wifi" id="wifi"></i>
                  <!-- <i class="bi bi-gear-fill"></i> -->
                  <a class="nav-link active" aria-current="page" href="feedback/index.php">feedback<i class="bi bi-hand-thumbs-up-fill"></i></a>
                  <!-- <a href=""></a> -->
                  <button id="active_battery" ><i class="bi bi-battery-half" id="battery_icon"></i><span id="battery_level">63%</span></button>
                  <div class="user_data">
                    <h6></h6>
                    <H5>USER</H5>
                    <i class="bi bi-caret-down-fill"></i>
                    <div class="card">
                        <img src="technofinal/project/img/GVERSE.jpg" alt="">
                        <h6 style=" background-color:black; font-size:10px;">WELCOME USER TO GVERSE</h6>
                        <p style=" background-color:black; font-size:12px;">THIS IS A GAMING PLATFORM CREATED BY PRAGATI AGRAWAL AND SAKSHI GUPTA</p>
                        <!-- <button>PREMIUM</button>
                        <img class="card_gta_img"src="download.jpg" alt=""> -->
                    </div>
                  </div>
                </div>
            </nav>
            <!-- game start box -->
            <div class="btns">
                <i style="color:#fff" class="bi bi-caret-left-fill" id="game_bx_1_left_btn"></i>
                <i style="color:#fff" class="bi bi-caret-right-fill" id="game_bx_1_right_btn"></i>

            </div>
            <div class="game1">
                <h3>recommendation for you</h3>
                <div class="game_bx" id="game_bx_1">
                    <div class="card">
                        <a href="technofinal/project/flappybirdinfo.html">
                      <img src="technofinal/project/img/FLAPPYBIRDIMG.jpg" alt=""></a>
                      <br>
                      <div class="content">
                        <div class="left">
                            <h5>FLAPPY BIRD GAME</h5>
                            
                        </div>
                        <!-- <h6> 354,432 Views</h6> -->
                      </div>
                    </div>
                    <div class="card">
                        <a href="technofinal/project/snakeinfo.html">
                            <img src="technofinal/project/img/snaki.jpg" alt="" srcset="">
                        </a><br>
                        <div class="content">
                          <div class="left">
                              <h5>SNAKE MANIA</h5>
                              
                          </div>
                          <!-- <h6> 354,432 Views</h6> -->
                        </div>
                      </div>
                      <div class="card">
                        <a href="technofinal/project/tictactoeinfo.html">
                        <img src="technofinal/project/img/TICTACTOEIMG.jpg" alt=""></a>
                        <div class="content">
                          <div class="left">
                              <h5>TIC TAC TOE GAME</h5>
                              <!-- <P>jahid khan [kds coder]
                              </P>-->
                          </div>
                          <!-- <h6> 354,432 Views</h6>  -->
                        </div>
                      </div>
                      <div class="card">
                        <a href="technofinal/project/fruitSlicerInfo.html"><img src="technofinal/project/FruitSlice Game(jQuery)/img/fruitbg.jpg" alt=""></a>
                        
                        <div class="content">
                          <div class="left">
                              <h5>FRUIT SLICER GAME</h5>
                              <!-- <P>jahid khan [kds coder]
                              </P> -->
                          </div>
                          <!-- <h6> 354,432 Views</h6> -->
                        </div>
                      </div>
                      <div class="card">
                        <a href="technofinal/project\stonePaperScissor\index.html"><img src="technofinal/project/img/ROCKPAPERSCISSOR.jpg" alt=""></a>
                        
                        <div class="content">
                          <div class="left">
                              <h5>ROCK PAPER SCISSOR GAME</h5>
                              <!-- <P>jahid khan [kds coder]
                              </P> -->
                          </div>
                          <!-- <h6> 354,432 Views</h6> -->
                        </div>
                      </div>
                      <!-- all card data changes-->
                    
                </div>
            </div>
            <!-- game box 2 start -->
            <div class="game2">
                <h3>MOST PLAYED </h3>
                <div class="games_bx">
                    <div class="card">
                        <a href="technofinal/project/flappybirdinfo.html">
                            <img src="technofinal/image/snake.png" alt=""></a>
                        
                        <div class="content">
                            <h6>snake game</h6>
                            <p></p>
                        </div>
                    </div>
                    <div class="card">
                        <a href="technofinal/project/flappybirdinfo.html">
                            <img src="technofinal/project/img/Bird.png" alt=""></a>
                        
                        <div class="content">
                            <h6>flappy bird</h6>
                            
                        </div>
                    </div>
                    <div class="card">
                        <a href="technofinal/project/tictactoeinfo.html">
                            <img src="technofinal/image/ticTacToe.jpeg" alt=""></a>
                        
                        <div class="content">
                            <h6>Tic Tac Toe</h6>
                            
                        </div>
                    </div>
                     <div class="card">
                        <a href="technofinal/project\stonePaperScissor\index.html"><img src="technofinal/image/stonePaperScissor.png" alt=""></a>
                        
                        <div class="content">
                            <h6>Stone Paper Scissor</h6>
                          
                        </div>
                    </div>
                    <div class="card">
                        <a href="technofinal/project/fruitSlicerInfo.html"><img src="technofinal/image/fruitSlicer.jpeg" alt=""></a>
                        
                        <div class="content">
                            <h6>Fruit Slicer</h6>
                            
                        </div>
                    </div>
                    <!-- <div class="card"><img src="download.jpg" alt="">
                        <div class="content">
                            <h6>hello</h6>
                           
                        </div></div>
                    <div class="card"><img src="download.jpg" alt="">
                        <div class="content">
                            <h6>hello</h6>
                           
                        </div></div> -->
                    <!-- all card data are changed -->
                
                </div>
            </div>
        </article>
    </header>
    <script src="technofinal/app.js"></script>
</body>
</html>