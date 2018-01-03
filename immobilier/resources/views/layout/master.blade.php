<!DOCTYPE html>
<html>
  @include("layout.head")
    <body>
      @include("layout.header")
      <div class="container">
        @yield("content")
      </div>
    </body>
  @include("layout.footer")
</html>
