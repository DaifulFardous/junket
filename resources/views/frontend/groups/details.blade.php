@extends('frontend.master')
@section('content')
<section id="common_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_bannner_text">
                    <h2>Group Profile</h2>
                    <ul>
                        <li><a href="{{ url("/") }}">Home</a></li>
                        <li><span><i class="fas fa-circle"></i></span>Group Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="news_details_main_arae" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="news_detail_wrapper">
                    <div class="news_details_content_area">
                        <img src="{{ asset('assets/uploads/groups/'.$group->image) }}" style="height: 800px; width: 1400px" alt="img">
                    </div>
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="news_details_content_area news_details_content_tops">
                                <div class="news_details_four_heading">
                                    <h2>{{ $group->group_name }}</h2>
                                </div>
                                <div class="news_details_four_heading">
                                    <h4>{{ $group->owner_name }}</h4>
                                </div>

                                <p>{{ $group->location }}</p>
                                <p>{{ $group->about_us }}</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection

