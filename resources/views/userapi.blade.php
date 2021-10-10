
<h1>User list</h1>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Image</td>
    </tr>
    <tbody>
        @foreach($collection as $c)
    <tr>
    <td>{{$c['id']}}</td>
        <td>{{$c['first_name']}}</td>
        <td>{{$c['email']}}</td>
        <td><img src={{ $c['avatar']}}></td> 
    </tr>
    @endforeach
    </tbody>
</table>