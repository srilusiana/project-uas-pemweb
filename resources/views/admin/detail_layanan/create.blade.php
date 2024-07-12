<x-layout>
    <x-slot name="page_name">Halaman Detail Layanan / Create</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('dashboard/layanan/store') }}" method="post"> 
            @csrf
            <div class="form-group row">
                <label for="pekerjaan" class="col-sm-4 col-form-label">Pekerjaan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                        placeholder="Masukkan Pekerjaan">
                </div>
            </div>
            <div class="form-group row">
                <label for="biaya" class="col-sm-4 col-form-label">Biaya</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="biaya" name="biaya"
                        placeholder="Masukkan Biaya">
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