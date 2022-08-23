<html>
<head>
    <title>Tugas 2</title>
</head>
<body>
    <h1>Menghitung Fungsi</h1>

    <form name="fungsi" action="tugas2.php" method="post">
        <table>
            <tr>
                <td>Masukkan Bilangan :</td>
                <td><input type="text" name="bilangan"></td>
            </tr>
            <tr>
                <td>Masukkan Pilihan :</td>
                <td><select name="pilihan">
                    <option value="faktorial">Faktorial</option>
                    <option value="fibonacci">Fibonacci</option>
                    <option value="konversi">Konversi Suhu</option>
                    </select>
                </td>      
            </tr>
            <tr>
                <td><button type="submit">Proses</button></td>
            </tr>
        </table>
    </form>
    
    <?php
    $bilangan = @$_POST["bilangan"];
    $pilihan = @$_POST["pilihan"];
    function faktorial($bilangan){
        if($bilangan==0 or $bilangan==1){
            return 1;
        }else{
            return($bilangan*faktorial($bilangan-1));
        }

    }function fibonacci($bilangan){
        $angka1 = 0;
        $angka2 = 1;
        $hasil = 0;
        for($i=1; $i<=$bilangan; $i++){
            $hasil = $angka1+$angka2;
            echo "$hasil ";
            $angka2 = $angka1;
            $angka1 = $hasil;
        }

    }function konversi($bilangan){
        $celcius = $bilangan;
        $fahrenheit = (9/5*$celcius)+32;
        $reamur = (4/9*$celcius)+32;
        $kelvin = 273+$celcius;
        echo 'Celcius =', $celcius, 'derajat <br>';
        echo 'Fahrenheit =', $fahrenheit, 'derajat <br>';
        echo 'Reamur =', $reamur, 'derajat <br>';
        echo 'Kelvin =', $kelvin, 'derajat <br>';
    }if($pilihan=="faktorial"){
        echo 'Hasil ', $bilangan, ' Faktorial adalah ', faktorial($bilangan);
    }elseif($pilihan=="fibonacci"){
        echo 'Hasil ', $bilangan, 'Fibonacci adalah ', fibonacci($bilangan);
    }elseif($pilihan=='konversi'){
        echo 'Hasil Konversi Suhu adalah <br> ', konversi($bilangan);
    }
    ?>

</body>
</html>