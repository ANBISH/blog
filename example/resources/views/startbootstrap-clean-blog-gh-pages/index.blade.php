@extends('startbootstrap-clean-blog-gh-pages.layouts.main')
@section('content')
    @foreach($blogs as $blog)

        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        <h2 class="p-5 post-title">{{$blog->title}}</h2>
                        <div class="card" style="width: 50rem;">
                            <img src="{{asset('/storage/'. $blog->image)}}" class="card-img-top" alt="...">
                        </div>
                            <h3 class="post-subtitle">{{$blog->category}}</h3>
                        <p class="post-meta">
                            Posted by
                            {{$blog->tag}}
                            {{$blog->created_at}}
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="{{ route('show.index',$blog->id) }}">Older Posts →</a></div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
