@use(App\Models\User)
<x-layout>
    <x-slot name="page_name">Halaman Layanan</x-slot>
    <x-slot name="page_content">
        @if (session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ (session('pesan')) }}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @auth
        @if (Auth::user()->role == User::ROLE_ADMIN )
        <a href="{{ url('dashboard/layanan/create') }}" class="btn btn-primary mb-3">+ Tambah Layanan</a>
        @endif
        @endauth
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Kode Layanan</th>
                <th>Nama Layanan</th>
                <th>Deskripsi</th>
                <th>Total Biaya</th>
                <th>Rating</th>
                <th>Aksi</th>
            </tr>
            @foreach ($layanans as $layanan)
            <tr>
                <td>{{ $layanan->kode }}</td>
                <td>{{ $layanan->nama }}</td>
                <td>{{ $layanan->deskripsi }}</td>
                <td>{{ $layanan->total_biaya }}</td>
                <td>{{ $layanan->rating }}</td>
                <td>
                    @auth
                    @if (Auth::user()->role == User::ROLE_ADMIN )
                        <a href="{{ url('dashboard/layanan/show', $layanan->id) }}" class="btn btn-primary btn-sm"><i class="far fa-eye"></i> Lihat</a> |
                        <a href="{{ url('dashboard/layanan/edit', $layanan->id) }}" class="btn btn-warning btn-sm"><i class="far fa-edit"></i> Edit</a> |
                        <form class="forms-sample d-inline" action="{{ url('dashboard/layanan/destroy', $layanan->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin menghapus data {{ $layanan->nama }}?')"><i class="far fa-trash-alt"></i> Hapus</button>
                        </form>
                    @endif
                    @endauth
                </td>
            </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>