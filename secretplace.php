<?php 
session_start();
 if(!isset($_SESSION["lang"])){
 header("Location: form.php");}
$lang=[
'ru' => 'Привет',
'ua' => 'Привіт',
'en' => 'Hello',
'it' => 'Ciao',
];
if(isset($_POST["lang"])){
	$_SESSION['lang'] = $_POST["lang"];
}
echo $lang[$_SESSION["lang"]]. ', ' . $_SESSION["user_name"];
if ($_POST["logout"]==true) {
	unset($_SESSION["user_name"]);
}
?>
	<?php 
	if(isset($_SESSION["user_name"])){
		?>
		<a href="index.php?logout=true"><br><br>Выход</a>
		<?php 
	}else{
 header("Location: index.php");
	 }?>
