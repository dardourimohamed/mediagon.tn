<?php
    session_start();
    if ($_SESSION["AdminStatus"] != 1){
        header('Location: index.php');
    }
    include "../GF.php";
    connect();
    if (isset($_POST["save"])){
        mysql_query("delete from admin");
        mysql_query("insert into admin (username,password) values('".$_POST["name"]."','".$_POST["Password"]."')");
        header('Location: index.php');
    }
?>
<html>
	<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en" />
	<meta name="robots" content="noindex,nofollow" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/reset.css" />
	<!-- RESET -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/main.css" />
	<!-- MAIN STYLE SHEET -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/2col.css" title="2col" />
	<!-- DEFAULT: 2 COLUMNS -->
	<link rel="alternate stylesheet" media="screen,projection" type="text/css" href="css/1col.css" title="1col" />
	<!-- ALTERNATE: 1 COLUMN -->
	<!--[if lte IE 6]><link rel="stylesheet" media="screen,projection" type="text/css" href="css/main-ie6.css" /><![endif]--><!-- MSIE6 -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/style.css" />
	<!-- GRAPHIC THEME -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="css/mystyle.css" />
	<!-- WRITE YOUR CSS CODE HERE -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/switcher.js"></script>
	<script type="text/javascript" src="js/toggle.js"></script>
	<script type="text/javascript" src="js/ui.core.js"></script>
	<script type="text/javascript" src="js/ui.tabs.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$(".tabs > ul").tabs();
	});
	</script>
	<title>Mediagon administration</title>
	</head>
	<body>
	<div id="main">
		<div id="tray" class="box">
			<p class="f-left box"> <span class="f-left" id="switcher"> <a href="#" rel="1col" class="styleswitch ico-col1" title="Display one column"><img src="design/switcher-1col.gif" alt="1 Column" /></a> <a href="#" rel="2col" class="styleswitch ico-col2" title="Display two columns"><img src="design/switcher-2col.gif" alt="2 Columns" /></a> </span> </p>
			<form method="post" action="index.php" name="disconnectform">
				<p class="f-right"> <strong> <a href="../">Aller au site</a> </strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong> <a href="javascript:document.disconnectform.submit();" id="logout">Se d&eacute;connecter</a>
					<input type="hidden" name="disconnect" value="1"/>
					</strong> </p>
			</form>
		</div>
		<hr class="noscreen" />
		<div id="cols" class="box">
			<div id="aside" class="box">
				<div class="padding box">
					<p id="logo"><a><img src="tmp/logo.gif" alt="logo" /></a></p>
				</div>
				<ul class="box">
					<li><a style="font-size: 130%">Site</a>
						<ul>
							<li><a href="messages.php">Messages</a></li>
							<li id="submenu-active"><a href="adminaccount.php">Compte admin</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /aside -->
			<hr class="noscreen" />
			<div id="content" class="box">
				<h1>Compte administrateur</h1>
				<br/>
                <?php $Admin = mysql_fetch_row(mysql_query("select username from admin"));?>
                <script type="text/javascript">
                    function validateForm() {
                        var pw = document.forms["adminedit"]["Password"].value;
                        var cp = document.forms["adminedit"]["ConfirmPassword"].value;
                        var na = document.forms["adminedit"]["name"].value;
                        if(na==""){
                            alert("Le nom d'utilisateur ne doit pas être vide");
                            return false;
                        }else if(pw==""){
                            alert("Le mot de passe ne doit pas être vide");
                            return false;
                        }else if (pw != cp) {
                            alert("Confirmation mot de passe incorrecte");
                            return false;
                        }
                    }
                </script>
				<form method="post" name="adminedit" onsubmit="return validateForm()">
					<fieldset>
						<table class="nostyle">
							<tr>
								<td style="width:70px;">Nom d'utilisateur :</td>
								<td>
									<input type="text" size="40" name="name" class="input-text" value="<?php echo $Admin[0];?>" />
								</td>
							</tr>
                            <tr>
								<td>Nouveau mot de passe :</td>
								<td>
									<input type="password" size="40" name="Password" class="input-text" value="" />
								</td>
							</tr>
                            <tr>
								<td>Confirmation mot de passe :</td>
								<td>
									<input type="password" size="40" name="ConfirmPassword" class="input-text" value="" />
								</td>
							</tr>
							<tr>
								<td colspan="2" class="t-right">
									<input type="hidden" name="save" value="save"/>
									<input type="submit" class="input-submit" value="Enregistrer" />
									<a href="index.php">Annuler</a></td>
							</tr>
						</table>
					</fieldset>
				</form>
			</div>
		</div>
		<hr class="noscreen" />
	</div>
</body>
</html>