<!DOCTYPE html>
<html>
@include('layouts.head')

<body>

  @include('layouts.mainHeadNav')

  @yield('content')

  @include('layouts.footer')

  @include('layouts.scripts')
</body>

</html>