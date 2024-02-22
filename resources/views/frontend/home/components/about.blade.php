<section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
            @if($about_section->image)
            <img src="{{ asset('storage/' . $about_section->image) }}" class="img-fluid" alt="Hero Image">
        @else
            <!-- Default image or placeholder image if no image is selected -->
            <img src="{{ asset('frontend/assets/img/default-image.png') }}" class="img-fluid" alt="Default Image">
        @endif
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h3>Who We Are</h3>
            <h2>
                {{ @$about_section->main }}</h2>
            <p>
                {{ @$about_section->description }}
            </p>
            <div class="text-center text-lg-start">
              <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Read More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>



      </div>
    </div>

  </section>
