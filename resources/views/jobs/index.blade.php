@extends('layouts.app')
@section('jobs','active')
@section('content')
<a href="{{route('jobs.create')}}" class="btn btn-primary">Tambah Data</a>
<br/><br/>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col" width="1">#</th>
            <th scope="col">Jobs</th>
            <th scope="col" width="1">action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <th scope="row">{{$d->id_jobs}}</th>
            <td>{{$d->name}}</td>
            <td>
                <div class="btn-group">
                    <a href="{{route('jobs.edit',$d->id_jobs)}}" class="btn btn-success">Edit</a>
                    <form action="{{ route('jobs.destroy', $d->id_jobs)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection