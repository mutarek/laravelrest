
@include('persons/personheader')

<div class="container">
    <h1>Hello Bangladesjh</h1>
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
        <div class="preview">
        <img id="file-ip-1-preview">
        </div>
        <div class="form-group">
        <label for="file-ip-1">Upload Image</label>
        <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
        </div>
        <input type="submit" class="btn btn-primary my-3">
    </form>
  </div>

@include('persons/personfooter')