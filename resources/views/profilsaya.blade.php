<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/profil.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @media(max-width:768px) {
            .flex-container {
                flex-direction: column;
            }

            .fulwidth {
                width: 100%;
            }

            .fulheight {
                height: 100%;
            }
        }
    </style>
    <title>Gallery Visio</title>
</head>

<body>


    <nav class="fixed top-0 z-20 w-full bg-white shadow-md">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Gallery Visio</span>
          </a>
          <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
            <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
              <li>
                <a href="/index2" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">Home</a>
              </li>
              <li>
                <a href="/like" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">like</a>
              </li>
              <li>
                <input type="text" class="px-16 border py-1 rounded-full" placeholder="Search ...">
              </li>  
              <li>
              <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="relative mt-2 inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400" type="button">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z"/>
                </svg>
                
                </button>
                
                <!-- Dropdown menu -->
                <div id="dropdownNotification" class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700" aria-labelledby="dropdownNotificationButton">
                  <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
                      Notifikasi
                  </div>
                  <div class="divide-y divide-gray-100 dark:divide-gray-700">
                    <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                      <div class="flex-shrink-0">
                        <img class="rounded-full w-11 h-11" src="/assets/bg_02.png" alt="Jese image">
                      </div>
                      <div class="w-full ps-3">
                          <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey, what's up? All set for the presentation?"</div>
                          <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                      </div>
                    </a>
                  <a href="#" class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                    <div class="inline-flex items-center ">
                      <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                        <path d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                      </svg>
                        View all
                    </div>
                  </a>
                </div>  
              </li>     
              <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:me-0" type="button">
                <span class="sr-only">Open user menu</span>
                @foreach($name as $nama)
                <img class="w-8 h-8 me-2 rounded-full" src="{{ asset('foto_profile/' . $nama->foto_profile) }}" alt="user photo">
                Profile
                <svg class="w-2.5 h-2.5 ms-3 mr-60" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
                @endforeach
                </button>
                <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                      <li>
                        <a href="/updateprofil" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ubah Profil</a>
                      </li>
                      <li>
                        <a href="/ubahpass" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Ubah Password Akun</a>
                      </li>
                    </ul>
                    <div class="py-2">
                      <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Logout</a>
                    </div>
                </div>  
            </ul>
          </div>
        </div>
      </nav>

    <section class="mt-36">
        <div class="flex flex-col items-center max-w-screen-md px-2 mx-auto mt-4">
         @foreach($name as $nama)
            <div>
                <img src="{{ asset('foto_profile/' . $nama->foto_profile) }}" alt="" class="w-28 h-28 rounded-full">
            </div> 
            <a href="profil.html">
                <h3 class="text-xl font-semibold">
                {{ $nama->nama_lengkap }}
                </h3>
            </a>
            <small class="text-xs ">{{ $nama->bio }}</small>
                <div class="flex-wrap">
                <button type="button" class="text-white mt-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  <a href="/upload">Upload Foto +</a>
               </button>
                <button type="button" class="text-white mt-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                   <a href="/buatalbum">Buat Album +</a>
                </button>
                </div>
                @endforeach
        </div>
    </section>
    <section class="ml-28 mt-5">
      <h4 class="text-xl font-semibold">Album</h4>
      </section>
        <section class="">
            <div class="max-w-screen-xl ml-28 mx-auto">
                <div class="flex flex-wrap items-center flex-container">
                @foreach($album as $post)
                    <div class="flex mt-2 bg-white">
                        <div class="flex flex-col px-2">
                            <a href="/album/{{ $post->id }}">
                                <div class="w-[363px] h-[192px] mt-5 bg-bgcolor2 overflow-hidden">
                                    <img src="/img/images.jpg" alt=""
                                        class="w-full transition duration-500 ease-in-out hover:scale-105">
                                </div>
                            </a>
                            <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                                <div>
                                    <div class="flex flex-col">
                                        <div>
                                        {{ $post->nama_album }}
                                        </div>
                                        <div class="text-abuabu">
                                        {{ $post->deskripsi }}
                                        </div>
                                    </div>
                                </div>
                                <div>
                                  <a href="/deleteAlbum/{{$post->id}}"><button class="bg-red-600 text-white rounded-md px-2 py-1"><span class="bi bi-trash"></span></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
      <section class="ml-28 mt-5">
      <h4 class="text-xl font-semibold">Foto</h4>
      </section>
        <section class="">
            <div class="max-w-screen-xl ml-28 mx-auto">
                <div class="flex flex-wrap items-center flex-container">
                @foreach($posts as $post)
                    <div class="flex mt-2 bg-white">
                        <div class="flex flex-col px-2">
                            <a href="/detail/{{ $post->id }}">
                                <div class="w-[363px] h-[192px] mt-5 bg-bgcolor2 overflow-hidden">
                                    <img src="{{ asset('foto/' . $post->lokasi_foto) }}" alt=""
                                        class="w-full transition duration-500 ease-in-out hover:scale-105">
                                </div>
                            </a>
                            <div class="flex flex-wrap items-center justify-between px-2 mt-2">
                                <div>
                                    <div class="flex flex-col">
                                        <div>
                                        {{ $post->judul_foto }}
                                        </div>
                                        <div class="text-abuabu">
                                        {{ $post->deskripsi }}
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <span class="bi bi-chat-left-text"></span>
                                    <small>14</small>
                                    <span class="bi bi-heart"></span>
                                    <a href="/editpostingan/{{$post->id}}"><button class="bg-blue-600 text-white rounded-md px-2 py-1"><span class="bi bi-pencil-fill"></span></button></a>
                                    <a href="/deleteFoto/{{$post->id}}"><button type="submit" class="bg-red-600 text-white rounded-md px-2 py-1"><span class="bi bi-trash"></span></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                </div>
            </div>
        </section>
    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="/js/flowbite.min.js"></script>
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