@php
use Illuminate\Support\Carbon;
@endphp

@extends('base')
@section('big-title')
<h1 class="mt-4">Data pembacaan</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Rekam kondisi kandang ayam petelurs</li>
          </ol>
@endsection
@section('title')
    <i class="fas fa-table me-1"></i>
    Tabel Data
@endsection

@section('body')

<div class="dropdown">
  <form action="/table" method="GET" class="mb-3">
        <label for="posisi"> Posisi : </label>
        <select name="posisi" id="posisi">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
          </select>
        
        <label for="tanggal">Tanggal :</label>
        <input type="datetime-local" id="tanggal" name="tanggal">
        <input type="submit" value="Ambil Data">
      </form>
</div>

<table data-s-dom="lrtip" id="datatablesSimple">
    <thead>
      <tr>
        <th>No</th>
        <th>Waktu</th>
        <th>Suhu</th>
        <th>Kelembaban</th>
        <th>Gas</th>
      </tr>
    </thead>
    <tfoot>
      <tr>
        <th>No</th>
        <th>Waktu</th>
        <th>Suhu</th>
        <th>Kelembaban</th>
        <th>Gas</th>
      </tr>
    </tfoot>
    <tbody> 
      @foreach ($data as $data)
        <tr>
          <td>{{ $loop->index + 1 }}</td>
          <td>{{ Carbon::parse("$data->created_at")->setTimezone('Asia/Jakarta')->toDateTimeString() }}</td>
          <td>{{ $data->temperature_1 }}</td>
          <td>{{ $data->humid_1 }}</td>
          <td>{{ $data->gas_1 }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> 
  <script src="{{ asset('js/datatables-simple-demo.js') }}"></script>
  <script src="{{ asset('js/chart-area-demo.js') }}"></script>
  <script src="{{ asset('js/chart-bar-demo.js') }}"></script>
  {{-- <script src="{{ asset('js/scripts.js') }}"></script> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="htt
@endsection