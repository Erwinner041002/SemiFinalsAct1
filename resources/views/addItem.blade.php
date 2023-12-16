<h1>Add New Grocery Item</h1>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form method="post" action="{{ route('store') }}">
    @csrf
    <label for="itemname">Item Name:</label>
    <input type="text" name="itemname" required>

    <label for="category">Category:</label>
    <input type="text" name="category" required>

    <label for="quantity">Quantity:</label>
    <input type="number" name="quantity" required>

    <button type="submit">Add Item</button>
</form>
