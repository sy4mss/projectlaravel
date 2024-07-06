@extends('layouts.main')

@section('container')
<div class="container mt-5">
    <h1 class="display-4 text-center">Contact Me</h1>
    <p class="lead text-center">I'd love to hear from you! Please fill out the form below or reach out via the contact details provided.</p>
    <hr class="my-4">

    <div class="row mt-4">
        <!-- Contact Form -->
        <div class="col-md-8">
            <h2 class="mb-4">Send a Message</h2>
            <form action="/contact" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>

        <!-- Contact Details -->
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Contact Details</h5>
                    <p class="card-text"><strong>Email:</strong> syamsagungn@uhamka.ac.id</p>
                    <p class="card-text"><strong>Phone:</strong> +62 81384867923</p>
                    <p class="card-text"><strong>Address:</strong>Jl. Pembangunan No.35, Serua, Kec. Ciputat, Kota Tangerang Selatan, Banten 15414</p>
                </div>
            </div>

            <!-- Map -->
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Location</h5>
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345090565!2d144.95373631568126!3d-37.816279742021716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf0727cb2a8506b9c!2sFlinders+Street+Station!5e0!3m2!1sen!2sau!4v1511349380625" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

