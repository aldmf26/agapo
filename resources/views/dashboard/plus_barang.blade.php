<div class="row" id="row{{ $c }}">
    <div class="col-lg-4">
        <div class="form-group">
            <label for="">Nama Barang</label>
            <input type="text" name="nm_barang[]" class="form-control">
        </div>
    </div>
    <div class="col-lg-2">
        <div class="form-group">
            <label for="">Qty</label>
            <input type="number" name="qty[]" class="form-control">
        </div>
    </div>
    <div class="col-lg-2">
        <div class="form-group">
            <label for="">Harga</label>
            <input type="text" name="harga[]" class="form-control">
        </div>
    </div>
    <div class="col-lg-3">
        <div class="form-group">
            <label for="">Keterangan</label>
            <input type="text" name="ket[]" class="form-control">
        </div>
    </div>
    <div class="col-lg-1">
        <div class="form-group">
            <label for="">Aksi</label><br>
            <button class="btn btn-danger btn-sm remove-barang" count="{{$c}}" type="button"><i
                    class="fa fa-minus"></i></button>
        </div>
    </div>
</div>