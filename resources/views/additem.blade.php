<h1>Add New Item</h1>
<form action="add" method="POST">
@csrf 
<input type="text" name="title" placeholder="Enter a title"><br> <br>
<input type="text" name="description" placeholder="Enter the description"><br> <br>
<button type="submit">Add Item</button>
</form>