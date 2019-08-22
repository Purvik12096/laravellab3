<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View All Posts</title>
</head>
<body>
    
                <ul>
                @foreach($posts as $post)
                    <li> {{$post->title}}  {{$post->body}}</li> 
                @endforeach
             </ul>



</body>
</html>