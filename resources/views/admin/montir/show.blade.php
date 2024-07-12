<x-layout>
    <x-slot name="page_name">Halaman Montir / Detail </x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Nomor</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tanggal Lahir</th>
                <th>Tempat Lahir</th>
                <th>Keahlian</th>
            </tr>
            <tr>
                <td>{{ $montir->nomor }}</td>
                <td>{{ $montir->nama }}</td>
                <td>{{ $montir->gender }}</td>
                <td>{{ $montir->tgl_lahir }}</td>
                <td>{{ $montir->tmp_lahir }}</td>
                <td>{{ $montir->keahlian }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>