﻿<html>

<head>

    <title> test </title>
    <meta charset="utf-8" />
     <style>
         td 
         {
             text-align:center;
             padding:20px;

         }
         body
         {
             background-color:navajowhite;
         }
     </style>  
</head>

<body>

    <center>
        <h1>Test predyspozycji</h1>
        <h2> Oznacz fajeczką jeden z dwuch zawodów</h2>
    </center>
    

    <form action="Wyniki.php" method="POST">        <!--Całe form odwoluje sie do pliku - wysyla caly formularz do pliku-->
        <center>
            <input type="text" name="imie" /> Imię
            <input type="text" name="nazwisko" /> Nazwisko


            <table>

                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\Monter.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\Zegarmistrz.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaM1" value="1" /> Monter </td>
                    <td><input type="radio" name="komorkaM1" value="2" /> Zegarmistrz </td>
                </tr>


                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\Elektryk.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\Ksiegowy.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaM2" value="1" /> Mechanik </td>
                    <td><input type="radio" name="komorkaM2" value="2" /> Księgowy </td>
                </tr>


                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\mechanik.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\pracownik poczty.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaM3" value="1" /> Elektryk </td>
                    <td><input type="radio" name="komorkaM3" value="2" /> Fryzjer </td>
                </tr>


                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\mechanik.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\tlumacz.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaM4" value="1" /> Serwisant sprzętu </td>
                    <td><input type="radio" name="komorkaM4" value="2" /> Bloger </td>
                </tr>


                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\Serwisant.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\nauczyciel.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaM5" value="1" /> Hydraulik </td>
                    <td><input type="radio" name="komorkaM5" value="2" /> Historyk </td>
                </tr>

                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\hydraulik.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\doradca.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaM6" value="1" /> Pracownik budowlany </td>
                    <td><input type="radio" name="komorkaM6" value="2" /> Weterynarz </td>
                </tr>


                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\budowlaniec.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\kelner.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaM7" value="1" /> Krawiec </td>
                    <td><input type="radio" name="komorkaM7" value="2" /> Informatyk </td>
                </tr>

                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\rzemieslnik.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\kierowca.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaM8" value="1" /> Górnik </td>
                    <td><input type="radio" name="komorkaM8" value="2" /> Stewardesa </td>
                </tr>

                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\magazynier.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\pracownik lesny.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaM9" value="1" /> Magazynier </td>
                    <td><input type="radio" name="komorkaM9" value="2" /> Ekolog </td>
                </tr>

                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\Zegarmistrz.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\tancerz.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaM10" value="1" /> Stolarz </td>
                    <td><input type="radio" name="komorkaM10" value="2" /> Aktor </td>
                </tr>
				
				
				
				<tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\Monter.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\Zegarmistrz.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaR1" value="1" /> kasjer </td>
                    <td><input type="radio" name="komorkaR1" value="2" /> elektromechanik </td>
                </tr>


                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\Elektryk.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\Ksiegowy.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaR2" value="1" /> księgowy </td>
                    <td><input type="radio" name="komorkaR2" value="2" /> pracownik banku </td>
                </tr>


                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\mechanik.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\pracownik poczty.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaR3" value="1" /> matematyk </td>
                    <td><input type="radio" name="komorkaR3" value="2" /> youtuber </td>
                </tr>


                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\mechanik.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\tlumacz.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaR4" value="1" /> przedsiębiorca </td>
                    <td><input type="radio" name="komorkaR4" value="2" /> polityk </td>
                </tr>


                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\Serwisant.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\nauczyciel.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaR5" value="1" /> serwisant </td>
                    <td><input type="radio" name="komorkaR5" value="2" /> nauczyciel </td>
                </tr>

                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\hydraulik.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\doradca.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaR6" value="1" /> archiwista </td>
                    <td><input type="radio" name="komorkaR6" value="2" /> rehabilitant </td>
                </tr>


                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\budowlaniec.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\kelner.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaR7" value="1" /> Właściciel własnej działalności </td>
                    <td><input type="radio" name="komorkaR7" value="2" /> Programista </td>
                </tr>

                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\rzemieslnik.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\kierowca.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaR8" value="1" /> Pracownik biurowy </td>
                    <td><input type="radio" name="komorkaR8" value="2" /> Kurier </td>
                </tr>

                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\magazynier.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\pracownik lesny.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaR9" value="1" /> Technik administracji </td>
                    <td><input type="radio" name="komorkaR9" value="2" /> Instruktor jazdy konnej </td>
                </tr>

                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\Zegarmistrz.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\tancerz.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaR10" value="1" /> Księgowy </td>
                    <td><input type="radio" name="komorkaR10" value="2" /> Projektant mody </td>
                </tr>



				<tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\Monter.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\Zegarmistrz.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaH1" value="1" /> kasjer </td>
                    <td><input type="radio" name="komorkaH1" value="2" /> pracownik magazynu </td>
                </tr>


                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\Elektryk.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\Ksiegowy.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaH2" value="1" /> księgowy </td>
                    <td><input type="radio" name="komorkaH2" value="2" /> pracownik ochrony </td>
                </tr>


                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\mechanik.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\pracownik poczty.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaH3" value="1" /> mechanik samochodowy </td>
                    <td><input type="radio" name="komorkaH3" value="2" /> pracownik poczty </td>
                </tr>


                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\mechanik.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\tlumacz.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaH4" value="1" /> mechanik samochodowy </td>
                    <td><input type="radio" name="komorkaH4" value="2" /> tłumacz </td>
                </tr>


                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\Serwisant.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\nauczyciel.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaH5" value="1" /> serwisant </td>
                    <td><input type="radio" name="komorkaH5" value="2" /> nauczyciel </td>
                </tr>

                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\hydraulik.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\doradca.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaH6" value="1" /> hydraulik </td>
                    <td><input type="radio" name="komorkaH6" value="2" /> doradca zawodowy </td>
                </tr>


                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\budowlaniec.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\kelner.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaH7" value="1" /> budowlaniec </td>
                    <td><input type="radio" name="komorkaH7" value="2" /> kelner </td>
                </tr>

                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\rzemieslnik.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\kierowca.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaH8" value="1" /> rzemieślnik </td>
                    <td><input type="radio" name="komorkaH8" value="2" /> kierowca autobusu </td>
                </tr>

                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\magazynier.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\pracownik lesny.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaH9" value="1" /> pracownik magazynu </td>
                    <td><input type="radio" name="komorkaH9" value="2" /> pracownik leśny </td>
                </tr>

                <tr>
                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\Zegarmistrz.jpg" style="width:130px;height:150px;">
                    </td>

                    <td>
                        <img src="C:\xampp\htdocs\Magda_Projekt\Grafika\tancerz.jpg" style="width:130px;height:150px;">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaH10" value="1" /> zegarmistrz </td>
                    <td><input type="radio" name="komorkaH10" value="2" /> tancerz </td>
                </tr>



                <tr><td colspan="2"> <input type="submit" name="Wyslij" value="Wyślij test" /> </td></tr>

            </table>
        </center>
    </form>

   





</body>










</html>


