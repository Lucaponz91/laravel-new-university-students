@extends('layouts.app')
@section('content')
<form action="{{ route('students.store') }}" method="POST">

    @csrf 

    <p>
      <label for="name">Nome</label>
      <input type="text" name="name" id="name" placeholder="nome" value="{{old('name')}}">
    </p>

    <p>
      <label for="surname">Cognome</label>
      <input type="text" name="surname" id="surname" placeholder="cognome" value="{{old('surname')}}">
    </p>

    <p>
      <label for="date_of_birth">Data di nascita</label>
      <input type="date" name="date_of_birth" id="date_of_birth" placeholder="data di nascita" value="{{old('date_of_birth')}}">
    </p>

    <p>
      <label for="fiscal_code">Codice Fiscale</label>
      <input type="fiscal_code" name="fiscal_code" id="fiscal_code" placeholder="Codice Fiscale" value="{{old('fiscal_code')}}">
    </p>

    <p>
      <label for="enrolment_date">Data di iscrizione</label>
      <input type="date" name="enrolment_date" id="enrolment_date" placeholder="data di iscrizione" value="{{old('enrolment_date')}}">
    </p>

    <p>
      <label for="email">email</label>
      <input type="text" name="email" id="email" placeholder="email" value="{{old('email')}}">
    </p>

    <p>
      <input type="submit" value="Salva">
    </p>

  </form>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@endsection