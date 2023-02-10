<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Ultimate Fighting Championship</title>
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
  			background-image: url("static hand.png");
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
			background-image: url("dynamic hand.gif");
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
</style>

<body>
	<!---Navigation Bar--->
    <div id="mySidenav" class="sidenav">
  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  		<input type="text" id="input" onkeyup="searchFunc()" placeholder="Search for names.." title="Type in a name">
        <div style="text-shadow: 0px 0px black;">
        <ul id="ul">
  			<li><a href="#CE">Carla Esparza</a></li>
			<li><a href="#DF">Deiveson Figueiredo</a></li>
			<li><a href="#AS">Aljamain Sterling</a></li>
			<li><a href="#AV">Alexander Volkanovski</a></li>
			<li><a href="#IM">Islam Makhachev</a></li>
			<li><a href="#LE">Leon Edwards</a></li>
			<li><a href="#IA">Israel Adesanya	</a></li>
			<li><a href="#JP">Jiří Procházka</a></li>
			<li><a href="#FN">Francis Ngannou</a></li>
			<li><a href="#VS">Valentina Shevchenko</a></li>
			<li><a href="#AM">Amanda Nunes</a></li>
			<li><a href="#DC">Dominick Cruz</a></li>
			<li><a href="#UF">Urijah Faber</a></li>
			<li><a href="#BP">B.J. Penn</a></li>
			<li><a href="#GS">Georges St-Pierre</a></li>
			<li><a href="#AN">Anderson Silva</a></li>
		</ul>
        </div>
  		<a href="about.php" target="_blank">About</a>
  		<a href="#">Contact</a>
		<a href="seats.php" target="_blank"
		>Reserve Seats</a>
  	</div>
    <div id="main">
	<!---UFC LOGO---->
	<h1 style="background-color:black; color:white; text-align:center;">
		<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/UFC_Logo.png/1200px-UFC_Logo.png?20160112220530"
        alt="UFC" width="20%" height="20%" 
        title="Ultimate Fighting Championship">
	</h1>
    <!---Go To Top Button--->
    <button onclick="teleportToTop()" id="goToTopButton" title="Go to top">Go To top</button>
    <!---Menu--->
    <div class="container" onclick="openNav(this)" style="padding:0 48%;">
  		<div class="bar1"></div>
  		<div class="bar2"></div>
  		<div class="bar3"></div>
	</div>
    <!---Buttons---->
	<h2 id="stickyHeader" style="background-color:black;">
 	<div class="menus" id="stickyButtons" style="width:100%">
		<button style="width:32%"
        	onclick="window.location.href='#A1';">Basic Info</button>
		<button style="width:33%"
        	onclick="window.location.href='#A2';">Champions</button>
		<button style="width:32%"
        	onclick="window.location.href='#A3';">Iconics</button>
	</div>
    </h2>
    <div class="content">
     <!---Big Wallpaper---->
	<img src="https://images2.alphacoders.com/850/850871.jpg" 
    alt="hehe" height="100%"  width="100%">
    <!---Basic Information Logo---->
	<h1 id=A1 style="background-color:rgb(20,20,20); padding:20px 20px">
        <img src="https://assets.nicepagecdn.com/292eff0f/3174621/images/BRIEF1.png" 
        alt="Basic Information" class="center">
    </h1>
    <!---Basic Information---->
    <div>
    	<img src="https://assets.nicepagecdn.com/292eff0f/3174621/images/dana.jpg" 
        alt="champs" height="200px" width="200px" title="Dana White" 
        style="float:left; margin:80px 500px 50px 30px;">
    	<p style="color:white; padding:100px 10px">
        The <em><b>Ultimate Fighting Championship</b></em> (UFC)<br> 
        is an American <em><b>Mixed Martial Arts</b></em> (MMA) that is <br>
        currently based in Las Vegas, Nevada. <br>
        It produces events worldwide that showcase 12 weight divisions.<br>
        And <b>Dana Fredericks White</b> serves as its president.<br>
        </p>
    </div>
    <!---Championship Logo---->
    <h1 id=A2 style="background-color:rgb(20,20,20); padding:20px 20px">
    	<img src="https://assets.nicepagecdn.com/292eff0f/3174621/images/champ.png" 
        alt="Basic Information" class="center">
    </h1>
    <!---Championship---->
    <table class="center" style="width:100%">
    	<tr>
        	<th>Current Champion(2022)</th>
            <th>Weightclass Category</th>
        </tr>
        <tr>
        	<td><img src="https://assets.nicepagecdn.com/292eff0f/3174621/images/esparta.png"
            class="people" id="CE"><br>Carla Esparza</td>
			<td>Women's Strawweight</td>
        </tr>
        <tr>
        	<td><img src="https://assets.nicepagecdn.com/292eff0f/3174621/images/deiveson.png"
            class="people" id="DF"><br>Deiveson Figueiredo</td>
			<td>Flyweight</td>
        </tr>
        <tr>
        	<td><img src="https://assets.nicepagecdn.com/292eff0f/3174621/images/aljamain.webp"
            class="people" id="AS"><br>Aljamain Sterling</td>
			<td>Bantamweight</td>
        </tr>
        <tr>
        	<td><img src="https://assets.nicepagecdn.com/292eff0f/3174621/images/alexander.png"
            class="people" id="AV"><br>Alexander Volkanovski</td>
			<td>Featherweight</td>
        </tr>
        <tr>
        	<td><img src="https://assets.nicepagecdn.com/292eff0f/3174621/images/islam.png"
            class="people" id="IM"><br>Islam Makhachev</td>
			<td>Lightweight</td>
        </tr>
        <tr>
        	<td><img src="https://assets.nicepagecdn.com/292eff0f/3174621/images/leon.png"
            class="people" id="LE"><br>Leon Edwards</td>
			<td>Welterweight</td>
        </tr>
        <tr>
        	<td><img src="https://assets.nicepagecdn.com/292eff0f/3174621/images/israel.png"
            class="people" id="IA"><br>Israel Adesanya</td>
			<td>Middleweight</td>
        </tr>
        <tr>
        	<td><img src="https://assets.nicepagecdn.com/292eff0f/3174621/images/jiri.png"
            class="people" id="JP"><br>Jiří Procházka</td>
			<td>Light Heavyweight</td>
        </tr>
        <tr>
        	<td><img src="https://assets.nicepagecdn.com/292eff0f/3174621/images/francis.png"
            class="people" id="FN"><br>Francis Ngannou</td>
			<td>Heavyweight</td>
        </tr>
        <tr>
        	<td><img src="https://assets.nicepagecdn.com/292eff0f/3174621/images/valentina.png"
            class="people" id="VS"><br>Valentina Shevchenko</td>
			<td>Women's Flyweight</td>
        </tr>
        <tr>
        	<td><img src="https://assets.nicepagecdn.com/292eff0f/3174621/images/amanda.png"
            class="people" id="AM"><br>Amanda Nunes</td>
			<td>Women's Bantamweight</td>
        </tr>
        <tr>
        	<td><img src="https://assets.nicepagecdn.com/292eff0f/3174621/images/amanda.png"
            class="people" ><br>Amanda Nunes</td>
			<td>Women's Featherweight</td>
        </tr>
    </table>

    
    <!---Iconics Logo---->
    <h1 id=A3 style="background-color:rgb(20,20,20); padding:20px 20px">
    	<img src="iconics.png" 
        alt="Iconics" class="center">
    </h1>
    <!---Iconics---->
    <table>
    		<tr>
            	<th>Most Iconic Fighters of All time</th>
            </tr>
            <tr>
            	<td id="DC">
                	<img src="DC.png" alt="some guy" class="people">
                    <br>Bantamweight: Dominick Cruz
                    <br><p  style="font-size:18px; margin:10px 50px 70px 50px;">
                    Dominick Cruz is still the most iconic bantamweight champion, 
                    with Miguel Torres being a close second. Cruz gets a boost 
                    due to being the only UFC bantamweight champion, but a casual 
                    fan is more likely to know who Cruz is as opposed to Torres.
					</p>
                </td>
            </tr>
            <tr>
            	<td id="UF">
                	<img src="UF.png" alt="some guy" class="people">
                    <br>Featherweight: Urijah Faber
                    <br><p  style="font-size:18px; margin:10px 50px 70px 50px;">
                    Urijah Faber was the poster boy of the WEC and is easily 
                    the most iconic featherweight champion in Zuffa history.
                    Faber was the face for the entire organization.
					</p>
                </td>
            </tr>
            <tr>
            	<td id="BP">
                	<img src="BP.png" alt="some guy" class="people">
                    <br>Lightweight: B.J. Penn
                    <br><p  style="font-size:18px; margin:10px 50px 70px 50px;">
                    B.J. Penn is heralded by most as the best lightweight fighter ever 
                    and is obviously an iconic fighter. His battles with Joe Stevenson, 
                    Kenny Florian and Diego Sanchez were huge for his career, 
                    and it cannot be forgotten that he is one of only two to 
                    hold UFC titles in two different weight classes. Penn is one of 
                    the best fighters ever and was the face of the lightweight division for a long time.
					</p>
                </td>
            </tr><tr>
            	<td id="GS">
                	<img src="GS.png" alt="some guy" class="people">
                    <br>Welterweight: Georges St-Pierre
                    <br><p  style="font-size:18px; margin:10px 50px 70px 50px;">
                    Not only that, but GSP is also the face of the UFC at
                    a time when the popularity is much higher than when 
                    others were champion.GSP has beaten some of the best 
                    in the sport, and he has earned his spot on the list of 
                    top pound-for-pound fighters in the world.
					</p>
                </td>
            </tr>
            <tr>
            	<td id="AN">
                	<img src="AS.png" alt="some guy" class="people">
                    <br>Middleweight: Anderson Silva
                    <br><p  style="font-size:18px; margin:10px 50px 70px 50px;">
                    Anderson Silva is the only middleweight champion of the UFC 
                    who has more than two defenses. Not only does he have more 
                    than two, but he has an unimaginable eight consecutive 
                    title defenses, and has ventured up to light heavyweight 
                    and made things look easy there. Silva is, and will be for 
                    a very long time, the face of the middleweight division.
					</p>
                </td>
            </tr>
            <tr>
            	<td id="CL">
                	<img src="CL.png" alt="some guy" class="people">
                    <br>Light Heavyweight: Chuck Liddell
                    <br><p style="font-size:18px; margin:10px 50px 70px 50px;">
                    Liddell made MMA even more mainstream during his tenure as light heavyweight champion.
					</p>
                </td>
            </tr>
            <tr>
            	<td>
                	<img src="RC.png" alt="some guy" class="people">
                    <br>Heavyweight: Randy Couture
                    <br><p style="font-size:18px; margin:10px 50px 70px 50px;">
                    Randy Couture is known as one of only two fighters to win championships in two 
                    different weight classes, the other being B.J. Penn. Couture is the only 
                    three-time champion in UFC history, having won the heavyweight title on three 
                    separate occasions. The trilogy between 
                    Couture and Chuck Liddell opened many eyes to the sport of MMA, 
                    and so did their coaching stint on The Ultimate Fighter. If not for Couture, 
                    the UFC would not be nearly what it is today.
					</p>
                </td>
            </tr>
    </table>
    </div>
	<footer style="background-color: rgb(50,50,50)">
    	<h3 style="color:white; text-align:center;">
        	Group 10
			<br>Alonzo
			<br>Calaguas
			<br>Nantes
			<br>Boco
		</h3>
