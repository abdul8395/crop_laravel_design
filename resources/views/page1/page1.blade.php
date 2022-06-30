@extends('layouts.app')



@section('head')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<link rel="stylesheet" href="https://js.arcgis.com/4.24/esri/themes/light/main.css">
<script src="https://js.arcgis.com/4.24/"></script>
<style>
	.titles {
		color: green;
		font-size: large;
	}
</style>
@endsection






@section('content')
<script src="{{  url('js/map.js')   }}"></script>
<div class="row p-0">
	<!-- All content (content is at left side) -->
	<div class="col-sm p-0 left-section">
		<div class="map" id="map"></div>
		<footer class="footer">

			<!-- footer left side (for filters) -->
			<div class="ft-left p-3">
				@include('page1.afilter', ['filterTitle' => 'Divison', 'list' => $divisions, 'optionName' => 'div_name'])
				@include('page1.afilter', ['filterTitle' => 'District', 'list' => $districts, 'optionName' => 'district_name'])
				@include('page1.afilter', ['filterTitle' => 'Tehsil', 'list' => $tehsils, 'optionName' => 'tehsil_name'])
			</div>


			<!-- Footer Right side (for chart) -->
			<div class="ft-right p-2">
				<canvas id="myChart" style="width:100%;max-height: 220px;"></canvas>
				<script>
					var xValues = [50, 60, 70, 80, 90, 100, 110, 120, 130, 140, 150, 160, 170];
					var yValues = [2, 4, 6, 8, 4, 3, 9, 7, 2, 9, 8, 7, 5, 9];

					new Chart("myChart", {
						type: "line",
						data: {
							labels: xValues,
							datasets: [{
								fill: false,
								lineTension: 0,
								backgroundColor: "rgb(240,240,240)",
								borderColor: "rgb(240,240,240)",
								data: yValues
							}]
						},
						options: {
							legend: {
								display: false
							},
							scales: {
								yAxes: [{
									ticks: {
										min: 0,
										max: 12
									}
								}],
							}
						}
					});
				</script>
			</div>
		</footer>
	</div>

	<!-- Righ navbar -->
	<div class="col-sm-2 p-0 right-nav position-relative">
		<div class="right-nav-content">
			<div class="mycard d-flex align-items-center">
				<div class="d-inline-block"> <span class="text-success">Total Districts</span> 36 </div>
			</div>
			<div class="mycard d-flex align-items-center">
				<div class="d-inline-block"> <span class="text-success">Total Districts</span> 36 </div>
			</div>
			<div class="mycard d-flex align-items-center">
				<div class="d-inline-block"> <span class="text-success">Total Districts</span> 36 </div>
			</div>
			<div class="mycard d-flex align-items-center">
				<div class="d-inline-block"> <span class="text-success">Total Districts</span> 36 </div>
			</div>
		</div>
		<div class="btn-sidenav-toggler btn-sidenav-hide">&gt;</div>
	</div>
</div>
@endsection









@section('footer')
<div class="btn-sidenav-toggler btn-sidenav-show">&lt;</div>
<script>
	$(document).ready(() => {
		/** Right side navbar */
		$(".btn-sidenav-hide").click(function(e) {
			$('.right-nav').hide(500);
			$('.btn-sidenav-show').fadeIn();
		});
		/** Right side navbar */
		$('.btn-sidenav-show').click(function(e) {
			$('.btn-sidenav-show').hide();
			$('.right-nav').show(500);
		});

	});
</script>
@endsection