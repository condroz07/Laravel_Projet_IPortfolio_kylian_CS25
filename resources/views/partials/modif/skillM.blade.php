<section id="skills" class="skills section-bg">
    <div class="container">
        <div class="section-title">
            <h2><a href="/">Skills</a></h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="row skills-content">
            <div class="col-lg-6" data-aos="fade-up">
                @foreach ($skills as $items)
                <form action="/delete/{{ $items->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        @if ($loop->iteration % 2 == 1)
                            <div class="progress">
                                <span class="skill">{{ $items->name }}
                                    <a href="/edit/{{ $items->id }}"><i class="icofont-ui-edit yellow"></i></a>
                                    <i class="val">
                                        <button class="danger" type="submit"><i class="icofont-trash"></i></button>
                                        {{ $items->pourcent }}%
                                    </i>
                                </span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $items->pourcent }}"
                                        aria-valuemin="0"aria-valuemax="100"></div>
                                </div>
                            </div>
                        @endif
                    </form>
                @endforeach
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                @foreach ($skills as $items)
                    <form action="/delete/{{ $items->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        @if ($loop->iteration % 2 == 0)
                            <div class="progress">
                                <span class="skill">{{ $items->name }}
                                    <a href="/edit/{{ $items->id }}"><i class="icofont-ui-edit yellow"></i></a>
                                    <i class="val">
                                        <button type="submit" class="danger"><i class="icofont-trash"></i></button>
                                        {{ $items->pourcent }}%
                                    </i>
                                </span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $items->pourcent }}"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        @endif
                    </form>
                @endforeach
            </div>
        </div>
    </div>
</section>
