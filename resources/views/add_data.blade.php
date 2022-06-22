
@include('header')

  <div class="container">
    <a href="{{url('/')}}" class="btn btn-primary my-3">Show Data</a>
    <form action="{{url('/store-data')}}" method="post" class="card p-5">
      @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="name" >
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Number</label>
            <input type="number" class="form-control" name="number">
            @error('number')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <input type="submit" class="btn btn-primary my-3">
    </form>
  </div>
   
   
@include('footer')