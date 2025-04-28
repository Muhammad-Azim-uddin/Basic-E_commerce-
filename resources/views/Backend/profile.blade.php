@extends('layouts.backendLayout')
@section('title', 'Dashboard')
@section('backendContent')



    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="row g-0 align-items-center">

                        <div class="col-md-4 text-center p-4">
                            <img src="{{ getProfileImage() }}" alt="Profile Image" class="img-fluid rounded-circle"
                                style="max-width: 100px;">
                        </div>

                        <div class="col-md-8">
                            <div class="card-body">
                                <div class="editProfile text-end">
                                    <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#editProfileModal">
                                        Edit Profile
                                    </a>
                                </div>

                                <h5 class="card-title text-primary text-uppercase">{{ $user->name }}</h5>
                                <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
                                <p class="card-text"><small class="text-muted">Member Since:
                                        {{ $user->created_at->format('M d, Y') }}</small></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <form action="{{ route('dashboard.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="modal-header">
                        <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <!-- Profile Image Preview -->
                        <div class="mb-3 text-center">
                           <img src="{{getProfileImage()}}" style="max-width: 120px;border-radius:50%;" alt="">

                        </div>

                        <!-- Profile Image Upload -->
                        <div class="mb-3">
                            <label for="profile_image" class="form-label">Change Profile Image</label>
                            <input class="form-control" type="file" name="profile_image" id="profile_image">
                        </div>

                        <!-- Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input class="form-control" type="text" name="name" id="name"
                                value="{{ $user->name }}" required>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" type="email" name="email" id="email"
                                value="{{ $user->email }}" required>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
@push('profile-preview')
<script>
    document.getElementById('profile_image').addEventListener('change', function (e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (event) {
                document.querySelector('#editProfileModal img').src = event.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
</script>
    
@endpush

@endsection
