<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>About</title>
    <link rel="icon" type="image/x-icon" href="https://beyondtv.com/wp-content/uploads/2020/04/UFC-app-logo-300x300.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
	body {
    		background-color:black;
    }
    h1 {
    		font-family:arial;
            color:red
    }
    * {
    		box-sizing: border-box;
    }
    .menus button{
            background-color: black;
            border: 3px solid white;
            color: white;
            padding: 5px 15px;
            text-align: center;
            display: inline-block;
            font-size: 20px;
            cursor: pointer;
            float: center;
            
    }
   .menus:after {
   			content: "";
   			clear: both;
   			display: table;
	}
	.menus button:not(:last-child) {
  			border-right:
    }
	.menus button:hover {
  			background-color: white;
            color: red;
    }
    .center {
  			display: block;
  			margin-left: auto;
  			margin-right: auto;
  			width: 70%;
	}
    table,tr,th {
    		text-align:center;
            font-size:30px;
            color:white;
            border: 3px solid white;
            margin: 30px 10px 10px 10px;
            width:100%;
    }
    .people {
    		height:300px;
            width:200px;
            margin:40px 15px 1px 15px;
    }
    .sticky {
  			position: fixed;
  			top: 0;
  			width: 100%
	}
    .content {
    		padding: 16px;
    }
    .sticky + .content {
  			padding-top: 102px;
	}
    #goToTopButton {
  			display: none;
  			position: fixed;
  			bottom: 20px;
  			right: 30px;
  			z-index: 99;
  			font-size: 15px;
  			border-color: white;
  			outline: none;
  			background-image: url("https://scontent.xx.fbcdn.net/v/t1.15752-9/316124851_1175581886383852_6634174824779936514_n.png?_nc_cat=110&ccb=1-7&_nc_sid=aee45a&_nc_eui2=AeHFHAJuSeoaaHR8tNq0VSk_0dXG0nknw8XR1cbSeSfDxWrVrpof2bbIyJYD-Hr7rpDOxZIuJgYR9KbKlyb-EqvK&_nc_ohc=YpIT74RncTgAX-VTkYy&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdRc9fq32XszlARfV5vpB4nFM5ljEvErjhIkY8mX9hW48Q&oe=639ECE93");
  			color: white;
  			cursor: pointer;
  			padding: 15px;
  			border-radius: 12px;
  			padding: 50px 25px;
  			background-size: 100% 100%;
  			text-shadow: 0 0 3px black, 0 0 5px black;
  			text-align: bottom;
	}
    #goToTopButton:hover {
			background-image: url("https://cdn.fbsbx.com/v/t59.2708-21/312722757_3337309533202958_1154724672186407543_n.gif?_nc_cat=105&ccb=1-7&_nc_sid=041f46&_nc_eui2=AeEinsWVBJyj5UG4R6CLr3TjQTpBzTJWPYpBOkHNMlY9ijy7PEDsIzGLgW6farjP7wJjr21TwSoNAIq5yBpReDpJ&_nc_ohc=KcnP9VxW-aQAX-Q8u5J&_nc_ht=cdn.fbsbx.com&oh=03_AdSYnI3fnC7SFJHuFBYWxnUZLMkoZDgVTnSDF5AQtU-oXw&oe=6382E6E0");
	}
	.container {
  			display: inline-block;
  			cursor: pointer;
	}
	.bar1, .bar2, .bar3 {
  			width: 35px;
  			height: 5px;
  			background-color: white;
  			margin: 6px 0;
  			transition: 0.4s;
	}
    .change .bar1 {
  			transform: translate(0, 11px) rotate(-45deg);
	}
	.change .bar2 {
    		opacity: 0;
    }
	.change .bar3 {
  			transform: translate(0, -11px) rotate(45deg);
	}
    .sidenav {
  			height: 100%;
  			width: 0;
  			position: fixed;
            padding-top: 60px;
  			z-index: 1;
  			top: 0;
  			left: 0;
  			background-color: #333333;
  			overflow-x: hidden;
  			transition: 0.5s;
            text-shadow: 2px 2px black;
	}
	.sidenav a {
  			padding: 8px 8px 8px 32px;
            display: block;
  			text-decoration: none;
  			font-size: 25px;
  			color: grey;
  			transition: 0.3s;
	}
	.sidenav a:hover {
  			color: red;
	}
	.sidenav .closebtn {
  			position: absolute;
            margin-left: 50px;
  			top: 0;
  			right: 25px;
  			font-size: 36px;
  			
	}
	#main {
  			transition: margin-left .5s;
  			padding: 16px;
	}
	@media screen and (max-height: 450px) {
  			.sidenav {padding-top: 15px;}
  			.sidenav a {font-size: 18px;}
	}
    #input {
  	background-image: url('/css/searchicon.png');
  	background-position: 10px 12px;
  	background-repeat: no-repeat;
  	width: 100%;
  	font-size: 16px;
  	padding: 12px 20px 12px 40px;
  	border: 1px solid #ddd;
  	margin-bottom: 12px;
	}
    #ul {
  	list-style-type: none;
  	padding: 0;
  	margin: 0;
    display:none;
	}
    #ul li a {
  	border: 1px solid #ddd;
  	margin-top: -1px; /* Prevent double borders */
  	background-color: #f6f6f6;
  	padding: 12px;
  	text-decoration: none;
  	font-size: 18px;
  	color: black;
  	display: block
	}

	#myUL li a:hover:not(.header) {
  	background-color: #eee;
	}
    
    h3 {
    font-size: 25px;
    color: white;
    text-shadow: 1px 1px grey;
    font-family: arial;
    padding: 10px;
    }
    
    p {
    font-size: 18px;
    color:white;
    padding: 10px;
    font-family:arial;
    }
</style>

<body>
	<h1 style="background-color:black; color:red; text-align:center; border: 3px solid white;">
    About
    </h1>
    <h3>
    What is this website?
    </h3>
    <p>
    This website is a project website created by 3rd year IT students for the subject Web Development about UFC.
    </p>
    <hr>
    <h3>
    Is this a legit working website for buying tickets?
    </h3>
    <p>
    No. This website is not directly associated with the people who own the UFC. It is also not capable and not authorized to sell real tickets.
    </p>
    <hr>
    <h3>
    What is the purpose of this site?
    </h3>
    <p>
    This website is done only for educational purposes. It is only created to demonstrate website creation and website functionalities.
    </p>
</body>
</html>
