@extends ('layouts.app')

@section('content')

<div class="row justify-content-center py-3 mx-auto w-100">
  <div class="col-12 px-2 py-3">
    {!! Form::open(['route' => 'article.storeCreate', 'method' => 'post']) !!}
      <div class="card mx-auto" style="width: 30rem;">
        <div class="card-body">
          <div class="form-group">
            <label for="formGroupExampleInput">アーティスト名 / ライブ名</label>
            <input type="text" class="form-control" id="artistLiveName" name="artistLiveName" placeholder="SPYAIR / JUST LIKE THIS 2021">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">ライブ日程</label>
            <input type="text" class="form-control" id="liveSchedule" name="liveSchedule" placeholder="2021/07/17">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">セットリスト</label>
            <textarea class="form-control" id="setlist" name="setlist" rows="3"></textarea>
          </div>
        </div>
      </div>
      <div class="row mx-auto pb-3 justify-content-center">
        {!! Form::submit('投稿', ['class' => 'btn btn-danger btn-lg']) !!}
      </div>
    {!! Form::close() !!}
  </div>
</div>

@endsection