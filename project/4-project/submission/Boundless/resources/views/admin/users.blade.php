@extends('layouts.admin')
@section('main')
    <div class="content-wrapper" style="min-height: 695.8px;">
        <div class="container-full">
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h4 class="page-title">Users List</h4>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Users List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">User List</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped projects display dataTable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>User Name</th>
                                        <th>Role</th>
                                    </tr>
                                </thead>
                                <tbody id="table">
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->is_admin == 1 ? 'Admin' : 'User' }}</td>
                                        </tr>    
                                    @endforeach                           
                                </tbody>
                            </table>                                                
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="{{ asset('assets/src/js/pages/data-table.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
@endsection
