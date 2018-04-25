<?php
	session_start();
	include("../lib/koneksi.php");
	define("INDEX",true);
?>
<html>
<head>
    <title>HALAMAN ADMINISTRATOR</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div id="container">
        <div id="header">
        <h1>HALAMAN ADMIN</h1>
        </div>
        
        <div id="menu">
        	<?php include("menu.php"); ?>
        </div>
        
        <div id="content">
        	<?php include("konten.php"); ?>
        </div>
        
        <div id="footer">
        <p>Copyright &copy; “Tio Saputra”</p>
        </div>
    </div>
</body>
</html>