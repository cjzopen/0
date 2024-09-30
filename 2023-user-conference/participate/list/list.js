var app = angular.module('listApp', ['chieffancypants.loadingBar', 'ngAnimate', 'ui.bootstrap', 'ngGrid']);

app.controller('listController', function($scope, $http, $modal) {
	
	$scope.myData = '';
	csvOpts = { columnOverrides: { obj: function(o) { return o.a + '|' +  o.b; } } }
	hgtOpts = { minHeight: 200 }
	$scope.gridOptions = {
		i18n: 'zh-tw',
		data: 'myData',
		columnDefs: [
			// {field:'id'   , displayName:'id', width:40},
			{field:'date'   , displayName:'報名時間', width:100},
			{field:'name'   , displayName:'姓名'    , width:80},
			{field:'company', displayName:'公司'    , width:130},
			{field:'dept'   , displayName:'部門'    , width:130},
			{field:'title'  , displayName:'職稱'    , width:130},
			{field:'phone'  , displayName:'電話'    , width:130},
			{field:'ext'  , displayName:'分機'    , width:50},
			{field:'mobile' , displayName:'手機', width:100},
			{field:'email'  , displayName:'電子郵件', width:200},
			{field:'isVeg', displayName:'用餐', width:50},
			{field:'ps', displayName:'備註', width:150},
			{field:'confirm_email', displayName:'確認信'}
		],
		enableColumnResize: true,
		enableRowSelection: true,
		multiSelect: false,
		showFooter: true,
		plugins: [new ngGridCsvExportPlugin(csvOpts), new ngGridFlexibleHeightPlugin(hgtOpts)]
	}
	
	$http.get('list.php').success(function(data) {
		console.log(data);
		$scope.myData = data;
		//$scope.myData = angular.fromJson(data);
		if (!$scope.$$phase) {
			$scope.$apply();
		}
	}).error(function(data) {
		var modalInstance = $modal.open({
			templateUrl: '../_assets/inc/ajax-error.html',
			controller: 'modalInstanceController',
			resolve: {
				items: function() {
					return "";
				}
			}
		});
	});
});

app.controller('modalInstanceController', function($scope, $modalInstance, items) {
	$scope.items = items;
	$scope.ok = function() {
		$modalInstance.close();
	}
});

