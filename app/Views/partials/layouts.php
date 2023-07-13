<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $this->renderSection('title') ?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<!-- ================== BEGIN core-css ================== -->
	<link href="<?= base_url(); ?>../assets/css/vendor.min.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>../assets/css/default/app.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
    
	<!-- ================== BEGIN page-css ================== -->
	<link href="<?= base_url('../assets/plugins/jvectormap-next/jquery-jvectormap.css'); ?>" rel="stylesheet" />
	<link href="<?= base_url('../assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css'); ?>" rel="stylesheet" />
	<link href="<?= base_url('../assets/plugins/gritter/css/jquery.gritter.css'); ?>" rel="stylesheet" />
	<!-- ================== END page-css ================== -->
</head>

<body class="bg-light">

    <main role="main">
        <?= $this->renderSection('main') ?>
    </main>

<!-- ================== BEGIN core-js ================== -->
<script src="../assets/js/vendor.min.js"></script>
	<script src="../assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
	
	<!-- ================== BEGIN page-js ================== -->
	<script src="../assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="../assets/plugins/flot/source/jquery.canvaswrapper.js"></script>
	<script src="../assets/plugins/flot/source/jquery.colorhelpers.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.saturated.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.browser.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.drawSeries.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.uiConstants.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.time.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.resize.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.pie.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.crosshair.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.categories.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.navigate.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.touchNavigate.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.hover.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.touch.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.selection.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.symbol.js"></script>
	<script src="../assets/plugins/flot/source/jquery.flot.legend.js"></script>
	<script src="../assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
	<script src="../assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
	<script src="../assets/plugins/jvectormap-content/world-mill.js"></script>
	<script src="../assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
	<script src="../assets/js/demo/dashboard.js"></script>
	<!-- ================== END page-js ================== -->
</body>
</html>