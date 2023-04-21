@extends('startbootstrap-clean-blog-gh-pages.layouts.main')
@section('content')
    <article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <h2 class="p-5 section-heading">{{$blogs->title}}</h2>
                <div class="card" style="width: 50rem;">
                    <img src="{{asset('/storage/'. $blogs->image)}}" class="card-img-top" alt="...">
                </div>
                <blockquote class="blockquote">{{$blogs->tag}}</blockquote>
               <h2 class="section-heading">{{$blogs->category}}</h2>
                <p>{{$blogs->description}}</p>

                <p>
                    Placeholder text by
                    <a href="http://spaceipsum.com/">Space Ipsum</a>
                    · Images by
                    <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>
                </p>
            </div>
        </div>
    </div>
</article>
@endsection
