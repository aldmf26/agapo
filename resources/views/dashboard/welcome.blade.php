@extends('template.master')
@section('content')
    <style>
        .bekecil {
            font-size: 18px;
        }

        .modal-lg-max {
            max-width: 1000px;
        }
    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row pt-5 mb-3">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="float-left">
                                    <h5>Data PO</h5>
                                </div>
                                <div class="float-right">
                                    <a href="#" data-target="#add-po" data-toggle="modal" class="btn btn-primary"><i
                                            class="fa fa-plus"></i> PO</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table" id="example1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Qty</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Paku</td>
                                            <td>2</td>
                                            <td>Rp. 10.000</td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <form action="{{ route('save_po') }}" method="post">
        @csrf
            <div class="modal fade" id="add-po" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-costume">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Po</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Tanggal</label>
                                        <input required type="date" name="tgl" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Nama Po</label>
                                        <input required type="text" name="nm_po" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">Tujuan</label>
                                        <input required type="text" name="tujuan" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="">No PO</label>
                                        <input type="text" readonly name="no_po" value="{{ $no_po }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="">Nama Barang</label>
                                        <input required type="text" name="nm_barang[]" class="form-control">
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
                                        <button class="btn btn-success btn-sm" id="plus-barang" type="button"><i
                                                class="fa fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div id="view-plus-barang"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-costume">Edit/Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endsection
    @section('script')
        <script>
            $(document).ready(function() {
                var c = 1
                tambahBarang(c)
                
                function tambahBarang(c) {
                    $("#plus-barang").click(function(e) {
                        c += 1
                        $.ajax({
                            type: "GET",
                            url: "{{ route('plus_barang') }}?c="+c,
                            success: function(r) {
                                $("#view-plus-barang").append(r);
                            }
                        });
                    });

                    $(document).on('click', '.remove-barang', function() {
                        var delete_row = $(this).attr("count");
                        $('#row' + delete_row).remove();
                    })
                }
                
            });
        </script>
    @endsection
