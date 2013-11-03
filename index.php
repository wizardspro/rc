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

</head>
<body>

	<!-- Start of first page -->
	<div data-role="page" id="calculator">

		<div data-role="header" data-fullscreen="true">
			<div data-role="navbar">
				<ul>
					<li><a href="#" data-icon="grid" class="ui-btn-active ui-state-persist" data-transition="none">Calculators</a></li>
					<li><a href="#variety" data-icon="star">Variety Selector</a></li>
				</ul>
			</div><!-- /navbar -->
		</div><!-- /header -->

		<div data-role="content">
			<div data-role="controlgroup">
				<a href="#dwl" data-role="button" data-icon="arrow-r" data-iconpos="right">Drying Weight Loss</a>
				<a href="#mrq" data-role="button" data-icon="arrow-r" data-iconpos="right">Quality of Milled Rice</a>
				<a href="#pgq" data-role="button" data-icon="arrow-r" data-iconpos="right">Quality of Paddy Grain</a>
				<a href="#calib" data-role="button" data-icon="arrow-r" data-iconpos="right">Calibration</a>
				<a href="#estab" data-role="button" data-icon="arrow-r" data-iconpos="right">Establishment Rate</a>
				<a href="#sr" data-role="button" data-icon="arrow-r" data-iconpos="right">Seeding Rate</a>
				<a href="#slp" data-role="button" data-icon="arrow-r" data-iconpos="right">Seed Lot Purity</a>
			</div>
		</div><!-- /content -->

	</div><!-- /page1 -->

	<!-- Start of second page -->
	<div data-role="page" id="variety">

		<div data-role="header">
		</div><!-- /header -->

		<div data-role="content">
			Please wait while this functionality is still being developed...
		</div><!-- /content -->

		<div data-role="footer" data-position="fixed" data-fullscreen="true">
			<div data-role="navbar">
				<ul>
					<li><a href="#calculator" data-icon="grid">Calculators</a></li>
					<li><a href="#" data-icon="star" class="ui-btn-active ui-state-persist" data-transition="none">Variety Selector</a></li>
				</ul>
			</div><!-- /navbar -->
		</div><!-- /footer -->
	</div><!-- /page -->


	<!-- Start of drying weight loss page -->
	<div data-role="page" id="dwl">

		<div data-role="header" style="overflow:hidden;">
		    <h1>Drying Weight Loss</h1>
		    <a href="#calculator" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-left"></a>
		</div><!-- /header -->

		<div data-role="content">
			<form>
				Wet paddy weight<br>
				<input type="number" name="">
				Moisture Content<br>&nbsp;&nbsp;&nbsp;Wet Paddy<br>
				<input type="number" name="">
				&nbsp;&nbsp;&nbsp;Dry Paddy<br>
				<input type="number" name="">
				Dried Paddy Weight
				<input type="number" name="" disabled>
			</form>
		</div><!-- /content -->

	</div><!-- /dwl -->

	<!-- Start of quality of milled rice page -->
	<div data-role="page" id="mrq">

		<div data-role="header" style="overflow:hidden;">
		    <h1>Quality of Milled Rice</h1>
		    <a href="#calculator" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-left"></a>
		</div><!-- /header -->

		<div data-role="content">
			<div data-role="controlgroup">
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Milling Recovery</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Head Rice Recovery</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Milling Degree</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Dockage (mr)</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Chalk Grains</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Whiteness</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Grain Shape</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Grain Grader</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Brewer's Rice</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Broken Grains</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Red Grains</a>
			</div>
		</div><!-- /content -->

	</div><!-- /mrq -->

	<!-- Start of quality of paddy grain page -->
	<div data-role="page" id="pgq">

		<div data-role="header" style="overflow:hidden;">
		    <h1>Quality of Paddy Grain</h1>
		    <a href="#calculator" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-left"></a>
		</div><!-- /header -->

		<div data-role="content">
			<div data-role="controlgroup">
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Cracked Grains</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Grin Dimension L/W</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Immature Grains</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Dockage</a>
			</div>
		</div><!-- /content -->

	</div><!-- /pgq -->

	<!-- Start of calibration page -->
	<div data-role="page" id="calib">

		<div data-role="header" style="overflow:hidden;">
		    <h1>Calibration</h1>
		    <a href="#calculator" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-left"></a>
		</div><!-- /header -->

		<div data-role="content">
			Calibration
		</div><!-- /content -->

	</div><!-- /calib -->

	<!-- Start of establishment rate page -->
	<div data-role="page" id="estab">

		<div data-role="header" style="overflow:hidden;">
		    <h1>Establishment Rate</h1>
		    <a href="#calculator" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-left"></a>
		</div><!-- /header -->

		<div data-role="content">
			Establishment
		</div><!-- /content -->

	</div><!-- /estab -->

	<!-- Start of seeding rate page -->
	<div data-role="page" id="sr">

		<div data-role="header" style="overflow:hidden;">
		    <h1>Seeding Rate</h1>
		    <a href="#calculator" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-left"></a>
		</div><!-- /header -->

		<div data-role="content">
			<div data-role="controlgroup">
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Hand Broadcasting</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Drum Seeder</a>
			</div>
		</div><!-- /content -->

	</div><!-- /seeding -->

	<!-- Start of seed lot purity page -->
	<div data-role="page" id="slp">

		<div data-role="header" style="overflow:hidden;">
		    <h1>Seed Lot Purity</h1>
		    <a href="#calculator" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-left"></a>
		</div><!-- /header -->

		<div data-role="content">
			Seed Lot Purity
		</div><!-- /content -->

	</div><!-- /slp -->

</body>
</html>
