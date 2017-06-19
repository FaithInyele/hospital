@extends('layouts.app')

@section('content')
    <div class="col-lg-12">
        <div class="profile-widget profile-widget-info">
            <div class="panel-body">
                <div class="col-lg-2 col-sm-2">

                </div>
                <div class="col-lg-2 col-sm-6 follow-info weather-category">
                    <ul>
                        <li class="active">

                            <i class="fa fa-wheelchair fa-4x"> </i><br>

                            <a href="details.php">Add New Infant</a>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-2 col-sm-6 follow-info weather-category">
                    <ul>
                        <li class="active">

                            <i class="fa fa-book fa-4x"> </i><br>

                            <a href="">Infant Master List</a>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-2 col-sm-6 follow-info weather-category">
                    <ul>
                        <li class="active">

                            <i class="fa fa-user fa-4x"> </i><br>

                            <a href="">User Profile</a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6 follow-info weather-category">
                    <ul>
                        <li class="active">

                            <i class="fa fa-print fa-4x"> </i><br>

                            <a href="">Report Generation</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection