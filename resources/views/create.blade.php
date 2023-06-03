<form action="/students" method="post">
    <div>
        <label for="">Name: </label>
        <input type="text">

        {{-- {{$error->}} --}}
    </div>

    <div>
        <label for="">Choose your deparment</label>
        <select name="departments" id="">
            @foreach ($departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="class">Class</label>
        <input type="number">
    </div>

    <div>
        <label for="class">Date of birth</label>
        <input type="date">
    </div>

    <div>
        <label for="">Image</label>
        <input type="file">
    </div>

    <button type="submit">Add student</button>
</form>
