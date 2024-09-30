<!DOCTYPE html>
<html ng-app="listApp">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>線上報名人數統計</title>

	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular-animate.min.js"></script>
	<script src="../_assets/js/ui-bootstrap-tpls-0.10.0.min.js"></script>
	<script src="../_assets/js/ui-utils.min.js"></script>
	<script src="../_assets/js/loading-bar.min.js"></script>
	<script src="../_assets/js/ng-grid-2.0.7.min.js"></script>
	<script src="../_assets/js/ng-grid-flexible-height.js"></script>
	<script src="../_assets/js/ng-grid-csv-export.js"></script>

	<link rel="shortcut icon" href="../_assets/img/favicon.ico">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../_assets/css/loading-bar.min.css">
	<link rel="stylesheet" href="../_assets/css/ng-grid.min.css">

	<style>
		body { font-family: "Microsoft JhengHei", Arial, sans-serif; }
		.gridStyle {
			margin: 20px auto;
			border: 1px solid rgb(212,212,212);
			width: 1320px;
			height: 2000px;
		}
	</style>
</head>

<body>
	<noscript>
		<style>#main { display:none; }</style>
		<p class="text-danger">必須啟用 JavaScript，才能檢視此網頁。然而，JavaScript 似乎已經停用或未獲瀏覽器支援。</p>
		<p class="text-danger">請變更您的瀏覽器選項以啟用 JavaScript，然後<a href="">再試一次</a>。</p>
	</noscript>

	<div id="main" ng-controller="listController">
		<h1 class="text-center">線上報名人數統計</h1>
		<div class="gridStyle" ng-grid="gridOptions"></div>
	</div>

	<script src="list.js"></script>

	<!-- ©2014 ARES International Corp. -->

</body>
</html>
