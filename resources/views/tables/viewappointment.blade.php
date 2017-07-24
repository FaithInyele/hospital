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
        <th>Infant Names</th>
        <th>Mothers Names</th>
        <th>Mothers Id No</th>
        <th>Mothers Telephone Number</th>
        <th>Fathers Names</th>
        <th>Fathers Id No </th>
        <th>Fathers Telephone Number</th>
        <th>Postal address</th>
        <th>Town</th>



        </thead>
        <tbody>
        @foreach($appointment as $appointment)
            <tr>
                <td>{{$appointment->id}}</td>
                <td>{{$appointment->infants_names}}</td>
                <td>{{$appointment->mothers_names}}</td>
                <td>{{$appointment->mothers_id_no}}</td>
                <td>{{$appointment->mothers_telephone_number}}</td>
                <td>{{$appointment->fathers_names}}</td>
                <td>{{$appointment->fathers_id_no}}</td>
                <td>{{$appointment->fathers_telephone_number}}</td>
                <td>{{$appointment->postal_address}}</td>
                <td>{{$appointment->town}}</td>

                <td>
                    <a href="" class="btn btn-danger">De Activate</a>
                </td>
            </tr>


        @endforeach
        </tbody>
    </table>

@endsection