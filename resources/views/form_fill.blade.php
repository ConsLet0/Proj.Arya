@extends('layout.main')

@section('content')
<form method="POST" action="{{ route('user.store') }}">
    @csrf
    <section id="cta" class="position-relative overflow-hidden py-4">
        <div class="cta-pattern-overlay pattern-left position-absolute top-50 start-0 translate-middle-y">
            <img src="images/cta-pattern.png" alt="pattern" />
        </div>
        <div class="container my-5 py-5">
            <div class="row align-items-center my-5">
                <div class="col-md-6 offset-md-2">
                    <h6 class="text-white">Get started now</h6>
                    <h2 class="text-white fw-bold display-4">Fill this form below</h2>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container py-5">
            <div class="row align-items-center py-5">
                <div class="col-md-6 ps-md-5">
                    <div class="mb-4">
                        <label for="name" class="form-label mb-0">First Name</label>
                        <input type="text" id="name" name="name" class="form-control border-0" id="exampleInputEmail1" placeholder="Fill Your Name Here" />
                    </div>
                    <div class="mb-4">
                        <label for="birthdate" class="form-label mb-0">Date Of Birth</label>
                        <input type="date" id="birthdate" name="birthdate" class="form-control border-0" id="exampleInputEmail2" placeholder="Birthdate (dd/mm/yyyy)"/>
                    </div>
                    <div class="mb-4">
                        <label for="education_qualification" class="form-label mb-0">Education Qualification</label>
                        <select class="form-control border-0" id="education_qualification" name="education_qualification">
                            <option value="#" disabled selected>Education Qualification</option>
                            @foreach ($education_qualifications as $education_qualification)
                            <option value="{{ $education_qualification->id }}">{{ $education_qualification->qualification }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="major" class="form-label mb-0">Major</label>
                        <select class="form-control border-0" id="major" name="major">
                            <option value="#" disabled selected>Major</option>
                            @foreach ($majors as $major)
                            <option value="{{ $major->id }}">{{ $major->major }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="year_experience" class="form-label mb-0">Year Experience</label>
                        <select class="form-control border-0" id="year_experience" name="year_experience">
                            <option value="#" disabled selected>Major</option>
                            @foreach ($year_experiences as $year_experience)
                            <option value="{{ $year_experience->id }}">{{ $year_experience->experience_range }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6 px-4 py-5">
                    <h6 class="">hi !</h6>
                    <h2 class="fw-bold display-4 mb-3">
                        "First, we need to know about you."
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container py-5">
            <div class="row align-items-center py-5">
                <div class="col-md-6 px-4 py-5">
                    <h6 class="">Ok next step is</h6>
                    <h2 class="fw-bold display-4 mb-3">
                        what language do you use in your daily life ?
                    </h2>
                </div>
                <div class="col-md-6 ps-md-5">
                    <div class="mb-4">
                        <label for="languages" class="form-label mb-0">Language</label>
                        <select class="form-control border-0" id="major" name="languages">
                            <option value="#" disabled selected>Language</option>
                            @foreach ($languages as $language)
                            <option value="{{ $language->id }}">{{ $language->language }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="primary_language" class="form-label mb-0">Primary Language</label>
                        <select class="form-control border-0" id="primary_language" name="primary_language">
                            <option value="#" disabled selected>Primary Language</option>
                            @foreach ($languages as $language)
                            <option value="{{ $language->id }}">{{ $language->language }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container py-5">
            <div class="row align-items-center py-5">
                <div class="col-md-6 ps-md-5">
                    <div class="mb-4">
                        <label for="specialization_1" class="form-label mb-0">Specialization 1</label>
                        <select class="form-control border-0" id="specialization_1" name="specialization_1">
                            <option value="#" disabled selected>Specialization 1</option>
                            @foreach ($specializations as $specialization)
                            <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="specialization_2" class="form-label mb-0">Specialization 2</label>
                        <select class="form-control border-0" id="specialization_2" name="specialization_2">
                            <option value="#" disabled selected>Specialization 1</option>
                            @foreach ($specializations as $specialization)
                            <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="specialization_3" class="form-label mb-0">Specialization 1</label>
                        <select class="form-control border-0" id="specialization_3" name="specialization_3">
                            <option value="#" disabled selected>Specialization 3</option>
                            @foreach ($specializations as $specialization)
                            <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="specialization_4" class="form-label mb-0">Specialization 4</label>
                        <select class="form-control border-0" id="specialization_4" name="specialization_4">
                            <option value="#" disabled selected>Specialization 4</option>
                            @foreach ($specializations as $specialization)
                            <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6 px-4 py-5">
                    <h6 class="">This becomes more interesting</h6>
                    <h2 class="fw-bold display-4 mb-3">
                        so what is your specialization in work ?.
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container py-5">
            <div class="row align-items-center py-5">
                <div class="col-md-6 px-4 py-5">
                    <h6 class="">Last One</h6>
                    <h2 class="fw-bold display-4 mb-3">
                        How about the working hours ?
                    </h2>
                </div>
                <div class="col-md-6 ps-md-5">
                    <div class="mb-4">
                        <label for="preferred_working_hours" class="form-label mb-0">preferred working hours</label>
                        <select class="form-control border-0" id="preferred_working_hours" name="preferred_working_hours">
                            <option value="#" disabled selected>Preferred Working Hours</option>
                            @foreach ($preferred_working_hours as $preferred_working_hour)
                            <option value="{{ $preferred_working_hour->id }}">{{ $preferred_working_hour->working_hour_range }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="desired_field" class="form-label mb-0">What field do you want to work in</label>
                        <select class="form-control border-0" id="desired_field" name="desired_field">
                            <option value="#" disabled selected>Desire To Work</option>
                            @foreach ($desired_fields as $desired_field)
                            <option value="{{ $preferred_working_hour->id }}">{{ $desired_field->field }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">
                        Search for job advice
                    </button>
                </div>
            </div>
        </div>
    </section>
</form>
@endsection