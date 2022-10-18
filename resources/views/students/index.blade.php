@extends('layouts.app')
@section('content')
<a href="{{route('students.create')}}">aggiungi studente</a>
    <table>
        <th>
            <tr>
                <td>Nome</td>
                <td>Cognome</td>
                <td>Matricola</td>
                <td>Registrazione</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </th>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{$student['name']}}</td>
                <td>{{$student->surname}}</td>
                <td>{{$student->registration_number}}</td>
                <td>{{$student->enrolment_date}}</td>
                <td><a href="{{route('students.edit', $student )}}">Modifica</a></td>
                <td><a href="{{route('students.show', $student )}}">Dettagli</a></td>
                <td></td>
            </tr>
                
            @endforeach
        </tbody>
    </table>


@endsection