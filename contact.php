<?php
    ob_start();
    include 'GF.php';
    connect();

    $lang="";
    if(isset($_COOKIE["lang"])){$lang=$_COOKIE["lang"];}
    else{$lang="ar";}

    $l=0;
    switch($lang){
        case "ar":$l=0;break;
        case "fr":$l=1;break;
        case "en":$l=2;break;
    };
    $ml = array(
    array("مهد", "mahd","mahd"),// 0
    array("الاتصال" , "CONTACT", "Contact"),// 1
    array("الموظوع", "Titre", "Title"),// 2
    array("الشركة", "Société", "Company"),// 3
    array("اللقب*", "Prénom*", "Last Name*"),// 4
    array("الاسم*", "Nom*", "Name*"),// 5
    array("الشارع و الرقم *", "Rue et No*", "Street"),// 6
    array("الترقيم البريدي *", "Code postal*", "Postcode*"),// 7
    array("المدينة *", "Localité*", "Location"),// 8
    array("الدولة", "Pays", "Country"),// 9
    array("البريد الإلكتروني *", "E-Mail*", "E-Mail*"),// 10
    array("الهاتف *", "Téléphone*", "Phone*"),// 11
    array("الملاحظات *", "Remarque*", "Note"),// 12
    array("الرجاء الاختيار", "Prière de sélectionner", "Please select"),// 13
    array("الإتصال بي للإستعلام دون إلتزام", "Appelez-moi pour un conseil sans engagement", "Call me for advice without obligation"),// 14
    array("أرسل لي جميع المعلومات مع السعر", "Envoyez-moi toutes informations avec prix", "Send me all information with price"),// 15
    array("العنوان", "ADRESSE", "Address"),// 16
    array("فريق العمل", "Notre team", "Our Team"),// 17
    array("الموقع", "Situation", "Situation"),// 18
    array("فلسفتنا", "Notre philosophie", "Our philosophy"),// 19
    array("البحث والتطوير", "Recherche et développement", "Search and development"),// 20
    array("ترقية الموظفين", "Promotion du personnel", "Promotion of staff"),// 21
    array("مداغون معالجة المياه", "MEDIAGON Traitement de l'eau", "Mediagon Water Treatment"),// 22
    array("حي النزهة شارع البيئة 4060، القلعة الكبرى سوسة<br><br>الهاتف : 00216 98404351 / 00216 50404351 / 00216 55405354", "Cite Nozha Boulevard de l'environnement 4060, Kalaa Kebira, Sousse, Tunisie. <br><br>Tel: 00216 98404351 / 00216 50404351 / 00216 55405354", "Neighborhood Nozha Avenue of the envirement 4060, Kalaa Kebira, Sûsah, Tunisia.<br><br>Phone : 00216 98404351 / 00216 50404351 / 00216 55405354"),// 23
    array("ساعات العمل", "Horaire d'ouverture", "Opening hours"),// 24
    array("الاثنين - السبت", "Lundi - Samedi", "Monday - Saturday"),// 25
    array("08:00 - 12:00<br>13:00 - 17:00", "08:00 - 12:00<br>13:00 - 17:00", "08:00 - 12:00<br>13:00 - 17:00"),// 26
    array("؟ MEDIAGON كيف / أين وجدت", "Où / Comment avez vous trouvé MEDIAGON ?", "Where / How did you find MEDIAGON ?"),// 27
    array("في معرض / عداد", "Lors une foire / comptoir","At a fair / counter"),// 28
    array("جار / صديق", "Voisin / ami", "Neighbor / friend"),// 29
    array("إعلان", "Publicité", "Advertising"),// 30
    array("بحث في الإنترنت", "Recherche sur Internet", "Search the Internet"),// 31
    array("مكالمة هاتفية", "Appel téléphonique", "Telephone call"),// 32
    array("الاتصال المباشر", "Contact direct", "Direct contact"),// 33
    array("إرسال", "Envoyer", "Send"),// 34
    array("في معرض / عداد*", "Lors une foire / comptoir", "At a fair / counter"),// 35
    array("شكرا لقد تمّ إرسال البيانات", "Merci, votre message a été envoyé avec succès", "Thank you, your message was sent successfully."),// 36
    );
