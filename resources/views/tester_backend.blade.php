<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('user.store') }}">
        @csrf
    
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
    
        <label for="birthdate">Birthdate (dd/mm/yyyy):</label><br>
        <input type="text" id="birthdate" name="birthdate"><br><br>
    
        <label for="education_qualification">Kualifikasi Pendidikan:</label><br>
        <select id="education_qualification" name="education_qualification">
            @foreach ($education_qualifications as $education_qualification)
                <option value="{{ $education_qualification->id }}">{{ $education_qualification->qualification }}</option>
            @endforeach
        </select><br><br>
    
        <label for="major">Lulusan jurusan</label><br>
        <select id="major" name="major">
            @foreach ($majors as $major)
                <option value="{{ $major->id }}">{{ $major->major }}</option>
            @endforeach
        </select><br><br>
    
        <label for="year_experience">Bahasa yang dikuasai:</label><br>
        <select id="year_experience" name="year_experience">
            @foreach ($year_experiences as $year_experience)
                <option value="{{ $year_experience->id }}">{{ $year_experience->experience_range }}</option>
            @endforeach
        </select><br><br>
    
        <label for="languages">Bahasa yang dikuasai:</label><br>
        <select id="languages" name="languages">
            @foreach ($languages as $language)
                <option value="{{ $language->id }}">{{ $language->language }}</option>
            @endforeach
        </select><br><br>
    
        <label for="primary_language">Bahasa yang menjadi primary:</label><br>
        <select id="primary_language" name="primary_language">
            @foreach ($languages as $language)
                <option value="{{ $language->id }}">{{ $language->language }}</option>
            @endforeach
        </select><br><br>
    
        <label for="specialization_1">Specialization 1:</label><br>
        <select id="specialization_1" name="specialization_1">
            @foreach ($specializations as $specialization)
                <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
            @endforeach
        </select><br><br>
    
        <label for="specialization_2">Specialization 2:</label><br>
        <select id="specialization_2" name="specialization_2">
            @foreach ($specializations as $specialization)
                <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
            @endforeach
        </select><br><br>
    
        <label for="specialization_3">Specialization 3:</label><br>
        <select id="specialization_3" name="specialization_3">
            @foreach ($specializations as $specialization)
                <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
            @endforeach
        </select><br><br>
    
        <label for="specialization_4">Specialization 4:</label><br>
        <select id="specialization_4" name="specialization_4">
            @foreach ($specializations as $specialization)
                <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
            @endforeach
        </select><br><br>
    
        <label for="preferred_working_hours">Waktu bekerja yang diinginkan:</label><br>
        <select id="preferred_working_hours" name="preferred_working_hours">
            @foreach ($preferred_working_hours as $preferred_working_hour)
                <option value="{{ $preferred_working_hour->id }}">{{ $preferred_working_hour->working_hour_range}}</option>
            @endforeach
        </select><br><br>
    
        <label for="desired_field">Keinginan Bergerak Dibidang Apa:</label><br>
        <select id="desired_field" name="desired_field">
            @foreach ($desired_fields as $desired_field)
                <option value="{{ $desired_field->id }}">{{ $desired_field->field }}</option>
            @endforeach
        </select><br><br>
    
        <input type="submit" value="Submit">
    
    </form>
</body>
</html>