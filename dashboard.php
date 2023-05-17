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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
$query = 'SELECT * FROM tblguest';
$resultset = mysqli_query($con, $query);
if ($resultset) {
	$rowcount = mysqli_num_rows($resultset);
}

$queryMostUser = "
SELECT country, COUNT(*) AS user_count
FROM tblguest
GROUP BY country
HAVING COUNT(*) = (
  SELECT COUNT(*) AS max_user_count
  FROM tblguest
  GROUP BY country
  ORDER BY max_user_count DESC
  LIMIT 1
)";
$resultMostUser = mysqli_query($con, $queryMostUser);


$queryName = "
SELECT guestName, COUNT(*) AS name_count
FROM tblguest
GROUP BY guestName
HAVING COUNT(*) = (
  SELECT COUNT(*) AS max_name_count
  FROM tblguest
  GROUP BY guestName
  ORDER BY max_name_count DESC
  LIMIT 1
)";

$resultName = mysqli_query($con, $queryName);
?>

<h1 style="text-align: center; font-size: 32px; margin-top: 40px; margin-bottom: 20px;">Guest Users Dashboard</h1>

<div style="display: flex; justify-content: space-around; margin-top: 20px;">
	<div style="background-color: #f2f2f2; padding: 20px; border-radius: 10px; width: 300px; text-align: center;">
		<h2>Country with the Highest Number of Guest Users</h2>
		<?php while ($row = $resultMostUser->fetch_assoc()) : ?>
			<p><?php echo $row['country'] ?>: <?php echo $row['user_count'] ?></p>
		<?php endwhile; ?>
	</div>

	<div style="background-color: #f2f2f2; padding: 20px; border-radius: 10px; width: 300px; text-align: center;">
		<h2>Names with the Highest Count of Similar Occurrences</h2>
		<?php while ($row = $resultName->fetch_assoc()) : ?>
			<p><?php echo $row['guestName'] ?>: <?php echo $row['name_count'] ?></p>
		<?php endwhile; ?>
	</div>

	<div style="background-color: #f2f2f2; padding: 20px; border-radius: 10px; width: 300px; text-align: center;">
		<h2>Total Number of Guest Users</h2>
		<p><?php echo $rowcount ?></p>
	</div>
</div>

<div style="display: flex; flex-wrap: wrap; justify-content: space-around; margin-top: 20px;">
	<div style="background-color: #f2f2f2; padding: 20px; border-radius: 10px; width: 300px; text-align: center; margin-bottom: 20px;">
		<h1>Guest Users by Country</h1>
		<br>
		<div style="background-color: #007bff; width: 80%; margin-bottom: 5px; color: #fff; padding: 5px;">United States (80)</div>
		<div style="background-color: #ff4d4d; width: 60%; margin-bottom: 5px; color: #fff; padding: 5px;">Germany (60)</div>
		<div style="background-color: #ffa64d; width: 40%; margin-bottom: 5px; color: #fff; padding: 5px;">Brazil (40)</div>
		<div style="background-color: #66cc66; width: 30%; margin-bottom: 5px; color: #fff; padding: 5px;">Japan (30)</div>
	</div>
	<div style="background-color: #f2f2f2; padding: 20px; border-radius: 10px; width: 300px; text-align: center; margin-bottom: 20px;">
		<canvas id="myChart"></canvas>
		<script>
			// Sample Data
			const data = {
				labels: ['United States', 'Germany', 'Brazil', 'Japan'],
				datasets: [{
					data: [40, 20, 15, 25],
					backgroundColor: ['#007bff', '#ff4d4d', '#ffa64d', '#66cc66'],
				}]
			};

			// Chart Configuration
			const config = {
				type: 'pie',
				data: data,
				options: {
					responsive: true,
					maintainAspectRatio: false,
					legend: {
						display: true,
						position: 'bottom',
					}
				},
			};

			// Create Chart
			const myChart = new Chart(document.getElementById('myChart'), config);
		</script>
	</div>
	<div style="background-color: #f2f2f2; padding: 20px; border-radius: 10px; width: 600px; text-align: center;">
		<div style="width: 100%; height: 400px; border: 1px solid #ccc; margin: 20px auto; padding: 10px;">
			<h2 style="text-align: center;">Guest Users by Country over Time</h2>
			<canvas id="lineChart" style="width: 100%; height: 100%;"></canvas>
		</div>
		<script>
			// Sample Data for Line Chart
			const lineData = {
				labels: ['January', 'February', 'March', 'April', 'May', 'June'],
				datasets: [{
						label: 'United States',
						data: [50, 75, 80, 60, 70, 90],
						borderColor: 'rgba(75, 192, 192, 1)',
						fill: false
					},
					{
						label: 'United Kingdom',
						data: [60, 55, 70, 80, 65, 75],
						borderColor: 'rgba(255, 99, 132, 1)',
						fill: false
					},
					{
						label: 'Germany',
						data: [70, 80, 60, 70, 85, 65],
						borderColor: 'rgba(54, 162, 235, 1)',
						fill: false
					}
				]
			};
			// Line Chart Configuration
			const lineConfig = {
				type: 'line',
				data: lineData,
				options: {
					responsive: true,
					maintainAspectRatio: false,
					plugins: {
						title: {
							display: true,
							text: 'Guest Users by Country over Time'
						}
					},
					scales: {
						x: {
							display: true,
							title: {
								display: true,
								text: 'Month'
							}
						},
						y: {
							display: true,
							title: {
								display: true,
								text: 'Number of Guest Users'
							},
							suggestedMin: 0,
							suggestedMax: 100
						}
					}
				}
			};

			// Create Line Chart
			const lineCtx = document.getElementById('lineChart').getContext('2d');
			new Chart(lineCtx, lineConfig);
		</script>
	</div>
</div>
<div class="table-data">
	<div class="order">
		<div class="head">
			<h3>Guest List</h3>
			<i class='bx bx-search'></i>
			<i class='bx bx-filter'></i>
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
				while ($row = $resultset->fetch_assoc()) :
				?>
					<tr>
						<td><?php echo $row['guestID'] ?></td>
						<td><?php echo $row['guestName'] ?></td>
						<td><?php echo $row['country'] ?></td>
						<td>
							<a class="status view" href="guestuser.php">VIEW</a>
							<a class="status delete" href="">DELETE</a>
						</td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>
</main>
<!-- MAIN -->
</section>
<!-- CONTENT -->
<?php require_once 'includes/footer.php'; ?>