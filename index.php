<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        <h1 style="text-align:center">Generate ID</h1>
        <br>
        <div class="row">
            <div class="col-6">
                <form ng-submit="createId()">
                    <div class="form-group">
                        <label for="lrn">LRN</label>
                        <small><b><i>(Characters Remaining: {{ countCharactersRemaining(formData.lrn,12) }})</i></b></small>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="lrn" ng-model="formData.lrn" placeholder="Enter LRN"  ng-class="{'is-invalid': checkLrn() }" ng-maxlength="12" maxlength="12" required>
                            <div class="invalid-feedback">
                                LRN must be a number and has 12 digits
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="students_name">Student Type</label>
                        <div class="input-group mb-3">
                            <!-- <input type="text" class="form-control" id="students_type" ng-model="formData.students_type" placeholder="Enter Student Type" > -->

                            <div class="form-control">
                                <input class="form-control-input" type="radio" ng-model="formData.students_type" name="students_type" id="exampleRadios1" value="ELEMENTARY DEPARTMENT" required>
                                <label class="form-control-label" for="exampleRadios1">
                                    ELEMENTARY
                                </label>
                            </div>
                            <div class="form-control">
                                <input class="form-control-input" type="radio" ng-model="formData.students_type" name="students_type" id="exampleRadios2" value="HIGH SCHOOL DEPARTMENT" required>
                                <label class="form-control-label" for="exampleRadios2">
                                    HIGH SCHOOL
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="students_name">Student's Name</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="students_name" ng-model="formData.students_name" placeholder="Enter Student's Name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="students_grade">Student's Grade</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="students_grade" ng-model="formData.students_grade" placeholder="Enter Student's Grade" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="guardians_name">Guardian's Name</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="guardians_name" ng-model="formData.guardians_name" placeholder="Enter Guardian's Name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="guardians_address">Guardian's Address</label>
                        <small><b><i>(Characters Remaining: {{ countCharactersRemaining(formData.guardians_address,40) }})</i></b></small>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="guardians_address" ng-model="formData.guardians_address" placeholder="Enter Guardian's Address" ng-maxlength="40" maxlength="40" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="guardians_number">Guardian's Contact Number</label>
                        <small><b><i>(Characters Remaining: {{ countCharactersRemaining(formData.guardians_number,11) }})</i></b></small>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="guardians_number" ng-model="formData.guardians_number" placeholder="Enter Guardian's Contact Number"  ng-class="{'is-invalid': checkContactNumber() }" ng-maxlength="11" maxlength="11">
                            <div class="invalid-feedback">
                                Contact Number must be a number and has 11 digits
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Generate</button>

                </form>
            </div>

            <div class="col-6">
                <form>
                    <div class="form-group">
                        <label for="lrn">LRN Font Size</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="lrn" ng-model="settings.lrn.font_size" placeholder="Enter LRN Font Size" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="students_name">Student Type</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="students_type" ng-model="settings.students_type.font_size" placeholder="Enter Student Type Font Size" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="students_name">Student's Name Font Size</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="students_name" ng-model="settings.students_name.font_size" placeholder="Enter Student's Name Font Size" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="students_grade">Student's Grade Font Size</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="students_grade" ng-model="settings.students_grade.font_size" placeholder="Enter Student's Grade Font Size" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="guardians_name">Guardian's Name Font Size</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="guardians_name" ng-model="settings.guardians_name.font_size" placeholder="Enter Guardian's Name Font Size" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="guardians_address">Guardian's Address Font Size</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="guardians_address" ng-model="settings.guardians_address.font_size" placeholder="Enter Guardian's Address Font Size" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="guardians_number">Guardian's Contact Number Font Size</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="guardians_number" ng-model="settings.guardians_number.font_size" placeholder="Enter Guardian's Contact Number Font Size" required>
                        </div>
                    </div>
                    
                </form>
            </div>

            <br>
            <br>
            <br>
            <br>

        </div>
            <div class="alert alert-success alert-dismissible fade show" role="alert" ng-if="hasCreatedId" ng-cloak>
                <strong>Success!</strong> The ID of <b ng-bind="createdStudentName"></b> has been generated. <a ng-href="created-id.php?lrn={{createdLrn}}" ng-if="hasCreatedId">If the download doesn't start automatically in a few seconds, please click here.</a>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
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
    <script src="js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/angular.min.js" crossorigin="anonymous"></script>


    <script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope,$http, $sce, $window) {
        
        $scope.formData = {};
        $scope.formData.students_type = null;
        $scope.createdLrn = '';
        $scope.createdStudentName = '';
        $scope.settings = {
            lrn: {position: {'top': 121.8, 'left': 278.4}, font_size: 8},
            students_name: {position: {'top': 153.6, 'left': 208.8}, font_size: 11},
            students_grade: {position: {'top': 186.6, 'left': 215.8}, font_size: 9},
            students_type: {position: {'top': 207, 'left': 196}, font_size: 11.98},
            guardians_name: {position: {'top': 59.6, 'left': 25.8}, font_size: 11.73},
            guardians_address: {position: {'top': 74.1, 'left': 25.6}, font_size: 11.73},
            guardians_number: {position: {'top': 88.6, 'left': 25.8}, font_size: 11.73}
        }

        $scope.hasCreatedId = false;
        $scope.hasError = false;
        $scope.viewLrn = "";
        
        $scope.viewId = function() {
            window.open("created-id.php?lrn=" + $scope.viewLrn);
        }

        $scope.checkContactNumber = function() {
            if(!$scope.formData.guardians_number){return false}
            return $scope.formData.guardians_number.length != 11 || isNaN($scope.formData.guardians_number);
        }
        $scope.checkLrn = function() {
            if(!$scope.formData.lrn){return false}
            return $scope.formData.lrn.length != 12 || isNaN($scope.formData.lrn);
        }

        $scope.countCharactersRemaining = function(data,max) {
            if(data == null){
                return max;
            }
            remaining = max - data.length;
            if(remaining<=0){
                return '0';
            }else{
                return remaining;
            }
        }


        $scope.createId = function() {
            $scope.hasError = false;
            $scope.createdLrn = false;
            if($scope.formData.lrn && $scope.formData.lrn.trim() != "" && !$scope.checkLrn()){
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
                    $scope.createdLrn = $scope.formData.lrn;
                    $scope.createdStudentName = $scope.formData.students_name;
                    window.location = "created-id.php?lrn="+$scope.createdLrn;
                    $scope.formData = {};
                    $scope.formData.students_type = null;
                    // window.open("created-id.php?lrn=" + response.data.lrn.value,'newwindow','width=900,height=400');
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