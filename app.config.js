angular.
  module('vaBene').
  config(['$locationProvider', '$routeProvider',
    function config($locationProvider, $routeProvider) {
      $locationProvider.hashPrefix('!');

      $routeProvider.
        when('/index', {
          template: '<strona-glowna></strona-glowna>'
        }).
        when('/menu', {
          template: '<menu></menu>'
        }).
        when('/promocje', {
          template: '<promo></promo>'
        }).
        when('/kontakt', {
          template: '<kontakt></kontakt>'
        }).
        when('/galeria', {
          template: '<galeria></galeria>'
        }).
        otherwise('/index');
    }
  ]);