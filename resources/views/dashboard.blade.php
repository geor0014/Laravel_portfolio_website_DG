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
        <div class="table-container">
            <!-- Table -->
            <table class="content-table">
                <!-- Table Head -->
                <thead class="border-head">
                <tr>
                    <th>Quartile</th>
                    <th>Course</th>
                    <th>EC</th>
                    <th>Exam</th>
                    <th>Grade</th>
                </tr>
                </thead>
                <!-- End of Table Head -->

                <!-- Table Body  -->
                <tbody>
                <!-- one row -->
                <tr>
                    <td class="quartile" rowspan="3">First</td>
                    <td>Programme and Career Orientation</td>
                    <td>2.5</td>
                    <td>Assesment</td>
                    <td>TBA</td>
                </tr>
                <!-- end of one row -->

                <!-- one row -->
                <tr>
                    <td>Computer Science</td>
                    <td>7.5</td>
                    <td>Written</td>
                    <td>TBA</td>
                </tr>
                <!-- end of one row -->

                <!-- one row -->
                <tr>
                    <td>Programming Basics</td>
                    <td>5</td>
                    <td>Case Study</td>
                    <td>TBA</td>
                </tr>
                <!-- end of one row -->

                <!-- one row -->
                <tr>
                    <td class="quartile" rowspan="2">Second</td>
                    <td rowspan="2">Object Oriented Programming</td>
                    <td rowspan="2">10</td>
                    <td>Case Study</td>
                    <td>TBA</td>
                </tr>
                <!-- end of one row -->

                <!-- one row -->
                <tr>
                    <td>Project</td>
                    <td>TBA</td>
                </tr>
                <!-- end of one row -->

                <!-- one row -->
                <tr>
                    <td class="quartile" rowspan="4">Third</td>
                    <td>Framework Development 1</td>
                    <td>5</td>
                    <td>Case Study</td>
                    <td>TBA</td>
                </tr>
                <!-- end of one row -->

                <!-- one row -->
                <tr>
                    <td rowspan="3">Framework Project 1</td>
                    <td rowspan="3">7.5</td>
                    <td>Project</td>
                    <td>TBA</td>
                </tr>
                <!-- end of one row -->

                <!-- one row -->
                <tr>
                    <td>Assesment</td>
                    <td>TBA</td>
                </tr>
                <!-- end of one row -->

                <!-- one row -->
                <tr>
                    <td>Report</td>
                    <td>TBA</td>
                </tr>
                <!-- end of one row -->

                <!-- one row -->
                <tr>
                    <td class="quartile" rowspan="3">Forth</td>
                    <td rowspan="3">Framework Project 2</td>
                    <td rowspan="3">10</td>
                    <td>Portfolio</td>
                    <td>TBA</td>
                </tr>
                <!-- end of one row -->

                <!-- one row -->
                <tr>
                    <td>Project</td>
                    <td>TBA</td>
                </tr>
                <!-- end of one row -->

                <!-- one row -->
                <tr>
                    <td>Assesment</td>
                    <td>TBA</td>
                </tr>
                <!-- end of one row -->

                <!-- one row -->
                <tr>
                    <td>Entire Year</td>
                    <td>Personal Professional Development</td>
                    <td>12.5</td>
                    <td>Portfolio</td>
                    <td>TBA</td>
                </tr>
                <!-- end of one row -->

                <!-- one row -->
                <tr>
                    <td>Whenever</td>
                    <td>Personality 1</td>
                    <td>1.25</td>
                    <td>Portfolio</td>
                    <td>TBA</td>
                </tr>
                <!-- end of one row -->

                <!-- one row -->
                <tr>
                    <td>Entire Year</td>
                    <td>Personality 2</td>
                    <td>1.25</td>
                    <td>Portfolio</td>
                    <td>TBA</td>
                </tr>
                <!-- end of one row -->

                </tbody>
                <!-- End of Table Body  -->
            </table>
            <!-- End of Table -->
        </div>
    </section>
    <!-- END OF PARAGRAPH 1 -->
@endsection
