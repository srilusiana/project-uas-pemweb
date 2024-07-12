<x-layout>
    <x-slot name="page_name">Halaman Montir</x-slot>
    <x-slot name="page_content">
        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ (session('pesan')) }}</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <a href="{{ url('dashboard/montir/create') }}" class="btn btn-primary mb-3">Tambah Montir</a>
            <table class="table table-bordered">
                <thead>
                    <tr class="table-success">
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Tanggal Lahir</th>
                        <th>Tempat Lahir</th>
                        <th>Keahlian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($montirs as $montir)
                    <tr>
                        <td>{{ $montir->nomor }}</td>
                        <td>{{ $montir->nama }}</td>
                        <td>{{ $montir->gender }}</td>
                        <td>{{ $montir->tgl_lahir }}</td>
                        <td>{{ $montir->tmp_lahir }}</td>
                        <td>{{ $montir->keahlian }}</td>
                        <td>
                            <a href="{{ url('dashboard/montir/show', $montir->id) }}" class="btn btn-primary btn-sm"><i class="far fa-eye"></i> Lihat</a> |
                            <a href="{{ url('dashboard/montir/edit', $montir->id) }}" class="btn btn-warning btn-sm"><i class="far fa-edit"></i> Edit</a> |
                            <form class="forms-sample d-inline" action="{{ url('dashboard/montir/destroy', $montir->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin menghapus data {{ $montir->nama }}?')"><i class="far fa-trash-alt"></i> Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </x-slot>
</x-layout>