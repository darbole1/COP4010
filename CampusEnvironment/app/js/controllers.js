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



//----------DROPDOWN MENU CONTROLLER-------------------------------------------------

locationsDataControllerModule.controller('DropDownDataController', function ($scope,LocationsDataService, LocationChoice){
    
    
     LocationsDataService.query().$promise.then(function(data){
         
        
     $scope.location = data;
     
     
      var saveData = []; 
     
     for(var i = 0; i < data.length; i++){
         
         saveData = data[i]; 
         
     }
      document.getElementById("list").innerHTML = saveData;
     
     $scope.dataList = saveData; 
     
         //
     /*for(var i = 0; i < data.length; i++){
         listFunction(data[i].name);
         
         //saveData = "data[i].name"+i;
     }
     function listFunction(name){
         var saveData = "";
          for(var i = 0; i < name.length; i++){
              
              saveData = name[i]; 
              
          }
     
    
 }*/
     
         
     
     
 });
    /*LocationChoice.query().$promise.then(function(data1){
        
    });*/
    
    
    });

//************TEST MAP 2*************************************************************************************


//var locationsDataTestControllerModule = angular.module('LocationsDataTestControllerModule',['uiGmapgoogle-maps']);

locationsDataControllerModule.controller('LocationsMapTest2Controller', function ($scope,$window,$routeParams,LocationsDataService){
     
   /*  <!--------------------------------------------------->*/
  
   
    
      
    
      LocationsDataService.query().$promise.then(function(data){
     $scope.location = data;
 // });
      $scope.query;
    /*=======================================================================*/
    
    //var myLatLng = new google.maps.LatLng(38.898748, -77.037684);
   
     var myLatLng = new google.maps.LatLng(data[0].lat, data[0].lng);
    

   var gmarkers=[];
   var i;  
  // var map;
   // this variable will collect the html which will eventually be placed in the side_bar 
      var side_bar_html = ""; 

   //var map = null;
    $window.map = new google.maps.Map(document.getElementById('map'), {
        /*center: {
            lat: -34.397,
            lng: 150.644
        },*/
        center: myLatLng,
        zoom: 16
    });
    
     
     
    
        
        
   
    
     /*var point = new google.maps.LatLng(data[i].lat, data[i].lng);
     var marker = createMarker(point, data.name, "Text to be displayed")*/
     
     var infowindow = new google.maps.InfoWindow(
  { 
     // content: data[1].name,
    size: new google.maps.Size(150,50)
  });
  // This function picks up the click and opens the corresponding info window
google.maps.event.addListener(map, 'click', function() {
        infowindow.close();
        });
    
        // A function to create the marker and set up the event window function 
        for(i=0; i < data.length; i++){
            
       var point = new google.maps.LatLng(data[i].lat, data[i].lng);
       //set data to marker 
         createMarker(point, data[i].name, "text to be displayed");
      // put the assembled side_bar_html contents into the side_bar div
        // document.getElementById("side_bar").innerHTML = side_bar_html;  


  // put infp from side_bar_html into sidebar div on html page
     document.getElementById("side_bar").innerHTML = side_bar_html; 

$window.myclick = function(i){
    google.maps.event.trigger(gmarkers[i], "click");
    console.log('i am defined and available');
}
     
function createMarker(latlng, name, html) {
    var contentString = name;
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        zIndex: Math.round(latlng.lat()*-100000)<<5
        });
 
 

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(contentString); 
        infowindow.open(map,marker);
       
        });
        
        // save the info we need to use later for the side_bar

        gmarkers.push(marker);
        
     
        
    
    // add a line to the side_bar html
    side_bar_html += '<a href="javascript:myclick(' + (gmarkers.length-1) + ')">' + name + '<\/a><br>';
    //return marker;
  
   
}
 

        }
     
     
    
    });//end for locationdataservice promise
 });




//============================================================================


//----------------------------------------------------------------------------


var parkingDataControllerModule = angular.module('ParkingDataControllerModule',[]);


parkingDataControllerModule.controller('ParkingMapController', function ($scope,$window,$routeParams,ParkingDataService){


  
  

    
    ParkingDataService.query().$promise.then(function(data){











        
        $scope.location = data; 
        
        
         var myLatLng = new google.maps.LatLng(26.370505, -80.102508);
    

  
   var i;  
   //var parkingLocation = new google.maps.LatLng(data[i].lat, data[i].lng);
   var parkingData = data;
   var temp = [0,2];
   
  // var map;
   // this variable will collect the html which will eventually be placed in the side_bar 
       

   //var map = null;
    $window.map = new google.maps.Map(document.getElementById('map'), {
        /*center: {
            lat: -34.397,
            lng: 150.644
        },*/
        center: myLatLng,
        zoom: 16
    });
       for (i=0; i < parkingData.length; i++) {
           var rand = temp[Math.floor(Math.random()*temp.length)];
           //temp = 0;
           
           if (rand > 1){
       
            
            for (var parking in parkingData) {
          // Add the circle for this city to the map.
          var parkingCircle = new google.maps.Circle({
            strokeColor: parkingData[i].parkingPass,
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: parkingData[i].parkingPass,
            fillOpacity: 0.25,
            map: $window.map,
            center: new google.maps.LatLng(parkingData[i].lat, parkingData[i].lng),
            radius: Math.sqrt(parkingData[parking].area) * 100
            
          });
      
      }
  }
  else{
      
      for (var parking in parkingData) {
          // Add the circle for this city to the map.
          var parkingCircle = new google.maps.Circle({
            strokeColor: parkingData[i].parkingPass,
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: parkingData[i].availability,
            fillOpacity: 0.25,
            map: map,
            center: new google.maps.LatLng(parkingData[i].lat, parkingData[i].lng),
            radius: Math.sqrt(parkingData[parking].area) * 100
            
          });
      
      }
      
      
  }
      
       }// end of for loop
        
    });
    
    
    
});


//==========================================================================