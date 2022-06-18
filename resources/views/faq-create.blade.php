@extends('layout')

@section('styles')
<link rel="stylesheet" href="/styles/faq.css" />
@endsection
@section('javascript')
<script src="/scripts/main.js"></script>
@endsection


@section('content')
<!-- PARAGRAPH 1 -->
<section class="item para-1">
    <div id="faq-container">
        <h2>Submit an FAQ</h2>
        <form action="{{route('faq.index')}}" method="POST">
            @csrf

            <label for="question" style="color: #4ba0ea; font-size: 1.5rem">Question</label>
            <br>
            <input type="text" name="question" placeholder="Ex: You want the truth?" style="width:14rem; padding:.5rem;
                @if($errors->first('answer')) border:2px solid #FF0000  @else border:2px solid #4ba0ea @endif  ; color:white; font-size:19px; background:transparent; margin-top: 1rem; margin-bottom: 1rem"><br>
            @error('question')
            <p style="color: red; padding:.5rem; text-decoration:none; '">{{$errors->first('question')}}</p>
            @enderror

            <label for="answer" style="color: #4ba0ea; font-size: 1.5rem">Answer</label>
            <br>
            <input type="text" name="answer" placeholder="Ex: You can't handle the truth!" style="width:14rem; padding:.5rem;
                 @if($errors->first('answer')) border:2px solid #FF0000  @else border:2px solid #4ba0ea @endif ; color:white; font-size:19px;background:transparent; margin-top: 0.5rem"><br><br>
            @error('answer')
            <p style="color: red; padding:.5rem; text-decoration:none; '">{{$errors->first('answer')}}</p>
            @enderror

            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"><br><br>


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