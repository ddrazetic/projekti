@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>All projects</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        @if(count($projects) > 0)
        <table class="table table-striped table-hover backBlue">
            <thead class="backDark">
                <th>#</th>
                <th>Ime</th>
                <th>Opis</th>
                <th>Cijena</th>
                <th>Obavljeni posao</th>
                <th>Datum početka</th>
                <th>Datum kraja</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                <tr>
                    <td>
                        <div>{{$project->id}}</div>
                    </td>
                    <td>
                        <div>{{$project->name}}</div>
                    </td>
                    <td>
                        <div>{{$project->description}}</div>
                    </td>
                    <td>
                        <div>{{$project->price}}</div>
                    </td>
                    <td>
                        <div>{{$project->jobs_done}}</div>
                    </td>
                    <td>
                        <div>{{$project->start_date}}</div>
                    </td>
                    <td>
                        <div>{{$project->end_date}}</div>
                    </td>
                    <td><a class="link link1" href="{{ route('editproject', $project->id) }}">Uredi</a></td>
                    @if($project->leader == Auth::user()->getId())
                    <td><a class="link link1" href="{{ route('users', $project->id) }}">Dodaj korisnika</a></td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        No projects.
        @endif
    </div>
</body>

</html>
@endsection