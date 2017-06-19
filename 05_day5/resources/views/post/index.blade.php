<!DOCTYPE html>
<html>
<head>
<title>Home</title>
</head>
<body>
@foreach ($posts as $post)
  <ul>
    <li>
      <a href="{{ route('post.show',$post->id) }}"><h1>{{ $post->title }}</h1></a>
      <a href="{{ route('post.destroy',$post->id) }}">delete</a>

      <li>
        <ul>{{ $post->content }}</ul>
    <ul>
@endforeach

</body>
</html>
