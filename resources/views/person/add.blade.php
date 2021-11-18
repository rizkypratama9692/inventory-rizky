@extends('layouts.app')
@section('content')
    {{-- Menampilkan error validasi --}}
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors -> all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/person/addProcess">
        {{ csrf_field() }}
        {{-- token menghindari serangan tiap form harus ada --}}
        <div class="form-group">
            <label for="person_name">Nama</label>
            <input type="person_name" name="person_name" class="form-control" id="person_name">
          </div>

        <div class="form-group">
          <label for="person_email">Email</label>
          <input type="person_email" name="person_email" class="form-control" id="person_email" aria-describedby="emailHelp">
          {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</smsall> --}}
        </div>

        {{-- <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@stop