?>

    <?php if(($lang=="fr") || ($lang=="en")){?>
        <aside style="float: left; text-align: left" id="left_column">
    <?php }else{?>
            <aside style="float: right; text-align: right" id="left_column">
    <?php }?>
      <nav>
        <ul>
            <li class="last"><a style="color: #0282c1; font-size: 18px" href="team.php"><?php echo $ml[17][$l];?></a></li>
            <li><a style="color: #cc0700; font-size: 20px" href="#"><?php echo $ml[1][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 18px" href="situation.php"><?php echo $ml[18][$l];?></a></li>
            <li><a style="color: #0282c1; font-size: 18px" href="philo.php"><?php echo $ml[19][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 18px" href="dev.php"><?php echo $ml[20][$l];?></a></li>
            <li><a style="color: #0282c1; font-size: 18px" href="prmo.php"><?php echo $ml[21][$l];?></a></li>
        </ul>
      </nav>
    </aside>

    <?php
        if (isset($_POST["titre"])){

          mysql_query("insert into contact values('".newguid()."',NOW(),'".$_POST["titre"]."','".$_POST["societe"]."','".$_POST["prenom"]."','".$_POST["nom"]."','".$_POST["rue"]."','".$_POST["codepostal"]."','".$_POST["local"]."','".$_POST["pays"]."','".$_POST["mail"]."','".$_POST["tel"]."','".$_POST["remarque"]."','".$_POST["choix1"]."','".$_POST["choix2"]."','".$_POST["source"]."')") or die(mysql_error());

          require 'PHPMailer/PHPMailerAutoload.php';

          $mail = new PHPMailer;

          //$mail->SMTPDebug = 3;

          $mail->isSMTP();
          $mail->Host = 'SSL0.OVH.NET';
          $mail->SMTPAuth = true;
          $mail->Username = 'noreply@mediagon.tn';
          $mail->Password = 'Med81753649365';
          $mail->SMTPSecure = 'ssl';
          $mail->Port = 465;

          $mail->From = 'noreply@mediagon.tn';
          $mail->FromName = 'mediagon.tn';
          $mail->addAddress('contact@mediagon.tn');
          $mail->addReplyTo($_POST["mail"]);
          $mail->addCC($_POST["mail"]);

          $mail->CharSet = 'UTF-8';
          $mail->isHTML(true);

          $mail->Subject = 'Message depuis mediagon.tn';

          $msg = "Titre : <b>".$_POST["titre"]."</b><br>";
          $msg .= "Société : <b>".$_POST["societe"]."</b><br>";
          $msg .= "Prénom : <b>".$_POST["prenom"]."</b><br>";
          $msg .= "Nom : <b>".$_POST["nom"]."</b><br>";
          $msg .= "Rue & No° : <b>".$_POST["rue"]."</b><br>";
          $msg .= "Code : <b>".$_POST["codepostal"]."</b><br>";
          $msg .= "Localité : <b>".$_POST["local"]."</b><br>";
          $msg .= "Pays : <b>".$_POST["pays"]."</b><br>";
          $msg .= "E-mail : <b>".$_POST["mail"]."</b><br>";
          $msg .= "Téléphone : <b>".$_POST["tel"]."</b><br>";
          $msg .= "Remarque : <b>".$_POST["remarque"]."</b><br>";
          $msg .= "Demande pour conseil sans engagement : <b>".($_POST["choix1"]?"oui": "non")."</b><br>";
          $msg .= "Envoi toutes informations avec prix : <b>".($_POST["choix2"]?"oui": "non")."</b><br>";
          $msg .= "Source : <b>".$_POST["source"]."</b>";

          $mail->Body = $msg;

          $msg = "Titre :".$_POST["titre"]."\n";
          $msg .= "Société :".$_POST["societe"]."\n";
          $msg .= "Prénom : ".$_POST["prenom"]."\n";
          $msg .= "Nom : ".$_POST["nom"]."\n";
          $msg .= "Rue & No° : ".$_POST["rue"]."\n";
          $msg .= "Code : ".$_POST["codepostal"]."\n";
          $msg .= "Local : ".$_POST["local"]."\n";
          $msg .= "Pays : ".$_POST["pays"]."\n";
          $msg .= "E-mail : ".$_POST["mail"]."\n";
          $msg .= "Téléphone : ".$_POST["tel"]."\n";
          $msg .= "Remarque : ".$_POST["remarque"]."\n";
          $msg .= "Demande pour conseil sans engagement : ".$_POST["choix1"]."\n";
          $msg .= "Envoi toutes informations avec prix : ".$_POST["choix2"]."\n";
          $msg .= "Source : ".$_POST["source"];

          $mail->AltBody = $msg;

          $mail->send();

            if(($lang=="fr") || ($lang=="en")){
                ?><div style="display: block; width:630px; float: left; text-align: left" ><?php
            }else{
                ?><div style="display: block; width:630px; float: right; text-align: right" ><?php
            }
            ?>
            <img id="img" width=100% style="padding: 10px" src="images/contact.jpg" alt="Image">
                <?php if(($lang=="fr") || ($lang=="en")){?>
                    <div style="display: block; width:450px; float: left; text-align: left" >
                <?php }else{?>
                    <div style="display: block; width:450px; float: right; text-align: right" >
                <?php }?>
                <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(0, 152, 68)"><?php echo $ml[36][$l];?></h1>
            <div style="height: 600px;float:inherit; width:450px"></div>
            </div>
                        </div>
            <?php
        }else{
    ?>
        <form method="post">
    <?php if(($lang=="fr") || ($lang=="en")){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
    <?php }else{?>
            <div style="display: block; width:630px; float: right; text-align: right" >
    <?php }?>
                <img id="img" width=100% style="padding: 10px" src="images/contact.jpg" alt="Image">
                <?php if(($lang=="fr") || ($lang=="en")){?>
                    <div style="display: block; width:450px; float: left; text-align: left" >
                <?php }else{?>
                    <div style="display: block; width:450px; float: right; text-align: right" >
                <?php }?>
        <div style="float:inherit; width:450px">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">
                <?php echo $ml[1][$l];?>
            </h1>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[2][$l];?></h2>
            <input type="text" name="titre" style="width: 400px"/>
        </div>
        <div style="float:inherit; width:450px">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[3][$l];?></h2>
            <input type="text" name="societe" style="width: 400px"/>
        </div>
        <div style="float:inherit; width:450px">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[4][$l];?></h2>
            <input type="text" name="prenom" style="width: 400px"/>
        </div>
        <div style="float:inherit; width:450px">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[5][$l];?></h2>
            <input type="text" name="nom" style="width: 400px"/>
        </div>
        <div style="float:inherit; width:450px">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[6][$l];?></h2>
            <input type="text" name="rue" style="width: 400px"/>
        </div>
        <div style="float:inherit; width:450px">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[7][$l];?></h2>
            <input type="text" name="codepostal" style="width: 400px"/>
        </div>
        <div style="float:inherit; width:450px">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[8][$l];?></h2>
            <input type="text" name="local" style="width: 400px"/>
        </div>
        <div style="float:inherit; width:450px">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[9][$l];?></h2>
            <input type="text" name="pays" style="width: 400px"/>
        </div>
        <div style="float:inherit; width:450px">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[10][$l];?></h2>
            <input type="text" name="mail" style="width: 400px"/>
        </div>
        <div style="float:inherit; width:450px">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[11][$l];?></h2>
            <input type="text" name="tel" style="width: 400px"/>
        </div>
        <div style="float:inherit; width:450px">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[12][$l];?></h2>
            <textarea  name="remarque" style="width: 400px"></textarea>
        </div>
        <div style="float:inherit; width:450px">
            <br><h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[13][$l];?></h2><br>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[14][$l];?></h2>
            <input type="checkbox" name="choix1" style="width: 400px"/><br>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[15][$l];?></h2>
            <input type="checkbox" name="choix2" style="width: 400px"/><br>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[27][$l];?></h2>
            <select name="source" style="width: 400px">
                <option value="">- - -</option>
                <option value="<?php echo $ml[28][$l];?>"><?php echo $ml[28][$l];?></option>
                <option value="<?php echo $ml[28][$l];?>"><?php echo $ml[29][$l];?></option>
                <option value="<?php echo $ml[28][$l];?>"><?php echo $ml[30][$l];?></option>
                <option value="<?php echo $ml[28][$l];?>"><?php echo $ml[31][$l];?></option>
                <option value="<?php echo $ml[28][$l];?>"><?php echo $ml[32][$l];?></option>
                <option value="<?php echo $ml[28][$l];?>"><?php echo $ml[33][$l];?></option>
            </select>
            <br><br>
            <input type="submit" value=<?php echo $ml[34][$l];?>/>
        </div>
      </div>
    </form>


                <?php if(($lang=="fr") || ($lang=="en")){?>
                    <div style="float:left; width:150px">
                <?php }else{?>
                    <div style="float:right; width:150px">
                <?php }?>
                        <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"> <?php echo $ml[16][$l];?></h1><br>
                        <h1 style="font-size: 15px; margin: 0px 0px 0px 0px; color: #000">
                            <?php echo $ml[22][$l];?>
                        </h1>
                        <br>
                        <h1 style="font-size: 12px; margin: 0px 0px 0px 0px; color: #000">
                            <?php echo $ml[23][$l];?>
                        </h1>
                        <br><br><br><br>
                        <h1 style="font-size: 15px; margin: 0px 0px 0px 0px; color: #000">
                            <?php echo $ml[24][$l];?>
                        </h1>
                        <br>
                        <h1 style="font-size: 12px; margin: 0px 0px 0px 0px; color: #000">
                            <?php echo $ml[25][$l];?>
                        </h1>
                        <h1 style="font-size: 11px; margin: 0px 0px 0px 0px; color: #000">
                            <?php echo $ml[26][$l];?>
                        </h1>
                    </div>
            </div>
                <?php }?>

<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>
