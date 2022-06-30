<?php
    ob_start();
    $lang="";
    if(isset($_COOKIE["lang"])){$lang=$_COOKIE["lang"];}
    else{$lang="fr";}

    $l=0;
    switch($lang){
        case "ar":$l=0;break;
        case "fr":$l=1;break;
    };
    $ml = array(
    array("مهد", "mahd","mahd"),// 0
    array("الإنطباع" , "Mentions légales","Imprint"),// 1
    array("الاتصال", "CONTACT","Contact"),// 2
    array("حي النزهة شارع البيئة 4060، القلعة الكبرى سوسة<br>0021673349903،الهاتف : 0021673349902<br>الفاكس : 0021673254233", "Cite Nozha Boulevard de l'environnement 4060, Kalaa Kebira, Sousse, Tunisie.<br>Tel : 0021673349902,0021673349903<br>Fax : 0021673254233", "Neighborhood Nozha Avenue of the envirement 4060, Kalaa Kebira, Sûsah, Tunisia.<br>Tel : 0021673349902,0021673349903<br>Fax : 0021673254233"),// 3
    array("الموقع", "Emplacement","Location")// 4
    );
?>

<script type="text/javascript">

</script>

    <?php if($lang=="fr"){?>
        <aside style="float: left; text-align: left" id="left_column">
    <?php }else{?>
            <aside style="float: right; text-align: right" id="left_column">
    <?php }?>
      <nav>
        <ul>
            <li class="last"><a style="color: #0282c1; font-size: 20px" href="contact.php"><?php echo $ml[2][$l];?></a></li>          
            <li><a style="color: #cc0700; font-size: 20px" href="#"><?php echo $ml[1][$l];?></a></li>
            <li class="last"><a style="color: #0282c1; font-size: 20px" href="situation.php"><?php echo $ml[4][$l];?></a></li>
        </ul>
      </nav>
    </aside>

    <?php if($lang=="fr"){?>
        <div style="display: block; width:630px; float: left; text-align: left" >
    <?php }else{?>
            <div style="display: block; width:630px; float: right; text-align: right" >
    <?php }?>
                <?php if($lang=="fr"){?>
                    <div style="display: block; width:450px; float: left; text-align: left" >
                <?php }else{?>
                    <div style="display: block; width:450px; float: right; text-align: right" >
                <?php }?>
        <div style="float:inherit; width:450px">
            <h2 style="text-transform:  none; margin: 5px; color: rgb(54, 54, 54); font-family: arial, sans-serif; font-size: 15px"><?php echo $ml[3][$l];?></h2>
        </div>
        </div>
    </div>
</div>
<div style="height: 300px"></div>
<?php
    $pagemaincontent = ob_get_contents();
    ob_end_clean();
    $PageId = "";
    include("masterpage.php");
?>
