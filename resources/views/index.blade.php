<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grocery List</title>
</head>
<body>
    <h1>Grocery List</h1>

    <ul>
        @foreach($items as $item)
            <li>{{ $item->itemname }} - {{ $item->category }} - {{ $item->quantity }}</li>
        @endforeach
    </ul>

    <a href="{{ route('addItem') }}">
        <button>Add New Item</button>
    </a>
</body>
</html>
