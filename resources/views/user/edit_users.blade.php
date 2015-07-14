@extends('layout.master')

@section('title', 'Dashboard')

@section('page_title', 'Users')
@section('page_sub_title', 'Manage users')

@section('sidebar')
    @parent
@endsection

@section('contain')
    <!--\\\\\\ Script from Angular app \\\\\-->
    <script src="/js/manage_user.js"></script>
    <!--\\\\\\\ container  start \\\\\\-->
       <div id="main-content">
    <div class="page-content">

       <div class="row">
        <div class="col-md-12">
           <div class="block-web">
              <div class="header">
                  <h3 class="content-header">Project user list</h3>
              </div>
        <div class="porlets-content" ng-app="manageUser">
           <div class="adv-table editable-table" ng-controller="UserController as userList">
              <div class="clearfix">
                  <div class="btn-group">
                      <button ng-click="userList.showAddUserArea()" id="editable-sample_new" class="btn btn-primary">
                          Add New <i class="fa fa-plus"></i>
                      </button>
                  </div>

                  <div class="btn-group pull-right">
                       <input type="text" placeholder="Type to search" ng-model="search">
                  </div>

              </div>
              <div class="margin-top-10"></div>
              <table class="table table-striped table-hover table-bordered" id="editable-sample">
                  <thead>
                  <tr>
                      <th>User name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Permission</th>
                      <th>Is Activated</th>
                      <th>Edit</th>
                      <th>Reset password</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr ng-repeat="user in userList.users | filter:search">
                      <td> @{{ user.user_name }} </td>
                      <td> @{{ user.email }} </td>
                      <td> @{{ user.role }} </td>
                      <td> @{{ user.permission }}</td>
                      <td> @{{ user.is_activated }} </td>
                      <td><a class="edit" href="javascript:;">Edit</a></td>
                      <td><a class="delete" href="javascript:;">Reset</a></td>
                  </tr>
                  <tr ng-show="userList.showEdit">
                      <td><input ng-model="userList.newUserName" type="text" placeholder="User name" class="form-control small" show-focus="userList.showEdit"></td>
                      <td><input ng-model="userList.newEmail" type="text" placeholder="Email" class="form-control small"></td>
                      <td>MEMBER</td>
                      <td>Member</td>
                      <td>NO</td>
                      <td><a href="javascript:;" ng-click="userList.addUser()">Save</a></td>
                      <td><a href="javascript:;" ng-click="userList.hideAddUserArea()">Cancel</a></td>
                  </tr>
                  </tbody>
              </table>
              </div>
 
            </div><!--/porlets-content-->  
          </div><!--/block-web--> 
        </div><!--/col-md-12--> 
      </div><!--/row-->

       </div><!--/page-content end-->
    </div><!--/main-content end-->

@endsection