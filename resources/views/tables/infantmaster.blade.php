@extends('layouts.app')

@section('content')
    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}<br>
        </div>
    @endif

    <table class="table table-stripped" id="report">
        <thead>
        <th>Infant Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Other Names</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Date First Seen </th>
        <th>Weight(kgs)</th>
        <th>Length(cm)</th>
        <th>Actions</th>


        </thead>
        <tbody>
        @foreach($infants as $infant)
            <tr>
                <td>{{$infant->id}}</td>
                <td>{{$infant->first_name}}</td>
                <td>{{$infant->last_name}}</td>
                <td>{{$infant->other_names}}</td>
                <td>{{$infant->gender}}</td>
                <td>{{$infant->date_of_birth}}</td>
                <td>{{$infant->date_first_seen}}</td>
                <td>{{$infant->weight_in_kgs}}</td>
                <td>{{$infant->length_in_cm}}</td>
                <td>

                    <button class="edit-modal btn btn-success" data-toggle="modal" data-target="#edit{{$infant->id}}"
                            data-info="{{$infant->id}},{{$infant->first_name}},
                                                {{$infant->last_name}},{{$infant->gender}},{{$infant->date_of_birth}},
                                                {{$infant->date_first_seen}},{{$infant->weight_in_kgs}},{{$infant->length_in_cm}}">
                        <span class="glyphicon glyphicon-edit"></span> Edit
                    </button>
                    <!--<a href="{{url('/infant/delete/'.$infant->id)}}" class="btn btn-danger" >Delete</a>-->
                    <button a href="{{url('/immunize'.$infant->id)}}" class="btn btn-danger" data-target="#immunize{{$infant->id}}">

                        <span class="glyphicon glyphicon-edit"></span> Immunize
                    </button>

                </td>
            </tr>

            <!-- Modal -->
            <div class="modal fade" id="edit{{$infant->id}}" tabindex="-1" role="dialog" aria-labelledby="#edit">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit user</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post"  action="{{url('infant/edit')}}" id="edit-users">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input class="form-control" name="first_name" value="{{$infant->first_name}}">
                                    <input type="hidden" class="form-control" name="id" value="{{$infant->id}}">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input class="form-control" name="last_name" value="{{$infant->last_name}}">
                                    <input type="hidden" class="form-control" name="id" value="{{$infant->id}}">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">Other Names</label>
                                    <input class="form-control" name="last_name" value="{{$infant->other_names}}">
                                    <input type="hidden" class="form-control" name="id" value="{{$infant->id}}">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <input class="form-control" name="gender" value="{{$infant->gender}}">
                                    <input type="hidden" class="form-control" name="id" value="{{$infant->id}}">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Date of Birth</label>
                                    <input class="form-control" name="gender" value="{{$infant->date_of_birth}}">
                                    <input type="hidden" class="form-control" name="id" value="{{$infant->id}}">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">County</label>
                                    <input class="form-control" name="county" value="{{$infant->county}}">
                                    <input type="hidden" class="form-control" name="id" value="{{$infant->id}}">
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