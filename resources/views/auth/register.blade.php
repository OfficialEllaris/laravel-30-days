<x-layout>

    <x-slot:heading>Account Onboarding...</x-slot:heading>

    <div class="my-4">

        <form action="/register" method="POST">

            @csrf

            <div class="card card-body mb-4 rounded-4 border border-dashed">

                <div class="row g-3">

                    <div class="col-md-4">
                        <label for="first_name" class="form-label fw-semibold fst-italic">First Name:</label>
                        <input type="text" name="first_name" id="first_name"
                            class="form-control border border-dashed border-secondary rounded-3" required
                            placeholder="John">
                        @error('first_name')
                            <div class="text-danger mt-2 fst-italic small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="last_name" class="form-label fw-semibold fst-italic">Last Name:</label>
                        <input type="text" name="last_name" id="last_name"
                            class="form-control border border-dashed border-secondary rounded-3" required
                            placeholder="Doe">
                        @error('last_name')
                            <div class="text-danger mt-2 fst-italic small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="email_address" class="form-label fw-semibold fst-italic">Email Address:</label>
                        <input type="email" name="email_address" id="email_address"
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

                    <div class="col-md-6">
                        <label for="password_confirmation" class="form-label fw-semibold fst-italic">Confirm
                            Password:</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="form-control border border-dashed border-secondary rounded-3" required
                            placeholder="************">
                        @error('password_confirmation')
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
                    <i class="bi-person-plus me-1"></i>Create Account
                </button>

            </div>

        </form>

    </div>

</x-layout>
