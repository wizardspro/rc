<!DOCTYPE html>
<html>
<head>
	<title>Rice Calculator Mobile</title>

	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="viewport" content="width=device-width, initial-scale=1.user-scalable=no">

    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.1/jquery.mobile-1.2.1.min.js"></script>

</head>
<body>

	<!-- Start of calculator main page -->
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

	</div><!-- /calculator -->

	<!-- Start of variety selector page -->
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
	</div><!-- /variety selector -->


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
				<a href="#millingRecovery" data-role="button" data-icon="arrow-r" data-iconpos="right">Milling Recovery</a>
				<a href="#headRiceRecovery" data-role="button" data-icon="arrow-r" data-iconpos="right">Head Rice Recovery</a>
				<a href="#millingDegree" data-role="button" data-icon="arrow-r" data-iconpos="right">Milling Degree</a>
				<a href="#dockage" data-role="button" data-icon="arrow-r" data-iconpos="right">Dockage (mr)</a>
				<a href="#chalkGrains" data-role="button" data-icon="arrow-r" data-iconpos="right">Chalk Grains</a>
				<a href="#whiteness" data-role="button" data-icon="arrow-r" data-iconpos="right">Whiteness</a>
				<a href="#grainShape" data-role="button" data-icon="arrow-r" data-iconpos="right">Grain Shape</a>
				<a href="#grainGrader" data-role="button" data-icon="arrow-r" data-iconpos="right">Grain Grader</a>
				<a href="#brewersRice" data-role="button" data-icon="arrow-r" data-iconpos="right">Brewer's Rice</a>
				<a href="#brokenGrains" data-role="button" data-icon="arrow-r" data-iconpos="right">Broken Grains</a>
				<a href="#redGrains" data-role="button" data-icon="arrow-r" data-iconpos="right">Red Grains</a>
			</div>
		</div><!-- /content -->

	</div><!-- /mrq -->

	<!-- Start of milling recovery page -->
	<div data-role="page" id="millingRecovery">

		<div data-role="header" style="overflow:hidden;">
		    <h1>Milling Recovery</h1>
		    <a href="#mrq" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-left"></a>
		</div><!-- /header -->

		<div data-role="content">
			Milling recovery calculator
		</div><!-- /content -->

	</div><!-- /milling recovery -->

	<!-- Start of head rice recovery page -->
	<div data-role="page" id="headRiceRecovery">

		<div data-role="header" style="overflow:hidden;">
		    <h1>Head Rice Recovery</h1>
		    <a href="#mrq" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-left"></a>
		</div><!-- /header -->

		<div data-role="content">
			Head Rice recovery calculator
		</div><!-- /content -->

	</div><!-- /head rice recovery -->

	<!-- Start of miling degree page -->
	<div data-role="page" id="millingDegree">

		<div data-role="header" style="overflow:hidden;">
		    <h1>Milling Degree</h1>
		    <a href="#mrq" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-left"></a>
		</div><!-- /header -->

		<div data-role="content">
			Milling Degree calculator
		</div><!-- /content -->

	</div><!-- /milling degree -->

	<!-- Start of dockage page -->
	<div data-role="page" id="dockage">

		<div data-role="header" style="overflow:hidden;">
		    <h1>Dockage</h1>
		    <a href="#mrq" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-left"></a>
		</div><!-- /header -->

		<div data-role="content">
			Dockage calculator
		</div><!-- /content -->

	</div><!-- /dockage -->

	<!-- Start of chalk Grains page -->
	<div data-role="page" id="chalkGrains">

		<div data-role="header" style="overflow:hidden;">
		    <h1>Chalk Grains</h1>
		    <a href="#mrq" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-left"></a>
		</div><!-- /header -->

		<div data-role="content">
			Chalk Grains calculator
		</div><!-- /content -->

	</div><!-- /chalk Grains -->

	<!-- Start of whiteness page -->
	<div data-role="page" id="whiteness">

		<div data-role="header" style="overflow:hidden;">
		    <h1>Whiteness</h1>
		    <a href="#mrq" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-left"></a>
		</div><!-- /header -->

		<div data-role="content">
			Whiteness calculator
		</div><!-- /content -->

	</div><!-- /whiteness -->

	<!-- Start of grain shape page -->
	<div data-role="page" id="grainShape">

		<div data-role="header" style="overflow:hidden;">
		    <h1>Grain Shape</h1>
		    <a href="#mrq" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-left"></a>
		</div><!-- /header -->

		<div data-role="content">
			Grain Shape calculator
		</div><!-- /content -->

	</div><!-- /grain shape -->

	<!-- Start of grain Grader page -->
	<div data-role="page" id="grainGrader">

		<div data-role="header" style="overflow:hidden;">
		    <h1>Grain Grader</h1>
		    <a href="#mrq" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-left"></a>
		</div><!-- /header -->

		<div data-role="content">
			Grain Grader calculator
		</div><!-- /content -->

	</div><!-- /grain Grader -->

	<!-- Start of brewer's Rice page -->
	<div data-role="page" id="brewersRice">

		<div data-role="header" style="overflow:hidden;">
		    <h1>Brewer's Rice</h1>
		    <a href="#mrq" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-left"></a>
		</div><!-- /header -->

		<div data-role="content">
			Brewer's Rice calculator
		</div><!-- /content -->

	</div><!-- /brewer's Rice -->

	<!-- Start of broken Grains page -->
	<div data-role="page" id="brokenGrains">

		<div data-role="header" style="overflow:hidden;">
		    <h1>Broken Grains</h1>
		    <a href="#mrq" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-left"></a>
		</div><!-- /header -->

		<div data-role="content">
			Broken Grains calculator
		</div><!-- /content -->

	</div><!-- /brokens Grain -->

	<!-- Start of red Grains page -->
	<div data-role="page" id="redGrains">

		<div data-role="header" style="overflow:hidden;">
		    <h1>Red Grains</h1>
		    <a href="#mrq" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-left"></a>
		</div><!-- /header -->

		<div data-role="content">
			Red Grains calculator
		</div><!-- /content -->

	</div><!-- /red Grain -->

	<!-- Start of quality of paddy grain page -->
	<div data-role="page" id="pgq">

		<div data-role="header" style="overflow:hidden;">
		    <h1>Quality of Paddy Grain</h1>
		    <a href="#calculator" data-role="button" data-icon="arrow-l" data-iconpos="notext" data-theme="c" data-inline="true" class="ui-btn-left"></a>
		</div><!-- /header -->

		<div data-role="content">
			<div data-role="controlgroup">
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Cracked Grains</a>
				<a href="" data-role="button" data-icon="arrow-r" data-iconpos="right">Grain Dimension L/W</a>
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