</div>
    <!---Sticky Header Script AND Go to Top Button Script--->
	<script>
    	let button = document.getElementById("goToTopButton");
    	window.onscroll = function() {sticky_header();scrolling()};

		var header = document.getElementById("stickyHeader");
		var sticky = header.offsetTop;

		function sticky_header() {
  			if (window.pageYOffset > sticky) {
    			header.classList.add("sticky");
  			} 
            else {
    			header.classList.remove("sticky");
  			}
		}
        function scrolling() {
  			if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) { 
            	button.style.display = "block";
  			} 
            else {
    			button.style.display = "none";
  			}
		}

		function teleportToTop() {
  			document.body.scrollTop = 0;
  			document.documentElement.scrollTop = 0;
		}
    </script>
    <script>
    	var open = 0;
    	function openNav(x) {
        	if (open == 0){
            document.getElementById("mySidenav").style.width = "250px";
  			document.getElementById("main").style.marginLeft = "250px";
            open = 1;
            }
            else if (open == 1){
            document.getElementById("mySidenav").style.width = "0";
  			document.getElementById("main").style.marginLeft= "0";
            open = 0;
            }
		}
        function closeNav() {
  			document.getElementById("mySidenav").style.width = "0";
  			document.getElementById("main").style.marginLeft= "0";
		}
    </script>
    <script>
function searchFunc() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("input");
    filter = input.value.toUpperCase();
    ul = document.getElementById("ul");
    li = ul.getElementsByTagName("li");
    ul.style.display = "block";
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
    if (filter == "") {
    	ul.style.display = "none";
    }
}
</script>
</body>
</html>