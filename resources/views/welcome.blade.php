@extends('frontend.master')
@section('content')
<div class="search-overlay">
<div class="d-table">
  <div class="d-table-cell">
    <div class="search-overlay-layer"></div>
    <div class="search-overlay-layer"></div>
    <div class="search-overlay-layer"></div>
    <div class="search-overlay-close">
      <span class="search-overlay-close-line"></span>
      <span class="search-overlay-close-line"></span>
    </div>
    <div class="search-overlay-form">
      <form>
        <input
          type="text"
          class="input-search"
          placeholder="Search here..."
        />
        <button type="button"><i class="fas fa-search"></i></button>
      </form>
    </div>
  </div>
</div>
</div>
    <section id="home_three_banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="banner_area_three">
              <h3 class="top_banner_three_text">Welcome to Junket</h3>
              <h2>Making Your Travel Choices Easier</h2>
              <h3 class="bottom_banner_three_text">
                Find convinient Tour Plans and Packages
              </h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="promotional_tours" class="section_padding_top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section_heading_center">
              <h2>Trending Tours</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div
              class="Trending_tour_slider owl-theme owl-carousel arrow_style"
            >
            @foreach ($runningTours as $tour)
            <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="{{ url('tours/details/'.$tour->id) }}"
                    ><img src="{{ asset('assets/uploads/runningTours/'.$tour->image) }}" style="height: 242px; width: 430px" alt="img"
                  /></a>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="{{ url('tours/details/'.$tour->id) }}">{{ $tour->location }}</a></h4>
                  <h3>Tk {{ $tour->total_cost }} <span>Total cost</span></h3>
                </div>
              </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="promotional_tourss" class="section_padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section_heading_center">
              <h2>Upcoming Tours</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div
              class="Popular_hotels_slider owl-theme owl-carousel arrow_style"
            >
            @foreach ($upcommingTours as $tour)
            <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="{{ url('upcomming/tours/details/'.$tour->id) }}"
                    ><img src="{{ asset('assets/uploads/upcommingTours/'.$tour->image) }}" style="height: 242px; width: 430px" alt="img"
                  /></a>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="{{ url('upcomming/tours/details/'.$tour->id) }}">{{ $tour->location }}</a></h4>
                  <h3>Tk {{ $tour->total_cost }} <span>Total cost</span></h3>
                </div>
              </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="promotional_tourss" class="section_padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section_heading_center">
              <h2>Popular Groups</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div
              class="Popular_hotels_slider owl-theme owl-carousel arrow_style"
            >
            @foreach ($groups as $group)
            <div class="theme_common_box_two img_hover">
                <div class="theme_two_box_img">
                  <a href="{{ url('group/details/'.$group->id) }}"
                    ><img src="{{ asset('assets/uploads/groups/'.$group->image) }}" style="height: 242px; width: 430px" alt="img"
                  /></a>
                </div>
                <div class="theme_two_box_content">
                  <h4><a href="{{ url('group/details/'.$group->id) }}">{{ $group->group_name }}</a></h4>
                  <h3>Owner name: {{ $group->owner_name }}</h3>
                </div>
              </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="width_offer_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="width_offer_item">
              <div class="width_offer_icon">
                <img src="{{ asset('frontend') }}/img/icon/plan.png" alt="icon" />
              </div>
              <div class="width_offer_text">
                <h3>70+ Destinations</h3>
                <p>
                  Nostrud aliqua ipsum dolore velit labore nulla fugiat nulla
                  irure nostrud.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="width_offer_item">
              <div class="width_offer_icon">
                <img src="{{ asset('frontend') }}/img/icon/location.png" alt="icon" />
              </div>
              <div class="width_offer_text">
                <h3>Suitable and Affordable Packages</h3>
                <p>
                  Nostrud aliqua ipsum dolore velit labore nulla fugiat nulla
                  irure nostrud.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="width_offer_item">
              <div class="width_offer_icon">
                <img src="{{ asset('frontend') }}/img/icon/suport.png" alt="icon" />
              </div>
              <div class="width_offer_text">
                <h3>Top quality customer support</h3>
                <p>
                  Nostrud aliqua ipsum dolore velit labore nulla fugiat nulla
                  irure nostrud.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
