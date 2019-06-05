<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-    ng-cloak {
            display: none !important;
        }
    </style>
    <title>Create ID</title>
  </head>
  <body ng-app="myApp" ng-controller="myCtrl">
  <br>
  <br>
  <br>
    
    <div class="container">
    <div class="alert alert-success alert-dismissible fade show" role="alert" ng-if="hasCreatedId" ng-cloak>
        <strong>Success!</strong> The ID has been generated. <a ng-href="created-id.pdf?lrn={{formData.lrn}}" target="_blank" ng-if="hasCreatedId">Click here to view the ID.</a>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="alert alert-danger alert-dismissible fade show" role="alert" ng-if="hasError" ng-cloak>
        <strong>Error!</strong> LRN must be filled up.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
        <h1 style="text-align:center">Generate ID</h1>
        <br>
        <div class="row">
            <div class="col-6">
                <form>
                    <div class="form-group">
                        <label for="lrn">LRN</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="lrn" ng-model="formData.lrn" placeholder="Enter LRN">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="students_name">Student's Name</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="students_name" ng-model="formData.students_name" placeholder="Enter Student's Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="students_grade">Student's Grade</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="students_grade" ng-model="formData.students_grade" placeholder="Enter Student's Grade">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="guardians_name">Guardian's Name</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="guardians_name" ng-model="formData.guardians_name" placeholder="Enter Guardian's Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="guardians_address">Guardian's Address</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="guardians_address" ng-model="formData.guardians_address" placeholder="Enter Guardian's Address">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="guardians_number">Guardian's Contact Number</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="guardians_number" ng-model="formData.guardians_number" placeholder="Enter Guardian's Contact Number">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" ng-click="createId()">Generate</button>
                    

                    
                </form>
            </div>

            <div class="col-6">
                <form>
                    <div class="form-group">
                        <label for="lrn">LRN Font Size</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="lrn" ng-model="settings.lrn.font_size" placeholder="Enter LRN Font Size">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="students_name">Student's Name Font Size</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="students_name" ng-model="settings.students_name.font_size" placeholder="Enter Student's Name Font Size">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="students_grade">Student's Grade Font Size</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="students_grade" ng-model="settings.students_grade.font_size" placeholder="Enter Student's Grade Font Size">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="guardians_name">Guardian's Name Font Size</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="guardians_name" ng-model="settings.guardians_name.font_size" placeholder="Enter Guardian's Name Font Size">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="guardians_address">Guardian's Address Font Size</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="guardians_address" ng-model="settings.guardians_address.font_size" placeholder="Enter Guardian's Address Font Size">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="guardians_number">Guardian's Contact Number Font Size</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="guardians_number" ng-model="settings.guardians_number.font_size" placeholder="Enter Guardian's Contact Number Font Size">
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        <hr>
        <h1 style="text-align:center">View Generated ID</h1>
        <br>
        <div class="row">
                <div class="col-6">
                    <form>
                        <div class="form-group">
                            <label for="lrn">LRN</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="lrn" ng-model="viewLrn" placeholder="Enter LRN">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" ng-click="viewId()">View ID</button>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js" crossorigin="anonymous"></script>


    <script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope,$http, $sce, $window) {
        
        $scope.formData = {};
        $scope.settings = {
            lrn: {position: {'top': 121.8, 'left': 273.4}, font_size: 8},
            students_name: {position: {'top': 153.6, 'left': 205.8}, font_size: 13.32},
            students_grade: {position: {'top': 186.6, 'left': 212.8}, font_size: 9},
            guardians_name: {position: {'top': 59.6, 'left': 25.8}, font_size: 11.73},
            guardians_address: {position: {'top': 74.1, 'left': 25.6}, font_size: 11.73},
            guardians_number: {position: {'top': 88.6, 'left': 25.8}, font_size: 11.73}
        }

        $scope.hasCreatedId = false;
        $scope.hasError = false;
        $scope.viewLrn = "";
        
        $scope.viewId = function() {
            window.open("created-id.pdf?lrn=" + $scope.viewLrn);
        }

        $scope.createId = function() {
            $scope.hasError = false;
            if($scope.formData.lrn && $scope.formData.lrn.trim() != ""){
                $scope.hasCreatedId = false;
                $http({
                    method: 'POST',
                    url: 'create-id.php',
                    data: $.param({
                        formData: $scope.formData,
                        settings: $scope.settings
                    }),
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                }).then(function(response) {
                    console.log(response);
                    $scope.hasCreatedId = true;
                    // window.open("created-id.pdf?lrn=" + response.data.lrn.value,'newwindow','width=900,height=400');
                }, function(rejection) {
                    $scope.submit = false;
                });
            }else{
                $scope.hasError = true;
            }
        }


    });
    </script>
  </body>