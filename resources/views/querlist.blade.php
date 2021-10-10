

<table border="1">
   @foreach($data as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->title}}</td>
   </tr>
   @endforeach
</table>