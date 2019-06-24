<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
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
                    
                    <!-- <div class="form-group">
                        <label for="students_name">Student Type</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="students_type" ng-model="formData.students_type" placeholder="Enter Student Type" >

                            <div class="form-control">
                                <input class="form-control-input" type="radio" ng-model="formData.students_type" id="exampleRadios1" value="JUNIOR" required>
                                <label class="form-control-label" for="exampleRadios1">
                                    JUNIOR HIGH
                                </label>
                            </div>
                            <div class="form-control">
                                <input class="form-control-input" type="radio" ng-model="formData.students_type" id="exampleRadios2" value="SENIOR">
                                <label class="form-control-label" for="exampleRadios2">
                                    SENIOR HIGH
                                </label>
                            </div>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label for="students_name">Student's Name</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="students_name" ng-model="formData.students_name" placeholder="Enter Student's Name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="students_grade">Student's Grade</label>
                        <div class="input-group mb-3">
                            <select name="" id="" class="form-control" ng-model="formData.students_grade_options" required>
                                <option value="">Select Grade</option>
                                <option value="Grade 7 -">Grade 7 -</option>
                                <option value="Grade 8 -">Grade 8 -</option>
                                <option value="Grade 9 -">Grade 9 -</option>
                                <option value="Grade 10 -">Grade 10 -</option>
                                <option value="Grade 11 -">Grade 11 -</option>
                                <option value="Grade 12 -">Grade 12 -</option>
                            </select>
                            <input type="text" class="form-control" id="students_section" ng-model="formData.students_section" placeholder="Enter Student's Section" required>
                        </div>
                    </div>
                    <div class="form-group" ng-if="formData.students_grade_options == 'Grade 11 -' || formData.students_grade_options == 'Grade 12 -'">
                        <label for="students_grade">Student's Strand</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="students_strand" ng-model="formData.students_strand" placeholder="Enter Student's Strand" required>
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
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="guardians_address" ng-model="formData.guardians_address" placeholder="Enter Guardian's Address" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="guardians_number">Guardian's Contact Number</label>
                        <small><b><i>(Characters Remaining: {{ countCharactersRemaining(formData.guardians_number,11) }})</i></b></small>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="guardians_number" ng-model="formData.guardians_number" placeholder="Enter Guardian's Contact Number"  ng-class="{'is-invalid': checkContactNumber() }"  ng-maxlength="11" maxlength="11">
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
                    
                    <!-- <div class="form-group">
                        <label for="students_name">Student Type</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="students_type" ng-model="settings.students_type.font_size" placeholder="Enter Student Type Font Size" required>
                        </div>
                    </div> -->

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
                    
                    <div class="form-group" ng-if="formData.students_grade_options == 'Grade 11 -' || formData.students_grade_options == 'Grade 12 -'">
                        <label for="students_grade">Student's Strand Font Size</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="students_strand" ng-model="settings.students_strand.font_size" placeholder="Enter Student's Strand Font Size" required>
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
                        <small><b><i>(Characters Remaining: {{ countCharactersRemaining(formData.lrn,12) }})</i></b></small>
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
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/angular.min.js"></script>


    <script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope,$http, $sce, $window) {
        
        $scope.formData = {};
        $scope.formData.students_type = null;
        $scope.createdLrn = '';
        $scope.createdStudentName = '';
        $scope.settings = {
            lrn: {position: {'top': "127.8", 'left': "370.8"}, font_size: "9.55"},
            students_name: {position: {'top': "102.6", 'left': "370.8"}, font_size: "11"},
            students_grade: {position: {'top': "116.6", 'left': "370.8"}, font_size: "9.55"},
            students_strand: {position: {'top': "127.8", 'left': "370.8"}, font_size: "9.55"},
            students_type: {position: {'top': "207", 'left': "196"}, font_size: "11.98"},
            guardians_name: {position: {'top': "124.6", 'left': "35.8"}, font_size: "13.14"},
            guardians_address: {position: {'top': "145.1", 'left': "57.8"}, font_size: "13.14"},
            guardians_number: {position: {'top': "170.1", 'left': "35.8"}, font_size: "13.14"}
        }

        $scope.hasCreatedId = false;
        $scope.hasError = false;
        $scope.viewLrn = "";
        
        $scope.viewId = function() {
            window.open("created-id.php?lrn=" + $scope.viewLrn);
        }

        $scope.checkContactNumber = function() {
            if($scope.formData.guardians_number == null){return false};
            return $scope.formData.guardians_number && $scope.formData.guardians_number.length != 11 || isNaN($scope.formData.guardians_number);
        }
        $scope.checkLrn = function() {
            if($scope.formData.lrn == null){return false};
            return $scope.formData.lrn && $scope.formData.lrn.length != 12 || isNaN($scope.formData.lrn);
        }

        $scope.createId = function() {
            $scope.hasError = false;
            $scope.createdLrn = false;
            $scope.formData.students_grade = $scope.formData.students_grade_options ? $scope.formData.students_grade_options +" "+$scope.formData.students_section : "";
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


    });
    </script>
  </body>    