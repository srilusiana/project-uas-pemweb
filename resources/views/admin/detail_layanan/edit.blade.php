<x-layout>
    <x-slot name="page_name">Halaman Detail Layanan / Edit</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('dashboard/detail_layanan/update', $detail_layanan->id) }}" method="post"> 
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="pekerjaan" class="col-sm-4 col-form-label">Pekerjaan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"
                        placeholder="Masukkan Pekerjaan Layanan" value="{{ $detail_layanan->pekerjaan }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="biaya" class="col-sm-4 col-form-label">Biaya</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="biaya" name="biaya"
                        placeholder="Masukkan Biaya Layanan" value="{{ $detail_layanan->biaya }}">
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