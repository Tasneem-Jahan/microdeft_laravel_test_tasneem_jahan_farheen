<form action="/students" method="post" class="">
    <div>
        <label for="">Name: </label>
        <input type="text" name="name">

        {{ $errors->first('name') }}
    </div>

    <div>
        <label for="">Choose your deparment</label>
        <select name="departments" id="">
            @foreach ($departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach
        </select>

        {{ $errors->first('departments') }}
    </div>

    <div>
        <label for="class">Class</label>
        <input type="number" name="class">

        {{ $errors->first('class') }}
    </div>

    <div>
        <label for="class">Date of birth</label>
        <input type="date" name="date">

        {{ $errors->first('date') }}
    </div>

    <div>
        <label for="">Image</label>
        <input type="file">
    </div>

    <button type="submit">Add student</button>

    @csrf
</form>
