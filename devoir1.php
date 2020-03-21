                       

                                                           <--SAIDI SOUAD--><-- OUHMOUD HAYAT -->
<?php
// Exercice 1 :

$images = array('f1.jpg','leg1.jpg','leg5.jpg','leg3.jpg','leg6.jpg','leg2.jpg',);
shuffle($images);
echo'<br><h1 align="center"><b> Délice des Fruits & légumes</b></h1><br><br>';
echo '<table style="position:relative;left:60px;>';
echo '<tr ">';

for($i=0;$i<=3;$i++)
{
	 echo '<td><div  class="image">';
    echo '<img  src= " ' .$images[$i].'"   style="width:300px;height:300px;margin-right:100px;>';
    echo '</div></td>';
}
echo "</tr></table>";



// Exercice 2:


  $f=fopen("commande.txt","r");
   while(!feof($f))
   {
   	$ligne=fgets($f);
   	  if(!empty($ligne))
   	  {
   	  	$T=explode("|",$ligne);
   	  	for($i=0;$i<6)
   	  	 print_r($T[$i]);
   	  	 echo "<br>";

   	  }
   }
   fclose($f);*/

// Exercice 3:


 echo "<h1 align=center>Centrale d'achats</h1>";
 echo "<h3>Commande clients</h3>";
 echo "<table border=2>";
   	  	 echo '<tr bgcolor="#6495ED" >';
   	  	 echo '<th> Numero de commande</th>';
   	  	 echo "<th>Numero de Client</th>";
   	  	 echo "<th>Date de commande</th>";
   	  	 echo "<th>Désignation article</th>";
   	  	 echo "<th> Quantité (Pal)</th>";
   	  	 echo "<th> Prix unitaire (Dh)</th>";
   	  	 echo "<th> Date de livraison</th> ";
   	  	 echo " <th> Adresse client </th></tr>";
   $f=fopen("commande.txt","r");
   while(!feof($f))
   {
   	$ligne=fgets($f);
   	  if(!empty($ligne))
   	  {
   	  	$T=explode("|",$ligne);
          echo "<tr>";
          echo "<td style=\"padding: 5px;\">$T[0]</td>";
          echo "<td>$T[1]</td>";
          echo "<td>$T[2]</td>";
          echo "<td>$T[3]</td>";
          echo "<td>$T[4]</td>";
          echo "<td>$T[5]</td>";
          echo "<td>$T[2]</td>";
          echo "<td>$T[6]</td></tr>";
   	  }
   }
   fclose($f);
   echo "</table>";
?>