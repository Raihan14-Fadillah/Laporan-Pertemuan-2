<!DOCTYPE html>
<html>
    <head>
        <title>
            Daftar Riwayat Hidup
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2>
            Daftar Riwayat Hidup<br>
            Peserta Pengembangan Aplikasi Web<br>
            Lab TIA Universitas Trunojoyo<br>
        </h2>
        <table>
            <tr>
                <td><b><u>Data Diri</u></b></td>
            </tr>
            <tr>
                <td>
                    <?php
                        echo("Nama   : Raihan Fadillah <br><br>");
                        echo("NIM    : 210411100003 <br><br>");
                        echo("TTL    : Sumenep, 14 Agustus 2002 <br><br>");
                        echo("Gender : Laki-Laki <br><br>");
                        echo("Alamat : Saronggi Sumenep Jawa Timur <br><br>");
                        echo("Kos    : Jl. Raya Keraton Telang Bangkalan <br><br>")
                    ?> 
                </td>
                <td></td>
                <td>        
                    <img id="foto" src="raihan.jpeg" width="160" height="240">
                </td>
            </tr>
        </table>
        <br>
        <div class="ten">
        <label for="judul-1" id="judul1"></label><br><br>
        <label for="isi-1" id="isi1"></label><br><br>
        <label for="isi-2" id="isi2"></label><br><br>
        <label for="isi-3" id="isi3"></label>
        </div>

        <script>
            judul1=document.getElementById("judul1")
            isi1=document.getElementById("isi1")
            isi2=document.getElementById("isi2")
            isi3=document.getElementById("isi3")

            judul1.innerHTML="<b><u>Minat Bahasa Pemrograman</u></b>"
            isi1.innerHTML=" | HTML (<em>Hypertext Markup Language</em>) | "
            isi2.innerHTML=" | Java | "
            isi3.innerHTML=" | Python | "
        </script>
    </body>
</html>