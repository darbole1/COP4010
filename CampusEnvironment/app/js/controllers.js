/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//****************************Controllers property of mourique Hunter ********************************************





//------------------------------------------------------------------
var locationsDataControllerModule = angular.module('LocationsDataControllerModule',[]);


 //------------------------
 // link to personal database for information on locations, grabs info to beused in functionality
 locationsDataControllerModule.controller('LocationsDataController', function ($scope,LocationsDataService){
       //(just made thsi edit, thing lactaionDataService is only needed)$scope.query;
      // $scope.location=[{lat:0,lng:0}];
       
      // $scope.location[0].lat = -131.99;
       // $scope.location[0].lng = 132.99;
       
      LocationsDataService.query().$promise.then(function(data){ //grabs from data service
          $scope.location = data;
         //console.log($scope.location[0].lat);
     });
   
     
 });


locationsDataControllerModule.controller('LocationsMapController', function ($scope,$window,$routeParams,LocationsDataService){
     
   /*  <!--------------------------------------------------->*/
  
   
    
      
    
      LocationsDataService.query().$promise.then(function(data){
     $scope.location = data;
 // });
      $scope.query;
    /*=======================================================================*/
    
    //var myLatLng = new google.maps.LatLng(38.898748, -77.037684);
    
    var myLatLng = new google.maps.LatLng(data[0].lat, data[0].lng);
    

        
    $window.map = new google.maps.Map(document.getElementById('map'), {
        /*center: {
            lat: -34.397,
            lng: 150.644
        },*/
        center: myLatLng,
        zoom: 16
    });
    
   

   // var name = data.name;
   for(var i= 0; i<data.length; i++){
       
    
    var LatLng1 = new google.maps.LatLng(data[i].lat, data[i].lng);
    var marker = new google.maps.Marker({
    position: LatLng1,
    map: $window.map,
    title: 'MAP'
    });
     var infowindow = new google.maps.InfoWindow({
          content: data[i].name,
        });   
    //for(var i = 0; i<data.length; i++){
     // var space = data[i].name;
    marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
    //}
}
/*for(i = 0; i<data; i++){
       // var space = data[0];
    marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
    }*/
     });//end for locationdataservice promise
    
 });

//----------MAP CONTROLLER-------------------------------------------------

var cities = [
              {
                  city : 'India',
                  desc : 'This is the best country in the world!',
                  lat : 23.200000,
                  long : 79.225487
              },
              {
                  city : 'New Delhi',
                  desc : 'The Heart of India!',
                  lat : 28.500000,
                  long : 77.250000
              },
              {
                  city : 'Mumbai',
                  desc : 'Bollywood city!',
                  lat : 19.000000,
                  long : 72.90000
              },
              {
                  city : 'Kolkata',
                  desc : 'Howrah Bridge!',
                  lat : 22.500000,
                  long : 88.400000
              },
              {
                  city : 'Chennai  ',
                  desc : 'Kathipara Bridge!',
                  lat : 13.000000,
                  long : 80.250000
              }
          ];

locationsDataControllerModule.controller('MapCtrl', function ($scope) {

              var mapOptions = {
                  zoom: 4,
                  center: new google.maps.LatLng(25,80),
                  mapTypeId: google.maps.MapTypeId.TERRAIN
              }

              $scope.map = new google.maps.Map(document.getElementById('map'), mapOptions);

              $scope.markers = [];
              
              var infoWindow = new google.maps.InfoWindow();
              
              var createMarker = function (info){
                  
                  var marker = new google.maps.Marker({
                      map: $scope.map,
                      position: new google.maps.LatLng(info.lat, info.long),
                      title: info.city
                  });
                  marker.content = '<div class="infoWindowContent">' + info.desc + '</div>';
                  
                  google.maps.event.addListener(marker, 'click', function(){
                      infoWindow.setContent('<h2>' + marker.title + '</h2>' + marker.content);
                      infoWindow.open($scope.map, marker);
                  });
                  
                  $scope.markers.push(marker);
                  
              }  
              
              for (i = 0; i < cities.length; i++){
                  createMarker(cities[i]);
              }

              $scope.openInfoWindow = function(e, selectedMarker){
                  e.preventDefault();
                  google.maps.event.trigger(selectedMarker, 'click');
              }

          });


//----------------------------------------------------------------------------