<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matched Jobs</title>
</head>
<body>
    <h3>Matched Jobs</h3>
    @foreach ($matchedJobs as $job)
        <div>
            <h4>{{ $job->name }}</h4>
            <p>{{ $job->description }}</p>
            <img src="{{ $job->image }}" alt="{{ $job->name }} Image">
        </div>
    @endforeach
</body>
</html>
