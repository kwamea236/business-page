@extends('_layouts.main')

@section('body')
<div class="p-5 bg-dark" style="">
    <div class="container text-white mt-5">
      <h1 class="mx-auto my-5 fs-1 fw-bold">
        <a href="/" class="text-white text-decoration-none">duplexData.dev</a>
      </h1>
      <div class="fw-bold fs-5 my-5 font-monospace">
        We help our client build awesome tools using
        <div>
          <a href="https://laravel.com" target="_blank" class="text-white"
            >Laravel</a
          >,
          <a href="https://getbootstrap.com" target="_blank" class="text-white"
            >Bootstrap</a
          >
          and
          <a href="https://laravel.com" target="_blank" class="text-white"
            >Alpine.js</a
          >
          +
          <a href="https://laravel.com" class="text-white">Livewire.</a>
        </div>
      </div>
    </div>
    <div class="container my-5">
      <button class="btn px-5 py-2 rounded bg-white fw-bold"
        ><a href="/" class="text-decoration-none text-dark">GET IN TOUCH</a
        ></button
      >
    </div>
  
    <div class="text-white text-center fs-1 mt-5">
      <i class="bi bi-arrow-down"></i>
    </div>
</div>

<div class="p-5">
    <div>
      <h1>What to know about us</h1>
    </div>
  
    <div class="mb-4">
      <p>
        DuplexData is a team of software developers in Ghana focused on the
        laravel ecosystem. We work with start ups and small businesses. we're
        passionate about developing scalable solutions that deliver hight quality
        experiences to end users. We also focus on maitainability and long term
        relationship with clients. We take pride in the quality of our work and do
        everything we can do to ensure that is reflected in what we deliver to our
        clients as we help them grow.
      </p>
    </div>
    <div class="">
      <h1 class="mb-4">Tools we use</h1>
      <h5 class="mb-4">
        We love using tools that are powerful, secure and has a vibrant community
        whiles enabling us to be extremely productive.
      </h5>
  
      <div>
        <div class="mb-4">
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png"
            alt="laravel icon"
            style="width: 50px;"
          />
          <h1>Laravel</h1>
          <p>
            Laravel is modern PHP framework made for building powerful web
            application backends and APIs
          </p>
        </div>
        <div class="mb-4">
          <img
            src="https://laravel-livewire.com/img/underwater_jelly.svg"
            alt="laravel icon"
            style="width: 50px;"
          />
          <h1>Livewire</h1>
          <p>
            Livewire is an extension of laravel that makes building dynamic
            interfaces simple, without leaving the comfort of laravel
          </p>
        </div>
      </div>
      <div>
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/2560px-Bootstrap_logo.svg.png"
          alt="laravel icon"
          style="width: 50px;"
        />
        <h1>Bootstrap</h1>
        <p>
          Bootstrap is a CSS framework providing a fast, maintainable set of tools
          to implement designs.
        </p>
      </div>
    </div>

    <footer class="text-center">
        <p>&copy; {{ date('Y')}} </p>
    </footer>
</div>  
@endsection
