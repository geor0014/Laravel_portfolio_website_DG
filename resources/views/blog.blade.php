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
                        <a href="./blog/{{ $article->id }}" class="read-more"></a>
                    </div>
                    <!-- end of one blog -->
                @endforeach
            </div>
        </header>
    </section>
    <!-- END OF PARAGRAPH 1 -->
@endsection
