<html>

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
                        <img src="https://media.istockphoto.com/vectors/running-mechanic-vector-id165812301" high="100" width="100" />
                    </td>

                    <td>
                        <image src="https://st3.depositphotos.com/5966606/13742/v/1600/depositphotos_137424268-stock-illustration-watchmaker-character-from-switzerland-with.jpg" high="100" width="100" />
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaM1" value="1" /> Monter </td>
                    <td><input type="radio" name="komorkaM1" value="2" /> Zegarmistrz </td>
                </tr>


                <tr>
                    <td>
                        <img src="https://thumbs.dreamstime.com/z/elektryk-30694651.jpg" high="100" width="100" />
                    </td>

                    <td>
                        <image src="https://media.istockphoto.com/vectors/accountant-vector-id530484619" high="100" width="100" />
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaM2" value="1" /> elektryk </td>
                    <td><input type="radio" name="komorkaM2" value="2" /> księgowy </td>
                </tr>


                <tr>
                    <td>
                        <img src="https://previews.123rf.com/images/warawiri/warawiri1709/warawiri170900001/85874046-happy-mechanic-icon-.jpg" high="100" width="100" />
                    </td>

                    <td>
                        <image src="https://st3.depositphotos.com/4297405/14248/v/1600/depositphotos_142485827-stock-illustration-illustration-depicting-a-man-postal.jpg" high="100" width="100" />
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="komorkaM3" value="1" /> mechanik samochodowy </td>
                    <td><input type="radio" name="komorkaM3" value="2" /> pracownik poczty </td>
                </tr>

                <tr><td colspan="2"> <input type="submit" name="Wyslij" value="Wyślij test" /> </td></tr>

            </table>
        </center>
    </form>

   





</body>










</html>


