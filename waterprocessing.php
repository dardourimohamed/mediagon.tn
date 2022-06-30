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
    array("معالجة المياه" , "Traitement de l'eau", "Water treatment"),// 1
    array("","",""),// 
    array("","",""),// 
    array("","",""),// 
    array("","",""),// 
    array("","",""),// 
    array("","",""),// 
    array("","",""),// 
    array("","",""),// 
    );
?>

    <?php if(($lang=="fr") || ($lang=="en")){?>
        <aside style="float: left; text-align: left" id="left_column">
    <?php }else{?>
            <aside style="float: right; text-align: right" id="left_column">
    <?php }?>
      <nav>
        <ul>
            <li class="last"><a style="color: #cc0700; font-size: 20px"><?php echo $ml[1][$l];?></a></li>
        </ul>
      </nav>    
    </aside>

    <?php if($lang=="fr"){?>
            <style>
                .MsoNormal{
                    color: #000;
                }
            </style>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <p class=MsoNormal>Les champs magnétiques puissants et permanents traitent
l’eau contre les méfaits du calcaire et&nbsp;/ ou contre le développement des
bactéries (contraire à la salubrité de l’eau pour la consommation humaine<span
class=GramE>) ,</span> sans aucun produit chimique et sans aucun besoin
énergétique. Ils permettent de ne pas produire de déchets issus de
l’utilisation de substances chimiques, contrairement aux autres types de
traitements.</p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal>L’effet de ce traitement magnétique est instantané et cela
sans modification de la chimie de l’eau (contrairement aux adoucisseurs), sans
apport énergétique extérieur, sans aucune maintenance, sans frais de
fonctionnement et avec une fiabilité et une durabilité supérieure à 100 ans.</p>

<p class=MsoNormal>Mais ce ne sont pas là les seuls avantages des produits <span
class=SpellE>Mediagon</span>. En effet, l’eau ainsi traitée magnétiquement,
conserve et transmet ses capacités aux cristallisations déjà présentes. Certes,
effets curatif est plus étalé dans le temps mais par rémanence et par contact
avec les dépôts existants, l’eau traitée permettra à terme, un nettoyage de
votre installation … </p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:115%'>Remarque&nbsp;:<o:p></o:p></span></p>

<p class=MsoNormal>Le placement d’un appareil sur une installation ancienne et
entartrée, peut impliquer un nettoyage des moussues de robinetteries pendant
quelques mois, le temps du nettoyage des canalisations par effet curatif,
détartrage lent et progressif, et sans aucun risque pour la santé.</p>

<p class=MsoNormal><span style='font-size:16.0pt;line-height:115%;color:red'>Traitement
antibactérien&nbsp;:<o:p></o:p></span></p>

<p class=MsoNormal>En faisant subir plusieurs fois le traitement magnétique des
produits Mediagon à l’eau dont vous disposez, vous êtes assuré de bénéficier
d’une eau saine sans risque de contamination par les légionnelles, les <span
class=SpellE>eschériscias</span> coli ,<span style='mso-spacerun:yes'>  </span>les
coliformes, et autres bactéries indésirables. En effet, en supprimant les
cristallisations de calcaire, et en leur faisant subir ces champs magnétiques
répétés, ces bactéries ne disposent plus des ressources nécessaires pour leur
développement et sont donc rapidement éliminées de votre installation (
particulièrement des points chauds où habituellement, elles prolifèrent plus
aisément si on ne prend pas certaines précautions).</p>

<p class=MsoNormal>Ainsi les chauffe-eaux (par l’intermédiaire des boucles
d’eau chaude sanitaire), les piscines, la climatisation, les spas, les jacuzzis,…
peuvent être facilement traités.</p>

<p class=MsoNormal>Voir tests sur&nbsp;: Escherichia Coli, Serrait Mercedes,
Coliformes</p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><span style='font-size:16.0pt;line-height:115%;color:red'>Traitement
anti-boue&nbsp;:<o:p></o:p></span></p>

<p class=MsoNormal>Dans toutes les installations de chauffage et touts les
circuits fermés où circule l’eau, se forment des dépôts de boues dus à
l’oxydation. Ces dépôts encrassent, et obstruent les canalisations et rendant
moins performants.</p>

<p class=MsoNormal>En traitant magnétiquement les fluides circulant dans ces
canalisations, l’entretien et la longévité de ces installations s’en trouvent
considérablement améliorés.</p>

<p class=MsoNormal>Etant donnée l’efficacité de cette action de nettoyage sur
des canalisations déjà souillées, il est important de prévoir une ou plusieurs
purges aux points bas de l’installation après quelques semaines de traitement (opération
qu’il faudra répéter si les canalisations sont particulièrement encrassées).</p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><span style='font-size:16.0pt;line-height:115%;color:red'>Traitement
anticorrosion&nbsp;:<o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-spacerun:yes'> </span>Sans ôter le
calcaire, le pH est stabilisé, l’eau n’est donc pas corrosive. Le traitement
pose un film magnétique sur toutes les canalisations traitées.</p>
        </div>
    <?php }elseif($lang=="en"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <style>
                .MsoNormal{
                    color: #000;
                }
            </style>
        <div style="display: block; width:630px; float: left; text-align: left" >
            <p class=MsoNormal>The powerful permanent magnetic fields treat the water against the evils of limestone and / or against the growth of bacteria ( contrary to the safety of water for human consumption ) , no chemicals and no energy requirement . They can not generate waste from the use of chemicals , unlike other types of treatments .</p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal>The effect of the magnetic treatment is instantaneous and without changing the water chemistry (unlike softeners) , without external energy supply , no maintenance , no operating costs and reliability and durability to 100 years .</p>

<p class=MsoNormal>But these are not the only advantages of Mediagon products. Indeed, the magnetically treated water , preserves and transmits its capacity to crystallization already present. While curative effects is more spread out over time, but by persistence and in contact with existing deposits , the treated water will eventually cleaning up your system ...</p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:115%'>Note&nbsp;:<o:p></o:p></span></p>

<p class=MsoNormal>The placement of a device on an old and calcified installation may involve cleaning mossy of fittings for a few months , the time of cleaning pipes by curative effect , slow and gradual scaling, and without risk to health.</p>

<p class=MsoNormal><span style='font-size:16.0pt;line-height:115%;color:red'>Antibacterial treatment&nbsp;:<o:p></o:p></span></p>

<p class=MsoNormal>By subjecting several times the magnetic treatment products Mediagon water you have, you are assured of safe water without the risk of contamination by Legionella , the eschériscias coli, coliform bacteria and other unwanted . Indeed , removing the crystallization of limestone, and subjecting them to repeated these magnetic fields , these bacteria have more resources to their development and therefore are quickly eliminated from your system ( especially the hot spots where usually they proliferate more easily if we do not take certain precautions ) .</p>

<p class=MsoNormal>And water heaters ( via hot water loops) , swimming pools, air conditioning, spas, Jacuzzis, ... can be easily treated .</p>

<p class=MsoNormal>See testing : Escherichia coli , clutching Mercedes Coliforms</p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><span style='font-size:16.0pt;line-height:115%;color:red'>Anti- mud&nbsp;:<o:p></o:p></span></p>

<p class=MsoNormal>In all heating and wholes closed circuits where the water flows , form sludge deposits due to oxidation. These deposits clog and clog pipes and making it less efficient .</p>

<p class=MsoNormal>Magnetically treating fluids flowing through these pipes , maintenance and longevity of these facilities are greatly improved.</p>

<p class=MsoNormal>Given the effectiveness of the cleaning action on pipes already soiled , it is important to provide one or more drains at low points of the system after a few weeks of treatment ( operation it will repeat if the pipes are particularly dirty ) .</p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><span style='font-size:16.0pt;line-height:115%;color:red'>Anticorrosion treatment&nbsp;:<o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-spacerun:yes'> </span>Without removing limestone, the pH is stabilized , water is not corrosive. The treatment is a magnetic film on all lines processed.</p>
        </div>
    <?php }else{?>    
            <style>
                .MsoNormal{
                    color: #000;
                }
            </style>
        <div style="display: block; width:630px; float: right; text-align: right !important" >
            <p class=MsoNormal>الحقول المغناطيسية الدائمة قوي معالجة المياه ضد شرور من الحجر الجيري و / أو ضد نمو البكتيريا (خلافا لسلامة المياه للاستهلاك البشري ) ، أي المواد الكيميائية و أي شرط الطاقة . أنها لا يمكن أن تولد النفايات من استخدام المواد الكيميائية ، على عكس أنواع أخرى من العلاجات.</p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal>تأثير العلاج المغناطيسي بشكل فوري و دون تغيير في كيمياء المياه (على عكس الرقائق ) ، بدون إمدادات الطاقة الخارجية ، أي صيانة ، أي تكاليف التشغيل و الاعتمادية و المتانة إلى 100 سنة .</p>

<p class=MsoNormal>ولكن هذه ليست هي فقط مزايا المنتجات Mediagon . وبالفعل، فإن المياه المعالجة مغناطيسيا ، يحفظ وينقل قدرتها على بلورة موجودة بالفعل . بينما الآثار العلاجية هو أكثر انتشرت على مر الزمن ، ولكن عن طريق المثابرة و على اتصال مع الودائع الموجودة ، فإن المياه المعالجة تنظيف في نهاية المطاف النظام الخاص بك ...</p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><span style='font-size:14.0pt;line-height:115%'>: ملاحظة<o:p></o:p></span></p>

<p class=MsoNormal>تنسيب من الجهاز على تثبيت القديم و متكلسة قد تنطوي المطحلب من التجهيزات تنظيف لبضعة أشهر ، والوقت من أنابيب التنظيف بواسطة الأثر العلاجي ، وبطء وتقشر تدريجي ، و دون مخاطر على الصحة.</p>

<p class=MsoNormal><span style='font-size:16.0pt;line-height:115%;color:red'>: علاج مضاد للجراثيم<o:p></o:p></span></p>

<p class=MsoNormal>بإخضاع عدة مرات من المنتجات العلاج المغناطيسي Mediagon الماء لديك ، وتأكدوا من المياه الصالحة للشرب دون التعرض لخطر التلوث بواسطة البكتيريا ، و بكتيريا eschériscias ، البكتيريا القولونية وغيرها من غير المرغوب فيه . في الواقع ، وإزالة التبلور من الحجر الجيري ، وتعريضهم لل تكررت هذه المجالات المغناطيسية ، وهذه البكتيريا لديها المزيد من الموارد ل تنميتها ، وبالتالي يتم التخلص بسرعة من النظام الخاص بك (وخاصة المناطق الساخنة حيث عادة ما تتكاثر أكثر بسهولة إذا لم نتخذ احتياطات معينة ) .</p>

<p class=MsoNormal>و سخانات المياه (عبر حلقات الماء الساخن) ، وحمامات السباحة، و تكييف الهواء ، والمنتجعات، جاكوزي ، ... يمكن علاجها بسهولة .</p>

<p class=MsoNormal>ترى الاختبار: الإشريكية القولونية ، يمسك مرسيدس القولونيات</p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><span style='font-size:16.0pt;line-height:115%;color:red'>: مكافحة الطين<o:p></o:p></span></p>

<p class=MsoNormal>في جميع التدفئة و أغلقت دوائر أجمعين حيث يتدفق الماء ، والودائع الحمأة شكل بسبب الأكسدة . هذه الودائع تسد و تسد الأنابيب و مما يجعلها أقل كفاءة.</p>

<p class=MsoNormal>علاج مغناطيسيا السوائل التي تتدفق من خلال هذه الأنابيب ، و تحسنت كثيرا الصيانة و طول العمر من هذه المرافق .</p>

<p class=MsoNormal>ونظرا ل فعالية عمل تنظيف على الأنابيب المتسخة بالفعل ، من المهم أن توفر واحد أو أكثر المصارف في النقاط المنخفضة للنظام بعد بضعة أسابيع من العلاج ( العملية التي سوف أكرر إذا كانت أنابيب قذرة خاصة ) .</p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal><span style='font-size:16.0pt;line-height:115%;color:red'>: العلاج المقاوم للصدأ<o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-spacerun:yes'> </span> دون إزالة الحجر الجيري ، واستقرت درجة الحموضة، و المياه ليست قابلة للتآكل. والعلاج هو فيلم المغناطيسي على جميع خطوط معالجتها .</p>
        </div>
    <?php }?>   
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>