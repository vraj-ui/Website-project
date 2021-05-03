<!DOCTYPE html>
<html>
<head>
	<title>Mission Fitness</title>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<style>
	*{
	margin: 0;
	padding: 0;
    font-family: 'Josefin Sans', sans-serif;
	}

	header{
		background-image: linear-gradient(120deg,rgba(2, 80, 247, 0.89),rgba(255, 1, 1, 0.733));
		background-color: rgb(0, 0, 0);
		height: 100vh;
		background-size: cover;
		background-position: center;
	}
	ul{
		float: right;
		list-style-type: none;
		margin-top: 40px;
	}

	ul li{
		display: inline-block;
	}

	ul li a {
		text-decoration: none;
		color: rgb(104, 177, 245);
		padding: 20px ;
		font-weight: bolder;
		letter-spacing: 2px;
		border: 1px solid transparent;
		border-radius: 2rem;
		transition:0.1s ease; 
	}
	
	ul li a:hover{
		background-color: #0250f7;
		color: rgb(255, 230, 0);
		box-shadow: 0 0 20px #0250f7, 0 0 50px #0250f7, 0 0 80px #0250f7;
	}

	/*for logo*/
	.logo img{
		float: left;
		top: 20px;
		width: 236px;
		border-color: rgb(0, 195, 255);
		border-style: groove;
		border-width: 4px;
		border-radius: 2rem;
	}

	/*main sides */
	.main {
		max-width: 1800px;
		margin: auto;
		text-shadow: 3px 3px 4px rgb(0, 0, 0);
	}

	/*vsitr mate*/
	.title{
		position: absolute;
		display: inline-table;
		text-align: center;
		top: 50%;
		left: 50%;
		bottom: 50%;	
		transform: translate(-50%,-50%);
	}

	.title h1{
		margin: 5px 0 10px 0;
		color: #fbff00;
		font-size: 60px;
		font-weight: 200;
		text-transform: uppercase;
		letter-spacing: 1px;
		font-family: impact;
		text-shadow: 3px 3px 4px rgb(252, 0, 0);
	}

	.title h2{
		margin: 60px 0 20px 0;
		color:  #fbff00;
		font-size: 46px;
		font-weight: 100;
		letter-spacing: 2px;
		font-family: impact;
		text-shadow: 2px 2px 3px rgb(25, 0, 255);
	}
	.title a {
		text-decoration: none;
		color: rgb(255, 0, 0);
		font-weight: 300;
		padding: 20px ;
		letter-spacing: 1px;
		border-radius: 100px;
		transition:0.2s ease-in; 
		text-shadow: 1px 1px 2px rgb(0, 0, 0);
	}
	.title .btnone{
	  background-image: linear-gradient(90deg,rgb(2, 80, 247),rgba(236, 1, 1, 0.822));
	  cursor: pointer;
	  outline: none;
	  background-size: 150%;
	  display: inline-block;
	}
	
	.btnone:hover{
		background-position: left;
	}

	.title a:hover{
		color: rgb(255, 0, 0);
		background-position: right;
	}
	.title h3{
		padding: 10px;
		display: inline-block;
	}

</style>
<body>
     <header>
     		<div class="main">
     			<div class="logo">
     				<a href="C:\xampp\htdocs\project\index.php"><img src="logo.png" class="animate__animated animate__backInLeft"></a>
     			</div>
     			<ul class="animate__animated animate__backInLeft">
                    <li><a href="C:\xampp\htdocs\project\index.php" class="btnzero">Home</a></li>
                    <li><a href="C:\xampp\htdocs\project\aboutfitness.php" class="btnzero">About fitness</a></li>
     			</ul>
     		</div>
     		<div class="title">
                <h2 style="font-family:'Josefin Sans', sans-serif;" class="animate__animated animate__slow  animate__bounceInDown ">Welcome To India's Best Gym.</h2>
                <h1 style="font-family:'Josefin Sans', sans-serif;" class="animate__animated animate__slow animate__fadeIn" >"Our Only Focus is Your Fitness"</h1><br><br>
				<h3 class="animate__animated animate__heartBeat" ><a href="C:\xampp\htdocs\project\joinus.php"class="btnone">JOIN US FOR FITTER TOMORROW</a></h3>
			 </div>
     </header>
</body>
</html> 	

