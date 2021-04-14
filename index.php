<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset = "UTF-8">
        <title>Welcome</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/jquery.min.js"></script>

        <style type="text/css">

        body{
          height: 100vh;
          background-image: url("/CHARTECHY/images/back1.png");
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: center;
          margin-left: 90px;
          margin-bottom: 150px; 
          }

          #slider{
            overflow: hidden;
          }

          #slider figure{
            position: relative;
            width: 500%;
            margin: 0;
            left: 0;
            animation: 20s slider infinite;
          }

          #slider figure img{
            width: 20%;
            float: left;
          }

          @keyframes slider{
            0%{
              left: 0;
            }
            20%{
              left: 0;
            }
            25%{
              left: -100%;
            }
            45%{
              left: -100%;
            }
            50%{
              left: -200%;
            }
            70%{
              left: -200%;
            }
            95%{
              left: -300%;
            }
            100%{
              left: -400%;
            }

          }

        </style>



        
       
    </head>
    <body>
        <div  class="container m-3">

      

    <div class="menu">

      <nav>
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="signup.php">SIGNUP</a></li>
           <li class="breadcrumb-item active"><a href="login.php">LOGIN</a></li>
           
        </ol>
      </nav>

    </div>


            <div class="text-center">
                <h4>Welcome to Chartechy car_hire</h4>
            </div>

            <div id="slider"> 

            <figure>
              <img src="/CHARTECHY/images/figo.png">
              <img src="/CHARTECHY/images/amaze.png">
              <img src="/CHARTECHY/images/Fortuner.png">
              <img src="/CHARTECHY/images/lets.jpg">
              <img src="/CHARTECHY/images/figo.png">

            </figure>
            
</div> 
     
                  
                </form>

           
            </div>
              
    </body>
    </html>