<!DOCTYPE html>
<html lang="en">

@include('theme.partials.head-page')

<body>
  <!--================Header Menu Area =================-->
    @include('theme.partials.head-area')
  <!--================Header Menu Area =================-->

  {{-- Hero Section --}}
  <main class="site-main">
    <!--================Hero Banner start =================-->
    <section class="mb-30px">
      <div class="container">
        @include('theme.partials.hero-banner')
      </div>
    </section>
    <!--================Hero Banner end =================-->

    @yield('content')
  </main>

  <!--================ Start Footer Area =================-->
  @include('theme.partials.footer')
  <!--================ End Footer Area =================-->

  @include('theme.partials.scripts')

</body>
</html>
