<html>
    <head>
        <title>Tugas 1</title>
    </head>
    <body>
        <h1>Pemilihan Tampilan Text</h1>
        <form name="Tugas_1" method="post" action="tugas1.php">
            <table>
                <tr>
                    <td>Teks :</td>
                    <td><input type="text" name="kalimat"></td>
                </tr>
                <tr>
                    <td>Ditampilkan Sebanyak :</td>
                    <td><select name="opsi">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Lakukan :</td>
                    <td><input type="radio" name="pilihan" value="break">break</td>
                    <td><input type="radio" name="pilihan" value="continue">continue</td>
                </tr>
                <tr>
                    <td>Pada Hitungan Ke :</td>
                    <td><select name="hitungan">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="proses" value="Proses"></td>
                </tr>
            </table>
        </form>
        <?php
            $kalimat = @$_POST['kalimat'];
            $opsi = @$_POST['opsi'];
            $pilihan = @$_POST['pilihan'];
            $hitungan = @$_POST['hitungan'];
            # di sini nanti kita akan tampilkan outputnya

            for($angka=1; $angka<=$opsi; $angka++){
                if($angka==$hitungan){
                    if($pilihan=='break'){
                        echo ('hitungan ke-' .$angka.' : ' .$pilihan.'<br>');
                        break;
                    }else if($pilihan=='continue'){
                        echo ('hitungan ke-' .$angka.' : '.$pilihan.'<br>');
                        continue;
                    }
                }
                echo 'hitungan ke-',$angka,' : ',$kalimat,'<br>';
            }
        ?>
    
    </body>
</html>