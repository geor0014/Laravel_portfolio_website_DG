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
            <h2>Edit FAQ</h2>

            {{--EDIT FAQ--}}
            <form action="{{route('faq.update', $faq)}}" method="POST">
                @csrf
                @method('PUT')

                <br>
                <input type="text" name="question" value="{{ $faq->question }}" style="width:100%; padding:.5rem;
                border:2px solid #4ba0ea; color:white; font-size:25px; background:transparent;"><br>
                @error('question')
                <p style="color: red; padding:.5rem; text-decoration:none; '">{{$errors->first('question')}}</p>
                @enderror

                <br>
                <input type="text" name="answer" value="{{ $faq->answer }}" style="width:100%; padding:.5rem;
                border:2px solid #4ba0ea; color:white; font-size:25px;background:transparent;"><br><br>
                @error('answer')
                <p style="color: red; padding:.5rem; text-decoration:none; '">{{$errors->first('answer')}}</p>
                @enderror

                <input type="submit" value="Save" style="background:transparent; text-decoration: none;
                background-color:#4ba0ea; padding:.5rem; border-radius:.5rem; border:none;; width:4rem">
            </form>
            {{-- END OF EDIT FAQ--}}

            {{--DELETE FAQ--}}
            <form method="POST" action="{{route('faq.destroy', $faq)}}">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" onclick="return confirm('Are you sure')"
                       style="background:transparent; text-decoration: none;
                background-color:#4ba0ea; padding:.5rem; border-radius:.5rem; border:none; margin-top:.5rem;
                width:4rem">
            </form>
            {{--END OF DELETE FAQ--}}
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
