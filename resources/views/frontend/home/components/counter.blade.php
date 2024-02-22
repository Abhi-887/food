{{-- <section class="fp__counter" style="background: url({{ @$counter->background }});">
    <div class="fp__counter_overlay pt_100 xs_pt_70 pb_100 xs_pb_70">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_counter">
                        <i class="{{ @$counter->counter_icon_one }}"></i>
                        <div class="text">
                            <h2 class="counter">{{ @$counter->counter_count_one }}</h2>
                            <p>{{ @$counter->counter_name_one }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_counter">
                        <i class="{{ @$counter->counter_icon_two }}"></i>
                        <div class="text">
                            <h2 class="counter">{{ @$counter->counter_count_two }}</h2>
                            <p>{{ @$counter->counter_name_two }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_counter">
                        <i class="{{ @$counter->counter_icon_three }}"></i>
                        <div class="text">
                            <h2 class="counter">{{ @$counter->counter_count_three }}</h2>
                            <p>{{ @$counter->counter_name_three }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-3 wow fadeInUp" data-wow-duration="1s">
                    <div class="fp__single_counter">
                        <i class="{{ @$counter->counter_icon_four }}"></i>
                        <div class="text">
                            <h2 class="counter">{{ @$counter->counter_count_four }}</h2>
                            <p>{{ @$counter->counter_name_four }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-emoji-smile"></i>
            <div>
              <span  data-purecounter-start="0" data-purecounter-end="{{ @$counter->counter_count_one }}" data-purecounter-duration="1"class="purecounter"></span>
              <p> {{ @$counter->counter_name_one }}</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
            <div>

              <span data-purecounter-start="0" data-purecounter-end="{{ @$counter->counter_count_two }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>{{ @$counter->counter_name_two }}</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-headset" style="color: #15be56;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="{{ @$counter->counter_count_three }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>{{ @$counter->counter_name_three }}</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="bi bi-people" style="color: #bb0852;"></i>
            <div>
              <span data-purecounter-start="0" data-purecounter-end="{{ @$counter->counter_count_four }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>{{ @$counter->counter_name_four }}</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

