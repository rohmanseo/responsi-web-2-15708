@extends('')
@section('jobs','active')
@section('')
<form action="{{route('')}}" method="POST">
  @csrf
  <div class="form-group">
    <label>Nama Jobs</label>
    <input type="text" name="nama" class="form-control" placeholder="...">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection