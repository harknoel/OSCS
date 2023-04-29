<?php 
    $title = 'Add Guest User';
    require_once 'includes/header.php'; 
    require_once 'createGuestRecord.php';
?>

<div class="signup-box">
    <h1>ADD GUEST</h1>
        <form action="createGuestRecord.php" method="POST">
            <label>Guest Name</label>
            <input type="text" name="guestName" placeholder="Name" />

            <label>Country</label>
            <input type="text" name="country" placeholder="Country" />

            <button type="submit" id="btnAdd" name="btnAdd">Submit</button>
        </form>
</div>
<?php require_once 'includes/footer.php'; ?>