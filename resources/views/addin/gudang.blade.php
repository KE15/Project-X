@extends('layouts.main')

@section('dashboard')
<div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Gudang</h5>

              <!-- Horizontal Form -->
              <form>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Gudang</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText">
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
                            <th scope="col">ID Gudang</th>
                            <th scope="col">Nama Gudang</th>
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