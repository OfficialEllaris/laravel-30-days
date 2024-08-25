<x-layout>

    <x-slot:heading>Modify Listing: <strong>{{ $job->title }}</strong>.</x-slot:heading>

    <div class="my-4">


        <form action="/jobs/{{ $job->id }}" method="post">

            <div class="d-flex">

                @csrf
                @method('DELETE')

                <button
                    class="ms-auto mb-4 border border-danger text-danger border-dashed btn bg-danger-subtle rounded-3">
                    <i class="bi-trash me-2"></i>Delete Listing
                </button>

            </div>

        </form>

        <form action="/jobs/{{ $job->id }}" method="POST">

            @csrf
            @method('PATCH')

            <div class="card card-body mb-4 rounded-4 border border-dashed">

                <div class="row g-3">

                    <div class="col-md-4">
                        <label for="title" class="form-label fw-semibold fst-italic">Title:</label>
                        <input type="text" name="title" id="title"
                            class="form-control border border-dashed border-secondary rounded-3"
                            value="{{ $job->title }}" required placeholder="Logging Supervisor">
                        @error('title')
                            <div class="text-danger mt-2 fst-italic small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="salary" class="form-label fw-semibold fst-italic">Salary</label>
                        <input type="text" name="salary" id="salary"
                            class="form-control border border-dashed border-secondary rounded-3"
                            value="{{ $job->salary }}" required placeholder="$58,497 USD">
                        @error('salary')
                            <div class="text-danger mt-2 fst-italic small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="location" class="form-label fw-semibold fst-italic">Location</label>
                        <input type="text" name="location" id="location"
                            class="form-control border border-dashed border-secondary rounded-3"
                            value="{{ $job->location }}" required placeholder="Remote / Canada">
                        @error('location')
                            <div class="text-danger mt-2 fst-italic small">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

            </div>

            <div class="d-flex">

                <a href="/jobs/{{ $job->id }}"
                    class="btn rounded-3 btn-outline-secondary border border-secondary border-dashed me-auto">
                    <i class="bi-arrow-counterclockwise me-1"></i>Cancel
                </a>

                <button class="btn rounded-3 btn-dark">
                    <i class="bi-floppy me-1"></i>Save Changes
                </button>

            </div>

        </form>

    </div>

</x-layout>
