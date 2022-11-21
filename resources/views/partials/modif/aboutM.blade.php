<form action="{{ route('update', $edit[0]->id) }}" method="POST" id="about" class="about mt-5">
    @foreach ($edit as $item)
        <div class="container">
            @csrf
            <div class="section-title">
                <div class="d-flex gap-5">
                    <h2 class="text-light"><a href="index.html">About</a></h2>
                    <a href="{{ route('about') }}"><i class="icofont-edit-alt"></i></a>
                </div>
                <textarea name="text1" id="" cols="50" rows="3">{{ $item->text1 }}</textarea>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>UI/UX Designer &amp; Web Developer.</h3>
                    <p class="font-italic">
                        Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat
                    sit in iste officiis commodi quidem hic quas.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong><input type="date" name="birthday" value="{{ $item->birthday }}"></li>
                                <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> <input type="text" name="website" value="{{ $item->website }}"></li>
                                <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> +<input type="number" name="Phone_number" value="{{ $item->Phone_number }}"></li>
                                <li><i class="icofont-rounded-right"></i> <strong>City:</strong> <input type="text" name="contries" value="{{ $item->contries }}"></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> <input type="number" name="age" value="{{ $item->age }}"></li>
                                <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> <input type="text" name="Degree" value="{{ $item->Degree }}"></li>
                                <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> <input type="text" name="Email" value="{{ $item->Email }}"></li>
                                <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> <input type="text" name="freelance" value="{{ $item->freelance }}"></li>
                            </ul>
                        </div>
                    </div>
                    <textarea name="text2" id="" cols="70" rows="3">{{ $item->text2 }}</textarea>
                </div>
                <button class="btn btn-dark" type="submit">édit</button>
            </div>
        </div>
    @endforeach
</form>

