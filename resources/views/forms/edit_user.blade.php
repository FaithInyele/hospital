@extends('layouts.app')

@section('content')

    <div class="panel">

        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}<br>
            </div>
        @endif
        <form method="post" action="{{url('/edit_user')}}">
            ENTER USERS<hr>
            {{csrf_field()}}

            <div class="row{{ $errors->has('emp_id') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">emp_id:</label>

                <div class="col-md-5 form-group">
                    <input id="emp_id" type="text" class="form-control disabled" name="emp_id" value="{{ Auth::user()->emp_id }}" required disabled autofocus>

                    @if ($errors->has('emp_id'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('emp_id') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>


            <div class="row{{ $errors->has('names') ? ' has-error' : '' }}">
                <label for="names" class="col-md-2 control-label">user_names:</label>

                <div class="col-md-5 form-group">
                    <input id="names" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>

                    @if ($errors->has('names'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('names') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-2 control-label">E-Mail Address</label>

                <div class="col-md-5 form-group">
                    <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required disabled autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">date_of_birth:</label>

                <div class="col-md-5 form-group">
                    <input id="date_of_birth" type="date" class="form-control" name="date_of_birth" value="{{ Auth::user()->date_of_birth }}" required autofocus>

                    @if ($errors->has('date_of_birth'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('birth_place') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">birth_place:</label>
                <div class="col-md-5 form-group">
                    <input id="birth_place" type="tel" class="form-control" name="birth_place" value="{{ Auth::user()->birth_place }}" required autofocus>

                    @if ($errors->has('birth_place'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('birth_place') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('users_gender') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">users_gender:</label>

                <div class="col-md-5 form-group">
                    <select name="users_gender" class="form-control">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    @if ($errors->has('users_gender'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('users_gender') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('marital_status') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">marital_status:</label>

                <div class="col-md-5 form-group">
                    <select name="marital_status" class="form-control">
                        <option value="married">Married</option>
                        <option value="single">Single</option>
                    </select>
                    @if ($errors->has('marital_status'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('marital_status') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('users_id_no') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">users_id_no:</label>

                <div class="col-md-5 form-group">
                    <input id="users_id_no" type="number" class="form-control" name="users_id_no" value="{{ Auth::user()->users_id_no }}" required autofocus>

                    @if ($errors->has('users_id_no'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('users_id_no') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('users_telephone_number') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">users_telephone_number:</label>

                <div class="col-md-5 form-group">
                    <input id="users_telephone_number" type="tel" class="form-control" name="users_telephone_number" value="{{ Auth::user()->users_telephone_number }}" required autofocus>

                    @if ($errors->has('users_telephone_number'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('users_telephone_number') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>




            <div class="form-group">
                <div class="col-md-5 form-group col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        SAVE
                    </button>
                    <button type="submit" class="btn btn-primary">
                        CANCEL
                    </button>
                </div>
            </div>

        </form>
    </div>
@endsection