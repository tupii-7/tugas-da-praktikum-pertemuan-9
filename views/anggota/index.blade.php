<!DOCTYPE html>
<html>
<head>
    <title>Daftar Anggota Perpustakaan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Daftar Anggota Perpustakaan</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Kode Anggota</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach($anggota_list as $index => $anggota)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $anggota['kode'] }}</td>
                <td>{{ $anggota['nama'] }}</td>
                <td>{{ $anggota['email'] }}</td>
                <td>{{ $anggota['status'] }}</td>
                <td>
                    <a href="/anggota/{{ $anggota['id'] }}"
                       class="btn btn-primary btn-sm">
                        Detail
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

</body>
</html>