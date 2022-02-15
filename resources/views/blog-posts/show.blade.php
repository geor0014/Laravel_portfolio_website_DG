@extends('layout')

@section('styles')
    <!-- CSS -->
    <link rel="stylesheet" href="/styles/blog-posts-styles/field-of-work.css"/>
@endsection

@section('javascript')
    <script src="/scripts/main.js"></script>
@endsection

@section('content')
    <!-- PARAGRAPH 1 -->
    <section class="item para-1">
        <div class="about">
            <header id="banner">
                <div class="banner-title">
                    <h1 class="banner-text">{{ $article->title }}</h1>
                    <div class="banner-underline"></div>
                </div>
            </header>
            </article>
        </div>
    </section>
    <!-- END OF PARAGRAPH 1 -->

    <!-- PARAGRAPTH 2 -->
    <section class="item para-2">
        <div class="fw-header">
            <h2>{{ $article->header1 }}</h2>
        </div>
        <div class="fw-container">
            <!-- one scientist -->
            <div class="one-scientist">
                <h3 class="fw-title">{{ $article->header2 }}</h3>
                <div class="fw-underline"></div>
                <div class="fw-text">
                    <p>{{ $article->paragraph1 }}</p>
                    <div class="fw-img">

                        <img src="{{ $article->paragraph_image }}" alt="" class="fw-pic">
                    </div>
                </div>
            </div>
            <!-- end of one scientist -->

        </div>
    </section>
    <!-- END OF PARAGRAPTH 2 -->
@endsection
