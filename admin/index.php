<?php
    include '../GF.php';
    session_start();
    if (isset($_POST["username"])){
        connect();
        if ( mysql_num_rows(mysql_query("select * from admin where (username='".$_POST["username"]."') and (password='".$_POST["password"]."')")) > 0 ){
            $_SESSION["AdminStatus"] = 1;
            goto menu;
        }else{
            $error = 1;
            $_SESSION["AdminStatus"] = 0;
            session_destroy();
        }
        disconnect();
    }elseif(isset($_POST["disconnect"])){
        $_SESSION["AdminStatus"] = 0;
        session_destroy();
    }elseif ($_SESSION["AdminStatus"] == 1){
        goto menu;
    }
?>
<html>
<head>
<title>Mediagon Administration</title>
<link rel="stylesheet" type="text/css" href="css/Loginstyle.css" />
</head>
<body>
<div class="wrapper">
	<div class="content">
		<div id="form_wrapper" class="form_wrapper">
			<form class="login active" method="post">
				<h3>Administrateur</h3>
				<div>
					<label>Nom d'utilisateur :</label>
					<input type="text" name="username" />
				</div>
				<div>
					<label>Mot de passe: </label>
					<input type="password" name="password" />
				</div>
				<div class="bottom">
					<?php if($error==1){echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;Nom utilisateur ou mot de passe incorrect.</p>";}?>
					<input type="submit" value="Se connecter">
					</input>
					<div class="clear"></div>
				</div>
			</form>
		</div>
		<div class="clear"></div>
	</div>
</div>
</body>
</html>
<?php goto endpage; menu:?>
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
			<form method="post" name="disconnectform">
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
							<li><a href="adminaccount.php">Compte admin</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /aside -->
			<hr class="noscreen" />
		</div>
		<hr class="noscreen" />
	</div>
</body>
</html>
<?php endpage: ?>