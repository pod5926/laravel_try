@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          <h1>Index</h1>
          <form action="{{ route('contact.create') }}" method="get">
            <button class="btn btn-primary" type="submit">新規登録</button>
          </form>

          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>名前</th>
                <th>タイトル</th>
                <th>作成日</th>
                <th>詳細</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($contacts as $contact)
              <tr>
                <th>{{ $contact->id }}</th>
                <td>{{ $contact->your_name }}</td>
                <td>{{ $contact->title }}</td>
                <td>{{ $contact->created_at }}</td>
                <td><a href="{{ route('contact.show', ['id' => $contact->id]) }}">詳細</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>


        </div>
      </div>
    </div>
  </div>
</div>
@endsection