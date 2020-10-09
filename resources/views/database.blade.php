<html>
<h1>Database</h1>
<hr>
<table border="1">
    <tr>
    <th>id</th>
    <th>Title</th>
    <th>Content</th>
    <th>Featured_Image</th>
    </tr>  
@foreach($Article as $art)
<tr>
<td>{{$art->id}}</td>
<td>{{$art->title}}</td>
<td>{{$art->content}}</td>
<td>{{$art->featured_image}}</td>
</tr>
@endforeach
</table>
</html>