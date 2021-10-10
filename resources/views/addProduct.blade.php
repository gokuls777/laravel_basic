

<h1>Add Product</h1>
@if(session('user'))
<h3 style="color:green;">{{session('user')}}  </h3>
@endif
<form action="createProduct" method="POST">
     @csrf
    <input type="text" name="name" placeholder="Product name"><br> <br>

    <input type="text" name="category" placeholder="Category"><br> </br>

    <input type="text" name="amount" placeholder="Amount"><br> <br>

<button type="submit">Add</button>
</form>
<a href="products">List</a>