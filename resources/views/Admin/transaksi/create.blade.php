<div class="row p-2">

    <div class="col-md-6">
        <div class="card">
            <div class="card-body">

                <div class="row mt-1">
                    <div class="col-md-4">
                        <label for="">Kode Produk</label>
                    </div>
                    <div class="col-md-8">
                        <form method="GET">
                            <div class="d-flex">
                                <select name="produk_id" class="form-control" id="">
                                    <option value="">--{{ isset($p_detail) ? $p_detail->name : 'Nama Produk' }}--</option>
                                    @foreach ($produk as $item)
                                        <option value="{{ $item->id }}">{{ $item->id.' - '. $item->name }}</option>
                                    @endforeach
                                </select>
                                <button type="submit"class="btn btn-info">Pilih</button>
                            </div>
                        </form>
                    </div>
                </div>


                <form action="/admin/transaksi/detail/create" method="POST">
                    @csrf

                    <input type="hidden" name="transaksi_id" value="{{ Request::segment(3) }}">
                    <input type="hidden" name="produk_id" value="{{ isset($p_detail) ? $p_detail->id : ''}}">
                    <input type="hidden" name="produk_name" value="{{ isset($p_detail) ? $p_detail->name : '' }}">
                    <input type="hidden" name="subtotal" value="{{ $subtotal }}">

                    <div class="row mt-1">
                        <div class="col-md-4">
                            <label   label for="">Nama Produk</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" value="{{ isset($p_detail) ? $p_detail->name : '' }}" class="form-control" disabled name="nama_produk">
                        </div>
                    </div>
                
                    <div class="row mt-1">
                        <div class="col-md-4">
                            <label for="">Harga Satuan</label>
                        </div>
                        <div class="col-md-8">
                            <input type="text" value="{{ isset($p_detail) ? $p_detail->harga : '' }}" class="form-control" disabled name="harga_satuan">
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-md-4">
                            <label for="">QTY</label>
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex">
                                <a href="?produk_id={{ request('produk_id') }}&act=min&qty={{ $qty }}" class="btn" style="background-color: #C8A2C8; border-color: #C8A2C8;">
                                    <i class="fas fa-minus"></i>
                                </a>
                                <input type="number" value="{{ $qty }}" class="form-control" name="qty">
                                <a href="?produk_id={{ request('produk_id') }}&act=plus&qty={{ $qty }}" class="btn" style="background-color: #C8A2C8; border-color: #C8A2C8;">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                

                    <div class="row mt-1">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-8">
                            <h5 class="fw-bold">Subtotal : Rp. {{ $subtotal }}</h5>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-8">
                            <a href="/admin/transaksi" class="btn btn-info"><i class="fas fa-arrow-left"></i>Kembali</a>
                            <button type="submit" class="btn btn-primary">Tambah<i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Subtotal</th>
                        <th>#</th>
                    </tr>

                    @foreach ($transaksi_detail as $item)
                        
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->produk_name }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->subtotal }}</td>
                        <td>
                            <a href=""><i class="fas fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>

                <a href="" class="btn btn-info"><i class="fas fa-file"></i> Pending </a>
                <a href="" class="btn btn-success"><i class="fas fa-check"></i> Selesai </a>
            </div>
        </div>
    </div>

</div>

<div class="row-p-2">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                
                <form action="" method="GET">
                    <div class="form-group">
                        <label for="">Total</label>
                        <input type="number" value="{{ $transaksi->total }}" name="total" class="form-control" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Bayar</label>
                        <input type="number" name="bayar" value="{{ request('bayar') }}" class="form-control" id="">
                    </div>

                    <button class="btn btn-block" style="background-color: #C8A2C8; border-color: #C8A2C8;"> Hitung </button>

                </form>

                <hr>

                <div class="form-group">
                    <label for="">Kembali</label>
                    <input type="number" value="{{ $kembali }}" disabled name="kembali" class="form-control" id="">
                </div>

            </div>
        </div>
    </div>
</div>