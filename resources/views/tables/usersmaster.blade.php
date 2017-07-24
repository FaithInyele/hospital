@extends('layouts.app')

@section('content')
    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}<br>
        </div>
    @endif

    <table class="table table-stripped" id="report">
        <thead>
        <th>Emp Id</th>
        <th>User Type</th>
        <th>Users Name</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Email Address </th>
        <th>Telephone Number)</th>
        <th>Id Number</th>
        <th>Marital Status</th>
        <th>Actions</th>


        </thead>
        <tbody>
        @foreach($users as $adduser)
            <tr>
                <td>{{$adduser->emp_id}}</td>
                <td>{{$adduser->user_type}}</td>
                <td>{{$adduser->name}}</td>
                <td>{{$adduser->users_gender}}</td>
                <td>{{$adduser->date_of_birth}}</td>
                <td>{{$adduser->email}}</td>
                <td>{{$adduser->users_telephone_number}}</td>
                <td>{{$adduser->users_id_no}}</td>
                <td>{{$adduser->marital_status}}</td>
                <td>

                    <button class="edit-modal btn btn-success" data-toggle="modal" data-target="#edit{{$adduser->id}}"
                            data-info="{{$adduser->id}},{{$adduser->user_type}},
                                                {{$adduser->name}},{{$adduser->users_gender}},{{$adduser->date_of_birth}},
                                                {{$adduser->email}},{{$adduser->users_telephone_number}},{{$adduser->users_id_no}}">
                        <span class="glyphicon glyphicon-edit"></span> Edit
                    </button>
                    <a href="{{url('adduser/delete/'.$adduser->id)}}" class="btn btn-danger" >Delete</a>


                </td>
            </tr>

            <!-- Modal -->
            <div class="modal fade" id="edit{{$adduser->id}}" tabindex="-1" role="dialog" aria-labelledby="#edit">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit user</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post"  action="{{url('user/edit')}}" id="edit-users">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="Users name">Users Name</label>
                                    <input class="form-control" name="name" value="{{$adduser->name}}">
                                    <input type="hidden" class="form-control" name="id" value="{{$adduser->id}}">
                                </div>

                                <div class="form-group">
                                    <label for="Users type">Users type</label>
                                    <input class="form-control" name="users_type" value="{{$adduser->user_type}}">
                                    <input type="hidden" class="form-control" name="id" value="{{$adduser->id}}">
                                </div>

                                <div class="form-group">
                                    <label for="Users gender">Users gender</label>
                                    <input class="form-control" name="users_gender" value="{{$adduser->users_gender}}">
                                    <input type="hidden" class="form-control" name="id" value="{{$adduser->id}}">
                                </div>

                                <div>
                                    <button type="submit" class="pull-left" >Save</button>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
        </tbody>
    </table>

@endsection