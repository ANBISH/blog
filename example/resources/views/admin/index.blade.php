@extends('admin.layouts.main')
@section('content')

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Tag</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
        </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
        <tr>
            <th scope="row">{{$blog->id}}</th>
            <td>{{$blog->title}}</td>
            <td>{{$blog->category}}</td>
            <td>{{$blog->tag}}</td>
            <td>{{$blog->description}}</td>
            <td><div class="card" style="width: 18rem;">
                    <img src="{{asset('/storage/'. $blog->image)}}" class="card-img-top" alt="...">
                </div>
            </td>
            <td><a class="btn btn-success" href="{{route('create.index')}}">create</a></td>
            <td><form action="{{route('destroy.index',$blog->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form></td>
            <td><a class="btn btn-info" href="{{route('edit.index',$blog->id)}}">update</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
