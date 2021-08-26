
<html>
<!-- adicao do angular na pagina -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body>


<script>
// busca o modulo
var app = angular.module('myApp', []);

// busca o controlador
app.controller('myCtrl', function($scope,$http) {   
	
	$scope.dados = "";
	
	
  
  $scope.buscaDados = function() {
	$http({

	method: 'GET',

	url: 'dados_exercicio.html',

	}).then(function success(response) {
		$scope.dados = response.data;

	}, function error(response) {
		$scope.dados = "ERROR ao buscar os dados. " + response.data;

	});

	}
  
});


</script>

<!-- declaracao do modulo e contralador -->
<div ng-app="myApp" ng-controller="myCtrl">


<button ng-click="buscaDados()">Busca dados via GET no servidor</button> 

<br>

o retorno da busca foi:
{{dados}}

</div>







</body>
</html>
