<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form name="diri" method="post" action="LapPertemuan2.php">
            <h2>DATA DIRI PESERTA PAW 3C</h2>
            <h2>LAB TIA UTM</h2>
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td>Nim</td>
                    <td><input type="text" name="nim" id="nim"></td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td><input type="text" name="prodi" id="prodi"></td>
                </tr>
                <tr>
                    <td>Angkatan</td>
                    <td><input type="text" name="ang" id="ang"></td>
                </tr>
                <tr>
                    <td>Bahasa Pemrograman Yang Diminati</td>
                    <td><select name="bahasa" id="bahasa">
                        <option value="pilih">Pilih</option>
                        <option value="Python">Python</option>
                        <option value="Html">HTML</option>
                        <option value="Java">Java</option>
                    </select></td>
                </tr>
                <tr><td colspan="2"><input type="submit" name="Log in" value="Log in"> <input type="reset" value="KOSONGKAN"></td></tr>
            </table>
            <table>
            <tr>
                    <td>Nama Lengkap : </td>
                    <td><div class="jw"><?php
                        $nama=$_POST['nama'];
                        print($nama);
                    ?></div></td>
                </tr>
                <tr>
                    <td>Nim</td>
                    <td><div class="jw"><?php
                        $nim=$_POST['nim'];
                        print($nim);
                    ?></div></td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td><div class="jw"><?php
                        $prodi=$_POST['prodi'];
                        print($prodi);
                    ?></div></td>
                </tr>
                <tr>
                    <td>Angkatan</td>
                    <td><div class="jw"><?php
                        $angkatan=$_POST['ang'];
                        $m = array("18","2018","19","2019","20","2020","21","2021","22","2022");
                        for ($i=0; $i < count($m); $i++) { 
                            $flag = "none";
                            if($m[$i]==$angkatan){
                                if($i<=4){
                                    $flag=" Angkatan Tua";
                                }else{
                                    $flag=" Angkatan Muda";
                                }
                                break;
                            }else{
                                $flag=" Angkatan Unknown";
                            }
                        }    
                        print("Anda Adalah".$flag."<br>");
                    ?></div></td>
                    <tr>
                        <td>Bahasa Pemrograman Yang diminati</td>
                        <td><div class="jw"><?php
                            $bahasa=$_POST['bahasa'];
                            $n = array("Python","Html","Java");
                            for ($i=0; $i < count($n); $i++) { 
                                $basa = "none";
                                if($n[$i]==$bahasa){
                                    if($i==0){
                                        $basa=" Alpro dan Strukdat";
                                    }elseif($i==1){
                                        $basa=" PAW dan DPW";
                                    }else{
                                        $basa=" PBO";
                                    }
                                    break;
                                }else{
                                    $basa=" gaminat yaudah";
                                }
                            }    
                            print("Anda Pasti suka".$basa."<br>");
                            ?></div></td>
                    </tr>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>