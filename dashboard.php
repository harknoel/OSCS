<?php 
    $title = 'Dashboard';
    $home = '';
    $dashboard = 'active';
	$aboutme = '';
    $contact = '';
	include 'connect.php';
    require_once 'includes/header.php'; 
?>

<?php
	$query = 'SELECT * FROM tblguest';
	$resultset = mysqli_query($con, $query);	
?>

		<div class="table-data">
			<div class="order">
				<div class="head">
					<h3>Guest List</h3>	
					<i class='bx bx-search' ></i>
					<i class='bx bx-filter' ></i>
				</div>
				<a href="guestuser.php" class="addButton">Add Guest</a>
				<table>
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
								<a class="status view" href = "guestuser.php">VIEW</a>                        
								<a class="status delete" href = "">DELETE</a>
							</td>
						</tr>
						<?php endwhile;?>
					</tbody>
				</table>
			</div>
		</div>
	</main>
	<!-- MAIN -->
</section>
<!-- CONTENT -->
<?php require_once 'includes/footer.php'; ?>
