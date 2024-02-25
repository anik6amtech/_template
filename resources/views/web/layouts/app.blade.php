<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('web.includes.style')
</head>
<body>
@action('web_header')
<div class="container-fluid mt-3">
@yield('content')
</div>

@action('web_footer')
@include('web.includes.script')

</body>
</html>


