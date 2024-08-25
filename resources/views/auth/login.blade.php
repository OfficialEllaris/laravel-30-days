<x-layout>

    <x-slot:heading>Proceed To Login...</x-slot:heading>

    <div class="my-4">

        <form action="/login" method="POST">

            @csrf

            <div class="card card-body mb-4 rounded-4 border border-dashed">

                <div class="row g-3">

                    <div class="col-md-6">
                        <label for="email_address" class="form-label fw-semibold fst-italic">Email Address:</label>
                        <input type="email" name="email_address" id="email_address" value="{{ old('email_address') }}"
                            class="form-control border border-dashed border-secondary rounded-3" required
                            placeholder="john.doe@example.com">
                        @error('email_address')
                            <div class="text-danger mt-2 fst-italic small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="password" class="form-label fw-semibold fst-italic">Password:</label>
                        <input type="password" name="password" id="password"
                            class="form-control border border-dashed border-secondary rounded-3" required
                            placeholder="************">
                        @error('password')
                            <div class="text-danger mt-2 fst-italic small">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

            </div>

            <div class="d-flex">

                <a href="/"
                    class="btn rounded-3 btn-outline-secondary border border-secondary border-dashed me-auto">
                    <i class="bi-arrow-counterclockwise me-1"></i>Cancel
                </a>

                <button class="btn rounded-3 btn-dark">
                    Login<i class="bi-person-bounding-box ms-1"></i>
                </button>

            </div>

        </form>

    </div>

</x-layout>
