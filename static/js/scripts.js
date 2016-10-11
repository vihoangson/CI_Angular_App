var app = angular.module('book', ['bookApi']).
  config(function($routeProvider) {
    $routeProvider.
      when('/', {controller:ListBookCtrl, templateUrl:BASE_URL+'book/template_list'}).
      when('/edit/:id', {controller:EditBookCtrl, templateUrl:BASE_URL+'book/template_detail'}).
      otherwise({redirectTo:'/'});
  });


function ListBookCtrl($scope, $location, Book) {
  // Lấy dữ liệu từ servcie
  $scope.books = Book.query();

  // Viết action xóa link
  $scope.destroy = function(Book){
    // use confirm
    if(confirm("are you sure ?")){
      Book.destroy(function(){
        // success
        // Xóa element trong array
        $scope.books.splice($scope.books.indexOf(Book), 1);
      });
    }
  }
}

function EditBookCtrl($scope, $location,$routeParams, Book) {
  var self = this;

  Book.get({id: $routeParams.id}, function(book) {
    self.original = book;
    $scope.book = new Book(self.original);
    });
  $scope.save = function() {
    $scope.book.update(function() {
        $location.path('/');
    });
  };
}
 app.directive("directiveBook",function(){
    return {
        restrict : "E",
        templateUrl : "/static/directive/ele_book.html"
    }
 })

// static\directive\ele_book.html

//============ ============  ============  ============ 

angular.module('project', ['projectApi']).
  config(function($routeProvider) {
    $routeProvider.
      when('/', {controller:ListCtrl, templateUrl:BASE_URL+'projects/template_list'}).
      when('/edit/:id', {controller:EditCtrl, templateUrl:BASE_URL+'projects/template_detail'}).
      when('/new', {controller:CreateCtrl, templateUrl:BASE_URL+'projects/template_detail'}).
      otherwise({redirectTo:'/'});
  });

function ListCtrl($scope, $location, Project) {

  $scope.projects = Project.query();

  $scope.destroy = function(Project) {
    Project.destroy(function() {
      $scope.projects.splice($scope.projects.indexOf(Project), 1);
    });
  };
}

function CreateCtrl($scope, $location, Project) {
  $scope.save = function() {
    Project.save($scope.project, function(project) {
      $location.path('/edit/' + project.id);
    });
  };
}

function EditCtrl($scope, $location, $routeParams, Project) {
  var self = this;

  Project.get({id: $routeParams.id}, function(project) {
    self.original = project;
    $scope.project = new Project(self.original);
  });

  $scope.isClean = function() {
    return angular.equals(self.original, $scope.project);
  };

  $scope.destroy = function() {
    self.original.destroy(function() {
      $location.path('/');
    });
  };

  $scope.save = function() {
    $scope.project.update(function() {
      $location.path('/');
    });
  };
}


angular.module('projectApi', ['ngResource']).
  factory('Project', function($resource) {
    var Project = $resource(BASE_URL+'api/projects/:method/:id', {}, {
      query: {method:'GET', params: {method:'index'}, isArray:true },
      save: {method:'POST', params: {method:'save'} },
      get: {method:'GET', params: {method:'edit'} },
      remove: {method:'DELETE', params: {method:'remove'} }
    });

    Project.prototype.update = function(cb) {
      return Project.save({id: this.id},
          angular.extend({}, this, {id:undefined}), cb);
    };

    Project.prototype.destroy = function(cb) {
      return Project.remove({id: this.id}, cb);
    };

    return Project;
  });

angular.module('bookApi', ['ngResource']).
  factory('Book', function($resource) {
    var Book = $resource(BASE_URL+'api/projects/:method/:id', {}, {
      query: {method:'GET', params: {method:'index'}, isArray:true },
      save: {method:'POST', params: {method:'save'} },
      get: {method:'GET', params: {method:'edit'} },
      remove: {method:'DELETE', params: {method:'remove'} }
    });

    Book.prototype.update = function(cb) {
      return Book.save({id: this.id},
          angular.extend({}, this, {id:undefined}), cb);
    };

    Book.prototype.destroy = function(cb) {
      return Book.remove({id: this.id}, cb);
    };

    return Book;
  });