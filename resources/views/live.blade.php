@extends('base')
@section('big-title')
<h1 class="mt-4">Live Monitoring</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Pantau secara realtime kondisi kandang</li>
          </ol>
@endsection
@section('title')
    <i class="fas fa-table me-1"></i>
    Live Monitoring
@endsection

@section('body')
  <div id="layoutSidenav">
          <div class="container-fluid px-4 mt-4">
            <div class="row justify-content-md-center">
              <div class="col-xl-6 mb-5 d-flex justify-content-center">
                <div class="card bg-secondary w-50">
                  <div class="card-header text-white bg-primary pt-2 text-center">
                    <h4>Live View</h4>
                  </div>
                  <div class="card">
                    {{-- <img class="rounded" src="https://i.ibb.co/qgsZbCN/kandang.jpg" alt="kandang"> --}}
                    <img id="liveView" class="rounded" src="{{asset('kamera.png')}}" alt="kandang">
                    <script>
// function fetchImage() {
//   // Get the image element.
//   const imgElement = document.getElementById("liveView");

//   // Get the current image source.
//   const currentSrc = imgElement.src;

//   // Fetch a new image source.
//   const newSrc = "https://9c90-114-209-98.ngrok-free.app/capture";

//   // Set the image source to the new source.
//   imgElement.src = newSrc;
// }

// Set the interval to fetch a new image every second.
setInterval(fetchImage, 1000);
                    </script>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-md-center">
              <div class="col-xl-3 col-md-6">
                <div class="card bg-{{$colortemp}} text-white mb-4">
                  <div class="card-body">Suhu Saat Ini</div>
                  <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                      <h1 class="display-3 text-center ">{{ number_format((float)(($data->temperature_1 + $data->temperature_2 + $data->temperature_3)/3) , 2, '.', '')}}°C</h1>
                      <hr class="my-2">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card bg-{{$colorhumid}} text-white mb-4">
                  <div class="card-body">Kelembaban Saat Ini</div>
                  <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                      <h1 class="display-3 text-center ">{{number_format((float)(($data->humid_1 + $data->humid_2 + $data->humid_3)/3), 2, '.', '')}} % </h1>
                      <hr class="my-2">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-md-6">
                <div class="card bg-{{$colorgas}} text-white mb-4">
                  <div class="card-body">Gas Amonia</div>
                  <div class="jumbotron jumbotron-fluid">
                    <!-- use javascript to change 400 or gas_value into 'rendah' -->
                    <h1 class="display-3 text-center ">{{($data->gas_1 + $data->gas_2 + $data->gas_3)/3}} ppm</h1>
                    <hr class="my-2">
                  </div>
                </div>
              </div>

            </div>
            <hr />
          </div>
      </main>



      
    </div>
  </div>


@endsection