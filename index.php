<!DOCTYPE html>
<html>
<head>
	<title>Rice Calculator</title>

	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width, initial-scale=1.user-scalable=no">

    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>

	<!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

    

</head>
<body>

	<!-- Start of first page -->
	<div data-role="page" id="foo">

		<div data-role="header" data-fullscreen="true">
			<div data-role="navbar">
				<ul>
					<li><a href="#foo" data-icon="grid" class="ui-btn-active ui-state-persist" data-transition="none">Calculators</a></li>
					<li><a href="#bar" data-icon="star">Variety Selector</a></li>
				</ul>
			</div><!-- /navbar -->
		</div><!-- /header -->

		<div data-role="content">
			
			<div id="chart_div"></div>
		</div><!-- /content -->

		<!-- <div data-role="footer" data-position="fixed" data-fullscreen="true">
		</div><!-- /footer -->
	</div><!-- /page -->

	<!-- Start of second page -->
	<div data-role="page" id="bar">

		<div data-role="header">
			<h1>Bar</h1>
		</div><!-- /header -->

		<div data-role="content">
			<div><img src="images/opendatahack.png" style="width:100%"></div>
		</div><!-- /content -->

		<div data-role="footer" data-position="fixed" data-fullscreen="true">
			<div data-role="navbar">
				<ul>
					<li><a href="#foo" data-icon="grid">Calculators</a></li>
					<li><a href="#bar" data-icon="star" class="ui-btn-active ui-state-persist" data-transition="none">Variety Selector</a></li>
				</ul>
			</div><!-- /navbar -->
		</div><!-- /footer -->
	</div><!-- /page -->


	<!-- Start of third page -->
	<div data-role="page" id="dwl">

		<div data-role="header" data-fullscreen="true">
			<div data-role="navbar">
				<ul>
					<li><a href="#foo" data-icon="grid" class="ui-btn-active ui-state-persist" data-transition="none">Calculators</a></li>
					<li><a href="#bar" data-icon="star">Variety Selector</a></li>
				</ul>
			</div><!-- /navbar -->
		</div><!-- /header -->

		<div data-role="content">
			drying weight loss
			<div data-role="controlgroup">
				<a href="#dwl" data-role="button" data-icon="arrow-r" data-iconpos="right">Drying Weight Loss</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Quality of Milled Rice</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Quality of Paddy Grain</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Calibration</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Establishment Rate</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Seeding Rate</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Seed Lot Purity</a>
			</div>
			
		</div><!-- /content -->

		<!-- <div data-role="footer" data-position="fixed" data-fullscreen="true">
		</div><!-- /footer -->
	</div><!-- /page -->




	<script type="text/javascript">
	    window.onresize = function(){
	        startDrawingChart();
	    };
	 
	    window.onload = function(){
	        startDrawingChart();
	    };
	 
	    var data_array = [
	                      ['Year', 'Sales', 'Expenses'],
	                      ['2004',  1000,      400],
	                      ['2005',  1170,      460],
	                      ['2006',  660,       1120],
	                      ['2007',  1030,      540],
	                      ['2008',	1005,		600],
	                      ['2009',	900,		650]
	                    ];
	                     
	    startDrawingChart = function(){
	        google.load("visualization", "1", {packages:["corechart"],callback: drawChart});
	 
	        function drawChart() {
	            var data = google.visualization.arrayToDataTable(data_array);
	 
	            var options = {
	              title: 'Company Performance',
	              hAxis: {title: 'Year',  titleTextStyle: {color: 'red'}}
	            };
	 
	            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
	            chart.draw(data, options);
	        }
	    };
    </script>


</body>
</html>