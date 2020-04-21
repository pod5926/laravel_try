@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          {{ $contact->your_name }}
          {{ $contact->title }}
          {{ $contact->email }}
          {{ $contact->url }}
          {{ $gender }}
          {{ $age }}
          {{ $contact->your_name }}
          <form method="GET" action="{{ route('contact.store') }}">
            @csrf


            <input class="btn btn-info" type="submit" name="btn_confirm" value="変更する">
          </form>
        </div>
      </div>
    </div>{{-- col-md-8 --}}
  </div>{{-- row justify-content-center --}}
</div>{{-- container --}}
@endsection