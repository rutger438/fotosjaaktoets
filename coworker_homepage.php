<?php
	$userrole = array('coworker', 'root', 'admin');
	include('security.php');
?>

<h3>Welkom op uw klantpagina</h3>
uw id is: <?php echo $_SESSION['id']; ?><br>
uw gebruikersrol is: <?php echo $_SESSION['userrole']; ?>