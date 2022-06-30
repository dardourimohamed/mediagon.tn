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
    array("تفسير التكنلوجيا -", "- Explanations Mediagon technology", "- Explanations Mediagon technology"),// 18
    array("الأثر -", "- Impact", "- Impact"),// 19
    array("التركيب -", "- Montage", "- Mounting"),// 20
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
          <li><a style="color: #0282c1; font-size: 18px" href="produit.php"><?php echo $ml[1][$l];?></a></li>
          <li class="last"><a style="color: #0282c1; font-size: 20px" href="mode.php"><?php echo $ml[6][$l];?></a></li>
          <li class="last"><a style="color: #0282c1; font-size: 20px" href="avantage.php"><?php echo $ml[7][$l];?></a></li>
          <li class="last"><a style="color: #0282c1; font-size: 20px" href="protection.php"><?php echo $ml[8][$l];?></a></li>
          <li><a style="color: #0282c1" href ="protection.php"><?php echo $ml[18][$l];?></a></li>
          <li><a style="color: #0282c1" href="impact.php"><?php echo $ml[19][$l];?></a></li>
          <li><a style="color: #cc0700" href="#"><?php echo $ml[20][$l];?></a></li>
        </ul>
      </nav>    
    </aside>
<?php if($lang=="fr"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">MONTAGE SIMPLE</h1><br><br>
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: #000">La conduite ne doit pas être sectionnée. De ce fait le montage est très simple et sans poussière.</h1><br>
            <div style="float:inherit; width:450px">
                <p style="color: #000">
                    L'appareil consiste en 2 demi-coques se vissant autour de la conduite d'arrivée d'eau, au moyen de 4 vis. Le montage se fait horizontal ou vertical, près du compteur d'eau, sur une conduite droite de mini. 16 cm. de long. Appareils spéciaux de 8 cm.<br><br><br><br><br><br><br><br><br><br><br>
                </p>
            </div><br><br>
            <div style="float:inherit; width:150px">
                <img src="images/m1.jpg" alt="img">
                <p style="color: #000">
                    Montage appareil anticalcaire de Mediagon
                </p>
                <img src="images/m2.jpg" alt="img">
                <p style="color: #000">
                    Montage appareil anticalcaire de Mediagon
                </p>
            </div><br><br>
        </div>
    <?php }elseif($lang=="en"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">SIMPLE INSTALLATION</h1><br><br>
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: #000">Conduct should not be cut. Thus the assembly is very simple and free of dust.</h1><br>
            <div style="float:inherit; width:450px">
                <p style="color: #000">
                    The apparatus consists of two half-shells are screwed around the water supply line by means of 4 screws. Installation is horizontal or vertical, near the water meter, a straight pipe quick. 16 cm. long. Special equipment 8 cm.<br><br><br><br><br><br><br><br><br><br><br>
                </p>
            </div><br><br>
            <div style="float:inherit; width:150px">
                <img src="images/m1.jpg" alt="img">
                <p style="color: #000">
                    Mounting device anti limestone Mediagon
                </p>
                <img src="images/m2.jpg" alt="img">
                <p style="color: #000">
                    Mounting device anti limestone Mediagon
                </p>
            </div><br><br>
        </div>
    <?php }elseif($lang=="ar"){?>
        <div style="display: block; width:630px; float: right; text-align: right" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">بساطة التركيب</h1><br><br>
            <h1 style="font-size: 17px; margin: 0px 0px 0px 0px; color: #000">بسيطة جدا وخالية من الغبار</h1><br>
            <div style="float:inherit; width:300px">
                <img src="images/m1.jpg" alt="img">
            </div>
            <div style="float:inherit; width:300px">
                <img src="images/m2.jpg" alt="img">
                <br><br><br><br><br><br><br><br>
            </div><br><br><br><br><br><br><br><br>
        </div><br><br><br><br><br><br><br><br>
    <?php }?>
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>