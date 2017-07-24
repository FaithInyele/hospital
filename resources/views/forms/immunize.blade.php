@extends('layouts.app')

@section('content')

    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}<br>
        </div>
    @endif

    <button class="accordion">
BCG VACCINE AT BIRTH
    </button>
    <div class="panel1">
        <form action="{{url('/save-immunization')}}" method="post">
            {{csrf_field()}}
            Enter infants id:<input type="number" name="infant_id">
            <table class="table table-stripped">
                <thead>
                <th>BCG VACCINE:At Birth<BR>(Intra-dermal left fore arm)</th>
                <th>DATE GIVEN</th>
                <th>DATE OF NEXT VISIT</th>
                </thead>
                <tbody>
                <tr>
                    <td>Dose(0.005mls for infants under 1yr)</td>
                    <td><input type="date" name="dginfu1"></td>
                    <td><input type="date" name="dnextbe1"></td>
                </tr>

                <tr>
                    <td>BCG SCAR CHECKED</td>
                    <td>DATE CHECKED</td>
                    <td>DATE BCG REPEATED</td>
                </tr>
                <tr>
                    <td>PRESENT</td>
                    <td><input type="date" name="dchpresent"></td>
                    <td></td>
                </tr>
                <tr>
                    <td>ABSENT</td>
                    <td><input type="date" name="dchabsent"></td>
                    <td><input type="date" name="drepabsent"></td>
                </tr>
                <tr>
                    <td></td>
                <td><input type="submit" value="SAVE/SUBMIT"></td>
                    <td><input type="button" value="CANCEL"></td>
                </tr>
                </tbody>


            </table>
        </form>
    </div>


    <button class="accordion">
        ORAL POLIO VACCINE
    </button>

    <div class="panel1">
        <form action="#" method="post">

            <table class="table table-stripped">
                <thead>
                <th>ORAL POLIO VACCINE(OPV)<BR>DOSE(2 DROPS ORALLY)</th>
                <th>DATE GIVEN</th>
                <th>DATE OF NEXT VISIT</th>
                </thead>
                <tbody>
                <tr>
                    <td>Birth Dose:birth or within 2 wks(OPV 0)</td>
                    <td><input type="date" name="dgiven"></td>
                    <td><input type="date" name="dnext"></td>
                </tr>
                <tr>
                    <td>1st Dose at 6 weeks(OPV 1)</td>
                    <td><input type="date" name="dgiven"></td>
                    <td><input type="date" name="dnext"></td>
                </tr>
                <tr>
                    <td>2nd Dose at 10 weeks(OPV 2)</td>
                    <td><input type="date" name="dgiven"></td>
                    <td><input type="date" name="dnext"></td>
                </tr>
                <tr>
                    <td>3rd Dose at 10 weeks(OPV 3)</td>
                    <td><input type="date" name="dgiven"></td>
                    <td><input type="date" name="dnext"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SAVE/SUBMIT"></td>
                    <td><input type="button" value="CANCEL"></td>
                </tr>
                </tbody>


            </table>
        </form>
    </div>
    <button class="accordion">
        DPT VACCINE
    </button>
        <div class="panel1">
        <form action="#" method="post">

        <table class="table table-stripped">
            <thead>
            <th>DIPHTHERIAPERTUSIS/TETANUS/HEPATITIS B<BR>HAEMOPHILUS INFLUENZA Type b<br>Dose 0.5mls intra muscular left outer thigh</th>
            <th>DATE GIVEN</th>
            <th>DATE OF NEXT VISIT</th>
            </thead>
            <tbody>

            <tr>
                <td>1st Dose at 6 weeks</td>
                <td><input type="date" name="dgiven"></td>
                <td><input type="date" name="dnext"></td>
            </tr>
            <tr>
                <td>2nd Dose at 10 weeks</td>
                <td><input type="date" name="dgiven"></td>
                <td><input type="date" name="dnext"></td>
            </tr>
            <tr>
                <td>3rd Dose at 10 weeks</td>
                <td><input type="date" name="dgiven"></td>
                <td><input type="date" name="dnext"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SAVE/SUBMIT"></td>
                <td><input type="button" value="CANCEL"></td>
            </tr>
            </tbody>


        </table>
    </form>
    </div>
    <button class="accordion">
        ROTA VIRUS
    </button>
    <div class="panel1">
        <form action="#" method="post">

            <table class="table table-stripped">
                <thead>
                <th>ROTA VIRUS VACCINE</th>
                <th>DATE GIVEN</th>
                <th>DATE OF NEXT VISIT</th>
                </thead>
                <tbody>

                <tr>
                    <td>1st Dose at 6 weeks</td>
                    <td><input type="date" name="dgiven"></td>
                    <td><input type="date" name="dnext"></td>
                </tr>
                <tr>
                    <td>2nd Dose at 10 weeks</td>
                    <td><input type="date" name="dgiven"></td>
                    <td><input type="date" name="dnext"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SAVE/SUBMIT"></td>
                    <td><input type="button" value="CANCEL"></td>
                </tr>
                </tbody>


            </table>
        </form>
        *2nd dose should be given not later than 32 weeks
    </div>
    <button class="accordion">
        MEASLES(At 6,9 and 18 months)
    </button>
    <div class="panel1">
        <form action="#" method="post">

            <table class="table table-stripped">

                <thead>
                <th>MEASLES VACCINE at 6 months:<br>in the event of outbreak or HIV Exposed Infants</th>
                <th>DATE GIVEN</th>
                </thead>
                <tbody>

                <tr>
                    <td>Dose 0.5mls Subcutaneously right upper arm</td>
                    <td><input type="date" name="dgiven"></td>

                </tr>
                <tr>
                    <td>MEASLES VACCINE at 9 months</td>
                    <td>DATE GIVEN</td>
                </tr>
                <tr>
                    <td>Dose 0.5mls Subcutaneously right upper arm</td>
                    <td><input type="date" name="dgiven"></td>

                </tr>

                <tr>
                    <td>MEASLES VACCINE at 18 months</td>
                    <td>DATE GIVEN</td>

                </tr>
                <tr>
                    <td>Dose 0.5mls Subcutaneously right upper arm</td>
                    <td><input type="date" name="dgiven"></td>

                </tr>

                <tr>
                    <td><input type="submit" value="SAVE/SUBMIT"></td>
                    <td><input type="button" value="CANCEL"></td>
                </tr>
                </tbody>


            </table>
        </form>
    </div>

    <button class="accordion">
        VITAMIN A CAPSULE FROM 6 MONTHS
    </button>
    <div class="panel1">
        <form action="#" method="post">

            <table class="table table-stripped">
                <thead>
                <th>VITAMIN A:Given orally<br>At 6 months or at first contact thereafter</th>
                <th></th>
                <th>Tick age given</th>
                </thead>
                <tbody>
                <tr>
                    <td><b>Dose</b></td>
                    <td><b>Age</b></td>
                    <td></td>

                </tr>

                <tr>
                    <td>50,000 IU</td>
                    <td><6 months not breatfed</td>
                    <td><input type="checkbox" name="dnext"></td>
                </tr>
                <tr>
                    <td>100,000 IU</td>
                    <td>6 months</td>
                    <td><input type="checkbox" name="dnext"></td>
                </tr>
                <tr>
                    <td>200,000 IU</td>
                    <td>12 months(1 year)</td>
                    <td><input type="checkbox" name="dnext"></td>
                </tr>

                <tr>
                    <td>200,000 IU</td>
                    <td>18 months(1 1/2 year)</td>
                    <td><input type="checkbox" name="dnext"></td>
                </tr>
                <tr>
                    <td>200,000 IU</td>
                    <td>24 months(2 years)</td>
                    <td><input type="checkbox" name="dnext"></td>
                </tr>
                <tr>
                    <td>200,000 IU</td>
                    <td>30 months(2 1/2 year)</td>
                    <td><input type="checkbox" name="dnext"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SAVE/SUBMIT"></td>
                    <td><input type="button" value="CANCEL"></td>
                </tr>
                </tbody>


            </table>
        </form>
    </div>
    <button class="accordion">
        DEWORMING FROM 1 YEAR
    </button>
    <div class="panel1">
        <form action="#" method="post">

            <table class="table table-stripped">
                <thead>
                <th>DEWORMING:Give once every 6 months<br>to all children 1 yr and abovecontact thereafter</th>
                <th>Tick age given</th>
                </thead>
                <tbody>

                <tr>
                    <td>12 months(1 year)</td>
                    <td><input type="checkbox" name="dnext"></td>
                </tr>

                <tr>
                    <td>18 months(1 1/2 year)</td>
                    <td><input type="checkbox" name="dnext"></td>
                </tr>
                <tr>
                    <td>24 months(2 years)</td>
                    <td><input type="checkbox" name="dnext"></td>
                </tr>
                <tr>
                    <td>30 months(2 1/2 year)</td>
                    <td><input type="checkbox" name="dnext"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="SAVE/SUBMIT"></td>
                    <td><input type="button" value="CANCEL"></td>
                </tr>
                </tbody>


            </table>
        </form>
    </div>



@endsection