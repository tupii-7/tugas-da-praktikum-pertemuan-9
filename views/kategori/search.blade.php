@extends('layouts.app')

@section('content')

<h2>
    Hasil Pencarian:
    <span class="text-danger">
        "{{ $keyword }}"
    </span>
</h2>

@if(count($kategori_list) > 0)

<div class="row">

    @foreach($kategori_list as $kategori)

    <div class="col-md-4 mb-3">

        <div class="card">

            <div class="card-body">

                <h5 class="text-primary">
                    {{ $kategori['nama'] }}
                </h5>

                <p>{{ $kategori['deskripsi'] }}</p>

                <span class="badge bg-success">
                    {{ $kategori['jumlah_buku'] }} Buku
                </span>

            </div>

        </div>

    </div>

    @endforeach

</div>

@else

<div class="alert alert-warning">
    Tidak ada kategori ditemukan.
</div>

@endif

@endsection