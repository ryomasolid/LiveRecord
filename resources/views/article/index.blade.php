@extends ('layouts.app')

@section('content')

<div class="text-center row justify-content-center py-3 mx-auto w-100">
  <div class="col-12 px-2 py-3">
    <div class="pb-5">
      <button type=“button” class="btn btn-primary btn-lg" onclick="location.href='{{ route('article.create') }}'">新規作成</button>
    </div>
    <div class="card mx-auto" style="width: 30rem;">
      <div class="card-body">
        <h5 class="card-title">ライブタイトル（アーティスト名）</h5>
        <h6 class="card-subtitle mb-2 text-muted">ライブ日程</h6>
        <p class="card-text">ライブのセットリストや感想を記載してください。</p>
        <a href="#" class="card-link">編集</a>
        <a href="#" class="card-link">削除</a>
      </div>
    </div>
  </div>
</div>

@endsection