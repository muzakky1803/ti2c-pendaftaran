<?php
include("config.php");
// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
 header('Location: list-siswa.php');
}
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);
// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
   }
   ?>
   <!DOCTYPE html>
   <html>
   <head>
    <title>Formulir Edit Siswa</title>
    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: #e5c494; /* Background color */
            color: #3d2c21; /* Text color */
            margin: 0;
            padding: 0;
        }

        form {
            background-color: #d0a060; /* Form background color */
            padding: 20px;
            margin: 50px auto;
            width: 400px;
            border-radius: 10px;
        }

        fieldset {
            border: none;
            margin: 0;
            padding: 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #3d2c21; /* Border color */
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #4c2a0a; /* Submit button background color */
            color: #fff; /* Submit button text color */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #6d3e17; /* Hover background color */
        }
    </style>
   </head>
   
  
    <form action="proses-edit.php" method="POST">
    <fieldset>
    <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
    <p>
    <label for="nama">Nama: </label>
    <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo
   $siswa['nama'] ?>" />
    </p>
    <p>
    <label for="alamat">Alamat: </label>
    <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
    </p>
    <p>
    <label for="jenis_kelamin">Jenis Kelamin: </label>
    <?php $jk = $siswa['jenis_kelamin']; ?>
    <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php
   echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
    <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php
   echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
    </p>
    <p>
    <label for="agama">Agama: </label>
    <?php $agama = $siswa['agama']; ?>
    <select name="agama">
    <option <?php echo ($agama == 'Islam') ? "selected": ""
   ?>>Islam</option>
    <option <?php echo ($agama == 'Kristen') ? "selected": ""
   ?>>Kristen</option>
    <option <?php echo ($agama == 'Hindu') ? "selected": ""
   ?>>Hindu</option>
    <option <?php echo ($agama == 'Budha') ? "selected": ""
   ?>>Budha</option>
    <option <?php echo ($agama == 'Atheis') ? "selected": ""
   ?>>Atheis</option>
    </select>
    </p>
    <p>
    <label for="sekolah_asal">Sekolah Asal: </label>
    <input type="text" name="sekolah_asal" placeholder="nama sekolah"
value="<?php echo $siswa['sekolah_asal'] ?>" />
 </p>
 <p>
 <input type="submit" value="Simpan" name="simpan" />
 </p>
 </fieldset>
 </form>
 </body>
</html>