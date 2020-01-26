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
    $conn=new mysqli("localhost","root","","wyniki");
    $zawodM="Zawody, w których wazna jest jest sprawność manualna, wrażliwy dotyk, skoordynowane uzycie oczu i rąk, zwinność, szybkość, siła, lub wytrzymałość. 
    Precyzyjne prace z użyciem narzędzi lub przyrządów(mechanika, rzemiosło, stolarz, projektant narzędzi";
    $zawodR="Obliczanie, działanie na liczbach,prowadzenie rachunkowości, wykonywanie inwentaryzacji,obliczanie z dużą dokładnością, umiejętności w dziedzinie arytmetyki, wykonywanie kalkulacji, precyzyjne formułowanie i ...";

$sql= "INSERT INTO m (id, wybor_zawodu)
VALUES ('null', '$komorkaM1'), ('null', '$komorkaM2'), ('null', '$komorkaM3')";

$wstawianie=$conn->query($sql);


$wypluwanie=$conn->query('SELECT COUNT(wybor_zawodu) FROM m where wybor_zawodu=2');
    while($row=$wypluwanie-> fetch_assoc()){
     echo $row['COUNT(wybor_zawodu)'];

echo "</br>";


$wypluwanieM=$row['COUNT(wybor_zawodu)'];

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