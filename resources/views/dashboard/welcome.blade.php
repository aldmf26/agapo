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
                                    <a href="#" data-target="#add-po" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i> PO</a>
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
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Nama Barang</label>
                                    <input type="text" name="nm_barang" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label for="">Qty</label>
                                    <input type="number" name="qty" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label for="">Harga</label>
                                    <input type="text" name="harga" class="form-control">
                                </div>        
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Tujuan</label>
                                    <input type="text" name="tujuan" class="form-control">
                                </div>
                            </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                          <button type="submit" class="btn btn-costume">Edit/Save</button>
                     </div>
                </div>
            </div>
        </div>



            
@endsection