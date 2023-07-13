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
                    <th>
                        Title
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Image
                    </th>
                    <th>
                    </th>
                </tr>
            </thead>
            <tbody id="table">
              @foreach($data['culture'] as $i => $culture)
                <tr>
                  <td>{{ $i+1 }}</td>
                  <td>{{ $culture->title }}</td>
                  <td>{!! $culture->description !!}</td>
                  <td>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#imgModal{{ $culture->id }}">
                        View Images
                    </button>

                    <!-- The Modal -->
                    <div class="modal" id="imgModal{{ $culture->id }}">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">{{ $culture->title }}</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <img src="{{ asset('storage/cultures/' . $culture->image) }}" class="img-fluid" alt="{{ $culture->title }}">
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                  </td>
                  <td><a class="btn btn-danger btn-sm" href="#" onclick="deleteCourse('{{ $culture->id }}')">
                        <i class="ti-trash">
                        </i>
                        Delete
                      </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div id="uploadModal" class="modal" class="modal fade" role="dialog">
          <div class="modal-dialog">
              <!-- modal content-->
              <div class="modal-content">
                  <form action="/admin/culture/submit" method="post" role="form" enctype="multipart/form-data">
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

  function deleteCourse(id){     
      Swal.fire({
    title: "Are you sure?",
    text: "This will be permanent",
    showCancelButton: true,
    confirmButtonText: "Yes, delete it!"
  }).then(function(res){
    
    if (res.isConfirmed){
              $.ajax({
                  headers: {'X-CSRF-TOKEN':  $('meta[name="csrf-token"]').attr('content')},
                  url      : "{{ url('/admin/culture/delete') }}",
                  method   : 'DELETE',
                  data 	 : {id:id},
                  error:function(err){
                      alert("Error");
                      console.log(err);
                  },
                  success  : function(data){
                      window.location.reload();
                      alert("success");
                  }
              });
          }
      });
  }


</script>

@endsection
