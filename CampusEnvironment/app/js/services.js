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
    
    var locationList = [];

  var addLocation = function(data) {
      locationList.push(data);
  };
 
  var getLocation = function(){
      return locationList;
  };

  return {
    addLocation: addLocation,
    getLocation: getLocation
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