<div class="card mb-3">
    <img src="{{url('/image/617b5fde2af7f.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Daftar Obat - Obatan</h5>
        <p class="card-text">Daftar Obat Tersedia</p>

        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No Produksi</th>
                    <th class="col">Foto</th>
                    <th scope="col">Nama Obat</th>
                    <th scope="col">Exp</th>
                    <th scope="col">Operations</th>

                </tr>
            </thead>
            <tbody>
                @foreach($obats as $obat)
                <tr>
                    <td>{{ $obat->noproduksi }}</td>
                    <td><img src="{{ url('/image/'.$obat->foto.'') }}" alt="bukti" width="200px"></td>
                    <td>{{ $obat->namaobat }}</td>
                    <td>{{ $obat->umur }}</td>
                    <td>

                        <a href="{{ url('/edit/'.$obat->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                        <a href="{{ url('/destroy/'.$obat->id) }}" class="btn btn-sm btn-warning">Delete</a>

                    </td>


                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>