@extends('layouts.app')
@section('content')
<div class="container mt-5">
  <h2 class="mb-4">Data Produk</h2>

  <!-- Button tambah -->
  <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalForm">
    <i class="bi bi-plus-circle"></i> Tambah Data
  </button>

  <!-- Table -->
  <table class="table table-bordered table-striped align-middle">
    <thead class="table-dark text-center">
      <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-center">1</td>
        <td>Laptop</td>
        <td>Rp 7.000.000</td>
        <td class="text-center">
          <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalForm">
            <i class="bi bi-pencil-square"></i>
          </button>
          <button class="btn btn-danger btn-sm">
            <i class="bi bi-trash"></i>
          </button>
        </td>
      </tr>
      <tr>
        <td class="text-center">2</td>
        <td>Mouse</td>
        <td>Rp 150.000</td>
        <td class="text-center">
          <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalForm">
            <i class="bi bi-pencil-square"></i>
          </button>
          <button class="btn btn-danger btn-sm">
            <i class="bi bi-trash"></i>
          </button>
        </td>
      </tr>
      <tr>
        <td class="text-center">3</td>
        <td>Keyboard</td>
        <td>Rp 300.000</td>
        <td class="text-center">
          <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalForm">
            <i class="bi bi-pencil-square"></i>
          </button>
          <button class="btn btn-danger btn-sm">
            <i class="bi bi-trash"></i>
          </button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<!-- Modal Form -->
<div class="modal fade" id="modalForm" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
          <i class="bi bi-box-seam"></i> Form Produk
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" class="form-control" placeholder="Masukkan nama produk">
          </div>
          <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" class="form-control" placeholder="Masukkan harga">
          </div>
          <button type="button" class="btn btn-success">
            <i class="bi bi-save"></i> Simpan
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
