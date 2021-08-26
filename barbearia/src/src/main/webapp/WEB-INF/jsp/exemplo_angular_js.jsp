
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
	
	// criacao do um variavel vetor
   $scope.records = [
       {
            "nome" : "Marcelo Soares",
            "cidade" : "Cachoeirinha"
        },{
            "nome" : "Renata da Silva",
            "cidade" : "Porto Alegre"
        },{
            "nome" : "João da Silva",
            "cidade" : "Canoas"
        },{
            "nome" : "Pedro",
            "cidade" : "Canoas"
        }
    ];
	
	// craicao de uma funcao;
	$scope.addItem = function () {
		
		$scope.records.push({nome:$scope.records.nome,cidade:$scope.records.cidade});
	
		$scope.records.nome = "";
		$scope.records.cidade="";		
		
  }
  
  $scope.buscaDados = function() {
	$http({

	method: 'GET',

	url: 'dados.html',

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
<table>
<tr>
	<td>
	Nome: 
	</td>
	<td>
	<input type="text" ng-model="records.nome"><br>
	</td>
</tr>
	<tr>
	<td>
	cidade: 
	</td>
	<td>
	<input type="text" ng-model="records.cidade"><br>
	</td>
</tr>
<table>
<button ng-click="addItem()">Adicionar</button>
<br>
<br>
Você está digitando o nome : {{records.nome }} 
<br>
Você está digitando a cidade: {{records.cidade }}

<br><br>

<table  border="1">
    <tr>
		<td>Nome</td>
		<td>Cidade</td>
	</tr>
	<tr ng-repeat="x in records">
        <td>{{x.nome}}</td>
        <td>{{x.cidade}}</td>
    </tr>
</table>

<br>
<br>


<button ng-click="buscaDados()">Busca dados via GET no servidor</button> 
<br>
o retorno da busca foi:
{{dados}}

</div>







</body>
</html>
