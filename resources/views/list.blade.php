
<h2>List data</h2>

<table border='1'>
    <tr>
        <th>Name</th>
        <th>Category</th>
        <th>Amount</th>
        <th>Action</th>
        <th>Edit</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$product['title'];}}</td>
        <td>{{$product['category'];}}</td>
        <td>{{$product['amount'];}}</td>
        <td><a href={{"delete/".$product['id']}} >Delete</a></td>
        <td><a href={{"edit/".$product['id']}} >edit</a></td>
    </tr>
   @endforeach
<span>
    {{$products->links()}}
</span>

</table>
<style>
    .w-5{
        display:none;
    }
    </style>