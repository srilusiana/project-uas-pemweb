<x-layout>
    <x-slot name="page_name">Halaman Layanan / Detail</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>Kode Layanan</th>
                <th>Nama Layanan</th>
                <th>Deskripsi</th>
                <th>Jenis Layanan</th>
                <th>Total Biaya</th>
                <th>Rating</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $layanan->kode }}</td>
                <td>{{ $layanan->nama }}</td>
                <td>{{ $layanan->deskripsi }}</td>
                <td>{{ $layanan->Jenis_layanan_id }}</td>
                <td>{{ $layanan->total_biaya }}</td>
                <td>{{ $layanan->rating }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>