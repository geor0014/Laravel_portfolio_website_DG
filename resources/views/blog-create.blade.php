@extends('layout')

@section('styles')
    <link rel="stylesheet" href="/styles/faq.css"/>
@endsection
@section('javascript')
    <script src="/scripts/main.js"></script>
@endsection


@section('content')
    <!-- PARAGRAPH 1 -->
    <section class="item para-1">
        <div id="faq-container">
            <h2>Create a blog</h2>
            <form action="{{route('blog.index')}}" method="POST">
                @csrf
                <br>
                <input
                    type="text"
                    name="title"
                    placeholder="Title"
                    value="{{old('title')}}"
                    style="width:14rem; padding:.5rem;border:2px solid #4ba0ea; color:white; font-size:25px; background:transparent;"><br>
                @error('title')
                <p style="color: red; padding:.5rem; text-decoration:none; '">{{$errors->first('title')}}</p>
                @enderror

                <br>
                <input
                    type="text"
                    name="header1"
                    placeholder="Header1"
                    value="{{old('header1')}}"
                    style="width:14rem; padding:.5rem;
                border:2px solid #4ba0ea; color:white; font-size:25px;background:transparent;"><br>
                @error('header1')
                <p style="color: red; padding:.5rem; text-decoration:none; '">{{$errors->first('header1')}}</p>
                @enderror

                 <br>
                <input
                    type="text"
                    name="header2"
                    placeholder="Header2"
                    value="{{old('header2')}}"
                    style="width:14rem; padding:.5rem;
                border:2px solid #4ba0ea; color:white; font-size:25px;background:transparent;"><br>
                @error('header2')
                <p style="color: red; padding:.5rem; text-decoration:none; '">{{$errors->first('header2')}}</p>
                @enderror

                <br>
                <input
                    type="text"
                    name="paragraph1"
                    placeholder="Paragraph1"
                    value="{{old('paragraph1')}}"
                    style="width:14rem; height:8rem; padding:
                .5rem;
                border:2px solid #4ba0ea; color:white; font-size:25px;background:transparent;"><br>
                @error('paragraph1')
                <p style="color: red; padding:.5rem; text-decoration:none; '">{{$errors->first('paragraph1')}}</p>
                @enderror

                <br>
                <input
                    type="text"
                    name="paragraph2"
                    placeholder="Paragraph2"
                    value="{{old('paragraph2')}}"
                    style="width:14rem;  height:8rem; padding:.5rem;
                border:2px solid #4ba0ea; color:white; font-size:25px;background:transparent;"><br>
                @error('paragraph2')
                <p style="color: red; padding:.5rem; text-decoration:none; '">{{$errors->first('paragraph2')}}</p>
                @enderror
                <br>
                <input type="submit" value="Submit" style="background:transparent; text-decoration: none;
                background-color:#4ba0ea; padding:.5rem; border-radius:.5rem; border:none;">
            </form>
        </div>
    </section>
    <!-- END OF PARAGRAPH 1 -->

    <!-- FOOTER -->
    <footer class="item footer">
        <div class="footer-icons">
            <a href="https://www.facebook.com/daniel.cvetanov.92" class="footer-single-icon" target="_">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/cvetanovdaniel/" target="_" class="footer-single-icon">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/in/daniel-georgiev-2171811b5/" target="_" class="footer-single-icon">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://github.com/geor0014" target="_" class="footer-single-icon">
                <i class="fab fa-github-alt"></i>
            </a>
        </div>
    </footer>
    <!-- END OF FOOTER -->
@endsection

@section('scripts')
    <script src="/scripts/faq.js"></script>
@endsection
