<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <table border="1">
        <tr class="table table-success">
            <th>Name</th>

            <th>Post ID</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post->name}}</td>
            
        </tr>
    @endforeach
    <tr>
        <th>Comment Post id</th>
        <th>Coment</th>
    </tr>
    @foreach($comments as $comment)
    <tr>
        <td>{{$comment->post_id}}</th>
         <td>{{$comment->comment}}</th>
            
    </tr>
    @endforeach
    </table>
</body>
</html>