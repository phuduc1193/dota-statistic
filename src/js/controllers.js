app.controller('UsersCtrl', ['$scope', '$http', '$templateCache', function($scope, $http, $templateCache){
  $scope.url = 'api/users.php';
  $scope.itemsByPage=15;

  $http({method: 'GET', url: $scope.url, cache: $templateCache}).
    then(function(response) {
      $scope.status = response.status;
      $scope.rowCollection = response.data;
    }, function(response) {
      $scope.rowCollection= response.data || 'Request failed';
      $scope.status = response.status;
  });
}]);

app.directive('searchWatchModel',function(){
  return {
    require:'^stTable',
    scope:{
      searchWatchModel:'='
    },
    link:function(scope, ele, attr, ctrl){
      var table=ctrl;
      
      scope.$watch('searchWatchModel',function(val){
        ctrl.search(val);
      });
      
    }
  };
});