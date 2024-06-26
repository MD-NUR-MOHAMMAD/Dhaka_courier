<section class="py-xxl-10 pb-0" id="home">
    <div class="bg-holder bg-size"
        style="background-image:url({{ asset('courier/public/assets/img/gallery/hero-header-bg.png ')}});background-position:top center;background-size:cover;">
    </div>
    <!--/.bg-holder-->

    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100"
                    src="{{ asset('courier/public/assets/img/illustrations/hero.png ')}}" alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-8">
                <h1 class="fw-normal fs-6 fs-xxl-7">A trusted provider of </h1>
                <h1 class="fw-bolder fs-6 fs-xxl-7 mb-2">courier services.</h1>
                <p class="fs-1 mb-5">We deliver your products safely to <br />your home in a reasonable time. </p><a
                    class="btn btn-primary me-2" href="{{route('login')}}" role="button">Order Here<i
                        class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</section>
