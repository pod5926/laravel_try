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
          <h1>Show</h1>
          {{ $contact->your_name }}
          {{ $contact->title }}
          {{ $contact->email }}
          {{ $contact->url }}
          {{ $gender }}
          {{ $age }}
          {{ $contact->contact }}
          <form method="GET" action="{{ route('contact.edit', ['id' => $contact->id]) }}">
            @csrf

            <input class="btn btn-info" type="submit" name="btn_confirm" value="変更する">
          </form>
          <form method="POST" action="{{ route('contact.destroy', ['id' => $contact->id]) }}"
            id="delete_{{ $contact->id }}">
            @csrf

            <a href="#" class="btn btn-danger" data-id="{{ $contact->id }}" onclick="deletePost(this);">削除する</a>

            {{-- <input class="btn btn-denger" type="submit" name="btn_confirm" value="削除する"> --}}
          </form>
        </div>
      </div>
    </div>{{-- col-md-8 --}}
  </div>{{-- row justify-content-center --}}
</div>{{-- container --}}
<script>
  function deletePost(e){
  'use strict';
  if (confirm('本当に削除しますか?')) {
    document.getElementById('delete_' + e.dataset.id).submit();

  }
}
</script>
@endsection