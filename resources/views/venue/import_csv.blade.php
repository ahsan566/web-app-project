@extends('layouts.app')

@section('content')
<html>

<head>
<title>File Upload</title>
</head>

<body>

<form action='postImport' method="post" enctype="multipart/form-data">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
  <input type="file" name="venue"><br>
  <input type="submit" value="Import"></input>

</form>

</body>
</html>

@endsection
