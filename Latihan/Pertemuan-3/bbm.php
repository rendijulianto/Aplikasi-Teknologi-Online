<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Harga BBM</title>
    <style>
        td {
            text-align:right;
        }
        .tengah{
            text-align:center;
        }   
        /* .barisganjil{
            background-color: white;
        }
        .barisgenap{
            background-color:silver;
        } */
        /* tr:nth-child(even) {
            background: white;
        }
        tr:nth-child(odd) {
            background: silver;
        }    
         */
        tr:nth-child(2n+2) {
            background: white;
        }
        tr:nth-child(2n+3) {
            background: silver;
        }

    </style>
</head>
<body>
    <h1>Daftar Harga BMM</h1>
    <form method="POST">
        <table border="1">
            <tr>
                <th>Liter Awal</th>
                <th>Liter Akhir</th>
                <th>&nbsp;</th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="awal" value="<?php echo (isset($_POST["awal"])?$_POST["awal"]:"");?>" maxlength="3" size="2" />                 
                </td>
                <td>
                    <input type="text" name="akhir" value="<?php echo (isset($_POST["akhir"])?$_POST["akhir"]:"");?>" maxlength="3" size="2" />
                </td>
                <td>
                <input type="submit" name="tblsubmit" value="View" />
                </td>
            </tr>
        </table>
    </form>
    <?php
        define("HARGA_PREMIUM", 6550);
        define("HARGA_PERTALITE", 7600);
        define("HARGA_PERTAMAX", 8900);
        define("HARGA_SOLAR", 5150)

    ?>
       <?php 
        if(isset($_POST["tblsubmit"])){
            ?>
    <table border="1">
        <tr>
            <th>Liter</th>
            <th>Premium</th>
            <th>Pertalite</th>
            <th>Pertamax</th>
            <th>Solar</th>
        </tr>
    
    <?php 
        $awal =$_POST['awal'];
        $akhir = $_POST['akhir'];
        for($i=$awal; $i<=$akhir; $i++) {
            ?>
           <tr>
            
                <td class="tengah">
                    <?php echo $i;?>
                </td>
                <td >
                    <?php echo "Rp ".number_format($i*HARGA_PREMIUM,0,",",".");?>
                </td>
                <td >
                    <?php echo "Rp ".number_format($i*HARGA_PERTALITE,0,",",".");?>
                </td>
                <td >
                    <?php echo  "Rp ".number_format($i*HARGA_PERTAMAX,0,",",".");?>
                </td>
                <td>
                    <?php echo "Rp ".number_format($i*HARGA_SOLAR,0,",",".");?>
                </td>
            </tr>
            <?php
        }
    ?>
    </table>
    <?php 
        }
        ?>
</body>
</html>