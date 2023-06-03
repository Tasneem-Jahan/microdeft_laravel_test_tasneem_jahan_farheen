<h1>Students</h1>

@foreach ($students as $student)
    <div class="row">
        <div class="col-md-4">{{ $student->id }}</div>
        <div class="col-md-4">{{ $student->department_id }}</div>
        <div class="col-md-4">{{ $student->name }}</div>
    </div>
@endforeach
