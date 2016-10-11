var app = angular.module("vcard",["vcardApi"]);

app.config(function($routeProvider){
    $routeProvider.
    when("/",
        {
            controller: homepage,
            templateUrl: "/static/views/homepage.html",
        }
    ).
    when("/news",{
        controller: newsCtrl,
        templateUrl: "/static/views/news.html"
    }).
    when("/blog",{
        controller: blogCtrl,
        templateUrl: "/static/views/blog.html"
    }).
    when("/contact",{
        controller: contactCtrl,
        templateUrl: "/static/views/contact.html"
    }).
    when("/resume",{
        controller: resumeCtrl,
        templateUrl: "/static/views/resume.html"
    })
});

function homepage($scope,Vcard){
    var data_person = {
        name : "Vi Hoang Son",
        description: "I have ten years experience as a web/interface designer. I have a love of clean, elegant styling, and I have lots of experience in the production of CSS and (X)HTML for modern websites. I have a reasonable grasp of using JavaScript frameworks, specifically jQuery.",
        birthday : "10/06/1986",
        email : "vihoangson@gmail.com",
        address:"HCM City",
        phone : "0121 885 1144",
        website : "www.vihoangson.com",
    };
    $scope.data = data_person;

    $scope.vcard = Vcard.query();
}

function newsCtrl($scope){
    $scope.data = {
        id:1
    };
}

function blogCtrl($scope){
    $scope.data = {
        id:1
    };
}

function contactCtrl($scope){
    $scope.data = {
        id:1
    };
}

function resumeCtrl($scope,Vcard){
    $scope.data = Vcard.getdata();
}



angular.module('vcardApi', ['ngResource']).
factory('Vcard', function($resource) {
    var Vcard = $resource('/api/projects/:method/:id', {}, {
        query: {method:'GET', params: {method:'index'}, isArray:true },
        save: {method:'POST', params: {method:'save'} },
        get: {method:'GET', params: {method:'edit'} },
        getdata: {method:'GET', params: {method:'getdata'} },
        remove: {method:'DELETE', params: {method:'remove'} }
    });
    Vcard.prototype.update = function(cb) {
        return Vcard.save({id: this.id},
            angular.extend({}, this, {id:undefined}), cb);
    };
    Vcard.prototype.destroy = function(cb) {
        return Vcard.remove({id: this.id}, cb);
    };
    return Vcard;
});
