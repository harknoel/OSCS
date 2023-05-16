<?php 
    $title = 'Dashboard';
    $home = '';
    $dashboard = 'active';
	$aboutme = '';
    $contact = '';
	include 'connect.php';
    require_once 'includes/header.php'; 
	include 'session.php';
	include 'login-check.php';
?>	
  <h1 style="text-align: center; font-size: 32px; margin-top: 40px; margin-bottom: 20px;">Guest Users Dashboard</h1>
  
  <div style="display: flex; justify-content: space-around; margin-top: 20px;">
    <div style="background-color: #f2f2f2; padding: 20px; border-radius: 10px; width: 300px; text-align: center;">
      <h2>Number of Guest Users by Country</h2>
      <p id="guestByCountry">Loading...</p>
    </div>
    
    <div style="background-color: #f2f2f2; padding: 20px; border-radius: 10px; width: 300px; text-align: center;">
      <h2>Number of Guest Users by Name</h2>
      <p id="guestByName">Loading...</p>
    </div>
    
    <div style="background-color: #f2f2f2; padding: 20px; border-radius: 10px; width: 300px; text-align: center;">
      <h2>Total Number of Guest Users</h2>
      <p id="guestOverall">Loading...</p>
    </div>
  </div>

  <!-- Dummy JavaScript code to update the dashboard -->
  <script>
    // Replace the dummy values with actual data
    const guestByCountry = 500;
    const guestByName = 750;
    const guestOverall = 1250;
    
    // Update the dashboard with the data
    document.getElementById("guestByCountry").textContent = guestByCountry.toLocaleString();
    document.getElementById("guestByName").textContent = guestByName.toLocaleString();
    document.getElementById("guestOverall").textContent = guestOverall.toLocaleString();
  </script>

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
