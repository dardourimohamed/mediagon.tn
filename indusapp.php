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
    array("المستخدم في الصناعة أو التجارة" , "Utilisé dans l'industrie ou le commerce", "Used in industry or commerce"),// 1
    array("التطبيقات الصناعية", "Applications industrielles", "Industrial applications"),// 2
    array("الوحدة صناعية", "Unité industrielle", "Industrial unit"),// 3
    array("مراجع صناعية", "Références de l'industrie","Industry References"),// 4
    array("P نوع -", "- type P", "- type P"),// 5
    array("طريقة العمل", "Mode de fonctionnement", "Function Mode"),// 6
    array("الفوائد", "Avantages", "advantage"),// 7
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
          <li><a style="color: #0282c1; font-size: 18px" href="indus.php"><?php echo $ml[1][$l];?></a></li>
            <li class="last"><a style="color: #cc0700; font-size: 18px" href="#"><?php echo $ml[2][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 18px" href="typei.php"><?php echo $ml[3][$l];?></a></li>
        </ul>
      </nav>    
    </aside>

    <?php if($lang=="fr"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 15px"><?php echo $ml[2][$l];?></h2><br>
            <div style="float:inherit; width:150px">
                <h1 style="font-size: 12px; margin-left: 20px; color: rgb(195, 7, 1)">Laveur d'air</h1>
                <img style="float:inherit; margin: 0px,5px,0px,0px; padding: 10px" src="images/indusapp1.jpg" alt="Image">
            </div>
            <div style="float:inherit; width:450px">
                <h2 style="text-transform:  none; margin: 15px; color: rgb(54, 54, 54); font-size: 12px">
                   ♦ Une diminution de dépôts calcaires durs dans les conduites, les systèmes de remplissage et sur les atomiseurs<br>
                   ♦ Retardement de la réduction graduelle de puissance dans un service continu<br>
                   ♦ Fiabilité de fonctionnement améliorée<br>
                   ♦ Moins d'interruptions de nettoyage.<br>
                   ♦ Enlèvement facile des dépôts doux sans recours aux moyens chimiques agressifs et sans usage mécanique forcé<br>
                </h2>
                <br><br><br><hr><br><br><br>
            </div>
            <div style="float:inherit; width:150px">
                <h1 style="font-size: 12px; margin-left: 20px; color: rgb(195, 7, 1)">Echangeur d'ions</h1>
                <img style="float:inherit; margin: 0px,5px,0px,0px; padding: 10px" src="images/indusapp2.jpg" alt="Image">
            </div>
            <div style="float:inherit; width:450px">
                <h2 style="text-transform:  none; padding-left : 40px; margin: 15px; color: rgb(54, 54, 54); font-size: 12px">
                   ♦ Selon l'état et l'âge de l'installation la consommation en sel de régénération diminue jusqu'à 30%<br>
                   ♦ Capacité de la résine augmentée<br>
                   ♦ Fiabilité de fonctionnement améliorée:<br><br>
                   ♦ Dans un système à adoucissement partiel (système par bypass) l'eau dure sera également traitée par le procédé physique<br>
                   ♦ En cas de mauvais fonctionnement de l'installation (par exemple le manque de sel de régénération, soupape défaillante, cycle de régénération mal adapté) l'eau est néanmoins protégée partiellement par le procédé physique<br>
                </h2>
                <br><br><br><hr><br><br><br>
            </div>
            <div style="float:inherit; width:150px">
                <h1 style="font-size: 12px; margin-left: 20px; color: rgb(195, 7, 1)">Circuit de refroidissement</h1>
                <img style="float:inherit; margin: 0px,5px,0px,0px; padding: 10px" src="images/indusapp3.jpg" alt="Image">
            </div>
            <div style="float:inherit; width:450px">
                <h2 style="text-transform:  none; padding-left : 40px; margin: 15px; color: rgb(54, 54, 54); font-size: 12px">
                   ♦ Amélioration du transfert de chaleur (échangeur de chaleur, conduites, surfaces)<br>
                   ♦ Absence d'augmentation de température et de pression dans les compresseurs<br>
                   ♦ Capacité augmentée du système<br>
                   ♦ Fonctionnement parfait des soupapes du compresseur à deux étages<br>
                   ♦Fiabilité de fonctionnement améliorée<br>
                   ♦ Economies en énergie<br>
                   ♦ Diminution des dépenses de maintenance et de contrôle<br>
                </h2>
                <br><br><br><hr><br><br><br>
            </div>
            <div style="float:inherit; width:150px">
                <img style="float:inherit; margin: 0px,5px,0px,0px; padding: 10px" src="images/indusapp4.jpg" alt="Image">
            </div>
            <div style="float:inherit; width:450px">
                <h1 style="font-size: 12px; margin-left: 50px; color: rgb(195, 7, 1)">Refroidissement des machines à souder automatique</h1>
                <h2 style="text-transform:  none; padding-left : 40px; margin: 15px; color: rgb(54, 54, 54); font-size: 12px">
                   ♦ Fiabilité de fonctionnement améliorée<br>
                   ♦ Dissipation de chaleur régulière<br>
                   ♦ Dépôts faciles à débourber<br>
                   ♦ Augmentation du débit d'eau<br>
                   ♦ Température constante des électrodes<br>
                   ♦ Durabilité augmentée des électrodes<br>
                   ♦ Diminution des dépenses de maintenance et de contrôle<br>
                   ♦ Economies en énergie<br>
                </h2>
                <br><br><br><hr><br><br><br>
            </div>
        </div>
    <?php }elseif($lang=="en"){?>
          <div style="display: block; width:630px; float: left; text-align: left" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 15px"><?php echo $ml[2][$l];?></h2><br>
            <div style="float:inherit; width:150px">
                <h1 style="font-size: 12px; margin-left: 20px; color: rgb(195, 7, 1)">Air washer</h1>
                <img style="float:inherit; margin: 0px,5px,0px,0px; padding: 10px" src="images/indusapp1.jpg" alt="Image">
            </div>
            <div style="float:inherit; width:450px">
                <h2 style="text-transform:  none; margin: 15px; color: rgb(54, 54, 54); font-size: 12px">
                   ♦ A decrease in hard limestone deposits in pipes, filling systems and atomizers<br>
                   ♦ Delaying the gradual reduction of power in continuous service<br>
                   ♦ Reliability improved operating<br>
                   ♦ Fewer interruptions cleaning<br>
                   ♦ Easy removal of soft deposits without the use of harsh chemicals and without compulsory means mechanical use<br>
                </h2>
                <br><br><br><hr><br><br><br>
            </div>
            <div style="float:inherit; width:150px">
                <h1 style="font-size: 12px; margin-left: 20px; color: rgb(195, 7, 1)">Ion exchanger</h1>
                <img style="float:inherit; margin: 0px,5px,0px,0px; padding: 10px" src="images/indusapp2.jpg" alt="Image">
            </div>
            <div style="float:inherit; width:450px">
                <h2 style="text-transform:  none; padding-left : 40px; margin: 15px; color: rgb(54, 54, 54); font-size: 12px">
                   ♦ Depending on the condition and age of the facility in salt consumption of regeneration decreased to 30%<br>
                   ♦ Capacity increased resin<br>
                   ♦ Improved operating reliability:<br><br>
                   ♦ In a system with partial softening system (Bypass) hard water will also be addressed by the physical process<br>
                   ♦ In case of malfunction of the system (eg lack of salt regeneration valve fails, regeneration cycle mismatched) water is still partially protected by the physical process<br>
                </h2>
                <br><br><br><hr><br><br><br>
            </div>
            <div style="float:inherit; width:150px">
                <h1 style="font-size: 12px; margin-left: 20px; color: rgb(195, 7, 1)">Cooling system</h1>
                <img style="float:inherit; margin: 0px,5px,0px,0px; padding: 10px" src="images/indusapp3.jpg" alt="Image">
            </div>
            <div style="float:inherit; width:450px">
                <h2 style="text-transform:  none; padding-left : 40px; margin: 15px; color: rgb(54, 54, 54); font-size: 12px">
                   ♦ Improved heat transfer (heat exchanger, pipes, surfaces)<br>
                   ♦ No increase in temperature and pressure in the compressor<br>
                   ♦ Increased system capacity<br>
                   ♦ Perfect operation of valves two-stage compressor<br>
                   ♦ Reliability improved operating<br>
                   ♦ Energy Savings<br>
                   ♦ Reduced maintenance costs and control<br>
                </h2>
                <br><br><br><hr><br><br><br>
            </div>
            <div style="float:inherit; width:150px">
                <img style="float:inherit; margin: 0px,5px,0px,0px; padding: 10px" src="images/indusapp4.jpg" alt="Image">
            </div>
            <div style="float:inherit; width:450px">
                <h1 style="font-size: 12px; margin-left: 50px; color: rgb(195, 7, 1)">Cooling automatic welding machines</h1>
                <h2 style="text-transform:  none; padding-left : 40px; margin: 15px; color: rgb(54, 54, 54); font-size: 12px">
                   ♦ Reliability improved operating<br>
                   ♦ Even heat dissipation<br>
                   ♦ Easy-silt deposits<br>
                   ♦ Increased water flow<br>
                   ♦ Constant electrode temperature<br>
                   ♦ Increased durability of electrodes<br>
                   ♦ Reduced maintenance costs and control<br>
                   ♦ Energy Savings<br>
                </h2>
                <br><br><br><hr><br><br><br>
            </div>
        </div>
    <?php }else{?>
          <div style="display: block; width:630px; float: right; text-align: right" >
            <img id="img" width=100% style="padding: 10px" src="images/p1.jpg" alt="Image">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-size: 15px"><?php echo $ml[2][$l];?></h2><br>
            <div style="float:inherit; width:150px">
                <h1 style="font-size: 15px; margin-left: 20px; color: rgb(195, 7, 1)">غسالة هوائية</h1>
                <img style="float:inherit; margin: 0px,5px,0px,0px; padding: 10px" src="images/indusapp1.jpg" alt="Image">
            </div>
            <div style="float:inherit; width:450px">
                <h2 style="text-transform:  none; margin: 15px; color: rgb(54, 54, 54); font-size: 15px">
                   انخفاض في ودائع الحجر الجيري الصلب في الأنابيب، ونظم تعبئة♦<br>
                   تأجيل تخفيض تدريجي للطاقة في الخدمة المستمرة♦<br>
                   تحسين التشغيل♦<br>
                   عدد أقل من الانقطاع للتنظيف♦<br>
                   من السهل إزالة الرواسب الناعمة من دون استخدام المواد الكيميائية القاسية♦<br>
                </h2>
                <br><br><br><hr><br><br><br>
            </div>
            <div style="float:inherit; width:150px">
                <h1 style="font-size: 15px; margin-right: 20px; color: rgb(195, 7, 1)">مبادل الأيون</h1>
                <img style="float:inherit; margin: 0px,5px,0px,0px; padding: 10px" src="images/indusapp2.jpg" alt="Image">
            </div>
            <div style="float:inherit; width:450px">
                <h2 style="text-transform:  none; padding-right : 40px; margin: 15px; color: rgb(54, 54, 54); font-size: 15px">
                    في حالة خلل في نظام  المياه لا تزال محمية جزئيا عن طريق عملية فيزيائية♦<br>
                    زيادة قدرة الراتنج♦<br>
                    تحسين التشغيل♦<br>
                   معالجة المياه بشدة♦<br>
                </h2>
                <br><br><br><hr><br><br><br>
            </div>
            <div style="float:inherit; width:150px">
                <h1 style="font-size: 15px; margin-right: 20px; color: rgb(195, 7, 1)">مبرد</h1>
                <img style="float:inherit; margin: 0px,5px,0px,0px; padding: 10px" src="images/indusapp3.jpg" alt="Image">
            </div>
            <div style="float:inherit; width:450px">
                <h2 style="text-transform:  none; padding-right : 40px; margin: 15px; color: rgb(54, 54, 54); font-size: 15px">
                   تحسين نقل الحرارة: المبادلات الحرارية، الأنابيب، السطوح♦<br>
                   لا زيادة في درجة الحرارة والضغط في الضاغط♦<br>
                    زيادة قدرة النظام♦<br>
                    عملية مثالية للصمامات♦ <br>
                    تحسين التشغيل♦<br>
                    توفير الطاقة♦<br>
                    تخفيض تكاليف الصيانة♦<br>
                </h2>
                <br><br><br><hr><br><br><br>
            </div>
            <div style="float:inherit; width:150px">
                <img style="float:inherit; margin: 0px,5px,0px,0px; padding: 10px" src="images/indusapp4.jpg" alt="Image">
            </div>
            <div style="float:inherit; width:450px">
                <h1 style="font-size: 15px; margin-right: 50px; color: rgb(195, 7, 1)">تبريد آلات اللحام الآلي</h1>
                <h2 style="text-transform:  none; padding-right : 40px; margin: 15px; color: rgb(54, 54, 54); font-size: 15px">
                   تحسين التشغيل♦<br>
                   تبديد الحرارة♦<br>
                   الودائع سهلة الطمي♦<br>
                   زيادة تدفق المياه♦<br>
                   درجة حرارة ثابتة♦<br>
                   زيادة قوة التحمل الأقطاب الكهربائية♦<br>
                   تخفيض تكاليف الصيانة والتحكم♦<br>
                   توفير الطاقة♦<br>
                </h2>
                <br><br><br><hr><br><br><br>
            </div>
        </div>
    <?php }?>
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>