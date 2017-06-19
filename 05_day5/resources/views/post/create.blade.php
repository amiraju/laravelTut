<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<form method="post" action="{{ route('post.store') }}">
{{ csrf_field() }}
<input type="text" name="title">
<input type="text" name="content">
<input type="submit" value="Save">


</form>

</body>
</html>
