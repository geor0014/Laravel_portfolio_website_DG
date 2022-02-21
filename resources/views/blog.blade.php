@extends('layout')

@section('styles')
    <!-- CSS -->
    <link rel="stylesheet" href="./styles/blog.css"/>
    <!-- FONTAWESOME -->

@endsection

@section('javascript')
    <script src="./scripts/main.js"></script>
@endsection


@section('content')
    <!-- PARAGRAPH 1 -->
    <section class="item para-1">
        <h1 class="banner-text">Welcome To My Blog</h1>
        <div class="banner-underline"></div>
        <header id="banner">
            <div class="blog-content">
            @foreach($articles as $article)
                <!-- one blog -->
                    <div class="card">
                        <div class="icon">
                            <i class="fab fa-git-alt"></i>
                        </div>
                        <div class="content">
                            <h3>{{ $article->title }}</h3>
                            <p>{{ $article->paragraph1 }}</p>
                        </div>
                        <a href="{{route('blog.show', $article)}}" class="read-more"></a>
                        <a href="{{route('blog.edit',$article)}}" style="color: black; padding-top: .5rem;">Edit</a>
                    </div>
                    <!-- end of one blog -->
                @endforeach
                <div class="">
                <a href="{{ route('blog.create') }}" class="create">Add Blog</a>
                </div>
            </div>
        </header>
    </section>
    <!-- END OF PARAGRAPH 1 -->
@endsection
