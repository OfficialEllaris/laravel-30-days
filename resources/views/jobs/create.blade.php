<x-layout>

    <x-slot:heading>Create New Job Listing...</x-slot:heading>

    <div class="my-4">

        <form action="/jobs" method="POST">

            @csrf

            <div class="card card-body mb-4 rounded-4 border border-dashed">

                <div class="row g-3">

                    <div class="col-md-4">
                        <label for="title" class="form-label fw-semibold fst-italic">Title:</label>
                        <input type="text" name="title" id="title"
                            class="form-control border border-dashed border-secondary rounded-3" required
                            placeholder="Logging Supervisor">
                        @error('title')
                            <div class="text-danger mt-2 fst-italic small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="salary" class="form-label fw-semibold fst-italic">Salary:</label>
                        <input type="text" name="salary" id="salary"
                            class="form-control border border-dashed border-secondary rounded-3" required
                            placeholder="$58,497 USD">
                        @error('salary')
                            <div class="text-danger mt-2 fst-italic small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="location" class="form-label fw-semibold fst-italic">Location:</label>
                        <input type="text" name="location" id="location"
                            class="form-control border border-dashed border-secondary rounded-3" required
                            placeholder="Remote / Canada">
                        @error('location')
                            <div class="text-danger mt-2 fst-italic small">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

            </div>

            <div class="d-flex">

                <button type="reset"
                    class="btn rounded-3 btn-outline-secondary border border-secondary border-dashed me-auto">
                    <i class="bi-arrow-counterclockwise me-1"></i>Cancel
                </button>

                <button class="btn rounded-3 btn-dark">
                    <i class="bi-folder-plus me-1"></i>Create Listing
                </button>

            </div>

        </form>

    </div>

</x-layout>
