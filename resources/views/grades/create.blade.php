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
            <h2>Create a Grade</h2>
             <form method="POST" action="{{ route('grades.index') }}">
                 @csrf

                {{--ONE INPUT--}}
                 <div class="">
                     <select name="course_id"   style="width:10rem; padding:.5rem;border:2px solid #4ba0ea; color:
                     #4ba0ea; font-size:25px; background:white;">
                             <option value="">Select Course</option>
                        @foreach($courses as $course)
                             <option value="{{$course->id}}">{{$course->name}}</option>
                        @endforeach
                     </select>
                     @error("course_id")
                     <p style="color: red; padding:.5rem; text-decoration:none; '">{{$errors->first('course_id')}}</p>
                     @enderror
                 </div>
                     <br>
                {{--END INPUT--}}

                {{--ONE INPUT--}}
                 <div class="">
                     <input class=""
                            type="text"
                            name="test_name"
                            placeholder="Test Name"
                            required
                            value="{{old('test_name')}}"
                            style="width:14rem; padding:.5rem;border:2px solid #4ba0ea; color:white; font-size:25px; background:transparent;"><br>
                     >
                     @error("test_name")
                     <p style="color: red; padding:.5rem; text-decoration:none; '">{{$errors->first('test_name')}}</p>
                     @enderror
                 </div>
                {{--END INPUT--}}

                {{--ONE INPUT--}}
                 <div class="">
                     <input class=""
                            name="best_grade"
                            placeholder="Grade"
                            required
                            value="{{old('best_grade')}}"
                            style="width:14rem; padding:.5rem;border:2px solid #4ba0ea; color:white; font-size:25px; background:transparent;"><br>
                     >
                     @error("best_grade")
                     <p style="color: red; padding:.5rem; text-decoration:none; '">{{$errors->first('best_grade')}}</p>
                     @enderror
                 </div>
                {{--END INPUT--}}
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
