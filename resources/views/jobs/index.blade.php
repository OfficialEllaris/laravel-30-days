<x-layout>

    <x-slot:heading>Explore Job Listings...</x-slot:heading>

    <a href="/jobs/create" class="mb-4 border border-dark border-dashed btn bg-dark-subtle rounded-3">
        <i class="bi-folder-plus me-2"></i>Create Listing
    </a>

    <div class="row g-4 mb-5">

        @foreach ($jobs as $job)
            <div class="col-md-3">

                <div class="alert alert-secondary border-0 border-start border-3 border-dark rounded-0 mb-0">

                    <h1 class="fs-6 text-truncate text-uppercase fw-normal">{{ $job->title }}</h1>

                    <div class="d-flex mb-2">

                        <div class="badge text-bg-secondary rounded-1 me-2">
                            {{ $job->salary }}
                        </div>

                        <div class="badge text-bg-secondary rounded-1 me-2">
                            <i class="bi-geo-alt me-1"></i>{{ $job->location }}
                        </div>

                    </div>

                    <h1 class="fs-6 text-truncate fw-light mb-2">
                        <i class="bi-buildings me-1"></i>{{ $job->employer->name }}
                    </h1>

                    <a href="/jobs/{{ $job->id }}" class="btn btn-dark rounded-3 w-100">
                        View Job Details
                    </a>

                </div>

            </div>
        @endforeach

        {{ $jobs->links() }}

    </div>

</x-layout>
