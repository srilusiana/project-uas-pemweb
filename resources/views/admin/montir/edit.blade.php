<x-layout>
    <x-slot name="page_name">Halaman Montir / Create </x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('dashboard/montir/update', $montir->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="nomor" class="col-sm-4 col-form-label">Nomor</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nomor" name="nomor"
                        placeholder="Masukkan Nomor" value="{{ $montir->nomor }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Montir</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama"
                        placeholder="Masukkan Nama Montir" value="{{ $montir->nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-4 col-form-label">Gender</label>
                <div class="col-sm-8">
                    <select class="form-control" id="gender" name="gender">
                        <option value="L" {{ $montir->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ $montir->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                        placeholder="Masukkan Tanggal lahir" value="{{ $montir->tgl_lahir }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir"
                        placeholder="Masukkan Tempat lahir" value="{{ $montir->tmp_lahir }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="keahlian" class="col-sm-4 col-form-label">Keahlian</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="keahlian" name="keahlian"
                        placeholder="Masukkan Keahlian" value="{{ $montir->keahlian }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>
    </x-slot>
</x-layout>