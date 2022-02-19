@extends('layout')

@section('styles')
    <link rel="stylesheet" href="/styles/faq.css"/>
@endsection
@section('javascript')
    <script src="./scripts/main.js"></script>
@endsection


@section('content')
    <!-- PARAGRAPH 1 -->
    <section class="item para-1">
        <div id="faq-container">
            <h2>Freqently Asked Questions</h2>

        @foreach($faqs as $faq)
            <!-- one question -->
                <div class="accordion">
                    <div class="icon"><i class="fas fa-plus-circle"></i></div>
                    <h5>{{$faq->question}}</h5>
                </div>
                <div class="panel">
                    <p>{{$faq->answer}}</p>
                    <button  style="padding:.5rem; background:transparent; border:none; color:#4ba0ea"><a
                            href="{{route('faq.edit', $faq)}}">Edit</a></button>
                </div>
                <!-- end of one question -->
            @endforeach
            <a href="{{route('faq.create')}}" class="create">Add FAQ</a>
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
    <script src="./scripts/faq.js"></script>
@endsection
