<x-layout>
    <x-slot name="page_name">Halaman Montir / Create </x-slot>
    <x-slot name="page_content">
        <form action="{{ url('dashboard/montir/store') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="nomor" class="col-sm-4 col-form-label">Nomor</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nomor" name="nomor"
                        placeholder="Masukkan Nomor">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Montir</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama"
                        placeholder="Masukkan Nama Montir">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-4 col-form-label">Gender</label>
                <div class="col-sm-8">
                    <select class="form-control" id="gender" name="gender">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                        placeholder="Masukkan Tanggal lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir"
                        placeholder="Masukkan Tempat lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="keahlian" class="col-sm-4 col-form-label">Keahlian</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="keahlian" name="keahlian"
                        placeholder="Masukkan Keahlian">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </x-slot>
</x-layout>