<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>

<body>

    @php
        $i = 0;
        use App\Category;
        use App\User;
        use App\Course;
        use App\Dish;
        
        $categories = Category::all();
        $users = User::all();
        $courses = Course::all();
        $dishes = Dish::all();
        
        // TANTA ROBA
        
        dd(json_decode('[{"name":"margherita","price":6,"quantity":1},{"name":"capricciosa","price":8,"quantity":2},{"name":"diavola","price":12,"quantity":4}]'));
        
    @endphp
    @foreach ($categories as $category)
        <span>{{ $i++ }}</span>

        <img style="width:200px;" src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}">

        <span>{{ $i++ }}</span>
    @endforeach

</body>

</html>
