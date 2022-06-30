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
          <li class="last"><a style="color: #cc0700; font-size: 20px" href="#"><?php echo $ml[8][$l];?></a></li>
          <li><a style="color: #cc0700" href ="#"><?php echo $ml[18][$l];?></a></li>
          <li><a style="color: #cc0700" href="impact.php"><?php echo $ml[19][$l];?></a></li>
          <li><a style="color: #cc0700" href="montage.php"><?php echo $ml[20][$l];?></a></li>
        </ul>
      </nav>    
    </aside>
<?php if($lang=="fr"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">EXPLICATIONS PHYSIQUES</h1><br><br>
            <div style="float:inherit; width:650px">
                <p style="color: #000">
                    La spécificité du know-how de Mediagon consiste à ne pas séparer anions et cations, mais de les maintenir en de multiples fines lignes statiques et localement concentrés.<br><br>
                    L'innovation est de réussir lors de sa fabrication à magnétiser l'alliage qui le compose de telle sorte qu'il va émettre à son tour des lignes de champs magnétiques et statiques fines et nombreuses. Partant de tous les points de sa surface, elles vont être multidirectionnelles, donc beaucoup plus efficacies que celles d'un aimant permanent qui vont du pôle nord au pôle sud. Ainsi, l'eau et les composants du calcaire Ca++ et CO3--sont polarisés de multiples fois, ce qui favorise la formation de cristaux de calcaire (CaCO3) en suspension dans l'eau et de façon très disséminée, donnant après évaporation de l'eau une poudre très fine. Au contact de l'eau ainsi traitée, les dépôts exisant déjà auront tendance à se désagréger progressivement.<br><br>
                    Sans ce traitement, les ions calcaire au passage à proximité d'une source de chaleur (une résistance) auraient précipités, donnant des cristaux de calcaire très durs, qui s'agglomèrent entre eux et vont s'incruster sur les parois de la résistance et des canalisations.<br><br>
                    Ainsi, "avec MEDIAGON, le calcaire se met en suspension dans l'eau sous forme d'une poudre extrêmement fine qui a perdu son pouvoir incrustant." Resultats : l'entretien des surfaces est facilité, les interventions de détartrage sont moins préquentes, vos canalisations et vos équipements sont bien mieux protégés du calcaire et de la corrosion..<br><br>
                </p>
            </div><br><br>
            <div style="float:inherit; width:300px">
                <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: #000">Sans Mediagon</h1><br>
                <p style="color: #000">
                    formation de cristaux incrustants d'une eau sur un verre nettoyé à l'acide, agrandis 1000 x. Les cristaux sont incrustants.<br><br>
                    <img src="images/sansmediagon.jpg" alt="img">
                </p>
            </div><br><br>
            <div style="float:inherit; width:300px">
                <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: #000">Avec Mediagon</h1><br>
                <p style="color: #000">
                    formation d'une poudre ultra fine d'une eau sur un verre nettoyé à  l'acide, agrandis 1000 x. Ces cristaux s'éloignent  et sont rincés avec l'eau.<br><br>
                    <img src="images/avecmediagon.jpg" alt="img">
                </p>
            </div><br><br>
        </div>
    <?php }elseif($lang=="en"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">PHYSICAL EXPLANATION</h1><br><br>
            <div style="float:inherit; width:650px">
                <p style="color: #000">
                    The specific know-how of Mediagon is not to separate anions and cations, but to maintain multiple static and locally focused fine lines.<br><br>
                    The innovation is to succeed in its manufacture to magnetize the alloy that consists of so that in turn will emit lines and static magnetic fine and numerous fields. Based on all points of the surface, they will be multidirectional, so much efficacies as a permanent magnet which run north to the south pole. Thus, water and components of limestone Ca + + and CO3 - are polarized multiple times, which promotes the formation of crystals of limestone (CaCO3) is suspended in water and very scattered, giving after evaporation water a very fine powder. In contact with treated water, deposits exisant already tend to disintegrate gradually.<br><br>
                    Without this treatment, the limestone ions passing near a heat source (a resistance) would precipitate, giving crystals of hard limestone, which agglomerate with each other and will become embedded in the walls of the resistor and pipes.<br><br>
                    Thus, "with Mediagon, limestone is suspended in water in the form of an extremely fine powder that has lost its embedding power." Results: ground maintenance is facilitated interventions are less scaling préquentes, your pipes and your equipment are much better protected limestone and corrosion ..<br><br>
                </p>
            </div><br><br>
            <div style="float:inherit; width:300px">
                <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: #000">Without Mediagon</h1><br>
                <p style="color: #000">
                    formation of crystals of a water incrustants on acid cleaned glass, enlarged 1000 x. The crystals are encrusting.<br><br>
                    <img src="images/sansmediagon.jpg" alt="img">
                </p>
            </div><br><br>
            <div style="float:inherit; width:300px">
                <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: #000">With Mediagon</h1><br>
                <p style="color: #000">
                    formation of ultra fine water on acid-cleaned glass, enlarged 1000 x powder. And these crystals are rinsed away with water.<br><br>
                    <img src="images/avecmediagon.jpg" alt="img">
                </p>
            </div><br><br>
        </div>  
    <?php }elseif($lang=="ar"){?>
        <div style="display: block; width:630px; float: right; text-align: right" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: rgb(195, 7, 1)">شرح فزيائي</h1><br><br>
            <div style="float:inherit; width:650px">
                <p style="color: #000">
                    
                </p>
            </div><br><br>
            <div style="float:inherit; width:300px">
                <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: #000">بدون مداغون</h1><br>
                <p style="color: #000">
                    تكوين بلورات من الماء على حمض تنظيف الزجاج<br><br>
                    <img src="images/sansmediagon.jpg" alt="img">
                </p>
            </div>
            <div style="float:inherit; width:300px">
                <h1 style="font-size: 18px; margin: 0px 0px 0px 0px; color: #000">باستعمال مداغون</h1><br>
                <p style="color: #000">
                    تشكيل المياه غرامة فائقة على حمض تنظيف الزجاج وتشطف هذه البلورات بعيدا<br><br>
                    <img src="images/avecmediagon.jpg" alt="img">
                </p>
            </div><br><br>
        </div>
    <?php }?>
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>