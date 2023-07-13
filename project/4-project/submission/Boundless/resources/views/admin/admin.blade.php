@extends('layouts.admin')

@section('main')
<!-- Content Header (Page header) -->
<div class="content-wrapper" style="min-height: 695.8px;">
  <div class="container-full">
    <!-- Content Header (Page header) -->	  
    <div class="content-header">
      <div class="d-flex align-items-center">
        <div class="me-auto">
          <h4 class="page-title">Dashboard</h4>
          <div class="d-inline-block align-items-center">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">User List</h3>
          </div>
          <div class="card-body p-0">
            <table id="myTable" class="table table-striped projects display dataTable">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          No.
                      </th>
                      <th style="width: 20%">
                          Title
                      </th>
                      <th style="width: 5%">
                          Description
                      </th>
                      <th style="width: 5%">
                          Image
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody id="table">
              @foreach($data['culture'] as $i => $culture)
                <tr>
                  <td>{{ $i+1 }}</td>
                  <td>{{ $culture->title }}</td>
                  <td>{{ $culture->description }}</td>
                  <td>{{ $culture->image }}</td>
                  <td><a class="btn btn-danger btn-sm" href="#" onclick="deleteMaterial('{{ $culture->id }}')">
                    <i class="ti-trash">
                    </i>
                    Delete
                </a></td>
                </tr>
              @foreach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </section>
    <!-- /.content -->
  </div>
</div>

<script src="{{ asset('assets/src/js/pages/data-table.js') }}"></script>

@endsection
