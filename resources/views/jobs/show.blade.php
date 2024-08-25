<x-layout>

    <x-slot:heading>Job Details</x-slot:heading>

    <div class="my-4">

        <a href="/jobs" class="mb-4 border border-dark border-dashed btn bg-dark-subtle rounded-3">
            <i class="bi-ui-radios-grid me-2"></i>Explore Listings
        </a>

        <div class="card card-body text-muted p-4 border border-dark border-dashed rounded-4 mb-4">

            <h1 class="text-body-emphasis fw-normal">{{ $job->title }}</h1>

            <p class="col-lg-6 mb-3">
                This job pays around <strong>{{ $job->salary }}</strong> per year and is currently available.
            </p>

            <div class="mb-3">

                <div class="btn btn-sm bg-dark-subtle rounded-3 me-2 mb-3 mb-md-0 border border-dark border-dashed">
                    <strong>Location:</strong> {{ $job->location }}
                </div>

                <div class="btn btn-sm bg-dark-subtle rounded-3 border border-dark border-dashed">
                    <strong>Employer:</strong> {{ $job->employer->name }}
                </div>

            </div>
        </div>

        @can('edit', $job)
            <a href="/jobs/{{ $job->id }}/edit" class="border border-dark border-dashed btn bg-dark-subtle rounded-3">
                <i class="bi-clipboard-data me-2"></i>Manage Listing
            </a>
        @endcan

    </div>

</x-layout>
