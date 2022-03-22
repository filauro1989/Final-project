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
        
        $categories = Category::all();
        
    @endphp
    @foreach ($categories as $category)
        <span>{{ $i++ }}</span>

        <img style="width:200px;" src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}">
    @endforeach

</body>

</html>
