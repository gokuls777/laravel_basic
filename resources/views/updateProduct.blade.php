

<h2> Update Product </h2>

@if(session('user'))
<h3 style="color:green;">{{session('user')}}  </h3>
@endif
<form action="/editProduct" method="POST">
     @csrf
     <input type="hidden" name="pid" value="{{$product['id']}}"><br> <br>
    <input type="text" name="name" placeholder="Product name" value="{{$product['title']}}"><br> <br>

    <input type="text" name="category" placeholder="Category" value="{{$product['category']}}"><br> </br>

    <input type="text" name="amount" placeholder="Amount" value="{{$product['amount']}}"><br> <br>

<button type="submit">Update</button>
</form>
<a href="products">List</a>
