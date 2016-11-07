'use strict';

// Declare app level module which depends on views, and components
var CampusEnvironment = angular.module('CampusEnvironment', [
 'ngRoute','LocationsDataControllerModule', 'LocationsDataServiceModule', 'ParkingDataServiceModule', 'ParkingDataControllerModule',
 
]);
/*config(['$routeProvider', function($routeProvider) {
  $routeProvider.otherwise({redirectTo: '/view1'});
}]);*/

//establishing Different Views

CampusEnvironment.config(['$routeProvider', 
    function($routeProvider){
        $routeProvider.
                 //when('/locations',{
                 when('/',{   //Extention for home page
                templateUrl: 'view2/enter.html', //path for home page data
                //controller: 'LocationsDataController',
                //css:'homeCSS.css'
                 
            }).
                    when('/menu',{//extention for menu 
                        templateUrl: 'view2/menu.html',
                        controller:'LocationsDataController'
                        
            }).
                    when('/map',{//extention for map page 
                        templateUrl: 'view3/map.html',
                        controller: 'LocationsMapTest2Controller',
                        //css:'maps.css'
                        
            }).
                     when('/parking',{//extention for map page 
                        templateUrl: 'view4/parking.html',
                        controller: 'ParkingMapController',
                        //css:'maps.css'
                        
            }).
                     when('/pickLocation',{//extention for map page 
                        templateUrl: 'view3/pickLocation.html',
                        controller: 'DropDownDataController',
                        //css:'maps.css'
                        
            }).
                    
             
               
                    
          otherwise({ //jump to enter/splash page if cannot load required page
            //redirectTo: '/locations'        
            redirectTo: '/'
        });
    }]);