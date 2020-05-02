<html>
 <head>
  <title>
   Wyniki
  </title>
 </head>
 
 <body>

 <?php

 if(isset($_POST['imie']))

{
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
	
    $komorkaM1=$_POST['komorkaM1'];
    $komorkaM2=$_POST['komorkaM2'];
    $komorkaM3=$_POST['komorkaM3'];
    $komorkaM4=$_POST['komorkaM4'];
	$komorkaM5=$_POST['komorkaM5'];
	$komorkaM6=$_POST['komorkaM6'];
	$komorkaM7=$_POST['komorkaM7'];
	$komorkaM8=$_POST['komorkaM8'];
	$komorkaM9=$_POST['komorkaM9'];
	$komorkaM10=$_POST['komorkaM10'];
	
	$komorkaR1=$_POST['komorkaR1'];
    $komorkaR2=$_POST['komorkaR2'];
    $komorkaR3=$_POST['komorkaR3'];
    $komorkaR4=$_POST['komorkaR4'];
	$komorkaR5=$_POST['komorkaR5'];
	$komorkaR6=$_POST['komorkaR6'];
	$komorkaR7=$_POST['komorkaR7'];
	$komorkaR8=$_POST['komorkaR8'];
	$komorkaR9=$_POST['komorkaR9'];
	$komorkaR10=$_POST['komorkaR10'];
	
	$komorkaH1=$_POST['komorkaH1'];
    $komorkaH2=$_POST['komorkaH2'];
    $komorkaH3=$_POST['komorkaH3'];
    $komorkaH4=$_POST['komorkaH4'];
	$komorkaH5=$_POST['komorkaH5'];
	$komorkaH6=$_POST['komorkaH6'];
	$komorkaH7=$_POST['komorkaH7'];
	$komorkaH8=$_POST['komorkaH8'];
	$komorkaH9=$_POST['komorkaH9'];
	$komorkaH10=$_POST['komorkaH10'];
	
    $conn=new mysqli("localhost","root","","wyniki");
	
    $zawodM="Zawody, w których wazna jest jest sprawność manualna, wrażliwy dotyk, skoordynowane uzycie oczu i rąk, zwinność, szybkość, siła, lub wytrzymałość. 
    Precyzyjne prace z użyciem narzędzi lub przyrządów(mechanika, rzemiosło, stolarz, projektant narzędzi";
    
	$zawodR="Obliczanie, działanie na liczbach,prowadzenie rachunkowości, wykonywanie inwentaryzacji,obliczanie z dużą dokładnością, umiejętności w dziedzinie arytmetyki, wykonywanie kalkulacji, precyzyjne formułowanie i ...";

	$sql="INSERT INTO m (id, wybor_zawodu)	VALUES 
	 ('null', '$komorkaM1'), ('null', '$komorkaM2'), ('null', '$komorkaM3'), ('null', '$komorkaM4')
	,('null', '$komorkaM5'), ('null', '$komorkaM6'), ('null', '$komorkaM7'), ('null', '$komorkaM8'), ('null', '$komorkaM9'), ('null', '$komorkaM10')
	,('null', '$komorkaR1'), ('null', '$komorkaR2'), ('null', '$komorkaR3'), ('null', '$komorkaR4'), ('null', '$komorkaR5'), ('null', '$komorkaR6')
	,('null', '$komorkaR7'), ('null', '$komorkaR8'), ('null', '$komorkaR9'), ('null', '$komorkaR10'), ('null', '$komorkaH1'), ('null', '$komorkaH2')
	,('null', '$komorkaH3'), ('null', '$komorkaH4'), ('null', '$komorkaH5'), ('null', '$komorkaH6'), ('null', '$komorkaH7'), ('null', '$komorkaH8')
	,('null', '$komorkaH9'), ('null', '$komorkaH10')";


$wstawianie=$conn->query($sql);




$PionM=$conn->query('SELECT COUNT(wybor_zawodu) FROM m where wybor_zawodu=1 and id<=10');
    while($row=$PionM-> fetch_assoc()){
     echo $row['COUNT(wybor_zawodu)'];
	 }
echo "Ilosc jedeynek pionem w M";

echo "<br>";



$PoziomM=$conn->query('SELECT COUNT(wybor_zawodu) FROM m where id in (1, 11, 21, 23) and wybor_zawodu=2');
    while($row2=$PoziomM-> fetch_assoc()){
     echo $row2['COUNT(wybor_zawodu)'];
	
echo "Ilosc dwujek poziom w M";	
 
	 echo "</br>";
	 
$WypluwanieM2=$row2['COUNT(wybor_zawodu)'];
echo $WypluwanieM2;

	
	
	 }


echo "</br>";

$wypluwanie=$conn->query('SELECT COUNT(wybor_zawodu) FROM m where wybor_zawodu=1 and id<=10');
    while($row=$wypluwanie-> fetch_assoc()){
     echo $row['COUNT(wybor_zawodu)'];

echo "</br>";




$wypluwanieS=$row['COUNT(wybor_zawodu)'];
echo $wypluwanieS;

echo "</br>";

$wypluwanieM= $wypluwanieS+$WypluwanieM2;
echo "Wyinik dla M";

echo $wypluwanieM;

echo "</br>";

if ($wypluwanieM<5) 

    $predyspozycjeM= "Niezainteresowany";

    elseif ($wypluwanieM>=5 & $wypluwanieM<=9) 
    
    $predyspozycjeM= "Małe zainteresowanie";
	
    elseif ($wypluwanieM >=10 & $wypluwanieM<=14 ) 
    
    $predyspozycjeM= "zainteresowanie zawodem";
    
    elseif ($wypluwanieM>15) 
    
    $predyspozycjeM= "Duże zainteresowanie zawodem";

    echo $predyspozycjeM;

	
	}
$conn->close();

}


 ?>

 </body>

</html>