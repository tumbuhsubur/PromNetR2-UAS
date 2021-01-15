<?php
    include ("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Reservasi Zoom</title>
</head>

<body>
    <header>
        <h1>Tambah Data Reservasi Zoom Meeting Room FTP UB</h1>
    </header>

    <nav>
        <a href="index.php">Listing Data Reservasi</a>
    </nav>
    <br>

    <form action="proses-penambahan.php" method="POST">

        <fieldset>
            
            <table id="TambahData" border="0">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor HP</th>
                    <th>Kegiatan</th>
                    <th>Judul Kegiatan</th>
                    <th>Tanggal</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                </tr>

                <tr>
                <!-- <td>1</td> -->
                    <td><input type="text" name="nama" id="nama" placeholder="Masukkan nama lengkap" required="required" data-validation-required-message="Masukkan Nama Lengkap anda !."></td>
                    <td><input type="text" name="email" id="email" placeholder="Masukkan email" required="required" data-validation-required-message="Masukkan Email Anda !."></td>
                    <td><input type="text" name="nomorhp" id="nomorhp" placeholder="Masukkan nomor HP" required="required" data-validation-required-message="Masukkan Nomor HP Anda !."></td>
                    <td><select name="kegiatan"><option value="Kuliah">Kuliah</option><option value="Seminar">Seminar</option><option value="Ujian">Ujian</option></select></td>
                    <td><input type="text" name="nama_kegiatan" id="nama_kegiatan" placeholder="Nama / Judul Kegiatan" required="required" data-validation-required-message="Masukkan Nama / Judul Kegiatan Anda !."></td>
                    <td><input type="date" name="tanggal" id="tanggal" ></td>
                    <td><input type="time" name="jam_mulai" id="jam_mulai"></td>
                    <td><input type="time" name="jam_selesai" id="jam_selesai"></td>
                
                </tr>
               <!--  <tr>
                    <td><input type="text" name="nama" placeholder="Nama Lengkap" /></td>
                    <td><input type="text" name="nomorhp" placeholder="Nomor HP" /></td>
                    <td><input type="text" name="email" placeholder="Email@domain.com" /></td>
                    <td><select name="kegiatan">
                        <option>Kuliah</option>
                        <option>Ujian</option>
                        <option>Seminar</option>
                        </select></td>
                    <td><input type="text" name="nama_kegiatan" placeholder="Judul Kegiatan"/></td>
                </tr>
                <tr><td></td></tr> -->

                <tr>
                    <td><input type="submit" value="Tambah" name="tambah" /></td>
                </tr>
            </table>
        
        </fieldset>
        <br>
        
    </form>

    </body>
</html>