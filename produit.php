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
          <li><a style="color: #cc0700; font-size: 18px" href="#"><?php echo $ml[1][$l];?></a></li>
          <li><a style="color: #cc0700" href ="typed.php"><?php echo $ml[2][$l];?></a></li>
          <li><a style="color: #cc0700" href="typez.php"><?php echo $ml[3][$l];?></a></li>
          <li><a style="color: #cc0700" href="typei.php"><?php echo $ml[4][$l];?></a></li>
          <li><a style="color: #cc0700" href="typep.php"><?php echo $ml[5][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 20px" href="mode.php"><?php echo $ml[6][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 20px" href="avantage.php"><?php echo $ml[7][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 20px" href="protection.php"><?php echo $ml[8][$l];?></a></li>
        </ul>
      </nav>    
    </aside>

    <?php if(($lang=="fr") || ($lang=="en")){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
    <?php }else{?>
            <div style="display: block; width:630px; float: right; text-align: right" >
    <?php }?>
        <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
        <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">
            <?php echo $ml[1][$l];?>
        </h1>
        
        <div style="float:inherit; width:450px">
            <img style="float:inherit; padding: 10px" src="images/RTEmagicC_typ_D_07.jpg.jpg" alt="Image">
            <a style="float:inherit; margin-top: 30px; font-size: 18px" href ="typed.php"><?php echo $ml[2][$l];?></a><br><br><br><br>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[9][$l];?></h2>
        </div>
        
        <div style="float:inherit; width:150px">
            <!--<h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"> <?php echo $ml[10][$l];?></h1><br>
            <a href="#"><?php echo $ml[10][$l];?></a><br><br><br><br>-->
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"> <?php echo $ml[11][$l];?></h1><br>
            <a href="ISO.pdf"><?php echo $ml[12][$l];?> </a><br><br>
            <a href="Tuev.pdf"><?php echo $ml[13][$l];?> </a><br><br>
            <a href="Zertifikat-Swisslabel.pdf"><?php echo $ml[14][$l];?> </a>
        </div>

        <div style="float:inherit; width:450px">
            <img style="float:inherit; padding: 10px" src="images/RTEmagicC_typ_Z_04.jpg.jpg" alt="Image">
            <a style="float:inherit; margin-top: 30px; font-size: 18px" href ="typez.php"><?php echo $ml[3][$l];?></a><br><br><br><br>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[15][$l];?></h2>
        </div>

        <div style="float:inherit; width:450px">
            <img style="float:inherit; padding: 10px" src="images/RTEmagicC_typ_I_04.jpg.jpg" alt="Image">
            <a style="float:inherit; margin-top: 30px; font-size: 18px" href ="typei.php"><?php echo $ml[4][$l];?></a><br><br><br><br>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[16][$l];?></h2>
        </div>

        <div style="float:inherit; width:450px">
            <img style="float:inherit; padding: 10px" src="images/RTEmagicC_typ_P_06.jpg.jpg" alt="Image">
            <a style="float:inherit; margin-top: 30px; font-size: 18px" href ="typep.php"><?php echo $ml[5][$l];?></a><br><br><br><br>
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[17][$l];?></h2>
        </div>

        <div style="float:inherit; width:650px">
            <a href="ISO.pdf"><img style="float:inherit; padding: 10px" src="images/RTEmagicC_ISO_04.png.png" alt="Image"></a>
            <a href="Tuev.pdf"><img style="float:inherit; padding: 10px" src="images/RTEmagicC_Tuev_04.png.png" alt="Image"></a>
            <a href="Zertifikat-Swisslabel.pdf"><img style="float:inherit; padding: 10px" src="images/RTEmagicC_swisslabel_07.png.png" alt="Image"></a>
        </div>
    </div>

<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>