<!DOCTYPE HTML>
<!-- Anthony Krivonos -->
<html>
	<head>
		<title>Vingt-Deux Men</title>
		<link type="text/css" rel = "stylesheet" href="men.css"/>
		<script src="store.js"></script>
	</head>
	<body onload = "initialize();">
		<a  class="shopnow"  onclick="logIn(ON);">Cart: __<span id="cartcount"></span> &diams; Sh&ocirc;p N&ocirc;w</a>
		<div class="sideborder"></div>
		<h1 id="login" class="login">
			<p>Login</p>
			<div class="b1">Us&ecircrn&agraveme:</div>
			<div class="b2"><input type="text" name = "username" style="width: 134px;"placeholder= "Alexander_Wang"/></div>
			<div class="b1">P&acircssw&ograverd:</div>
			<div class="b2"><input type="password" name = "pass" style="width: 140px;" placeholder= "I.Am.So.Jealous"/></div>
			<input type="submit" value="Enter" onclick="logIn(OFF);"/>
			<a href="info.php"><button class="register">Register</button></a>
		</h1>
		<h1 id="errordisplay" class="error">
			<div class="b1">S&ograverry!</div>
			<div class="b2">We are sorry, but due to limited availability, we limit customers to only 20 items in their carts.</div>
			<button onclick ="cartError.style.display = 'none';">Ok&acircy.</button>
		</h1>
		<div class="items">
			<div class="itemtitle">T&ocirc;ps</div>
				<div onclick="roll('men', 0);" class="subitem">"The Sh&icirc;rt"</div>
				<div onclick="roll('men', 1);" class="subitem">Sh&acirc;rk</div>
				<div onclick="roll('men', 2);" class="subitem">Unc&ocircmf&ocircrt&agravebl&egrave Purpl&egrave Sh&icirc;rt</div>
			<div class="itemtitle">B&ocirc;tt&ocirc;ms</div>
				<div onclick="roll('men', 3);" class="subitem">M&egrave;rc&egrave;rs</div>
				<div onclick="roll('men', 4);" class="subitem">B&ocircr&igrave;ng Sh&ocircrts</div>
				<div onclick="roll('men', 5);" class="subitem">Fun Sh&ocircrts</div>
			<div class="itemtitle">L&egrave;fts</div>
				<div onclick="roll('men', 6);" class="subitem">&Ogravene Gl&ograveve L</div>
				<div onclick="roll('men', 7);" class="subitem">H&acirc;nd L</div>
				<div onclick="roll('men', 8);" class="subitem">B&acircnd&acircnn&acirc</div>
			<div class="itemtitle">R&igrave;ghts</div>
				<div onclick="roll('men', 9);" class="subitem">&Ogravene Gl&ograveve R</div>
				<div onclick="roll('men', 10);" class="subitem">H&acirc;nd R</div>
				<div onclick="roll('men', 11);" class="subitem">S&ograveck</div>
			<div class="itemtitle">V&egrave;ry T&ocirc;ps</div>
				<div onclick="roll('men', 12);" class="subitem">H&agrave;t</div>
				<div onclick="roll('men', 13);" class="subitem">H&agrave;tt</div>
				<div onclick="roll('men', 14);" class="subitem">H&agrave;ttt</div>
			<div class="itemtitle">V&egrave;ry B&ocirc;tt&ocirc;ms</div>
				<div onclick="roll('men', 15);" class="subitem">Cr&ocirc;cs</div>
				<div onclick="roll('men', 16);" class="subitem">M&acirc;rgiela Sh&ocirc;&egrave;s</div>
				<div onclick="roll('men', 17);" class="subitem">B&acirc;lenc&icirc;&acirc;g&acirc; Sh&ocirc;&egrave;s</div>
		</div>
		<img id="strtImg" class="strtimg" src="images/sassyfrassy.jpg" onclick="this.src = 'images/hipstereffect/' + (Math.floor((Math.random() * 8) + 1)) + '.jpg';"/>
		<div id="info" class="info">
			<div id="infnme" class="infname">Crocs</div>
			<img id="infimg" class="infimage" src="images/sc1.jpg"/>
			<div id="infdsc" class="infdesc">These are no ordinary shoes: they are made with state-of-the-art scissors and leftover plastic from toy containers!</div>
			<div id="infid" class="infident"></div>
			<div class="itemobj">
				<input id="count" type="text" placeholder="00"/>
				<select id = "sizebox" size = "1">
				</select>
				<button onclick="roll(ON)"/>Add to Cart</button>
			</div>
		</div>
		<img class="bgman" src="images/runningman.png"/>
		<nav>
			<ul>
				<li><a  class="titleitem" href="index.php">V&icircngt-D&egrave;ux M&egraven</a>
					<ul>
						<li><a href="women.php">W&ocirc;men</a></li>
						<li><a href="blog.php">Bl&ocirc;g</a></li>
						<li><a href="info.php">Inf&ocirc;</a></li>
						<li class = "miniitem" onclick="logIn(ON);"><a>L&ocirc;g&icirc;n / R&egrave;gster</li>
					</ul>
				</li>
			</ul>
		</nav>
	</body>
</html>