
@include('header')
  <div class="container">
    <a href="{{url('/add-data')}}" class="btn btn-primary my-3">Add Data</a>
    @if(Session::has('msg'))
    <p class="text-info">{{Session::get('msg')}}</p>
    @endif
  <table class="table table-bordered" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($alldata as $singledata)
    <tr>
      <th scope="row">{{$singledata->id}}</th>
      <td>{{$singledata->name}}</td>
      <td>{{$singledata->email}}</td>
      <td>
        <a href="{{url('/edit-data/'.$singledata->id)}}" class="btn btn-outline-info">Edit</a>
        <a href="{{url('/delete-data/'.$singledata->id)}}" onclick="return confirm('are you sure want to delete')" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<span class="justify-content-center text-center m-auto">{{$alldata->links()}}</span>
  </div>
   
@include('footer')