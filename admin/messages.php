<?php
    session_start();
    if ($_SESSION["AdminStatus"] != 1){
        header('Location: index.php');
    }
    include "../GF.php";
    connect();

    if (isset($_POST["delete"])){
        mysql_query("delete from contact where (Id='".$_POST["delete"]."')");
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
							<li id="submenu-active"><a href="messages.php">Messages</a></li>
							<li><a href="adminaccount.php">Compte admin</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /aside -->
			<hr class="noscreen" />
			<div id="content" class="box">
				<h1>Messages</h1>
				<br/>
				<?php
                if ($_GET["show"]!=""){
                    $r=mysql_fetch_row(mysql_query("select * from contact where(id='".$_GET["show"]."')"));
                ?>
				<fieldset>
					<legend>Message</legend>
					<table class="nostyle">
						<tr><td>Date :</td><td><b><?php echo $r[1];?></b></td></tr>
						<tr><td>Titre :</td><td><b><?php echo $r[2];?></b></td></tr>
                        <tr><td>Société :</td><td><b><?php echo $r[3];?></b></td></tr>
                        <tr><td>Prénom :</td><td><b><?php echo $r[4];?></b></td></tr>
                        <tr><td>Nom :</td><td><b><?php echo $r[5];?></b></td></tr>
                        <tr><td>Rue & No° :</td><td><b><?php echo $r[6];?></b></td></tr>
                        <tr><td>Code postal :</td><td><b><?php echo $r[7];?></b></td></tr>
                        <tr><td>Localité :</td><td><b><?php echo $r[8];?></b></td></tr>
                        <tr><td>Pays :</td><td><b><?php echo $r[9];?></b></td></tr>
                        <tr><td>E-Mail :</td><td><b><?php echo $r[10];?></b></td></tr>
                        <tr><td>Téléphone :</td><td><b><?php echo $r[11];?></b></td></tr>
                        <tr><td>Remarque :</td><td><b><?php echo $r[12];?></b></td></tr>
                        <tr><td>Demande pour conseil sans engagement :</td><td><b><?php echo ($r[13]?"oui":"non");?></b></td></tr>
                        <tr><td>Envoi toutes informations avec prix :</td><td><b><?php echo ($r[14]?"oui":"non");?></b></td></tr>
                        <tr><td>Source :</td><td><b><?php echo $r[15];?></b></td></tr>
					</table>
					</br>
					<table class="nostyle">
						<tr>
							<td>
								<form method="post" action="messages.php">
									<input type="hidden" name="delete" value="<?php echo $_GET["show"];?>"/>
									<input type="submit" value="Supprimer"/>
								</form>
							</td>
						</tr>
					</table>
				</fieldset>
				<?php
                    $show=1;
                }
                if ($show != 1){
                    $q=mysql_query("select id,datesend,title,email from contact order by datesend desc");
                    if(mysql_num_rows($q)==0){?>
				<p class="msg warning">Il n'y a aucun message</p>
				<?php }else{ ?>
				<table>
					<tr>
						<th>Date</th>
                        <th>Titre</th>
						<th>E-mail</th>
					</tr>
					<?php while ($row=mysql_fetch_row($q)){?>
					<tr>
						<td><?php echo $row[1];?></td>
						<td><?php echo $row[2];?></td>
                        <td><?php echo $row[3];?></td>
						<td> <a href='messages.php?show=<?php echo $row[0];?>'>Voir message</a> </td>
						<td>
							<form method="post">
								<input type="hidden" name="delete" value="<?php echo $row[0];?>"/>
								<input type="submit" value="Supprimer"/>
							</form>
						</td>
					</tr>
					<?php } ?>
				</table>
				<?php } } ?>
			</div>
		</div>
		<hr class="noscreen" />
	</div>
</body>
</html>
