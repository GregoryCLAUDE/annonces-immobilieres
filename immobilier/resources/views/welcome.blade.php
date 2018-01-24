@extends("layout.master")

@section("content")
<div class="content-wrapper">

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6">
        <p>carte</p>
      </div>
      <div class="col-sm-6">
        <div class="row">
          @if($advs)
          @foreach($advs as $adv)
          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src= {{ $adv->image }} alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{ $adv->name }}</a>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
              </div>
            </div>
          </div>
          @endforeach
          @endif
        </div>
      </div>
  </div>
</div>

@endsection
