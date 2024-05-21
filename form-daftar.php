<!DOCTYPE html>
<html>
<head>
 <title>Formulir Pendaftaran Siswa Baru</title>
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
<body>

 <form action="proses-pendaftaran.php" method="POST">
 <fieldset>
 <p>
 <label for="nama">Nama: </label>
 <input type="text" name="nama" placeholder="nama lengkap" />
 </p>
 <p>
 <label for="alamat">Alamat: </label>
 <textarea name="alamat"></textarea>
 </p>
 <p>
 <label for="jenis_kelamin">Jenis Kelamin: </label>
 <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Lakilaki</label>
 <label><input type="radio" name="jenis_kelamin" value="perempuan">
Perempuan</label>
 </p>
 <p>
 <label for="agama">Agama: </label>
 <select name="agama">
 <option>Islam</option>
 <option>Kristen</option>
 <option>Hindu</option>
 <option>Budha</option>
 <option>Atheis</option>
 </select>
 </p>
 <p>
 <label for="sekolah_asal">Sekolah Asal: </label>
 <input type="text" name="sekolah_asal" placeholder="nama sekolah" />
 </p>
 <p>
 <input type="submit" value="Daftar" name="daftar" />
 </p>
 </fieldset>
 </form>
 </body>
</html>