<x-app>
    <x-slot:title>{{ $title }}</x-slot>

        <form action="{{ route('kost.update', $kost->id) }}"
            method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama Kost</label>
                <input type="text"
                    name="nama_kost"
                    class="form-control"
                    value="{{ $kost->nama_kost }}">
            </div>

            <div class="mb-3">
                <label>Pemilik</label>
                <input type="text"
                    name="pemilik"
                    class="form-control"
                    value="{{ $kost->pemilik }}">
            </div>

            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat"
                    class="form-control">{{ $kost->alamat }}</textarea>
            </div>

            <div class="mb-3">
                <label>Harga Per Bulan</label>
                <input type="number"
                    name="harga_per_bulan"
                    class="form-control"
                    value="{{ $kost->harga_per_bulan }}">
            </div>

            <div class="mb-3">
                <label>Jumlah Kamar</label>
                <input type="number"
                    name="jumlah_kamar"
                    class="form-control"
                    value="{{ $kost->jumlah_kamar }}">
            </div>

            <div class="mb-3">
                <label>Status</label>

                <select name="status"
                    class="form-select">

                    <option value="Kosong"
                        {{ $kost->status == 'Kosong' ? 'selected' : '' }}>
                        Tersedia
                    </option>

                    <option value="Penuh"
                        {{ $kost->status == 'Penuh' ? 'selected' : '' }}>
                        Penuh
                    </option>

                </select>
            </div>

            <button class="btn btn-warning">Update</button>
            <a class="btn btn-info" href="{{ route('kost.index') }}">Cancel</a>

        </form>

</x-app>