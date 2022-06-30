<?php
    ob_start();
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
    array("نوع المنتج" , "Type de produits", "Products type"),// 1
    array("D نوع -", "- type D", "- type D"),// 2
    array("Z نوع -", "- type Z", "- type Z"),// 3
    array("I نوع -", "- type I", "- type I"),// 4
    array("P نوع -", "- type P", "- type P"),// 5
    array("طريقة العمل", "Mode de fonctionnement", "Function Mode"),// 6
    array("الفوائد", "Avantages", "Advantage"),// 7
    array("حماية من الصدأ والجير", "Protection calcaire et anti rouille", "Limestone and anti rust protection"),// 8
    array("مثالية لمنزل متكون من عائلة أو إثنين", "Ideal pour maison a 1 ou 2 familles", "Ideal for house for 1 or 2 families"),// 9
    array("تقديم", "PROSPECTUS", "Prospectus"),// 10
    array("الوثائق", "DOCUMENTS","Documents"),// 11
    array("ISO (de)", "ISO (de)", "ISO (de)"),// 12
    array("TÜV (de)", "TÜV (de)", "TÜV (de)"),// 13
    array("SWISS Made (de)", "SWISS Made (de)", "SWISS Made (de)"),// 14
    array("مثالية لمنزل متكون من عائلة أو إثنين التي لا تحتوي على أماكن كثيرة", "Idéal pour maison à 1 ou 2 familles, dont les conduites ne comportent pas assez de place","Ideal home for 1 or 2 families whose lines do not have enough space"),// 15
    array("مثالية للمباني الصناعية", "Idéal pour bâtiments industriels","Ideal for industrial buildings"),// 16
    array("مثالية للمباني التجارية", "Idéal pour bâtiments commerciaux","Ideal for commercial buildings"),// 17
    );
?>

<script type="text/javascript">
        $imgname = 0;
        onload = setInterval(function changeimage() {
            if ($imgname < 3) {
                $imgname = $imgname + 1;
            }
            else {
                $imgname = 1;
            }
            document.getElementById("img").src = "images/p" + $imgname + ".jpg";
        }, 3000);
    </script>

    <?php if(($lang=="fr") || ($lang=="en")){?>
        <aside style="float: left; text-align: left" id="left_column">
    <?php }else{?>
            <aside style="float: right; text-align: right" id="left_column">
    <?php }?>
         
      <nav>
        <ul>
          <li><a style="color: #cc0700; font-size: 20px" href="produit.php"><?php echo $ml[1][$l];?></a></li>
          <li><a style="color: #cc0700" href ="typed.php"><?php echo $ml[2][$l];?></a></li>
          <li><a style="color: #cc0700" href="typez.php"><?php echo $ml[3][$l];?></a></li>
          <li><a style="color: #cc0700" href="typei.php"><?php echo $ml[4][$l];?></a></li>
          <li><a style="color: #cc0700" href="typep.php"><?php echo $ml[5][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 20px" href="mode.php"><?php echo $ml[6][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 20px" href="avantage.php"><?php echo $ml[7][$l];?></a></li>
        </ul>
      </nav>    
    </aside>

    <?php if($lang=="fr"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 15px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"><?php echo $ml[4][$l];?></h1>
            <div style="float:inherit; width:450px">
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 15px"><?php echo $ml[16][$l];?></h2><br>
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 11px">
                    La technologie Mediagon protège les installations aquifères, les raccords, les machines et les aérateurs, favorise le bien-être et protège l'environnement.
                    <br><br>Nous ne voulons que des clients satisfaits. Notre philosophie: seulement acheter après essai personel et satisfaisant.
                    <br><br>Afin de garantir un test gratuit, nous vous soumettons une offre sur place, cette clarification est gratuite pour vous.<br><br>
                </h2>
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 15px">intéressé?</h2>
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 12px">Contactez-nous: +216 73349902,+216 73349903 ou remplissez le formulaire de test gratuit.</h2><br><br><br>
            </div>
            <div style="float:inherit; width:150px">
                <img style="float:inherit; padding: 10px" src="images/RTEmagicC_typ_I_04.jpg.jpg" alt="Image">
                <h1 style="font-size: 15px; margin: 0px 0px 0px 5px; color: rgb(195, 7, 1)">Documents :</h1><br>
                <a style="float:inherit; margin-left : 5px; font-size: 11px" href ="typei.pdf">Données techniques type I</a>
            </div>
        </div>
    <?php }elseif($lang=="en"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 15px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"><?php echo $ml[4][$l];?></h1>
            <div style="float:inherit; width:450px">
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 15px"><?php echo $ml[16][$l];?></h2><br>
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 11px">
                    The Mediagon technology protects aquifers installations, fittings, machines and ventilators, promotes well-being and protects the environment.
                    <br><br>We want satisfied customers. Our philosophy: buy only after personel and satisfactory test.
                    <br><br>To ensure a free test, we make you an offer on the spot, this clarification is free for you.<br><br>
                </h2>
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 15px">interested?</h2>
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 12px">Contact us: +216 73349902,+216 73349903 or fill in the form of free test.</h2><br><br><br>
            </div>
            <div style="float:inherit; width:150px">
                <img style="float:inherit; padding: 10px" src="images/RTEmagicC_typ_I_04.jpg.jpg" alt="Image">
                <h1 style="font-size: 15px; margin: 0px 0px 0px 5px; color: rgb(195, 7, 1)">Documents :</h1><br>
                <a style="float:inherit; margin-left : 5px; font-size: 11px" href ="typei.pdf">Technical data Type I</a>
            </div>
        </div>
    <?php }else{?>
          <div style="display: block; width:630px; float: right; text-align: right" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"><?php echo $ml[4][$l];?></h1>
            <div style="float:inherit; width:450px">
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 16px"><?php echo $ml[16][$l];?></h2><br>
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 15px">
<br>التكنولوجيا مداغون مناسبة لجميع المنشآت الصناعية التي تستخدم المياه في نظام التبريد أو الماء كمورد للطاقة.  استخدام مداغون في الصناعية يخفض تكاليف الصيانة، وبالتالي له المزايا التالية<br><br>
زيادة سلامة الانتاج♦<br>
تبديد الحرارة موحدة♦<br>
انخفاض الصيانة انقطاع♦<br>
تحسين نقل الحرارة♦<br>
توفير الطاقة♦<br>
تخفيض تكاليف الصيانة والتحكم♦<br>
                </h2><br><br>
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 16px">مهتم؟</h2><br>
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 13px">للاتصال بنا: +216 73349902,+216 73349903</h2><br><br><br>
            </div>
            <div style="float:inherit; width:150px">
                <img style="float:inherit; padding: 10px" src="images/RTEmagicC_typ_I_04.jpg.jpg" alt="Image">
                <h1 style="font-size: 17px; margin: 0px 0px 0px 5px; color: rgb(195, 7, 1)">الوثائق</h1><br>
                <a style="float:inherit; margin-left : 5px; font-size: 15px" href ="typei.pdf">البيانات التقنية</a>
            </div>
          </div>
    <?php }?>
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>