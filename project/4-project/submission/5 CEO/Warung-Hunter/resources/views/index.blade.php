<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">    
    <style>
        .card-img-top {
            max-height: 300px;
            object-fit: cover;
        }

        body {
            background-image: linear-gradient(to bottom, #ffefba, #ffffff);
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <title>Warung Hunter</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container">
          <a class="navbar-brand fw-bold" href="#">Warung Hunter</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end" id="navbarNavRight">
            <ul class="navbar-nav">
                @if(!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Hi {{ auth()->user()->name }}
                        </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('signout') }}">Sign Out</a></li>
                    </ul>
                </li>
              @endif
            </ul>
          </div>
        </div>
      </nav>

    <div class="container mt-4">
        <div class="row">

            @foreach($data as $item)
                <div class="col-md-6">
                    <div class="card mb-4">

                        @php
                            $photoUrl = "https://placehold.co/600x300";

                            if ($item->photo) {
                                $photoUrl = Storage::url($item->photo);
                            }
                        @endphp

                        <img src="{{ $photoUrl }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $item->name }}</h5>
                            <p class="card-text">
                                {{ Str::limit($item->description, 100) }}
                                <br />
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modal" data-restaurant-id="{{ $item->id }}" data-restaurant-name="{{ $item->name }}" data-restaurant-description="{{ $item->description }}" data-restaurant-rating="{{ $item->comments->avg('rating') }}">Read More</button>
                            </p>
                            @if ($item->comments)
                                <p class="card-text">Rating: {{ $item->comments->avg('rating') }}/5</p>
                            @else
                                <p class="card-text">No review yet.</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Restaurant Details Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="modalDescription"></p>
                    <h6 id="modalRating"></h6>
                    <h6>Comments:</h6>
                    <ul id="commentsList">
                        
                    </ul>
                    @if(Auth::check())
                        <div class="mb-3">
                            <label for="rating" class="form-label">Your Rating</label>
                            <select class="form-select" id="rating">
                                <option value="5">5 Stars</option>
                                <option value="4">4 Stars</option>
                                <option value="3">3 Stars</option>
                                <option value="2">2 Stars</option>
                                <option value="1">1 Star</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="comment" class="form-label">Your Comment</label>
                            <textarea class="form-control" id="comment" rows="3"></textarea>
                        </div>
                    @endif
                </div>
                <div class="modal-footer">
                    @if(Auth::check())
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-warning" onclick="saveRating()">Save</button>
                    @else
                        Please sign in to your account before you can review and rate this restaurant. Your feedback is valuable to everyone!    
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>

        var selectedRestaurantId;

        // Function to populate the modal with restaurant details
        function populateModal(restaurantId, restaurantName, restaurantDescription, restaurantRating, restaurantComments) {
            document.getElementById('modalLabel').textContent = restaurantName + ' Details';
            document.getElementById('modalDescription').textContent = restaurantDescription;
            document.getElementById('modalRating').textContent = 'Rating: ' + restaurantRating + '/5';
            document.getElementById('rating').value = ''; // Reset rating select
            document.getElementById('comment').value = ''; // Reset comment textarea

            // Clear previous comments
            var commentsList = document.getElementById('commentsList');
            commentsList.innerHTML = '';

            var xhr = new XMLHttpRequest();
            xhr.open("GET", "restaurants/" + selectedRestaurantId + "/comments", true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);

                    response.forEach(function(comment) {
                        var li = document.createElement('li');
                        li.textContent = comment.user.name + ': ' + comment.comment + ' (Rating: ' + comment.rating + '/5)';
                        commentsList.appendChild(li);
                    });
                }
            };
            xhr.send();

            // Loop through comments and add them to the comments list
            
        }

        // Function to save the rating
        function saveRating() {
            var rating = document.getElementById('rating').value;
            var comment = document.getElementById('comment').value;
            // Perform any necessary operations with the rating and comment data
            console.log('Rating: ' + rating);
            console.log('Comment: ' + comment);
            
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "restaurants/" + selectedRestaurantId + "/comments", true);
            xhr.setRequestHeader("Content-Type", "application/json");

            var data = {
                comment: comment,
                rating: rating,
                _token: "{{ csrf_token() }}"
            };

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    console.log(response);
                }
            };

            xhr.send(JSON.stringify(data));

            // Close the modal
            var modal = document.getElementById('modal');
            var bootstrapModal = bootstrap.Modal.getInstance(modal);
            bootstrapModal.hide();
        }

        // Event listener for modal show event
        document.getElementById('modal').addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            var restaurantId = button.getAttribute('data-restaurant-id');
            var restaurantName = button.getAttribute('data-restaurant-name');
            var restaurantDescription = button.getAttribute('data-restaurant-description');
            var restaurantRating = button.getAttribute('data-restaurant-rating');
            var restaurantComments = button.getAttribute('data-restaurant-comments');
            selectedRestaurantId = restaurantId;
            populateModal(restaurantId, restaurantName, restaurantDescription, restaurantRating, restaurantComments);
        });


    </script>
</body>

</html>