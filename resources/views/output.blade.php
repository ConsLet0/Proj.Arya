
@extends('layout.main')

@section('content')
<section id="about">
    <div class="container py-5">
        <div class="row align-items-center py-5">
            @foreach ($matchedJobs as $job)
            <div class="col-md-6 ps-md-5">
                <img src="{{asset('images/developer.png')}}" alt="image" class="img-fluid" />
            </div>
            <div class="col-md-6 px-4 py-5">
                <h6 class="">YOUR JOB IS</h6>
                <h2 class="fw-bold display-4 mb-3">{{ $job->name }}</h2>
                <p class="">
                    {{ $job->description }}
                </p>
                <a href="/" class="btn btn-primary service-btn mt-3">Back to homepage</a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section id="cta" class="position-relative my-5">
    <div class="cta-pattern-overlay pattern-left position-absolute top-50 start-0 translate-middle-y">
        <img src="{{asset('images/cta-pattern.png')}}" alt="pattern" />
    </div>
    <div class="container my-5 py-5">
        <div class="row align-items-center my-5">
            <div class="col-md-6 offset-md-2">
                <h6 class="text-white">Welcome</h6>
                <h2 class="text-white fw-bold display-4">{{ $job->name }}</h2>
            </div>
        </div>
    </div>
</section>
@endsection