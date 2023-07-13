@extends('layouts.user')

@section('main')
<div class="content-wrapper" style="min-height: 695.8px;">
    <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Reviews</h4>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Reviews List</h3>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addReviewModal">
                        Add Review
                    </button>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped projects display dataTable">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Review</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="table">
                                @forelse($reviews as $review)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{!! $review->review !!}</td>
                                        <td>{{ $review->created_at->format('Y-m-d') }}</td>
                                        <td>
                                            <form action="{{ route('user.reviews.delete', $review->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>    
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No data available</td>
                                    </tr>
                                @endforelse                         
                            </tbody>                                                        
                        </table>                                                
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="modal fade" id="addReviewModal" tabindex="-1" aria-labelledby="addReviewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addReviewModalLabel">Add Review</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{ route('user.reviews.add') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="review">Review</label>
                            <textarea class="form-control" id="editor" name="review" required></textarea>
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
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor' );
</script>

@endsection