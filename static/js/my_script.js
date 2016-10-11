var app = angular.module('bookapp', {});
app.config(function($routeProvider){
  $routeProvider.
  when("/",{controller:bookCtrSingle,templateUrl:BASE_URL+"/project/layout"})
})

app.controller("bookCtrSingle",["$scope",function($scope){
  alert(123);
}]);

app.controller("bookCtr",["$scope",function($scope){
  $scope.test = "test string";
  $scope.testobj = {title:"Truyện cổ tích"};
  $scope.books = [
    {
      title: 'Đắc nhân tâm',
      views: 0
    },
    {
      title: 'Thép đã tôi thế ấy',
      views: 0
    }
  ];
  $scope.plushOne = function(index){
    $scope.books[index].views++;
  }
}]);

// factory: service
// directive