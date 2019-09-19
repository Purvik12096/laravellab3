<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View All Posts</title>
</head>
<body>



                <table width="60%" border="1">
                  <tr>
                    <th>Title</th>
                    <th>Desc</th>
                    <th>Option</th>
                  </tr>
                  @foreach($posts as $post)

                  <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td><a href="">Update</a><a href="">Delete</a></td>
                  </tr>

                  @endforeach
                </table>


</body>
</html>
