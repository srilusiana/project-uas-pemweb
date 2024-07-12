@use(App\Models\User)
<x-layout>
    <x-slot name="page_name">Halaman Detail Layanan</x-slot>
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
        <a href="{{ url('dashboard/detail_layanan/create') }}" class="btn btn-primary mb-3">+ Tambah Detail Layanan</a>
        @endif
        @endauth
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Pekerjaan</th>
                <th>Biaya</th>
                <th>Aksi</th>
            </tr>
            @foreach ($detail_layanans as $detail_layanan)
            <tr>
                <td>{{ $detail_layanan->pekerjaan }}</td>
                <td>{{ $detail_layanan->biaya }}</td>
                <td>
                    @auth
                    @if (Auth::user()->role == User::ROLE_ADMIN )
                        <a href="{{ url('dashboard/detail_layanan/show', $detail_layanan->id) }}" class="btn btn-primary btn-sm"><i class="far fa-eye"></i> Lihat</a> |
                        <a href="{{ url('dashboard/detail_layanan/edit', $detail_layanan->id) }}" class="btn btn-warning btn-sm"><i class="far fa-edit"></i> Edit</a> |
                        <form class="forms-sample d-inline" action="{{ url('dashboard/detail_layanan/destroy', $detail_layanan->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin menghapus data {{ $detail_layanan->nama }}?')"><i class="far fa-trash-alt"></i> Hapus</button>
                        </form>
                    @endif
                    @endauth
                </td>
            </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>