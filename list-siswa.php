<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
 <title>Pendaftaran Siswa Baru</title>
 <style>
     body {

        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        background-color: #e5c494; /* Background color */
         color: #3d2c21; /* Text color */
         margin: 0;
         padding: 0;
     }

     header {
         background-color: #4c2a0a; /* Header background color */
         color: #fff; /* Header text color */
         padding: 20px;
         text-align: center;
     }

     nav {
         background-color: #4c2a0a; /* Navigation background color */
         padding: 10px 0;
         text-align: center;
     }

     nav a {
         color: #fff; /* Navigation link color */
         text-decoration: none;
         padding: 5px 10px;
         border-radius: 5px;
         margin: 0 10px;
     }

     nav a:hover {
         background-color: #6d3e17; /* Navigation link hover background color */
     }

     table {
         width: 100%;
         border-collapse: collapse;
         margin-top: 20px;
     }

     th, td {
         padding: 10px;
         text-align: left;
         border: 1px solid #3d2c21; /* Table border color */
     }

     th {
         background-color: #4c2a0a; /* Table header background color */
         color: #fff; /* Table header text color */
     }

     tbody tr:nth-child(even) {
         background-color: #d0a060; /* Even row background color */
     }

     p {
         margin-top: 20px;
         text-align: center;
     }
 </style>
</head>

<body>
 <header>
 <h3>Siswa yang sudah mendaftar</h3>
 </header>
 <nav>
 <a href="form-daftar.php">[+] Tambah Baru</a>
 </nav>
 <br>
 <table border="1">
 <thead>
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Alamat</th>
 <th>Jenis Kelamin</th>
 <th>Agama</th>
 <th>Sekolah Asal</th>
 <th>Tindakan</th>
 </tr>
 </thead>
 <tbody>

<?php
 $sql = "SELECT * FROM calon_siswa";
 $query = mysqli_query($db, $sql);
 while($siswa = mysqli_fetch_array($query)){
 echo "<tr>";
 echo "<td>".$siswa['id']."</td>";
 echo "<td>".$siswa['nama']."</td>";
 echo "<td>".$siswa['alamat']."</td>";
 echo "<td>".$siswa['jenis_kelamin']."</td>";
 echo "<td>".$siswa['agama']."</td>";
 echo "<td>".$siswa['sekolah_asal']."</td>";
 echo "<td>";
 echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
 echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
 echo "</td>";
 echo "</tr>";
 }
 ?>
 </tbody>
 </table>
 <p>Total: <?php echo mysqli_num_rows($query) ?></p>
 </body>
</html>