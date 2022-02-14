@extends('layout')

@section('styles')
    <!-- CSS -->
    <link rel="stylesheet" href="/styles/blog-posts-styles/field-of-work.css"/>
    <link rel="stylesheet" href="/styles/blog-posts-styles/main.css"/>

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="/fontawesome-free-5.15.4-web/css/all.css"/>
@endsection


@section('java')
    <script src="../scripts/main.js"></script>
@endsection

@section('content')
    <!-- PARAGRAPH 1 -->
    <section class="item para-1">
        <div class="about">
            <header id="banner">
                <div class="banner-title">
                    <h1 class="banner-text">ICT FIELD OF WORK</h1>
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
            <h2>Types of Data Scientists</h2>
        </div>
        <div class="fw-container">
            <!-- one scientist -->
            <div class="one-scientist">
                <h3 class="fw-title">The Data Analyst</h3>
                <div class="fw-underline"></div>
                <div class="fw-text">
                    <p>An outstanding analyst is the very prerequisite for the success of your data efforts. A solid
                        background in statistics is what brings rigor to data-driven decision-making. A data analyst
                        looks at industry data to answer business-relevant questions and delivers these answers to the
                        relevant teams. Data analysts transform large data sets, form hypotheses, and communicate these
                        to business decision-makers. So they need to demonstrate a strong sense of the processes taking
                        place beyond the data.</p>
                    <div class="fw-img">

                        <img src="/images/blog-posts-images/data-analyst.png" alt="" class="fw-pic">
                    </div>
                </div>
            </div>
            <!-- end of one scientist -->
            <!-- one scientist -->
            <div class="one-scientist">
                <h3 class="fw-title">The Data Scientist</h3>
                <div class="fw-underline"></div>
                <div class="fw-text">

                    <p>This may involve anything from data analytics to building machine learning models that predict
                        the future based on past data. Unlike analysts, data scientists do not stick to the facts
                        entirely. They have more space to develop their own ideas or discover patterns in the data that
                        seem worth pursuing..</p>
                    <div class="fw-img">

                        <img src="/images/blog-posts-images/data scientist.png" alt="" class="fw-pic">
                    </div>
                </div>
            </div>
            <!-- end of one scientist -->
            <!-- one scientist -->
            <div class="one-scientist">
                <h3 class="fw-title">The Data Engineer</h3>
                <div class="fw-underline"></div>
                <div class="fw-text">
                    <p>This is a software-development-intensive role that thrives on programming skills and the ability
                        to make data tangible to data scientists. Data engineers manage large datasets, do the data
                        cleaning, aggregation, and ETL processes. But they also build data pipelines to get the data to
                        the analysts and scientists within an organization.</p>
                    <div class="fw-img">

                        <img src="/images/blog-posts-images/data-engeneer.png" class="fw-pic" alt="">
                    </div>
                </div>

            </div>
            <!-- end of one scientist -->
        </div>
    </section>
    <!-- END OF PARAGRAPTH 2 -->
@endsection
