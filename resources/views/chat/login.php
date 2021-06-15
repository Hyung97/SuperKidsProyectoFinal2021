<br/><br/>
<?php 
if(isset($_POST['name']) && !isset($display_case)){
 $name=htmlspecialchars($_POST['name']);
 $sql=$dbh->prepare("SELECT name FROM chatters WHERE name=?");
 $sql->execute(array($name));
 if($sql->rowCount()!=0 || $_POST['name'] == ""){
  $ermsg="<div class='error'></div>";
 }else{
  $sql=$dbh->prepare("INSERT INTO chatters (name,seen) VALUES (?,NOW())");
  $sql->execute(array($name));
  $_SESSION['user']=$name;
 }
}elseif(isset($display_case)){
 if(!isset($ermsg)){
?>
<script src="jquery.min.js"></script>
 <form action="index.php" method="POST">
  <input name="name" class="feedback-input" placeholder="Pon tu nombre aquí" required/>
  <button id="button-blue">Registrar nombre</button>
 </form>
  
<?php 
 }else{
?>
 <form action="index.php" method="POST">
  <input name="name" class="feedback-input" placeholder="Nama kamu" required/>
  <button id="button-blue">Masuk</button>
 </form>
<?php 
  echo $ermsg;
 }
 echo '<p align="center">Esta es una sala de chat con personas que no conoce y otras no saben quién es usted. </p>';
}

?>
