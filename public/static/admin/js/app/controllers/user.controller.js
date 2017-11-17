(function() {
    'use strict';

    angular
        .module('Welax')
        .controller('UserController', UserController);

    function UserController($rootScope, $scope, $http, $window) {

        $scope.files = [];
        $scope.totalPages = 0;
        $scope.currentPage = 1;
        $scope.range = [];

        $scope.pullDownLists = {
            availableOption: [
              { value: 15, name: '15' },
              { value: 50, name: '50' },
              { value: 100, name: '100' }
            ],
            selectedOption: {value: 15, name: '15'}
        };

        $scope.getResultsPage = function (name, status, perPage, pageNumber) {
            $scope.loading = true;
            $scope.loaded = false;

            $http.get('/manager/tool/welax/user/getAllUsers?name=' + name + '&status=' + status + '&perPage=' + perPage + '&page=' + pageNumber, {cache: false})
                .success(function(response) {

                    $scope.loading = false;
                    $scope.loaded = true;

                    $scope.name = name;
                    $scope.status = status;

                    $scope.pullDownLists.selectedOption = { value: perPage, name: perPage };
                    $scope.perPage = perPage;
                    $scope.pageNumber = pageNumber;
                    $scope.totalPages = response.data.last_page;
                    $scope.currentPage = response.data.current_page;
                    $scope.from = response.data.from;
                    $scope.to = response.data.to;
                    $scope.total = response.data.total;
                    var pages = [];
                    for(var i = 1; i <= response.data.last_page; i++) {          
                        pages.push(i);
                    }
                    $scope.range = pages;

                    $scope.users = response.data.data;
                    $scope.totalItems = response.data.total;
                    if ($scope.users.length > 0) {
                        $scope.preview(0, $scope.users[0]);
                    }

                });
        }
        
        $scope.searchUserName = function() {
            if ($scope.searchText.length >= 1) {
                $scope.getResultsPage($scope.searchText, $scope.status, $scope.perPage, $scope.pageNumber);
            } else {
                $scope.getResultsPage('all-user', $scope.status, $scope.perPage, $scope.pageNumber);
            }
        }

        $scope.filterStatus = function () {
            $scope.getResultsPage($scope.searchText, $scope.status, $scope.perPage, $scope.pageNumber);
        }

        $scope.loadInit = function () {
            $scope.getResultsPage('all-user', 'all-status', 15, 1);
        }

        $scope.preview = function (index, user) {
            $scope.pathPreview = user;
            $scope.selectedIndex = index;
        }

		$scope.submit = function (selectedIndex, $form, pathPreview) {
            if ($form.$invalid) {
                $scope.submitted = true;
                angular.element('#submitPreviewForm input.ng-invalid').first().focus();
                return false;
            }

            var formData = getFormDataEvaluation('#submitPreviewForm');

            swal({
                title: "Bạn chắc chắn muốn lưu thay đổi ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-primary",
                confirmButtonText: 'Lưu ngay',
                cancelButtonText: "Quay lại",
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function () {
                $http({
                    url: '/manager/tool/welax/user/update',
                    method: 'POST',
                    data: formData
                }).success(function (response) {
                    if (response.status) {
                        swal({ title: '', text: response.message, type: response.type }, function (isConfirm) {
                            if (isConfirm) {
                                $scope.$apply(function () {
                                    var responseData = apiModifyTable($scope.users, response.data.id, response.data);
                                    $scope.users = responseData;
                                })
                            }
                        })
                    }
                });
            });
        }
		
	}
})();