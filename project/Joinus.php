<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign UP</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <style>
    *{
    margin: 0;
    padding: 0;
    text-decoration: none;
    font-family: 'Josefin Sans', sans-serif;
    box-sizing: border-box;
    }

    body{
      min-height: 100vh;
      background-image: linear-gradient(120deg,rgba(2, 80, 247, 0.89),rgba(255, 1, 1, 0.733));
      background-color: rgb(0, 0, 0);
      background-size: cover;
      background-position: center;
    }

    .login-form{
      width: 360px;
	    background-image: linear-gradient(120deg,rgba(255, 1, 1, 0.733),rgba(2, 80, 247, 0.89));
      height: 620px;
      padding: 80px 40px;
	    border-radius: 2rem;
      position: absolute;
      left: 50%;
      top: 50%;
	    transform: translate(-50%,-50%);
	    box-shadow: 2px 2px 3px rgba(2, 1, 1, 0.986);
    }

    .login-form h1{
      text-align: center;
	  margin-bottom: 25px;
    }

    .txtb{
      border-bottom: 2px solid #adadad;
      position: relative;
      margin: 30px 0;
    }

    .txtb input{
      font-size: 15px;
      color: #333;
      border: none;
      width: 100%;
      outline: none;
      background: none;
      padding: 0 5px;
      height: 40px;
    }

    .txtb span::before{
      content: attr(data-placeholder);
      position: absolute;
      top: 50%;
      left: 5px;
      color: #adadad;
      transform: translateY(-50%);
      z-index: -1;
      transition: .2s;
    }

    .txtb span::after{
      content: '';
      position: absolute;
      width: 0%;
      height: 5px;
      background: linear-gradient(120deg,#ec0101d2,#0250f7);
      transition: .5s;
    }

    .focus + span::before{
      top: -5px;
    }
    .focus + span::after{
      width: 100%;
    }

    .logbtn{
      display: block;
      width: 100%;
      height: 50px;
      border: none;
	    border-radius: 2rem;
      background-image: linear-gradient(90deg,rgba(236, 1, 1, 0.822),rgb(2, 80, 247));
      background-size: 200%;
      color: #fff;
      outline: none;
      cursor: pointer;
      transition: .5s;
    }

    .logbtn:hover{
      background-position: right;
    }

    .bottom-text{
      margin-top: 60px;
      text-align: center;
      font-size: 13px;
    }

  </style>
  <body>

      <form action="index.html" class="login-form">
        <h1>Join us</h1>

        <div class="txtb">
          <input type="text">
          <span data-placeholder="Enter your Name"></span>
        </div>
		
		<div class="txtb">
			<input type="text">
			<span data-placeholder="Gender"></span>
		</div>

		<div class="txtb">
			<input type="email">
			<span data-placeholder="Email"></span>
		</div>

		<div class="txtb">
			<input type="text">
			<span data-placeholder="Enter your Locality"></span>
		</div>
		
        <div class="txtb">
          <input type="number">
          <span data-placeholder="Enter Your Number"></span>
		</div>	

        <input type="submit" class="logbtn" value="Join the Fit Family">

      </form>

      <script type="text/javascript">
      
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });
  
      </script>


  </body>
</html>
