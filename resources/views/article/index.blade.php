@extends('layouts.app')

@section('content')

<div class="text-center row justify-content-center py-3 mx-auto w-100">
  <div class="col-12 px-2 py-3">
    <div class="pb-5">
      <button type=“button” class="btn btn-success" onclick="location.href='{{ route('article.create') }}'">新規作成</button>
    </div>
    @foreach($articles as $article)
      <div class="card mx-auto mb-3" style="width: 30rem;">
        <div class="card-body">
          <h5 class="card-title">{{ $article->artistLiveName }}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{ $article->liveSchedule }}</h6>
          <p class="card-text">{!! nl2br(htmlspecialchars($article->setlist)) !!}</p>
          <div class="mx-auto d-flex justify-content-between" style="width: 100px;">
            <a href="{{ route('article.create') }}" class="d-flex align-items-center mx-auto w-50">編集</a>
            {!! Form::open(['route' => ['article.destroy', $article->id], 'method' => 'delete', 'class' => 'w-50']) !!}
              <input type="submit" value="削除" class="btn btn-link">
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

@endsection