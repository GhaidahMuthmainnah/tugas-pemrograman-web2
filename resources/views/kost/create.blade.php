<x-app>
    <x-slot:title>{{ $title }}</x-slot>

        <form action="{{ route('kost.store') }}"
            method="POST">

            @csrf

            <div class="mb-3">
                <label>Nama Kost</label>
                <input type="text"
                    name="nama_kost"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label>Pemilik</label>
                <input type="text"
                    name="pemilik"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat"
                    class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Harga Per Bulan</label>
                <input type="number"
                    name="harga_per_bulan"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label>Jumlah Kamar</label>
                <input type="number"
                    name="jumlah_kamar"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label>Status</label>

                <select name="status"
                    class="form-select">
                    <option value="Kosong">Kosong</option>
                    <option value="Penuh">Penuh</option>
                </select>
            </div>

            <button class="btn btn-danger">
                Simpan
            </button>

        </form>

</x-app>