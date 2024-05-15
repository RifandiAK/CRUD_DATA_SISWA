@extends('layout.main')
@section('content')
<div class="container mt-3">
    <h2>Data Siswa</h2>
    <table class="table table-dark table-striped">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nis</th>
      <th scope="col">Alamat</th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
      <th scope="row">1</th>
      <td>Mige</td>
      <td>122343</td>
      <td>Karangan</td>
      <td><img src="{{ asset('images/mige.jpg') }}" alt="" width='100px'></td>
    </tr>
      <th scope="row">2</th>
      <td>Prasetya</td>
      <td>243245</td>
      <td>Tugu</td>
      <td><img src="{{ asset('images/teman2.png') }}" alt="" width='100px'></td>
    </tr>
      <th scope="row">3</th>
      <td>Satrio</td>
      <td>782324</td>
      <td>Trenggalek</td>
      <td><img src="{{ asset('images/teman3.png') }}" alt="" width='100px'></td>
    </tr>
      <th scope="row">4</th>
      <td>Niklas</td>
      <td>982345</td>
      <td>Suruh</td>
      <td><img src="{{ asset('images/teman4.png') }}" alt="" width='100px'></td>
    </tr>
      <th scope="row">5</th>
      <td>Nizar</td>
      <td>763427</td>
      <td>Pule</td>
      <td><img src="{{ asset('images/teman5.png') }}" alt="" width='100px'></td>
    </tr>
      <th scope="row">6</th>
      <td>Kikik</td>
      <td>044238</td>
      <td>Trenggalek</td>
      <td><img src="{{ asset('images/teman6.png') }}" alt="" width='100px'></td>
    </tr>
      <th scope="row">7</th>
      <td>Pipin</td>
      <td>213244</td>
      <td>Tugu</td>
      <td><img src="{{ asset('images/teman7.png') }}" alt="" width='100px'></td>
    </tr>
      <th scope="row">8</th>
      <td>Yudi</td>
      <td>334224</td>
      <td>Tugu</td>
      <td><img src="{{ asset('images/teman8.png') }}" alt="" width='100px'></td>
    </tr>
      <th scope="row">9</th>
      <td>Dito</td>
      <td>243244</td>
      <td>Kerjo</td>
      <td><img src="{{ asset('images/teman9.png') }}" alt="" width='100px'></td>
    </tr>
      <th scope="row">10</th>
      <td>Piki</td>
      <td>993249</td>
      <td>Nganjuk</td>
      <td><img src="{{ asset('images/teman.png') }}" alt="" width='100px'></td>
    </tr>
    </table>
<div>
@endsection
