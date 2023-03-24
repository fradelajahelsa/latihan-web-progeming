
<?php
$pr ="p1";
if(isset($_GET ["pg"])){
$pr=$_GET ["pg"];
}
$konten ="";
$judulpage ="";

 switch($pr){
        case "p1":
            $judulpage="Halaman 1";
            $konten ="<h3>Halaman p1</h3>";
            $konten ="<p>Menampilakn halaman p1</p>";
            break;
        case "p2":
          
            $judulpage="Halaman 2";
            $konten ="<h3>Halaman p1</h3>";
            $konten ="<p>Menampilakn halaman p1</p>";
            break;
        
        case "p3"
            $judulpage="Halaman 3";
            $konten ="<h3>Halaman p1</h3>";
            $konten ="<p>Menampilakn halaman p1</p>";
            break;
     default:
     $judulpage="Halaman 3";
     $konten ="<h3>Halaman p1</h3>";
     $konten ="<p>Menampilakn halaman p1</p>";
     break;
        }
    ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$judulpage; ?> </title>
</head>
<body>

<a href ="latihan3.php?pg=p1"> halaman 1</a> <a href ="latihan3.php?pg=p2"> halaman 2 </a> <a href ="latihan3.php?pg=p3"> halaman 3</a>
     <?php
     echo $konten;
     ?>

    </body>
    </html>

        

        