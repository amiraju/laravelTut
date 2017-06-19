<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
  <ul>
    <li>
      <a href="{{ route('post.edit',$post->id) }}"><h1>{{ $post->title }}</h1></a>

      <li>
        <ul>{{ $post->content }}</ul>
    <ul>

</body>
</html>
