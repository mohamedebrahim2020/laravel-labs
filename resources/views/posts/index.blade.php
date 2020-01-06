@extends('/layouts/app')

@section('content')
    
<div class="w-75 text-center mx-auto ">
  <a href="posts/create " class="btn btn-danger mx-auto">add</a>
</div>
<table class="table w-75 mx-auto">
  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">created by</th>
      <th scope="col">title</th>
      <th scope="col">slug</th>
      <th scope="col">content</th>
      <th scope="col">date</th>
      <th scope="col" class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $index => $value)  
    <tr>
    <th scope="row">{{$value['id']}}</th>
        <td>{{($value->user->name)}}  </td>
        <td>{{$value['title']}}</td>
        <td>{{$value['slug']}}</td>
        <td>{{$value['description']}}</td>
        <td>{{$value['created_at']}}</td>
        <td>
          <a href="{{ route('posts.edit',['post' => $value['id']]) }}" class="btn btn-primary">update</a>
          <a href="posts/{{$value['id']}}"  class="btn btn-success">Show</a></<a>
          <form method="POST" action="delete/{{$value['id']}}">
          @csrf
          @method("delete") 
          <!-- <a href="delete/{{$value['id']}}" class="btn btn-primary">delete</a> -->
         <input type="submit" value="delete" class="btn btn-primary" onclick="return confirm('are you sure?')"> 
          </form> 
        </td>

      </tr>
      @endforeach
    

  </tbody>
</table>
@endsection

