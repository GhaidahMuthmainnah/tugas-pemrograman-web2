<x-app>
    <x-slot:title>
        {{ $title }}
        </x-slot>

        <table class="table table-bordered table-striped text-center">

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
                    <td>
                        <a href="{{ route('kost.edit', $kost->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kost.destroy', $kost->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin?')">Hapus</button>
                        </form>
                    </td>
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