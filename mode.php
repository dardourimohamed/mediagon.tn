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
    array("كيف تعمل الآلة المضادة للتآكل و الحجر الجيري ؟", "COMMENT FONCTIONNE L'APPAREIL ANTICALCAIRE ET ANTICORROSION ?", "How does work ?"),// 2
    array("طريقة العمل", "Mode de fonctionnement", "Function Mode"),// 3
    array("الفوائد", "Avantages", "Advantage"),// 4
    array("حماية من الصدأ والجير", "Protection calcaire et anti rouille", "Limestone and anti rust protection"),// 5
    array("مثالية لمنزل متكون من عائلة أو إثنين", "Ideal pour maison a 1 ou 2 familles", "Ideal for house for 1 or 2 families"),// 6
    array("تقديم", "PROSPECTUS", "Prospectus"),// 7
    array("الوثائق", "DOCUMENTS","Documents"),// 8
    array("ISO (de)", "ISO (de)", "ISO (de)"),// 9
    array("TÜV (de)", "TÜV (de)", "TÜV (de)"),// 10
    array("SWISS Made (de)", "SWISS Made (de)", "SWISS Made (de)"),// 11
    array("مثالية لمنزل متكون من عائلة أو إثنين التي لا تحتوي على أماكن كثيرة", "Idéal pour maison à 1 ou 2 familles, dont les conduites ne comportent pas assez de place","Ideal home for 1 or 2 families whose lines do not have enough space"),// 12
    array("مثالية للمباني الصناعية", "Idéal pour bâtiments industriels","Ideal for industrial buildings"),// 13
    array("مثالية للمباني التجارية", "Idéal pour bâtiments commerciaux","Ideal for commercial buildings"),// 14
    array("مثالية للشركات والفنادق والمطاعم وغيرها من المنشآت التجارية", "Idéal pour enterprises, hôtels, restaurants et autres bâtiments commerciaux","Ideal for companies, hotels, restaurants and other commercial buildings"),// 15
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
          <li><a style="color: #0282c1; font-size: 20px" href="produit.php"><?php echo $ml[1][$l];?></a></li>
            <li class="last"><a style="color: #cc0700; font-size: 20px" href="#"><?php echo $ml[3][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 20px" href="avantage.php"><?php echo $ml[4][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 20px" href="protection.php"><?php echo $ml[5][$l];?></a></li>
        </ul>
      </nav>    
    </aside>

    <?php if($lang=="fr"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 15px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"><?php echo $ml[2][$l];?></h1>
            <div style="float:inherit; width:450px">
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 13px">Mediagon, grâce à un procédé de refroidissement, de pressage et de dureté, obtient de précieuses structures de l'alliage.</h2><br>
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 12px">Procédé antitartre magnétique d'une nouvelle génération:</h2>
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 11px">
                    l'innovation est de réussir, lors de la fabrication, à magnétiser l'alliage qui le compose de telle sorte qu'il va émettre à son tour des lignes de champs magnétiques et statiques fines et nombreuses. Partantes de tous les points de sa surface, elles vont être multidirectionnelles, donc beaucoup plus efficaces que celles d'un aimant permanent qui vont du pôle nord au pôle sud.<br><br>
                </h2>
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 11px">
                    Ainsi, l'eau et les composants du calcaire Ca++ et CO3—sont polarisés de multiples fois, ce qui favorise la formation de cristaux de calcaire (CaCO3), en suspension dans l'eau et de façon très disséminée, donnant après évaporation de l'eau une poudre très fine. Au contact de l'eau ainsi traitée, les dépôts existant déjà auront tendance à se désagréger progressivement.<br><br>
                </h2>
                <br><video src="v2.webm" poster="v2.jpg" controls autoplay loop style="width: 100%; height: 350px"></video><br><br><br>
            </div>
            <div style="float:inherit; width:150px">
                <h1 style="font-size: 15px; margin: 0px 0px 0px 5px; color: rgb(195, 7, 1)">Documents :</h1><br>
                <a style="float:inherit; margin-left : 5px; font-size: 11px" href ="calcaires.pdf">Données techniques </a>
            </div>
        </div>
    <?php }elseif($lang=="en"){?>
        <div style="display: block; width:630px; float: left; text-align: left">
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 15px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"><?php echo $ml[3][$l];?></h1>
            <div style="float:inherit; width:450px">
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 13px">Mediagon through a cooling process, the pressing and hardness, obtained from the alloy of precious structures.</h2><br>
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 12px">Magnetic process Tartar of a new generation:</h2>
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 11px">
                    innovation is to succeed in the production, to magnetize the alloy that consists of so that it will issue in turn lines and static magnetic fine and numerous fields. Outgoing from all points of the surface, they will be multidirectional, so much more effective than a permanent magnet which run north to the south pole.<br><br>
                </h2>
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 11px">
                    Thus, water and components of limestone Ca + + and CO3-are polarized multiple times, which promotes the formation of crystals of limestone (CaCO3), suspended in water and very scattered, giving after evaporation water a very fine powder. In contact with treated water, the already existing deposits will tend to disintegrate gradually.<br><br>
                </h2>
                <br><video src="v2.webm" poster="v2.jpg" controls autoplay loop style="width: 100%; height: 350px"></video><br><br><br>
            </div>
            <div style="float:inherit; width:150px">
                <h1 style="font-size: 15px; margin: 0px 0px 0px 5px; color: rgb(195, 7, 1)">Documents :</h1><br>
                <a style="float:inherit; margin-left : 5px; font-size: 11px" href ="calcaires.pdf">Technical data</a>
            </div>
        </div>
    <?php }else{?>
          <div style="display: block; width:630px; float: right; text-align: right" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 20px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)"><?php echo $ml[3][$l];?></h1>
            <div style="float:inherit; width:450px">
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 15px">مداغون من خلال عملية التبريد، والضغط وصلابة، تم الحصول على سبيكة من الهياكل الثمينة</h2><br>
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 14px">مكافحة الجير، عملية المغناطيسي من الجيل الجديد</h2>
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 14px">
                    الابتكار هو أن تنجح في إنتاج سبيكة ممغنطة، ذات فعالية دائمة تعمل شمالا إلى القطب الجنوبي<br><br>
                </h2>
                <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 14px">
                    المياه ومكونات الحجر الجيري كا3 +  مستقطبة عدة مرات، الأمر الذي يعزز تشكيل بلورات من الحجر الجيري (كربونات الكالسيوم )، معلقة في الماء ومنتشرة جدا، تعطي بعد تبخر المياه مسحوق ناعم جدا. في اتصال مع المياه المعالجة، فإن الودائع الموجودة بالفعل  تتفكك تدريجيا<br><br>
                </h2>
                <br><video src="v2.webm" poster="v2.jpg" controls autoplay loop style="width: 100%; height: 350px"></video><br><br><br>
            </div>
            <div style="float:inherit; width:150px">
                <h1 style="font-size: 17px; margin: 0px 0px 0px 5px; color: rgb(195, 7, 1)">الوثائق</h1><br>
                <a style="float:inherit; margin-left : 5px; font-size: 15px" href ="calcaires.pdf">البيانات التقنية</a>
            </div>
          </div>
    <?php }?>
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>