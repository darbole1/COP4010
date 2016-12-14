/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var studentPortfolioServices = angular.module('StudentPortfolioServices', ['ngResource']);
var studentLocation = "http://localhost:8080/StudentPortfolioWeb/webresources/edu.nsuni.entity.student";
studentPortfolioServices.factory('StudentService', ['$resource',  function($resource){
    return $resource(studentLocation, {}, {
      query: {method:'GET', isArray:true}
    });
  }]);

//---------------------My Restfule Webservice Database-------------------------------------

var locationsDataServiceModule = angular.module('LocationsDataServiceModule', ['ngResource']);

var locationsSource = "http://lamp.cse.fau.edu/~mhunte11/";
locationsDataServiceModule.factory('LocationsDataService',['$resource',function($resource){
        return $resource(locationsSource+'?',
        {location:'@location'}, 
        
            {query: {method:'GET',isArray:true, params:{location:'@location'}}
                 
            });
}]);

//locationsDataServiceModule.service('LocationChoice', function(){
locationsDataServiceModule.factory('LocationChoice', function(){
    
    var locationLat = [];
    var locationLng = []; 
    var locationName = []; 

  var addLat = function(data) {
      locationLat.push(data);
  };
 
  var getLocation = function(){
      return locationList;
  };

  return {
    addLat: addLat,
    addLng: addLng,
    addName: addName,
    getLat: getLat,
    getLng: getLng,
    getName: getName
  };
    
    
});

//==================PARKING====================================================================================================


var parkingDataServiceModule = angular.module('ParkingDataServiceModule',['ngResource']);

var parkingSource = "http://lamp.cse.fau.edu/~mhunte11/parking.php";

parkingDataServiceModule.factory('ParkingDataService', ['$resource',function($resource){
        return $resource(parkingSource+'?',
        {locations:'@locations'},
        
        {query: {method:'GET',isArray:true, params:{locations:'@locations'}}
        });
}]);

parkingDataServiceModule.factory('ResidentDataService', ['$resource',function($resource){
        return $resource(residentSource+'?',
        {locations:'@locations'},
        
        {query: {method:'GET',isArray:true, params:{locations:'@locations'}}
        });
}]);

parkingDataServiceModule.factory('CommuterDataService', ['$resource',function($resource){
        return $resource(commuterSource+'?',
        {locations:'@locations'},
        
        {query: {method:'GET',isArray:true, params:{locations:'@locations'}}
        });
}]);

parkingDataServiceModule.factory('VisitorDataService', ['$resource',function($resource){
        return $resource(visitorSource+'?',
        {locations:'@locations'},
        
        {query: {method:'GET',isArray:true, params:{locations:'@locations'}}
        });
}]);

parkingDataServiceModule.factory('FacultyDataService', ['$resource',function($resource){
        return $resource(facultySource+'?',
        {locations:'@locations'},
        
        {query: {method:'GET',isArray:true, params:{locations:'@locations'}}
        });
}]);


//========RANDOM GENERATOT============================================


var randomDataServiceModule = angular.module('RandomDataServiceModule',['ngResource']);

var randomSource = "http://superjosue.pythonanywhere.com/";

randomDataServiceModule.factory('RandomDataService', ['$resource',function($resource){
        return $resource(randomSource+'?',
        {locations:'@locations'},
        
        {query: {method:'GET',isArray:true, params:{locations:'@locations'}}
        });
}]);
