<x-layout>
    <x-slot name="page_name">Halaman Detail Layanan / Detail</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-success">
                <th>No</th>
                <th>Pekerjaan</th>
                <th>Biaya</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{ $detail_layanan->pekerjaan }}</td>
                <td>{{ $detail_layanan->biaya }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>