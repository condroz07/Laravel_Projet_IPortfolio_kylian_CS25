<!-- ======= About Section ======= -->
<section id="about" class="about">
    @foreach ($edit as $item)
        <div class="container">

            <div class="section-title">
                <div class="d-flex gap-5">
                    <h2 class="text-light"><a href="index.html">About</a></h2>
                    <a href="{{ route('about') }}"><i class="icofont-edit-alt"></i></a>
                </div>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat
                    sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>UI/UX Designer &amp; Web Developer.</h3>
                    <p class="font-italic">
                        {{ $item->text1 }}
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{ $item->birthday }}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> {{ $item->website }}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +{{ $item->Phone_number }}</li>
                                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{ $item->contries }}</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{ $item->age }} </li>
                                <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong>{{ $item->Degree }} </li>
                                <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong>  {{ $item->Email }}
                                </li>
                                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{ $item->freelance }}</li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        {{ $item->text2 }}
                    </p>
                </div>
            </div>

        </div>
    @endforeach
</section><!-- End About Section -->
