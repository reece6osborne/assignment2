<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Generic - Alpha by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="index.html">Web Server Scripting</a> by Reece Osborne</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>
								<a href="#" class="icon fa-angle-down">Layouts</a>
								<ul>
                                    <li><a href="screen.html">P2 System Checker</a></li>
									<li><a href="upload.php">P3 Image Uploader</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="elements.html">Elements</a></li>
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="login.php" class="button">Sign Up</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container">
					<header>
						<h2>Contact Details</h2>
						<p>A generic page for every non-generic situation.</p>
					</header>
					<div class="box">
                        <p>The contact details you submitted are shown below:</p>
                        <table>
                            <tr>
                                <td align="left">First name: </td>
                                <td><?php echo $_POST["firstname"]; ?></td>
                            </tr>
                            <tr>
                                <td align="left">Last name: </td>
                                <td><?php echo $_POST["lastname"]; ?></td>
                            </tr>
                            <tr>
                                <td align="left">Address line 1: </td>
                                <td><?php echo $_POST["address01"]; ?></td>
                            </tr>
                            <tr>
                                <td align="left">Address line 2: </td>
                                <td><?php echo $_POST["address02"]; ?></td>
                            </tr>
                            <tr>
                                <td align="left">Town / city: </td>
                                <td><?php echo $_POST["town"]; ?></td>
                            </tr>
                            <tr>
                                <td align="left">Post code: </td>
                                <td><?php echo $_POST["postcode"]; ?></td>
                            </tr>
                            <tr>
                                <td align="left">Telephone: </td>
                                <td><?php echo $_POST["telephone"]; ?></td>
                            </tr>
                            <tr>
                                <td align="left">E-mail: </td>
                                <td><?php echo $_POST["email"]; ?></td>
                            </tr>
                        </table>
					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>