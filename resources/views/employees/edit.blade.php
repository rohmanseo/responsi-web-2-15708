@extends('layouts.app')
@section('employees','active')
@section('content')
<form action="{{route('employees.update',$employees->id_employees)}}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label>Jobs</label>
    <select name="job" class="form-control">
      @foreach($jobs as $data)
        <option value="{{$data->id_jobs}}" {{  $data->id_jobs === $employees->id_jobs ? 'selected' : '' }}>{{$data->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label>Nama Pegawai</label>
    <input type="text" name="nama" class="form-control" placeholder="..." value="{{$employees->name}}">
  </div>
  <div class="form-group">
    <label>E-Mail</label>
    <input type="email" name="email" class="form-control" placeholder="..." value="{{$employees->email}}">
  </div>
  <div class="form-group">
    <label>Kontak</label>
    <input type="text" name="kontak" class="form-control" placeholder="..." value="{{$employees->phone}}">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control" placeholder="...">{{$employees->address}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection