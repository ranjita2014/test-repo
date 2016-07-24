demoapp.config(function ($routeProvider)
{
$routeProvider
.when('/list',
{
	controller:'UserController',
	templateUrl:'view/list.html'
	
})
.when('/add',
{
	controller:'UserController',
	templateUrl:'view/add_user.html'
	
})
.otherwise({redirectTo:'/list'});
});
							 
						