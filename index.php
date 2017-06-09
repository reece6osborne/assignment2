<?php
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $conn = @mysql_connect ( "mysql.hostinger.co.uk", "u696084782_wstat", "webstats1") or die (mysql_error());
    $rs = @mysql_select_db ( "u696084782_wstat", $conn ) or die (mysql_error());
    $sql = "INSERT INTO stats(ip,browser,ondate)
    VALUES('$ip', '$browser', now())";
    $rs = mysql_query( $sql, $conn ) or die (mysql_error());
?>

<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Alpha by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="index.php">Web Server Scripting</a> by Reece Osborne</h1>
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

			<!-- Banner -->
				<section id="banner">
					<h2>Web Server Scripting</h2>
					<p>Another fine responsive site template freebie by HTML5 UP.</p>
					<ul class="actions">
						<li><a href="screen.html" class="button special">System Checker</a></li>
					</ul>
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						<header class="major">
							<h1>Contact Details</h1>
                            <p>Please enter your contact details:</p>
                            <form action="save_contact_details.php" method="post">
                                <table>
                                    <tr>
                                        <td align="right">First name: </td>
                                        <td>
                                            <input size="20" type="text" size="20" maxlength="15" name="firstname">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">Last name: </td>
                                        <td><input size="20" type="text" size="20" maxlength="15" name="lastname"></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Address line 1: </td>
                                        <td><input size="30" type="text" size="60" maxlength="50" name="address01"></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Address line 2: </td>
                                        <td><input size="30" type="text" size="60" maxlength="50" name="address02"></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Town / city: </td>
                                        <td><input size="20" type="text" size="25" maxlength="20" name="town"></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Post code: </td>
                                        <td><input size="10" type="text" size="12" maxlength="10" name="postcode"></td>
                                    </tr>
                                    <tr>
                                        <td align="right">Telephone: </td>
                                        <td><input size="15" type="text" size="20" maxlength="15"
                                        name="telephone"></td>
                                    </tr>
                                    <tr>
                                        <td align="right">E-mail: </td>
                                        <td><input size="50" type="text" size="60" maxlength="50" name="email"></td>
                                    </tr>
                                    <tr>
                                        <td> </td>
                                        <td colspan="2" align="left"><input type="submit" value="Submit"></td>
                                    </tr>
                                </table>
                            </form>
						</header>
						<span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
					</section>

					<section class="box special features">
						<div class="features-row">
							<section>
								<span class="icon major fa-bolt accent2"></span>
								<h3>Upload Image</h3>
                                    <form action="upload.php" method="post" enctype="multipart/form-data">
                                        <table>
                                            <tr>
                                                <td>
                                                    Filename:
                                                </td>
                                                <td>
                                                    <input type="file" name="file" id="file">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" align="right">
                                                    <input type="submit" name="submit" value="Submit">
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
							</section>
							<section>
								<span class="icon major fa-area-chart accent3"></span> 
                                <h1>Guest Book</h1>
                                <p>Please enter your name and message:</p>
                                <form action="guestbook.php" method="post">
                                    <table>
                                        <tr>
                                            <td align="left">Name: </td>
                                            <td><input type="text" size="20" maxlength="30" name="name"></td>
                                        </tr>
                                        <tr>
                                            <td align="left" valign="top">Message: </td>
                                            <td><textarea rows="6" cols="40" name="message"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><p><a href="display_messages.php" class="button">Display messages</a></p></td>
                                            <td colspan="2" align="right"><input type="submit" value="Leave message"></td>
                                        </tr>
                                    </table>
                                </form>
							</section>
						</div>
						<div class="features-row">
							<section>
								<span class="icon major fa-cloud accent4"></span>
								<h3>Error Logs</h3>
								<p>Errors that have occured on the site.</p>
                                <p>
                                    <a class="button" align="left" href="error_4.php">Create Error</a>
                                    <a class="button" align="right" href="logs.php">Logs</a> 
                                </p>
							</section>
							<section>
								<span class="icon major fa-lock accent5"></span>
								<h3>Statistics</h3>
                                <p>Previous visitor details to the site.</p>
                                <p><a class="button" href="stats.php">Stats</a></p>
							</section>
						</div>
					</section>
				</section>

			<!-- CTA -->
				<section id="cta">
					<h2>Sign up for beta access</h2>
					<form>
						<div class="row uniform 50%">
							<div class="8u 12u(mobilep)">
								<input type="email" name="email" id="email" placeholder="Email Address" />
							</div>
							<div class="4u 12u(mobilep)">
								<input type="submit" value="Sign Up" class="fit" />
							</div>
						</div>
					</form>

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