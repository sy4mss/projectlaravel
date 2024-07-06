@extends('layouts.main')

@section('container')
    <div class="jumbotron text-center">
        <h1 class="display-4">Welcome to My Portfolio</h1>
        <p class="lead">Showcasing my projects and skills.</p>
        <hr class="my-4">
        <p>I am a 5th-semester student of Informatics Engineering at Pamulang University. I have a deep interest in software development and general information technology. During my studies, I have learned various fundamental and advanced concepts in programming, such as web and mobile application development using languages like C++, PHP (using Laravel framework), and Python (using tkinter and customtkinter).</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <img src="img/py.JPEG" class="card-img-top" alt="Project 1">
                <div class="card-body">
                    <h5 class="card-title">Python Desktop Application</h5>
                    <p class="card-text">A desktop application to store, search, and manage contacts. This application allows users to add, edit, delete, and view contact details.</p>
                    <a href="#" class="btn btn-primary">View Project</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="img/c.jpeg" class="card-img-top" alt="Project 2">
                <div class="card-body">
                    <h5 class="card-title">CLI Contact Management Application</h5>
                    <p class="card-text">A CLI application to store, search, and manage contacts. This application allows users to add, edit, delete, and view contact details.</p>
                    <a href="#" class="btn btn-primary">View Project</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="img/git.png" class="card-img-top" alt="Project 3">
                <div class="card-body">
                    <h5 class="card-title">Git Version Control System</h5>
                    <p class="card-text">Git is a distributed version control system designed to track changes in source code during software development. It facilitates collaboration among developers, helps manage different versions of code, and supports efficient workflow management.</p>
                    <a href="#" class="btn btn-primary">View Project</a>
                </div>
            </div>
        </div>
    </div>
@endsection
