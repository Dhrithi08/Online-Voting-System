<style>
body {
	margin: 0;
	font-family: Arial, Helvetica, sans-serif;
}

.topnav {
	overflow: hidden;
	background-color: #333;
	margin-top: 0px;
	padding: 10px;
	height: 70px;
	display: flex;
	align-items: center;
	justify-content: space-between;
	width: 100%;
	margin-bottom: 20px;
}

.topnav a {
	float: left;
	color: #f2f2f2;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
	font-size: 17px;
}

.topnav a:hover {
	background-color: #ddd;
	color: black;
}

.topnav a.active {
	background-color: #04AA6D;
	color: white;
}

#para {
	color: white;
	font-weight: bolder;
	font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	font-size: 30px;
	text-align: center;
	flex-grow: 1;
	margin: 0;
}

.signup {
	float: right;
}

.signup a {
	padding: 14px 16px;
	font-size: 17px;
	text-decoration: none;
	color: #f2f2f2;
}

.signup a:hover {
	background-color: #ddd;
	color: black;
}
</style>



<div class="topnav">
	<div>
		<a href="/vsystem/index.php">Home</a>
		<a href="/vsystem/about.php">About Us</a>
		<a href="/vsystem/contact.php">Contact</a>
	</div>
	<div id="para">ONLINE VOTING SYSTEM</div>
	<div class="signup">
		<a href="/vsystem/routs/register.php">Sign Up</a>
		<a href="/vsystem/login.php">Login</a>
	</div>
</div>