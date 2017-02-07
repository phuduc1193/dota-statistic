var app = angular.module('app', ['ngMaterial', 'ui.router', 'smart-table']);

app.config(function($stateProvider, $urlRouterProvider, $urlMatcherFactoryProvider) {
    // for handling trailing slashes
  $urlMatcherFactoryProvider.strictMode(false);
    
  $stateProvider
  .state({
    name: 'users',
    url: '/users',
    controller: 'UsersCtrl',
    templateUrl: 'views/users.html' 
  })
  .state({
    name: "clients",
    url: "/clients",
    template: "<h3>Clients</h3>"
  })
  .state({
    name: "services",
    url: "/services",
    template: "<h4>Settings</h4>"
  });
});