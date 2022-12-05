
@extends('layouts.main')
@section('content')

<div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="bg-dark p-4">
        <h4 class="text-white">Collapsed content</h4>
        <span class="text-muted">Toggleable via the navbar brand.</span>
      </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
  </div>

<div class="card text-center">
    <div class="card-header">
      Welcome
    </div>
    <div class="card-body">
      <h3 class="card-title">Secure Examination and Evaluation System</h3>
      {{-- <p class="card-text">Group Members</p>
     
    </div>
    <div class="card-footer text-muted">
     1.Muhammad al amin Rifat  <br>
     2.Shamima Kabir <br>
     3.Kazi Towhidul Alam <br>
    </div>
  </div> --}}

  <br>
  




<div class="card" style="width: 18rem;">
    <div class="card-header">
        Group Members-
 </div>
    {{-- <ul class="list-group list-group-flush">
      <li class="list-group-item">1.Muhammad Al-Amin Rifat [20-42953-1]</li>
      <li class="list-group-item">2.Shamima Kabir [20-42304-1]</li>
      <li class="list-group-item">3.Kazi MD. Towhidul Alam[20-42979-1]</li>
    </ul>  --}}
  </div>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">ID</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Muhammad Al Amin</td>
        <td>Rifat</td>
        <td>20-42953-1</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Shamima</td>
        <td>Kabir</td>
        <td>20-42304-1</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Kazi Md. Towhidul</td>
        <td>Alam</td>
        <td>20-42979-1</td>
      </tr>
    </tbody>
  </table>

  </table>
  




@endsection