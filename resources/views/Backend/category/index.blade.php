@extends('layouts.backendLayout')
@section('title', 'Manage Category')
@section('backendContent')

    <div class="container">
        @if (session('success'))
            <div class="alert alert-primary" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-4">
                <div class="card shadow">
                    <div class="card-header">{{ $editedCategory ? 'Update' : 'Add' }} Category</div>
                    <div class="card-body">
                        <form class="form" action="{{ route('category.store', $editedCategory?->id) }}" method='POST'>
                            @csrf
                            <div class="form-group my-2">
                                <label for="title">Category Title <b class="text-danger">*</b></label>
                                <input value="{{ $editedCategory->title ?? null }}" type="text" name="title"
                                    class="form-control" id="title">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            @if ($editedCategory)
                                <div class="form-group my-2">
                                    <div class="form-check form-switch mb-2">
                                        <input value="{{ true }}" name="status" class="form-check-input"
                                            type="checkbox" id="flexSwitchCheckChecked"
                                            {{ $editedCategory?->status ? 'checked' : '' }} />
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Status</label>
                                    </div>
                                </div>
                            @endif

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card shadow">
                    <div class="card-header">All Categories</div>
                    <div class="card-body">
                        <table class="table table-striped table-responsive table-bordered ">
                            <thead>
                                <tr class="text-center">
                                    <th>SL</th>
                                    <th class="text-start">Category Name</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($categories as $index=>$category)
                                    <tr class="text-center">
                                        <td>{{ ++$index }} </td>
                                        <td class="text-start">{{ str()->headline($category->title) }}</td>
                                        <td>
                                            {!! general_status($category->status) !!}
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('category.index', $category->id) }}"
                                                    class="btn btn-sm btn-primary"><i class='bx bx-pencil'></i></i></a>
                                                <a href="{{route('category.delete', $category->id )}}" class="btn btn-sm btn-danger btnDelete"><i
                                                        class='bx bx-trash-alt'></i></i></a>

                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No Category Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.btnDelete').on('click', function(e) {
                    e.preventDefault();
                    let url = $(this).attr('href');
                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: "btn btn-success",
                            cancelButton: "btn btn-danger"
                        },
                        buttonsStyling: false
                    });
                    swalWithBootstrapButtons.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "No, cancel!",
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                           window.location.href = url;
                        } else if (
                            /* Read more about handling dismissals below */
                            result.dismiss === Swal.DismissReason.cancel
                        ) {
                            swalWithBootstrapButtons.fire({
                                title: "Cancelled",
                                text: "Your imaginary file is safe :)",
                                icon: "error"
                            });
                        }
                    });
                })
            })
        </script>
    @endpush



@endsection
