<?php 
    $title = 'Home';
    $home = 'active';
    $dashboard = '';
	$aboutme = '';
    $contact = '';
    require_once 'includes/header.php'; 
?>

<P>Hello, <?php echo $_SESSION['username']?></P>
<div class="settings">
    <a href="updateProfile.php">Edit Profile</a>
    <a href="index.php">Logout</a>
</div>






<?php require_once 'includes/footer.php'; ?>