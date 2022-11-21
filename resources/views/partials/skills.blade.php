<section id="skills" class="skills section-bg">
    <div class="container">

        <div class="section-title">
            <div class="d-flex gap-5">
                <h2>Skills</h2>
                <a href="{{ route('skill') }}"><i class="icofont-edit-alt"></i></a>
            </div>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row skills-content">
            <div class="col-lg-6" data-aos="fade-up">
                @foreach ($skills as $key => $items)
                    @if ($key % 2 == 0)
                        <div class="progress">
                            <span class="skill">{{ $items->name }} <i class="val">{{ $items->pourcent }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $items->pourcent }}" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                @foreach ($skills as $key => $items)
                    @if ($key % 2 == 1)
                        <div class="progress">
                            <span class="skill">{{ $items->name }}<i class="val">{{ $items->pourcent }}%</></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $items->pourcent }}" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

    </div>
</section>
