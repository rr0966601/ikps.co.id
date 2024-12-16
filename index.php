<?php include 'include/ikps.co.id.php';?>
<?php 
ob_start();
session_start(); 
include "include/config.php";

if (isset($_GET["home"])) {$title='PT INDOKHARISMA PANGAN SEMESTA - IKPS';} 
else if (isset($_GET["aboutus"])) {$title='Tentang Kami - IKPS';}
else if (isset($_GET["product"])) {$title='Produk - IKPS';}
else if (isset($_GET["channel"])) {$title='Kanal - IKPS';}
else if (isset($_GET["recipe"])) {$title='Resep - IKPS';}
else if (isset($_GET["contact"])) {$title='Hubungi Kami - IKPS';} 
else if (isset($_GET["jurnal"]))  {$title='Catatan - IKPS';}
else {$title='PT INDOKHARISMA PANGAN SEMESTA - IKPS';}

include "include/head.php";
date_default_timezone_set("Asia/Jakarta");
?>

<?php include("include/header.php") ?>    
<div class="container-fluid" id="wrapper">
  <?php 
    if (isset($_GET["home"])) {include("include/frontpage.php");} 
    else if (isset($_GET["aboutus"])) {include("include/aboutus.php");} 
    else if (isset($_GET["product"])) {include("include/product.php");}
    else if (isset($_GET["promo"])) {include("include/promo.php");}
    else if (isset($_GET["channel"])) {include("include/channel.php");}
    else if (isset($_GET["recipe"])) {include("include/recipe.php");}   
    else if (isset($_GET["contact"])) {include("include/contact.php");}
    else if (isset($_GET["career"])) {include("include/career.php");}
    else if (isset($_GET["careerapply"])) {include("include/careerapply.php");}
    else if (isset($_GET["jurnal"]))  {include("include/jurnal.php");}
    else {include("include/frontpage.php");} 
  ?>        
</div>   
<?php include("include/footer.php") ?>
