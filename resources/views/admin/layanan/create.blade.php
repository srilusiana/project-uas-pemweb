<x-layout>
    <x-slot name="page_name">Halaman Layanan / Create</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('dashboard/layanan/store') }}" method="post"> 
            @csrf
            <div class="form-group row">
                <label for="kode" class="col-sm-4 col-form-label">kode Layanan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="kode" name="kode"
                        placeholder="Masukkan Kode Layanan">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Layanan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" name="nama"
                        placeholder="Masukkan Nama Layanan">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi" class="col-sm-4 col-form-label">Deskripsi</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                        placeholder="Masukkan Deskripsi">
                </div>
            </div>
            <div class="form-group row">
                <label for="total_biaya" class="col-sm-4 col-form-label">Total Biaya</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="total_biaya" name="total_biaya"
                        placeholder="Masukkan Total Biaya">
                </div>
            </div>
            <div class="form-group row">
                <label for="rating" class="col-sm-4 col-form-label">Rating</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="rating" name="rating"
                        placeholder="Masukkan Rating">
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