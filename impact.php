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
          <li><a style="color: #cc0700" href="#"><?php echo $ml[19][$l];?></a></li>
          <li><a style="color: #0282c1" href="montage.php"><?php echo $ml[20][$l];?></a></li>
        </ul>
      </nav>    
    </aside>
<?php if($lang=="fr"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">OÙ SE VERIFIENT LES REPERCUSSIONS DES EFFETS?</h1><br><br>
            <div style="float:inherit; width:650px">
                <p style="color: #000">
                    Mediagon prolonge la vie des installations sanitaires:<br><br>
                </p>
            </div>
                    <div style="margin: 5px; float:inherit; width:100px"><img src="images/impact1.gif" alt="img"><br>Protection de l'environnement</div>
                    <div style="margin: 5px; float:inherit; width:100px"><img src="images/impact2.gif" alt="img"><br>Facilite les soins</div>
                    <div style="margin: 5px; float:inherit; width:100px"><img src="images/impact3.gif" alt="img"><br>concerve les arômes</div>
                    <div style="margin: 5px; float:inherit; width:100px"><img src="images/impact4.gif" alt="img"><br>vréduction des produits de lessive</div>
                    <div style="margin: 5px; float:inherit; width:100px"><img src="images/impact5.gif" alt="img"><br>facilite l'entretien</div>
            <div style="float:inherit; width:650px">
                <br><h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: #000">Jugement des valeurs</h1><br>
                <p style="color: #000">
                    ♦ La technologie Mediagon n'enlève pas le calcaire. Les minéraux essentiels de l'eau tels le calcium et le magnesium restent dans l'eau. Le calcaire dans sa structure de base dans l'eau est modifié de telle manière qu'il ne peut plus se solidifier, mais est emporté par le flux de l'eau.<br><br>
                    ♦ Lors de l'évaporation de l'eau, une fine pélicule de calcaire subsiste dans les marmites, lavabos, cabines de douches, embouts de robinets, etc. Cette fine couche peut s'enlever au moyen d'un produit de nettoyage classique et ne nécessite aucunement un produit détergent agressif.<br><br>
                    ♦ Si les conduites d'eau ont déjà des dépôts de calcaire ou de rouille, il est possible que des particules de calcaire ou de rouille restent bloquées aux embouts de robinets, pommeaux de douche ou autres. Ceux-ci doivent être domontés et rincés.<br><br>
                    ♦ Lors d'une purge du réseau d'eau, les particules seront plus rapidement éliminées et il sera ainsi possible de se rendre compte de l'état général de son réseau.<br><br>
                    ♦ Si vous possédiez un adoucisseur à sel (échangeur d'ions), ou que vos conduites sont rouillées, nous vous déconseillons d'effectuer une purge.<br><br>
                </p>
            </div><br><br> 
        </div>
    <?php }elseif($lang=="en"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">WHERE TO VERIFY THE IMPACT OF EFFECTS?</h1><br><br>
            <div style="float:inherit; width:650px">
                <p style="color: #000">
                    Mediagon extends the life of sanitation:<br><br>
                </p>
            </div>
                    <div style="margin: 5px; float:inherit; width:100px"><img src="images/impact1.gif" alt="img"><br>Environmental Protection</div>
                    <div style="margin: 5px; float:inherit; width:100px"><img src="images/impact2.gif" alt="img"><br>Facilitate care</div>
                    <div style="margin: 5px; float:inherit; width:100px"><img src="images/impact3.gif" alt="img"><br>Preserve the flavors</div>
                    <div style="margin: 5px; float:inherit; width:100px"><img src="images/impact4.gif" alt="img"><br>Reduction of detergents</div>
                    <div style="margin: 5px; float:inherit; width:100px"><img src="images/impact5.gif" alt="img"><br>Facilitates maintenance</div>
            <div style="float:inherit; width:650px">
                <br><h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: #000">Judgment values</h1><br>
                <p style="color: #000">
                    ♦ Mediagon the technology does not remove the limestone. Essential minerals from the water such as calcium and magnesium remain in the water. Limestone in its basic structure in water is modified such that it can not solidify, but is carried away by the flow of water.<br><br>
                    ♦ Upon evaporation of water, a thin limestone pélicule still in pots, sinks, shower stalls, tips faucets, etc.. This thin layer can be removed with a conventional cleaning product and does not require an aggressive detergent.<br><br>
                    ♦ If water pipes already have calcium deposits or rust, it is possible that some scale or rust remain stuck to the tips of faucets, shower heads and other. These must be domontés and rinsed.<br><br>
                    ♦ During a purge of the water system, the particles will quickly removed and it will be possible to realize the condition of the network.<br><br>
                    ♦ If you own a water softener salt (ion exchange), or your pipes are rusty, we recommend you perform a purge.<br><br>
                </p>
            </div><br><br>
        </div>  
    <?php }elseif($lang=="ar"){?>
        <div style="display: block; width:630px; float: right; text-align: right" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">النتيجة المترتبة على الآثار</h1><br><br>
            <div style="float:inherit; width:650px">
                <p style="color: #000">
                     مداغون يطيل عمر الصرف الصحي<br><br>
                </p>
            </div>
                    <div style="margin: 5px; float:inherit; width:100px"><img src="images/impact1.gif" alt="img"><br>حماية البيئة</div>
                    <div style="margin: 5px; float:inherit; width:100px"><img src="images/impact2.gif" alt="img"><br>يسهل الرعاية</div>
                    <div style="margin: 5px; float:inherit; width:100px"><img src="images/impact3.gif" alt="img"><br>الحفاظ على النكهة</div>
                    <div style="margin: 5px; float:inherit; width:100px"><img src="images/impact4.gif" alt="img"><br>الحد من المنظفات</div>
                    <div style="margin: 5px; float:inherit; width:100px"><img src="images/impact5.gif" alt="img"><br>يسهل الصيانة</div>
            <div style="float:inherit; width:650px">
                <br><h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: #000">قيم الحكم</h1><br>
                <p style="color: #000">
                     التكنولوجيا مداغون لا تزيل الحجر الجيري. تظل المعادن الأساسية من الماء مثل الكالسيوم والمغنيسيوم في الماء. يتم تعديل الحجر الجيري في البنية الأساسية في الماء من النوع الذي لا يمكن أن يصلب، و يتم بعيدا عن تدفق المياه<br><br>
                     عند تبخر الماء، طبقة رقيقة من الحجر الجيري لا تزال في الأواني، والمصارف، والأكشاك، الحنفيات، الخ. ويمكن إزالة هذه الطبقة الرقيقة مع منتج التنظيف التقليدية ولا تحتاج إلى منظف عدواني<br><br>
                    <br><br>
                    <br><br>
                </p>
            </div><br><br></div><br><br>
        </div>
    <?php }?>
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>