<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  {{-- <meta http-equiv="refresh" content="5; URL=http://127.0.0.1:8000/vasc"> --}}

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Dashboard</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  {{-- <script>setTimeout(function(){    window.location.reload(1); }, 5000);</script> --}}
</head>

<body class="bg-dark">
  <!-- As a heading -->
  <nav class="navbar border mb-3 border-dark navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Navbar</span>
  </nav>

  <!-- Container for main content -->
  <div class="container-fluid">
    <div class="row">
      <div class="col my-auto text-center">
        <div class="card d-flex align-items-center flex-wrap">
          {{-- <img class="img-fluid mb-5" style="width:500px" src="{{ URL::to('/img/kandang_ayam.jpg') }}" --}}
          <img class="img-fluid" style="width:500px"
            src="https://assets.petpintar.com/cache/760/450/article/440/1639646559-model-kandang-ayam-banner-update.jpg"
            alt="kandang_ayam">
        </div>
      </div>
      <div class="col-lg-4 align-self-stretch">
        <div class="card">
          <div class="card-body shadow bg-white rounded">
            <div class="jumbotron">
              <div class="row align-center">
                <div class="col d-flex align-items-center flex-wrap">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                    class="bi bi-thermometer-half" viewBox="0 0 16 16">
                    <path d="M9.5 12.5a1.5 1.5 0 1 1-2-1.415V6.5a.5.5 0 0 1 1 0v4.585a1.5 1.5 0 0 1 1 1.415z" />
                    <path
                      d="M5.5 2.5a2.5 2.5 0 0 1 5 0v7.55a3.5 3.5 0 1 1-5 0V2.5zM8 1a1.5 1.5 0 0 0-1.5 1.5v7.987l-.167.15a2.5 2.5 0 1 0 3.333 0l-.166-.15V2.5A1.5 1.5 0 0 0 8 1z" />
                  </svg>
                  <h1 class="display-6 d-inline">30 °C</h1>
                </div>
                <div class="col d-flex align-items-center flex-wrap">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                    class="bi bi-droplet-fill" viewBox="0 0 16 16">
                    <path
                      d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6ZM6.646 4.646l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448c.82-1.641 1.717-2.753 2.093-3.13Z" />
                  </svg>
                  <h1 class="display-6 d-inline">70 %</h1>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-lg-4 mb-3 align-self-stretch">
        <div class="card">
          <div class="card-body shadow bg-white rounded flex-column">
            <div class="jumbotron p-2">
              <div class="row">
                <div class="col align-items-baseline d-flex my-3 justify-content-center">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                    class="bi bi-lungs-fill" viewBox="0 0 16 16">
                    <path
                      d="M8 1a.5.5 0 0 1 .5.5v5.243L9 7.1V4.72C9 3.77 9.77 3 10.72 3c.524 0 1.023.27 1.443.592.431.332.847.773 1.216 1.229.736.908 1.347 1.946 1.58 2.48.176.405.393 1.16.556 2.011.165.857.283 1.857.24 2.759-.04.867-.232 1.79-.837 2.33-.67.6-1.622.556-2.741-.004l-1.795-.897A2.5 2.5 0 0 1 9 11.264V8.329l-1-.715-1 .715V7.214c-.1 0-.202.03-.29.093l-2.5 1.786a.5.5 0 1 0 .58.814L7 8.329v2.935A2.5 2.5 0 0 1 5.618 13.5l-1.795.897c-1.12.56-2.07.603-2.741.004-.605-.54-.798-1.463-.838-2.33-.042-.902.076-1.902.24-2.759.164-.852.38-1.606.558-2.012.232-.533.843-1.571 1.579-2.479.37-.456.785-.897 1.216-1.229C4.257 3.27 4.756 3 5.28 3 6.23 3 7 3.77 7 4.72V7.1l.5-.357V1.5A.5.5 0 0 1 8 1Zm3.21 8.907a.5.5 0 1 0 .58-.814l-2.5-1.786A.498.498 0 0 0 9 7.214V8.33l2.21 1.578Z" />
                  </svg>
                  <h1 class="display-6 mb-3 d-inline p-2">450</h1>
                </div>
              </div>
              <div class="row">
                <div class="col p-auto">
                  <h3 class="border border-dark rounded-10 mx-auto p-2 text-center">STATUS</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Container for expanded data -->
  <div class="card text-center">
  </div>
  <div class="card-body mt-3 bg-light">
    {{-- <h5 class="card-title">Suhu dan Kelembaban</h5> --}}
    <nav class="nav nav-tabs flex-column flex-sm-row">
      <button class="flex-sm-item text-sm-center nav-link active" role="button" type="button" data-toggle="collapse"
        data-target="#tabDHT">Suhu dan Kelembaban</button>
      <button class="flex-sm-item text-sm-center nav-link " role="button" type="button" data-toggle="collapse"
        data-target="#tabMQ">Gas Amonia</button>
    </nav>


    {{-- ubah di bagian sini, accordion membuat grafik menghilang ketika collapse --}}
    <div class="container">
      <div class="row m-3">
        <div class="col-sm mb-4">
          <div class="vstack gap-5 col-md-5 my-auto mx-auto align-self-start">
            <button type="button" class="btn btn-primary btn-lg btn-block">A</button>
            <button type="button" class="btn btn-secondary btn-lg btn-block">B</button>
            <button type="button" class="btn btn-secondary btn-lg btn-block">C</button>
            {{-- <button type="button" class="px-3 btn btn-outline-secondary"><h3>A</h3></button>
            <button type="button" class="px-3 btn btn-outline-secondary"><h3>B</h3></button>
            <button type="button" class="px-3 btn btn-outline-secondary"><h3>C</h3></button> --}}
          </div>
        </div>
        <div class="col-md d-flex">
          
              {{-- but what if i use carousel instead of accordion --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner text-center ">
        <div class="carousel-item active">
          @yield('chart-temperature')
          <h3>Temperature</h3>
        </div>
        <div class="carousel-item">
          @yield('chart-humid')
          <h3>Humidity</h3>
        </div>
        <div class="carousel-item">
          @yield('chart-gas')
          <h3>Gas</h3>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


          @yield('chart-temperature')
          @yield('chart-humid')
        </div>
      </div>
    </div>

  </div>
  </div>
  </div>
  </div>


  <!-- Container for expanded data -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>

</body>


</html>
