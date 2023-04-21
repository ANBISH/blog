@extends('admin.layouts.main')
@section('content')
    <div>
        <form method="POST" action="{{route('update.index',$blogs->id)}}" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="title" value="{{$blogs->title}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Category</label>
                <input type="text" name="category" class="form-control" id="exampleFormControlInput1" placeholder="category" value="{{$blogs->category}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tag</label>
                <input type="text" name="tag" class="form-control" id="exampleFormControlInput1" placeholder="tag" value="{{$blogs->tag}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea type="text" class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="description" >{{$blogs->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Image</label>
                <input type="file" class="form-control" name="image" id="exampleFormControlInput1" placeholder="image">
            </div>
            <button class="btn btn-info">update</button>
        </form>
    </div>
@endsection
