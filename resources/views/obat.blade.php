<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>OBAT</title>
</head>

<body>

    @include('navbar')

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Obat - Obatan</h1>
        </div>
    </div>

    @if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("listobat")
                </section>
            </div>
        </div>
    </div>
    @elseif($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("listobat")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="{{url('/image/obat-brochifar-1-768x512.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Masukan Data Obat Baru</h5>
                        <form action="{{ url('/store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>No Produksi</label>
                                <input name="noproduksi" type="text" class="form-control" placeholder="Masukan Nomor Produksi">
                            </div>

                            <div class="form-group">
                                <label>Foto</label>
                                <input name="foto" type="file" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nama Obat</label>
                                <input name="namaobat" type="text" class="form-control" placeholder="Masukan Nama Obat">
                            </div>
                            <div class="form-group">
                                <label>Exp</label>
                                <input name="exp" type="text" class="form-control" placeholder="Tahun Exp Obat">
                            </div>
                            <button type="submit" class="btn btn-info" value="Save">Submit</button>
                            <button type="reset" class="btn btn-warning" value="Reset">Reset</button>

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
    @elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("listobat")
            </section>
            <section class="col"></section>
        </div>
    </div>
    @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("listobat")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="{{url('/image/10790.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Data Update Obat</h5>
                        <form action="{{ url('/update/'.$obat->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>No Produksi</label>
                                <input value="{{ $obat->noproduksi }}" name="noproduksi" type="text" class="form-control" placeholder=" No Produksi ">
                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <input name="foto" type="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Nama Obat</label>
                                <input value="{{ $obat->namaobat }}" name="namaobat" type="text" class="form-control" placeholder=" Nama Obat">
                            </div>
                            <div class="form-group">
                                <label>Exp</label>
                                <input value="{{ $obat->exp }}" name="exp" type="text" class="form-control" placeholder=" Exp ">
                            </div>
                            <button type="submit" class="btn btn-info" value="Save">Submit</button>
                            <button type="reset" class="btn btn-warning" value="Reset">Reset</button>

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
    @endif

    <footer></footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>