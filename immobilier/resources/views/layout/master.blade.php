<!DOCTYPE html>
<html>
  @include("layout.head")
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
      @include("layout.header")
      <div class="content-wrapper">
        @yield("content")
      </div>
    </body>
  @include("layout.footer")
</html>
