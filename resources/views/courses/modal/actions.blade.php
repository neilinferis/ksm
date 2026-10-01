{{-- Delete Company --}}
<div class="modal fade" id="delete-course-{{ $course->id }}">
    <div class="modal-dialog modal-dialog-centered text-center">
        <div class="modal-content">
            <div class="modal-header pb-0 pt-1 border border-danger text-warning">
                <h4 class="card-title mx-auto">confirm course delete</h4>
            </div>
            <div class="modal-body border border-danger rounded-bottom text-warning">
                <h1 class="display-1 text-warning"><i class="fa-solid fa-triangle-exclamation"></i></h1>
                <p>Are you sure you want to delete " <span class="text-info">{{ $course->name }}</span> "?</p>

                <form action="{{ route('course.destroy', $course->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    
                    <button class="btn btn-danger btn-sm me-5">Delete</button>
                </form>
                <a href="#" class="btn btn-outline-success btn-sm"
                    data-bs-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</div>

{{-- Edit Company --}}
<div class="modal fade" id="edit-course-{{ $course->id }}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header pb-0 pt-1 text-info">
                <h4 class="card-title mx-auto">edit course</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('course.update', $course->id) }}" method="post">
                    @csrf
                    @method('PATCH')

                    <label for="course-code" class="form-label">Course Code</label>
                    <input type="text" name="course_code" id="course-code" class="form-control mb-3" value="{{ $course->course_code}}">
                    @error('course_code')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror

                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control mb-3" value="{{ $course->name}}"">
                    @error('name')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror

                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control mb-3">{{ $course->description}}</textarea>
                    @error('description')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror

                    <label for="units" class="form-label">Units</label>
                    <input type="number" name="units" id="units" class="form-control mb-5" value="{{ $course->units }}">
                    @error('units')
                        <p class="text-danger small">{{ $message }}</p>
                    @enderror

                    <div class="text-end">
                        <a href="#" class="btn btn-outline-warning me-3 w-25" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-success w-25">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
