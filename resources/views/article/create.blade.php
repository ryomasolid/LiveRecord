@extends ('layouts.app')

@section('content')

<div class="row justify-content-center py-3 mx-auto w-100">
  <div class="col-12 px-2 py-3">
    {!! Form::open(['route' => 'article.storeCreate', 'method' => 'post']) !!}
      <div class="row mx-auto pb-3 justify-content-center">
        {!! Form::submit('投稿', ['class' => 'btn btn-danger btn-lg']) !!}
      </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection