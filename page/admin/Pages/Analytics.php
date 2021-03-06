<?php 
	if (isset($_COOKIE['connexion']) && $_COOKIE['connexion']=="vrai") {
		$_SESSION["admin"] = true;
	}
	if (!isset($_SESSION["admin"]) || !$_SESSION["admin"]) {
		header("location:/page/admin/login.php");
	}
?>
<!DOCTYPE html>
<html lang="fr">



	<?php 
		include '../../../configuration/requete.php';
		include '../Module/template.php';
	?>


	<main class="app-content">
		<div class="app-title">
			<div>
				<h1><i class="fa fa-pie-chart"></i> Charts</h1>
				<p>Various type of charts for your project</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="tile">
					<h3 class="tile-title">Line Chart</h3>
					<div class="embed-responsive embed-responsive-16by9">
						<canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="tile">
					<h3 class="tile-title">Bar Chart</h3>
					<div class="embed-responsive embed-responsive-16by9">
						<canvas class="embed-responsive-item" id="barChartDemo"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="tile">
					<h3 class="tile-title">Radar Chart</h3>
					<div class="embed-responsive embed-responsive-16by9">
						<canvas class="embed-responsive-item" id="radarChartDemo"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="tile">
					<h3 class="tile-title">Polar Chart</h3>
					<div class="embed-responsive embed-responsive-16by9">
						<canvas class="embed-responsive-item" id="polarChartDemo"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="tile">
					<h3 class="tile-title">Pie Chart</h3>
					<div class="embed-responsive embed-responsive-16by9">
						<canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="tile">
					<h3 class="tile-title">Doughnut Chart</h3>
					<div class="embed-responsive embed-responsive-16by9">
						<canvas class="embed-responsive-item" id="doughnutChartDemo"></canvas>
					</div>
				</div>
			</div>
		</div>
	 </main>
	 <!-- Essential javascripts for application to work-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="/js/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script src="/js/main.js"></script>
	 <!-- The javascript plugin to display page loading on top-->
	<script src="/js/plugins/pace.min.js"></script>
	<script type="text/javascript" src="/js/plugins/chart.js"></script>
	<script type="text/javascript">
		var data = {
			labels: ["January", "February", "March", "April", "May"],
			datasets: [
				{
					label: "My First dataset",
					fillColor: "rgba(220,220,220,0.2)",
					strokeColor: "rgba(220,220,220,1)",
					pointColor: "rgba(220,220,220,1)",
					pointStrokeColor: "#fff",
					pointHighlightFill: "#fff",
					pointHighlightStroke: "rgba(220,220,220,1)",
					data: [65, 59, 80, 81, 56]
				},
				{
					label: "My Second dataset",
					fillColor: "rgba(151,187,205,0.2)",
					strokeColor: "rgba(151,187,205,1)",
					pointColor: "rgba(151,187,205,1)",
					pointStrokeColor: "#fff",
					pointHighlightFill: "#fff",
					pointHighlightStroke: "rgba(151,187,205,1)",
					data: [28, 48, 40, 19, 86]
				}
			]
		};
		var pdata = [
			{
				value: 300,
				color:"#F7464A",
				highlight: "#FF5A5E",
				label: "Red"
			},
			{
				value: 50,
				color: "#46BFBD",
				highlight: "#5AD3D1",
				label: "Green"
			},
			{
				value: 100,
				color: "#FDB45C",
				highlight: "#FFC870",
				label: "Yellow"
			}
		]
		
		var ctxl = $("#lineChartDemo").get(0).getContext("2d");
		var lineChart = new Chart(ctxl).Line(data);
		
		var ctxb = $("#barChartDemo").get(0).getContext("2d");
		var barChart = new Chart(ctxb).Bar(data);
		
		var ctxr = $("#radarChartDemo").get(0).getContext("2d");
		var radarChart = new Chart(ctxr).Radar(data);
		
		var ctxpo = $("#polarChartDemo").get(0).getContext("2d");
		var polarChart = new Chart(ctxpo).PolarArea(pdata);
		
		var ctxp = $("#pieChartDemo").get(0).getContext("2d");
		var pieChart = new Chart(ctxp).Pie(pdata);
		
		var ctxd = $("#doughnutChartDemo").get(0).getContext("2d");
		var doughnutChart = new Chart(ctxd).Doughnut(pdata);
	</script>
	</body>
</html>