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

var locationsSource = "http://localhost:8080/LocationsWeb/webresources/me.campusmap.entity.locations";
locationsDataServiceModule.factory('LocationsDataService',['$resource',function($resource){
        return $resource(locationsSource+'?',
        {location:'@location'}, 
        
            {query: {method:'GET',isArray:true, params:{location:'@location'}}
                 
            });
}]);
