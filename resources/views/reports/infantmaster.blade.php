@extends('layouts.app')

@section('content')

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


        </thead>
        <tbody>
        @foreach($report as $infant)
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


            </tr>
        @endforeach
        </tbody>
    </table>

@endsection