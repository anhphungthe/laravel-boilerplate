app.directive('validFile', ['$parse', function($parse) {
    return {
        require: 'ngModel',
        link: function (scope, el, attrs, ngModel) {
            var validFormats = ['PNG','GIF','JPEG','JPG','jpg','jpeg','png','gif'];
            el.bind('change', function () {
                scope.$apply(function () {
                    ngModel.$setViewValue(el.val());
                    ngModel.$render();
                    var file = el[0].files;
                    for( var i =0; i < file.length; i++ ) {
                        var ext = file[i].name.substr((file[i].name.lastIndexOf('.') +1));
                        if(validFormats.indexOf(ext) == -1) {
                            ngModel.$setValidity("extension", false);
                        }else {
                            ngModel.$setValidity("extension", true);
                        }
                        if (file[i].size > 1048576) {
                            ngModel.$setValidity("length", false);
                        } else {
                            ngModel.$setValidity("length", true);
                        }
                    }
                })
            })
        }
    }
}]);

app.directive('ngFormCommit', ['$parse', function($parse) {
    return {
        require:"form",
        link: function($scope, $el, $attr, $form) {
            $form.commit = function() {
                $el[0].submit();
            };
        }
    };
}]);

app.directive('itemsPagination', function () {
    return {
        restrict: 'E',
        template: '<ul class="pagination">'+
            '<li ng-show="currentPage != 1"><a href="javascript:void(0)" ng-click="getResultsPage(name, perPage, 1)">Đầu</a></li>'+
            '<li ng-show="currentPage != 1"><a href="javascript:void(0)" ng-click="getResultsPage(name, perPage, currentPage-1)">Trước</a></li>'+
            '<li ng-repeat="i in range track by $index" ng-class="{active : currentPage == i}">'+
                '<a href="javascript:void(0)" ng-click="getResultsPage(name, perPage, i)">{{i}}</a>'+
            '</li>'+
            '<li ng-show="currentPage != totalPages"><a href="javascript:void(0)" ng-click="getResultsPage(name, perPage, currentPage+1)">Tiếp</a></li>'+
            '<li ng-show="currentPage != totalPages"><a href="javascript:void(0)" ng-click="getResultsPage(name, perPage, totalPages)">Cuối</a></li>'+
        '</ul>'
    };
});

app.directive('convertToNumber', function() {
    return {
        require: 'ngModel',
        link: function(scope, element, attrs, ngModel) {
            ngModel.$parsers.push(function(val) {
                return parseInt(val, 10);
            });
            ngModel.$formatters.push(function(val) {
                return '' + val;
            });
        }
    };
});

app.directive('ngModel', function() {
    return {
        require: 'ngModel',
        link: function(scope, elem, attr, ngModel) {
            elem.on('blur', function() {
                ngModel.$dirty = true;
                scope.$apply();
            });

            ngModel.$viewChangeListeners.push(function() {
                ngModel.$dirty = false;
            });

            scope.$on('$destroy', function() {
                elem.off('blur');
            });
        }
    }
});