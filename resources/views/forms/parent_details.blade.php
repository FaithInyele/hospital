@extends('layouts.app')

@section('content')

    <section class="panel">

        @if(session('status'))
            <div class="alert alert-success">
                {{session('status')}}<br>
            </div>
        @endif
        <form method="post" action="{{url('/save-parent')}}">
            ENTER PARENTS DETAILS HERE<hr>
            {{csrf_field()}}

            <div class="row{{ $errors->has('infants_id') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">infants_id:</label>

                <div class="col-md-5 form-group">
                    <input id="infants_id" type="text" class="form-control disable" name="infants_id" value="{{ $infant}}">

                    @if ($errors->has('infants_id'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('infants_id') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="row{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">mothers_first_name:</label>

                <div class="col-md-5 form-group">
                    <input id="mothers_first_name" type="text" class="form-control" name="mothers_first_name" value="{{ old('mothers_first_name') }}" required autofocus>

                    @if ($errors->has('mothers_first_name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('mothers_first_name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">mothers_last_name:</label>

                <div class="col-md-5 form-group">
                    <input id="mothers_last_name" type="text" class="form-control" name="mothers_last_name" value="{{ old('mothers_last_name') }}" required autofocus>

                    @if ($errors->has('mothers_last_name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('mothers_last_name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">mothers_other_names:</label>

                <div class="col-md-5 form-group">
                    <input id="mothers_other_names" type="text" class="form-control" name="mothers_other_names" value="{{ old('mothers_other_names') }}"required autofocus>

                    @if ($errors->has('mothers_other_names'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('mothers_other_names') }}</strong>
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



            <div class="row{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">fathers_first_name:</label>

                <div class="col-md-5 form-group">
                    <input id="fathers_first_name" type="text" class="form-control" name="fathers_first_name" value="{{ old('fathers_first_name') }}" required autofocus>

                    @if ($errors->has('fathers_first_name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('fathers_first_name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">fathers_last_name:</label>

                <div class="col-md-5 form-group">
                    <input id="fathers_last_name" type="text" class="form-control" name="fathers_last_name" value="{{ old('fathers_last_name') }}" required autofocus>

                    @if ($errors->has('fathers_last_name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('fathers_last_name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="row{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">fathers_other_names:</label>

                <div class="col-md-5 form-group">
                    <input id="fathers_other_names" type="text" class="form-control" name="fathers_other_names" value="{{ old('fathers_other_names') }}"required autofocus>

                    @if ($errors->has('fathers_other_names'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('fathers_other_names') }}</strong>
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

            <div class="row{{ $errors->has('parents_marital_status') ? ' has-error' : '' }}">
                <label for="name" class="col-md-2 control-label">parents_marital_status:</label>

                <div class="col-md-5 form-group">
                    <select name="parents_marital_status" class="form-control">
                        <option value="married">Married</option>
                        <option value="separated">Separated</option>
                        <option value="never married">Never married</option>
                    </select>
                    @if ($errors->has('parents_marital_status'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('parents_marital_status') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-5 form-group col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        save
                    </button>
                </div>
            </div>


        </form>
    </section>
    @endsection