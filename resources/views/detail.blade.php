<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/detail.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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

        .scrollbar-hidden::-webkit-scrollbar {
            display: none;
        }
    </style>
    <title>Gallery</title>
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
                        <a href="/profil" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile Anda</a>
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

    <section class="mt-48">
        <div class="max-w-screen-md mx-auto">
            <div class="flex flex-wrap px-2 flex-container">
                <div class="w-3/5 max-[480px]:w-full">
                    <div class="flex justify-center overflow-hidden">
                        <img src="{{ asset('foto/'.$detail->lokasi_foto) }}" alt="" class="w-full h-auto max-w-xl px-2">
                    </div>
                    <div class="flex flex-col px-2">
                        <div class="font-semibold">
                        {{$detail->judul_foto}}
                        </div>
                        <div>
                            <small class="text-abuabu">{{$detail->deskripsi}}</small>
                        </div>
                    </div>
                </div>
                <div class="w-2/5  max-[480px]:w-full">
                    <div class="flex flex-wrap items-center justify-between ">
                        <div class="flex flex-row items-center gap-2">
                            @foreach($name as $nama)
                            <div>
                                <img src="{{ asset('foto_profile/' . $nama->foto_profile) }}" class="w-10 h-10 rounded-full" alt="">
                            </div>
                            @endforeach
                            <div class="flex flex-col">
                                <a href="/profillain/{{ $user->id }}" class="text-md">{{$user->nama_lengkap}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[33px]">
                        Komentar
                    </div>
                    <div class="relative flex flex-col overflow-y-auto h-[200px] scrollbar-hidden">
                    @foreach($komen as $nama)
                        <div class="flex mt-4 mr-40">  
                            <div class="w-1/4">
                                <img src="{{ asset('foto_profile/' . $nama->user->foto_profile) }}  " class="w-8 h-8 rounded-full" alt="">
                            </div>
                            <div class="flex flex-col">
                                <a href="/profillain/{{ $user->id }}"><h5 class="text-sm">{{$nama->user->nama_lengkap}}  :</h5></a>
                                <small class="text-sm text-gray-500"></small>
                            </div>
                            <h5 class="text-sm">{{ $nama->isi_komentar}}</h5>
                        </div>
                        @endforeach
                    </div>
                    <form action="/addkomentar" method="post">
                    @csrf
                    <div class="flex gap-2">
                        <div class="w-3/4">
                            <input type="hidden" name="foto_id" value="{{ $detail->id }}" id="" placeholder="Tambahkan Komentar" class="w-full px-2 py-1 rounded-full border-slate-500">
                            <input type="text" name="isi_komen" id="" placeholder="Tambahkan Komentar" class="w-full px-2 py-1 rounded-full border-slate-500">
                        </div>
                        <button type="submit" class="px-4 rounded-full bg-blue-700"><span class="text-white bi bi-send"></span></button>
                    </div>
                    </form>
                </div>
            </div>
    <script src="/node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="/js/flowbite.min.js"></script>
</body>

</html>