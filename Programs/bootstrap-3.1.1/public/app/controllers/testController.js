/* ----------------------- Controller ----------------------- */
/*   Config scriptet sätter upp alla nödvändiga funktioner    */
/* ---------------------------------------------------------- */
app.controller('TestController',function($scope, CountriesFactory){
	$scope.countries = [];
	$scope.message = "Test controller";

	init();
	function init(){
		$scope.countries = CountriesFactory.getCountries();
	};

	$scope.addCountry = function(){
		$scope.countries.push({name:$scope.userInput.country, city:$scope.userInput.city});
	};
});