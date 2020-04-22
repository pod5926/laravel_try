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

          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <h1>Create</h1>
          <form method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div class="form-group">
              <label for="your-name">氏名</label>
              <input type="text" class="form-control" id="your_name" name="your_name" value="">
            </div>

            <div class="form-group">
              <label for="title">タイトル</label>
              <input type="title" class="form-control" name="title" value="">
            </div>

            <div class="form-group">
              <label for="email">メールアドレス</label>
              <input type="email" class="form-control" name="email" value="">
            </div>

            <div class="form-group">
              <label for="url">ホームページ</label>
              <input type="url" class="form-control" id="url" name="url" value="">
            </div>

            <div class="form-check form-check-inline">性別
              <input class="form-check-input" id="gender1" type="radio" name="gender" value="0">
              <label class="form-check-label" for="gender1">男性</label>
              <input class="form-check-input" id="gender2" type="radio" name="gender" value="1">
              <label class="form-check-label" for="gender2">女性</label>
            </div>

            <div class="form-group">
              <label for="age">年齢</label>
              <select class="form-control" id="age" name="age">
                <option value="">選択してください</option>
                <option value="1">〜19歳</option>
                <option value="2">20歳〜29歳</option>
                <option value="3">30歳〜39歳</option>
                <option value="4">40歳〜49歳</option>
                <option value="5">50歳〜59歳</option>
                <option value="6">60歳〜</option>
              </select>
            </div>

            <div class="form-group">
              <label for="contact">お問い合わせ内容</label>
              <textarea class="form-control" id="contact" row="3" name="contact"></textarea>
            </div>

            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="caution" name="caution" value="1">
              <label class="form-check-label" for="caution">注意事項に同意する</label>
            </div>

            <input class="btn btn-info" type="submit" name="btn_confirm" value="確認する">
          </form>
        </div>
      </div>
    </div>{{-- col-md-8 --}}
  </div>{{-- row justify-content-center --}}
</div>{{-- container --}}
@endsection