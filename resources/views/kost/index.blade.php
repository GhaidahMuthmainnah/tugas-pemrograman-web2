<x-app>
    <x-slot:title>
        {{ $title }}
        </x-slot>

        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kost</th>
                    <th>Pemilik</th>
                    <th>Harga/Bulan</th>
                    <th>Jumlah Kamar</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($kosts as $kost)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kost->nama_kost }}</td>
                    <td>{{ $kost->pemilik }}</td>
                    <td>Rp {{ number_format($kost->harga_per_bulan) }}</td>
                    <td>{{ $kost->jumlah_kamar }}</td>
                    <td>{{ $kost->status }}</td>
                    <td>-</td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">
                        Data Kost Belum Ada
                    </td>
                </tr>
                @endforelse

            </tbody>

        </table>

</x-app>