@extends('/layouts/app')
@section('content')


<div class="card mt-5">
    <div class="card-header">
      post info
    </div>
    <div class="card-body">
      <h5 class="card-title">title:{{$post['title']}}</h5>
      <p class="card-text">description:</p>
      <p class="card-text">{{$post['description']}}</p>
    </div>
  </div>
@endsection