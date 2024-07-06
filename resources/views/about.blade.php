@extends('layouts.main')

@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="display-4 text-center">About Me</h1>
            <p class="lead text-center">Discover more about my journey, passions, and experiences.</p>
            <hr class="my-4">
            
            <div class="text-center mb-4">
                <img src="img/syams (2).jpg" class="rounded-circle" alt="Profile Picture">
            </div>

            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title">Biography</h2>
                    <p class="card-text">
                        Hello! I am a 5th-semester student of Informatics Engineering at Pamulang University. I have a deep interest in software development and general information technology. During my studies, I have learned various fundamental and advanced concepts in programming, such as web and mobile application development using languages like C++, PHP (using the Laravel framework), and Python (using tkinter and customtkinter).

                        In my spare time, I enjoy learning new things related to technology and developing personal projects. I believe continuous learning is crucial for self-improvement. My goal is to continuously sharpen my software development skills and contribute to the technology industry in the future.
                    </p>
                    <p class="card-text">
                        In my spare time, I enjoy [Your Hobbies/Interests]. I believe in continuous learning and always strive to stay updated with the latest trends and advancements in my field. My goal is to [Your Personal/Professional Goals].
                    </p>
                </div>
            </div>

            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title">Fun Facts</h2>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-globe-americas"></i>I am currently working at SMK Islam Ruhama as an Operator and Administration Staff.</li>
                        <li><i class="fas fa-music"></i>I enjoy playing the guitar and gaming in my free time..</li>
                        <li><i class="fas fa-camera"></i>Creating applications is my biggest dream and passion.</li>
                        <li><i class="fas fa-book"></i>I love reading and have a collection of books.</li>
                    </ul>
                </div>
            </div>

            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title">Connect with Me</h2>
                    <div class="d-flex justify-content-center">
                        <a href="https://www.instagram.com/symss_/" class="btn btn-outline-primary mx-2"><i class="fab fa-Instagram"></i>Instagram</a>
                        <a href="https://wa.me/6281384867923/" class="btn btn-outline-info mx-2"><i class="fab fa-twitter"></i> Whatsapp</a>
                        <a href="https://github.com/sy4mss" class="btn btn-outline-dark mx-2"><i class="fab fa-github"></i> Github</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection
