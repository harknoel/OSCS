<?php 
    $title = 'Online Shopping Cart System';
    require_once 'includes/header.php'; 
?>
<!-- CONTENT -->
<div> 
	<?php
		$mysqli = new mysqli('localhost', 'root','','dbf2bontilaohark') or die (mysqli_error($mysqli));
		$resultset = $mysqli->query("SELECT * from tblGuest") or die($mysqli->error);
	?>
	<table id="tblStudentRecords " class="table
		table-striped table-bordered table-sm" cellspacing="0" width="100%"> 
		<thead>
			<tr> 
				<th>Guest ID</th> 
				<th>Guest Name</th> 
				<th>Country</th> 
			</tr> 
		</thead>  
		<tbody>
			<?php
				while($row = $resultset->fetch_assoc()):
			?>
			<tr>
				<td><?php echo $row['guestID'] ?></td>
				<td><?php echo $row['guestName'] ?></td>
				<td><?php echo $row['country'] ?></td>
				<td>
					<a href = "">VIEW</a>                        
					<a href = "">DELETE</a>
				</td>
			</tr>
			<?php endwhile;?>
		</tbody>         
	</table>
</div>
<!-- CONTENT -->
<?php require_once 'includes/footer.php'; ?>
