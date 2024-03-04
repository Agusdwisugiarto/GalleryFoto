<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Visio</title>
    <link rel="stylesheet" href="css/bootstrap.min2.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--
    
TemplateMo 556 Catalog-Z

https://templatemo.com/tm-556-catalog-z

-->
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                Gallery Visio
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="/like">like</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="/profil">profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="/upload">upload</a>
                </li>
                <li class="bell">
                    <span class="bi bi-bell-fill"></span>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg">
        <form action="/search" method="GET" class="d-flex tm-search-form">
            <input class="form-control tm-search-input" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success tm-search-btn" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>
    </div>

    <div class="container-fluid tm-container-content tm-mt-60">
        <div class="row mb-4">
            <h2 class="col-6 tm-text-primary">
                Latest Photos
            </h2>
        </div>
    <div class="row tm-mb-90 tm-gallery">
    @foreach($posts as $post)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <a href="/detail/{{ $post->id }}">
                    <img src="{{ asset('foto/' . $post->lokasi_foto) }}" width="315" height="200">
                </a>                 
            <div class="d-flex justify-content-between tm-text-black">
            <span class="tm-text-black">{{ $post->judul_foto }}</span>
            </div>
            <div class="d-flex justify-content-between tm-text-black">
                <span class="tm-text-black">{{ $post->deskripsi }}</span>
                <form action="/likefoto" method="POST">
                    @csrf
                    <input type="hidden" name="foto_id" value="{{ $post->id }}">
                    <div>
                    <button type="submit" class="tombolSembunyi">
                        <i class="bi bi-heart"></i>
                    </button>
                   <a href="/detail/{{ $post->id }}"><i class="bi bi-chat-left-text"></i></a>
                    </div>
                </form>
            </div>
        </div>
        @endforeach

    </div>
    </div> <!-- container-fluid, tm-container-content -->
    <script src="js/plugins.js"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });
    </script>
       <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
		// Set the options that I want
toastr.options = {
  "closeButton": true,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "6000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
$(document).ready(function onDocumentReady() {  
	@if(session()->has('success'))
    toastr.success("{{session('success')}}");
   @endif
   @if(session()->has('error'))
    toastr.error("{{session('error')}}");
   @endif
});
</script>
</body>
</html>