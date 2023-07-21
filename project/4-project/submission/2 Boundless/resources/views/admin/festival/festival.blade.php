@extends('layouts.admin')

@section('main')
<!-- Content Header (Page header) -->
<div class="content-wrapper" style="min-height: 695.8px;">
  <div class="container-full">
    <!-- Content Header (Page header) -->	  
    <div class="content-header">
      <div class="d-flex align-items-center">
        <div class="me-auto">
          <h4 class="page-title">Festival And Celebrations</h4>
          <div class="d-inline-block align-items-center">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                <li class="breadcrumb-item" aria-current="page">Dashboard</li>
                <li class="breadcrumb-item active" aria-current="page">Festival And Celebrations</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Main content -->
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Festival And Celebrations</h3>
        </div>
        <div class="card-body">
          <div class="row mb-3 d-flex">
            <div class="col-md-12 mb-3">
              <div class="col-md-4 ml-3">
                </div class="row">
                  <div class="pull-right">
                      <a type="button" class="waves-effect waves-light btn btn-info btn-sm" data-toggle="modal" data-target="#uploadModal">
                          <i class="fa fa-plus"></i> <i class="fa fa-object-group"></i> &nbsp Add
                      </a>
                  </div>
              </div>
          </div>
        </div>
        <div class="card-body p-0">
          <table id="myTable" class="table table-striped projects display dataTable">
            <thead>
                <tr>
                    <th style="width: 1%">
                        No.
                    </th>
                    <th style="width: 20%">
                        Course Name
                    </th>
                    <th style="width: 5%">
                        Course Code
                    </th>
                    <th style="width: 5%">
                        Credit
                    </th>
                    <th style="width: 10%">
                        Program
                    </th>
                    <th style="width: 5%">
                        Semester
                    </th>
                    <th style="width: 20%">
                    </th>
                </tr>
            </thead>
            <tbody id="table">
           
              <tr>
                <td style="width: 1%">
                  
                </td>
                <td style="width: 20%">
                
                </td>
                <td style="width: 5%">
                
                </td>
                <td style="width: 5%">
                
                </td>
                <td>
                
                </td>
                <td>
                 
                </td>
                <td class="project-actions text-right" style="text-align: center;">
                  <a class="btn btn-info btn-sm btn-sm mr-2" href="#" onclick="updateCourse()">
                      <i class="ti-pencil-alt">
                      </i>
                      Edit
                  </a>
                  <a class="btn btn-danger btn-sm" href="#" onclick="deleteCourse()">
                      <i class="ti-trash">
                      </i>
                      Delete
                  </a>
                </td>
              </tr>
      
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div id="uploadModal" class="modal" class="modal fade" role="dialog">
          <div class="modal-dialog">
              <!-- modal content-->
              <div class="modal-content">
                  <form action="/admin/festival/submit" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="modal-header">
                        <div class="">
                            <button class="close waves-effect waves-light btn btn-danger btn-sm pull-right" data-dismiss="modal">
                                &times;
                            </button>
                        </div>
                    </div>
                    <div class="modal-body">
                      <div class="row col-md-12">
                        <div>
                          <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" id="image" name="image" accept="image/*" class="form-control">
                          </div>
                        </div>
                        <div>
                          <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" id="title" class="form-control">
                          </div>
                        </div>
                        <div>
                          <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea id="upforumtxt" class="mt-2" rows="10" cols="80" name="desc" placeholder="Enter ...">
                            </textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                        <div class="form-group pull-right">
                            <input type="submit" name="addtopic" class="form-controlwaves-effect waves-light btn btn-primary btn-sm pull-right" value="submit">
                        </div>
                    </div>
                  </form>
              </div>
          </div>
        </div>

        <div id="uploadModal3" class="modal" class="modal fade" role="dialog">
          <div class="modal-dialog">
              <!-- modal content-->
              <div class="modal-content" id="getModal">
              </div>
          </div>
        </div>
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
</div>

<script src="{{ asset('assets/src/js/pages/data-table.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
<script>
  $(document).ready(function(){

  "use strict";
    ClassicEditor
    .create( document.querySelector( '#upforumtxt' ),{ height: '25em' } )
    .then(newEditor =>{editor = newEditor;})
    .catch( error => { console.log( error );});

  })


</script>

@endsection
