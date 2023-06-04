@extends("layouts.landing")


@section("title", "Fast4UBody")

@section("content")

    <div class="container">
            @if($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach($errors->all() as $error)
                          <p>{{ $error }}</p>
                      @endforeach
                  </ul>
              </div>
            @endif

        <form method="post" action="{{ route('guardar_ayuno') }}">
            <br>
            <div class="row justify-content-center align-items-center g-2">
              <div class="col d-flex justify-content-center">
                <input type="submit" class="btn btn-success" value="Iniciar Ayuno">
              </div>
                  @if(session('success'))
                    <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                    </div>
                  @endif
            </div>
            <br>
          @csrf
            <div class="row row-cols-2 justify-content-center align-items-center g-2">
                <div class="col">
                  @component("_components.card_ayuno")
                    @slot("src", asset("assets/img/12h.png"))
                    @slot("value", "12")
                  @endcomponent
                </div>
                <div class="col">
                  @component("_components.card_ayuno")
                    @slot("src", asset("assets/img/16h.png"))
                    @slot("value", "16")
                  @endcomponent
                </div>
                <div class="col">
                  @component("_components.card_ayuno")
                    @slot("src", asset("assets/img/18h.png"))
                    @slot("value", "18")
                  @endcomponent
                </div>
                <div class="col">
                  @component("_components.card_ayuno")
                    @slot("src", asset("assets/img/20h.png"))
                    @slot("value", "20")
                  @endcomponent
                </div>
                <div class="col">
                  @component("_components.card_ayuno")
                    @slot("src", asset("assets/img/24h.png"))
                    @slot("value", "24")
                  @endcomponent
                </div>
            </div>
        </form>
@endsection
