@extends('layouts.admin')

@section('main')
<div class="content-wrapper" style="min-height: 695.8px;">
    <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Festivals and Celebrations</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Festivals and Celebrations</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Festivals and Celebrations List</h3>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addFestivalModal">
                        Add Content
                    </button>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped projects display dataTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Title</th>
                                    <th>Images</th>
                                    <th>Category Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="table">
                                @foreach($festivals as $festival)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $festival->title }}</td>
                                        <td>
                                            <!-- Button to Open the Modal -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#imgModal{{ $festival->id }}">
                                                View Images
                                            </button>
                        
                                            <!-- The Modal -->
                                            <div class="modal" id="imgModal{{ $festival->id }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                        
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">{{ $festival->title }}</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                        
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <img src="{{ asset('storage/festivals/' . $festival->image) }}" class="img-fluid" alt="{{ $festival->title }}">
                                                        </div>
                        
                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $festival->category }}</td>
                                        <td>
                                            <form action="{{ route('admin.festivals.delete', $festival->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>    
                                @endforeach                           
                            </tbody>
                        </table>                        
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="modal fade" id="addFestivalModal" tabindex="-1" aria-labelledby="addFestivalModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="addFestivalModalLabel">Add Festival</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form method="post" action="{{ route('admin.festivals.add') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                <label for="category">Category Type</label>
                <select class="form-control" id="category_type" name="category">
                    <option value="malay">Malay</option>
                    <option value="chinese">Chinese</option>
                    <option value="indian">Indian</option>
                </select>
                </div>
                <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/src/js/pages/data-table.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>

@endsection