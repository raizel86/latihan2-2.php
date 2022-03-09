<?php
    //inisialisasi variable yang digunakan
    //nama peralatan
    $brg1="Buku";
    $brg2="Mouse";
    $brg3="FlashDisk";
    $brg4="pulpen";
    
    //Harga per unit peralatan
    $harga1=17500;
    $harga2=30000;
    $harga3=70000;
    $harga4=22300;

    //jumlah peralatan yang ada
    $jmlbrg1=2;
    $jmlbrg2=5;
    $jmlbrg3=1;
    $jmlbrg4=3;

    //total harga per jenis peralatan
    $th1= $jmlbrg1*$harga1;
    $th2= $jmlbrg2*$harga2;
    $th3= $jmlbrg3*$harga3;
    $th4= $jmlbrg4*$harga4;
    
    //hitung grand total nilai peralatan
    $tharga = $th1 + $th2 + $th3 + $th4;
    //besar diskon
    $diskon = 5;
    //jumlah total diskon yang diberikan
    $tdiskon = ($diskon*$tharga)/100;
    //jumlah yang harsu dibayar
    $tdibayar = $tharga - $tdiskon;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar peralatan yang dibeli</title>
    <style>
        body {
            font-size: 14pt;
            font-family: sans-serif;
        }

        table {
            font-size: 25pt;
        }

        .php {
            font-size: 20px;
            color: blue;
            border: 1px;
        }
    </style>
</head>

<body>
    <center>
        <h1 class="php">Contoh Perhitungan dengan PHP</h1>
    <table border="1" cellspacing="0" cellpadding="3">
            <tr>
                <td colspan="4" align="center" valign="middle">
                    <b>Daftar Pemesanan Peralatan Kantor</b>
                </td>
            </tr>
            <tr>
                <td><b>Nama Peralatan</b></td>
                <td><b>Jumlah</b></td>
                <td><b>Harga Satuan</b></td>
                <td><b>Jumlah Harga</b></td>
            </tr>
            <?php
                //Mulah untuk mengisi tabel daftar dengan data yang ada
            ?>
            <tr>
                <td align="left"><?php echo $brg1;?></td>
                <td align="left"><?php echo $jmlbrg1;?></td>
                <td align="left"><?php echo $harga1;?></td>
                <td align="left"><?php echo $th1;?></td>
            </tr>
            <tr>
                <td align="left"><?php echo $brg2;?></td>
                <td align="left"><?php echo $jmlbrg2;?></td>
                <td align="left"><?php echo $harga2;?></td>
                <td align="left"><?php echo $th2;?></td>
            </tr>
            <tr>
                <td align="left"><?php echo $brg3;?></td>
                <td align="left"><?php echo $jmlbrg3;?></td>
                <td align="left"><?php echo $harga3;?></td>
                <td align="left"><?php echo $th3;?></td>
            </tr>
            <tr>
                <td align="left"><?php echo $brg4;?></td>
                <td align="left"><?php echo $jmlbrg4;?></td>
                <td align="left"><?php echo $harga4;?></td>
                <td align="left"><?php echo $th4;?></td>
            </tr>
            <tr>
                <td colspan="3" align="right">Total Harga</td>
                <td align="right"><?php echo $tharga; ?></td>
            </tr>   
            <tr>
                <td colspan="3" align right>
                    Diskon <?php echo "($diskon % )";?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="right">Jumlah harus dibayar</td>
                <td align="right"><?php echo $tdibayar;?></td>
            </tr>
        </table>
    </center>
</body>

</html>