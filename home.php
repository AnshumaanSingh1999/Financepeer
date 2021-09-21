<?php include_once("upload.php") ?>

<?php
session_start();
error_reporting(0);
?>
<html>
<head>
<title>User Authentication System</title>
<script src="linksfunctionality.js"></script>
</head>
<body>
<?php
if($_SESSION["username"]) {
?>
Welcome <?php echo htmlspecialchars($_SESSION["username"]); ?>.  <button id="logout" onclick="myFunction2()" type="button">Logout</button>
    
    <h1>Upload Document</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Submit" name="submit">
</form>
    
<?php
}else header("Location:index.php");
?>
</body>
</html>