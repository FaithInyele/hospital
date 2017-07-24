@extends('layouts.app')

@section('content')

    <div class="panel">
        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}<br>
            </div>
        @endif
        <form method="post" action="{{url('/save-appointment')}}">
            ENTER APPOINTMENT<hr>
            {{csrf_field()}}

            <div class="row{{ $errors->has('infants_number') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">infants_number:</label>

                <div class="col-md-5 form-group">
                    <input id="infants_number" type="number" class="form-control" name="infants_number" value="{{ old('infants_number') }}" required autofocus>

                    @if ($errors->has('infants_number'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('infants_number') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('infants_names') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">infants_names:</label>

                <div class="col-md-5 form-group">
                    <input id="infants_names" type="text" class="form-control" name="infants_names" value="{{ old('infants_names') }}" required autofocus>

                    @if ($errors->has('infants_names'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('infants_names') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>


            <div class="row{{ $errors->has('mothers_names') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">mothers_names:</label>

                <div class="col-md-5 form-group">
                    <input id="mothers_names" type="text" class="form-control" name="mothers_names" value="{{ old('mothers_names') }}" required autofocus>

                    @if ($errors->has('mothers_names'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('mothers_names') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('mothers_id_no') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">mothers_id_no:</label>

                <div class="col-md-5 form-group">
                    <input id="mothers_id_no" type="number" class="form-control" name="mothers_id_no" value="{{ old('mothers_id_no') }}" required autofocus>

                    @if ($errors->has('mothers_id_no'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('mothers_id_no') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('mothers_telephone_number') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">mothers_telephone_number:</label>

                <div class="col-md-5 form-group">
                    <input id="mothers_telephone_number" type="tel" class="form-control" name="mothers_telephone_number" value="{{ old('mothers_telephone_number') }}" required autofocus>

                    @if ($errors->has('mothers_telephone_number'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('mothers_telephone_number') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('fathers_names') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">fathers_names:</label>

                <div class="col-md-5 form-group">
                    <input id="fathers_names" type="text" class="form-control" name="fathers_names" value="{{ old('fathers_names') }}" required autofocus>

                    @if ($errors->has('fathers_names'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('fathers_names') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('fathers_id_no') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">fathers_id_no:</label>

                <div class="col-md-5 form-group">
                    <input id="fathers_id_no" type="number" class="form-control" name="fathers_id_no" value="{{ old('fathers_id_no') }}" required autofocus>

                    @if ($errors->has('fathers_id_no'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('fathers_id_no') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('fathers_telephone_number') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">fathers_telephone_number:</label>

                <div class="col-md-5 form-group">
                    <input id="fathers_telephone_number" type="tel" class="form-control" name="fathers_telephone_number" value="{{ old('fathers_telephone_number') }}" required autofocus>

                    @if ($errors->has('fathers_telephone_number'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('fathers_telephone_number') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('postal_address') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">postal_address:</label>

                <div class="col-md-5 form-group">
                    <input id="postal_address" type="number" class="form-control" name="postal_address" value="{{ old('postal_address') }}" required autofocus>

                    @if ($errors->has('postal_address'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('postal_address') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('town') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">town:</label>

                <div class="col-md-5 form-group">
                    <input id="town" type="text" class="form-control" name="town" value="{{ old('town') }}" required autofocus>

                    @if ($errors->has('town'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('town') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('date_to_be_seen') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">date_to_be_seen:</label>

                <div class="col-md-5 form-group">
                    <input id="date_to_be_seen" type="date" class="form-control" name="date_to_be_seen" value="{{ old('date_to_be_seen') }}" required autofocus>

                    @if ($errors->has('date_to_be_seen'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('date_to_be_seen') }}</strong>
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