'use strict';

/**
 * @ngdoc overview
 * @name reservasApp
 * @description
 * # reservasApp
 *
 * Main module of the application.
 */
angular
  .module('reservasApp', [
    'ngAnimate',
    'ngCookies',
    'ngResource',
    'ngRoute',
    'ngSanitize',
    'ngTouch'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl',
        controllerAs: 'main'
      })
      .when('/about', {
        templateUrl: 'views/about.html',
        controller: 'AboutCtrl',
        controllerAs: 'about'
      })
	  .when('/login', {
        templateUrl: 'views/login.html',
        controller: 'Login',
        controllerAs: 'login'
      })
		.when('/register', {
        templateUrl: 'views/formoid.html',
        controller: 'register',
        controllerAs: 'register'
      })
      .otherwise({
        redirectTo: '/#'
      });
  });
