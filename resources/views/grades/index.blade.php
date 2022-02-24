@extends('layout')

@section('styles')
    <link rel="stylesheet" href="./styles/dashboard.css"/>
@endsection()
@section('javascript')
    <script src="./scripts/main.js"></script>
@endsection


@section('content')
    <!-- PARAGRAPH 1 -->
    <section class="item para-1">
        <a href="https://hz.nl/uploads/documents/Regelingen/EN/OER-HZ-2019-2020werkdocv2018-05-17DEF_ENGELS-AC-29112019.pdf"
           target="_" class="nbsa">
            <h1><i class="fas fa-link"></i> HZ Course and Examination Regulations</h1>
        </a>
            <a style="padding:1rem; ; position:relative; transform:translateX(90vh); display:inline-block; margin:1rem"
               href="{{ route('grades.create') }}">Add
                Grade</a>
        <div class="table-container">
            <!-- Table -->
            <table class="content-table">
                <!-- Table Head -->
                <thead class="border-head">
                <tr>
                    <th>Course Name</th>
                    <th>Test Name</th>
                    <th>Lowest Passing Grade</th>
                    <th>Best Grade</th>
                    <th></th>
                </tr>
                </thead>
                <!-- End of Table Head -->

                <!-- Table Body  -->
                <tbody>
                @foreach ($courses as $course)
                    @foreach($course->grades as $grade)
                <!-- one row -->
                <tr>
{{--                    <td class="quartile">{{ }}</td>--}}
                    <td> {{ $course->name }}</td>
                    <td>{{ $grade->test_name }}</td>
                    <td>{{ $grade->lowest_passing_grade }}</td>
                    <td>{{ $grade->best_grade }}</td>
                    <td><a href="{{route('grades.edit',$grade->id)}}">Edit</a></td>
                </tr>
                <!-- end of one row -->
                     @endforeach
                @endforeach
                </tbody>
                <!-- End of Table Body  -->
            </table>
            <!-- End of Table -->
        </div>
    </section>
    <!-- END OF PARAGRAPH 1 -->
@endsection
