<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edytor Perków</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row" style="overflow:scroll; height:400px; margin-top: 75px; border:1px solid black">
        @foreach($tanks as $tank)
            <div class="col">
                <a class="btn btn-default" role="button" href="{{route('index')}}/?selected={{$tank->wg_id}}">
                    <img src="{{$tank->image_link}}" alt="" style="height:75px"> {{$tank->name}}
                </a>

            </div>
        @endforeach
    </div>
    <div class="row" style="margin-top: 75px; border:1px solid black">
        @if($selectedTank)
            <form>
                @for($i = 1; $i<=5; $i++)
                    <fieldset>
                        <legend>PERKI DLA ZAŁOGI {{$i}} PERKOWEJ</legend>

                        @foreach($selectedTank->crewMembers as $crewMember )
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">{{$crewMember->name}}</label>
                                <select id="disabledSelect" class="form-select">
                                    @foreach($crewMember->crewSkills as $skill)
                                        <option>{{$skill->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endforeach
                    </fieldset>
                @endfor
            </form>


        @else
            Wybierz czołg
        @endif
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>
</html>