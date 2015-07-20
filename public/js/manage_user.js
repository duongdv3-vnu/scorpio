/**
 * Created by nobita-isc on 7/14/15.
 */
angular.module('manageUser', [])
    .controller('UserController', [ '$http', function($http) {
        var userList = this;

        /*
         * Get list of user from DB
         */
        /*$http(
            {
                method: 'get',
                url: '/home/users/list'
            }
        ).success(function(data){
                userList.users = data;
            });
            */
        $http.get('/home/users/list').success(function (data){
           userList.users = data;
        });

        userList.showEdit = false;

        userList.showAddUserArea = function() {
            userList.showEdit = true;
        };

        userList.hideAddUserArea = function() {
            userList.showEdit = false;
        };

        userList.addUser = function() {
            var newUser =
                {
                    user_name : userList.newUserName,
                    email     : userList.newEmail,
                    role      : 'MEMBER',
                    permission: 'member',
                    is_activated: 'NO'
                };

            userList.users.push(newUser);

            userList.newUserName = "";
            userList.newEmail = "";
            userList.hideAddUserArea();
        };

    }])

    .directive('showFocus', function($timeout) {
        return function(scope, element, attrs) {
            scope.$watch(attrs.showFocus,
                function (newValue) {
                    $timeout(function() {
                        newValue && element[0].focus();
                    });
                },true);
        };
    });