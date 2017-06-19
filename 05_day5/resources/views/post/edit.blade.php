<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
   <form method ="post" action="{{ route('post.update',$post->id) }}">
    {{ csrf_field() }}
  <input type="hidden" name="_method" value="PUT">
  <input type="text" name="title" value="{{$post->title}}">
  <input type="text" name="content" value="{{ $post->content }}">
  <input type="submit"  value="Update">
  </form>

</body>
</html>
