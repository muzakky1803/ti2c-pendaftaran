<!DOCTYPE html>
<html>
<head>
 <title>Pendaftaran Siswa Baru</title>
 <style>
     body {
         font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
         background-color: #e5c494; 
         color: #3d2c21; 
         margin: 0;
         padding: 0;
     }

     header {
         background-color: #4c2a0a; 
         color: #fff; 
         padding: 20px;
         text-align: center;
         margin-bottom: 20px;
     }

     h3 {
         margin: 0;
     }

     h1 {
         margin-top: 5px;
         font-size: 32px;
     }

     h4 {
         color: #4c2a0a; 
         padding-top: 100px;
         margin-left: auto;
         margin-right: auto;
         width: fit-content;
     }

     nav {
         text-align: center;
         
     }

     nav ul {
         list-style-type: none;
         margin: 0;
         padding: 0;
         display: flex;
         justify-content: center;
     }

     nav ul li {
         display: inline;
         margin-right: 20px;
     }

     nav ul li a {
         color: #3d2c21; 
         text-decoration: none;
         background-color: #4c2a0a;
         color: #fff;
        
     }

     nav ul li a:hover {
         background-color: #fff;
         color: #4c2a0a;
     }

     p {
         color: #3d2c21; 
         text-align: center;
     }
 </style>
</head>

<body>
 <header>
 <h3>Pendaftaran Siswa Baru</h3>
 <h1>DIGITAL TALENT</h1>
 </header>
 <h4>Menu</h4>
 <nav>
 <ul>
 <li><a href="form-daftar.php">Daftar Baru</a></li>
 <li><a href="list-siswa.php">Pendaftar</a></li>
 </ul>
 </nav>
 <?php if(isset($_GET['status'])): ?>
    <p>
 <?php
 if($_GET['status'] == 'sukses'){
 echo "Pendaftaran siswa baru berhasil!";
 } else {
 echo "Pendaftaran gagal!";
 }
 ?>
 </p>
<?php endif; ?>
 </body>
</html>
