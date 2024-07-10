@extends('layouts.main')

@section('dashboard')
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Pembelian</h5>

              <!-- Horizontal Form -->
              <form>

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tipe ID</label>
                    <div class="col-sm-2">
                    <select id="inputState" class="form-select" disabled>
                        <option selected>PB</option>
                    </select>
                    </div>
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-end" >ID</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="inputText" disabled placeholder="1">
                    </div>
                    
                </div>

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tipe PB</label>
                    <div class="col-sm-2">
                    <select id="inputState" class="form-select">
                        <option selected>Dengan PO</option>
                        <option value="1">Tanpa PO</option>
                    </select>
                    </div>
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-end" >ID PO</label>
                    <div class="col-sm-3">
                    <select id="inputState" class="form-select">
                        <option selected>PO001</option>
                        <option value="1">PO002</option>
                    </select>
                    </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Jenis Produk</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Pilih jenis Produk</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>Pilih nama</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Harga</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Total</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText" disabled>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Keterangan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText">
                  </div>
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="delete" class="btn btn-danger">Delete</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>

          <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Data Tables</h5>
                    
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID Pembelian</th>
                            <th scope="col">Tipe PB</th>
                            <th scope="col">ID PO</th>
                            <th scope="col">Jenis Produk</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>

@endsection