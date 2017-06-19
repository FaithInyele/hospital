@extends('layouts.app')

@section('content')

<div class="panel">
    <form method="post" action="{{url('/save-infant')}}">
        {{csrf_field()}}
        <div class="row{{ $errors->has('first_name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">first_name</label>

            <div class="col-md-5 form-group">
                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                @if ($errors->has('first_name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="row{{ $errors->has('last_name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">last_name</label>

            <div class="col-md-5 form-group">
                <input id="first_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                @if ($errors->has('last_name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="row{{ $errors->has('other_names') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">other_names</label>

            <div class="col-md-5 form-group form-group">
                <input id="other_names" type="text" class="form-control" name="other_names" value="{{ old('other_names') }}" required autofocus>

                @if ($errors->has('other_names'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('other_names') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="row{{ $errors->has('gender') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">gender</label>

            <div class="col-md-5 form-group">
                <input id="gender" type="text" class="form-control" name="gender" value="{{ old('gender') }}" required autofocus>

                @if ($errors->has('gender'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="row{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">date_of_birth</label>

            <div class="col-md-5 form-group">
                <input id="date_of_birth" type="date" class="form-control" name="date_of_birth" value="{{ old('date_of_birth') }}" required autofocus>

                @if ($errors->has('date_of_birth'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                                    </span>
                @endif
            </div>
        </div>


        <div class="row{{ $errors->has('date_first_seen') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">date_first_seen</label>

            <div class="col-md-5 form-group">
                <input id="date_first_seen" type="date" class="form-control" name="date_first_seen" value="{{ old('date_first_seen') }}" required autofocus>

                @if ($errors->has('date_first_seen'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('date_first_seen') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="row{{ $errors->has('weight_in_kgs') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">weight_in_kgs</label>

            <div class="col-md-5 form-group">
                <input id="weight_in_kgs" type="number" class="form-control" name="weight_in_kgs" value="{{ old('weight_in_kgs') }}" required autofocus>

                @if ($errors->has('weight_in_kgs'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('weight_in_kgs') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="row{{ $errors->has('length_in_cm') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">length_in_cm</label>

            <div class="col-md-5 form-group">
                <input id="length_in_cm" type="number" class="form-control" name="length_in_cm" value="{{ old('length_in_cm') }}" required autofocus>

                @if ($errors->has('length_in_cm'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('length_in_cm') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="row{{ $errors->has('country') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">country</label>

            <div class="col-md-5 form-group">
                <input id="country" type="text" class="form-control" name="country" value="{{ old('country') }}" required autofocus>

                @if ($errors->has('country'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="row{{ $errors->has('county') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">county</label>

            <div class="col-md-5 form-group">
                <input id="county" type="text" class="form-control" name="county" value="{{ old('county') }}" required autofocus>

                @if ($errors->has('county'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('county') }}</strong>
                                    </span>
                @endif
            </div>
        </div>


        <div class="row{{ $errors->has('sub_county') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">sub_country</label>

            <div class="col-md-5 form-group">
                <input id="sub_county" type="text" class="form-control" name="sub_county" value="{{ old('sub_county') }}" required autofocus>

                @if ($errors->has('sub_county'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('sub_county') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="row {{ $errors->has('town') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">town</label>

            <div class="col-md-5 form-group">
                <input id="town" type="text" class="form-control" name="town" value="{{ old('town') }}" required autofocus>

                @if ($errors->has('town'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('town') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="row{{ $errors->has('estate') ? ' has-error' : '' }}">
            <label for="name" class="col-md-2 control-label">estate</label>

            <div class="col-md-5 form-group">
                <input id="estate" type="text" class="form-control" name="estate" value="{{ old('estate') }}" required autofocus>

                @if ($errors->has('estate'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('estate') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-5 form-group col-md-offset-4">
                <button type="submit" class="btn btn-primary">

                </button>
            </div>
        </div>
    </form>
</div>
    @endsection