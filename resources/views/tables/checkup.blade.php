@extends('layouts.app')

@section('content')

    <table class="table table-stripped" id="report">
        <thead>
        <th>Infant Id</th>
        <th>Dose under 1yr date given</th>
        <th>Dose under 1yr next visit</th>
        <th>Dose above 1yr date given</th>
        <th>BCG Scar Checked present(date)</th>
        <th>BCG Scar Checked absent(date)</th>
        <th>Date BCG repeated if absent </th>

        </thead>
        <tbody>
        @foreach($immunizations as $immunization)
            <tr>
                <td>{{$immunization->infant_id}}</td>
                <td>{{$immunization->dginfu1}}</td>
                <td>{{$immunization->dnextbe1}}</td>
                <td>{{$immunization->dchpresent}}</td>
                <td>{{$immunization->dchabsent}}</td>
                <td>{{$immunization->drepabsent}}</td>


            </tr>
        @endforeach
        </tbody>
    </table>

@endsection