@extends('layouts.app')

@section('content')

<h2>Daftar Kategori Buku</h2>

<div class="row">

@foreach($kategori_list as $kategori)

<div class="col-md-4 mb-3">

    <div class="card h-100">

        <div class="card-body">

            <h5>{{ $kategori['nama'] }}</h5>

            <p>{{ $kategori['deskripsi'] }}</p>

            <span class="badge bg-success">
                {{ $kategori['jumlah_buku'] }} Buku
            </span>

            <hr>

            <a href="{{ route('kategori.show',$kategori['id']) }}"
               class="btn btn-primary">
                Detail
            </a>

        </div>

    </div>

</div>

@endforeach

</div>

@endsection