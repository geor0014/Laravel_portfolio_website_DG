<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    {{-- NAV --}}
    <header class="w-full bg-gray-800 p-4 flex justify-between items-center">
        <nav class="flex items-center">
            <img class="w-7 h-7"
                src="https://www.solarwinds.com/-/media/solarwinds/swdcv2/licensed-products/service-desk/integrations/sd-integrations-logo-jira.ashx?rev=701fbaa7f8ac4ae08e0406c8984c43e7&hash=75D4F04DE99B88DE7B2C4193F0616F1F" />
            <div class="text-white text-xs hidden sm:block ml-2">
                <a href="{{ route('admin.index') }}"
                    class="bg-gray-900 hover:bg-gray-700 p-2 rounded cursor-pointer">Dashboard</a>
                {{-- <a href="#" class="bg-gray-900 hover:bg-gray-700 p-2 rounded cursor-pointer ml-1">Projects</a>
                <a href="#" class="bg-gray-900 hover:bg-gray-700 p-2 rounded cursor-pointer ml-1">Issues</a>
                <a href="#" class="bg-gray-900 hover:bg-gray-700 p-2 rounded cursor-pointer ml-1">Boards</a> --}}
            </div>
        </nav>
    </header>
    {{-- END NAV --}}


    <main class="flex w-full h-screen">
        {{-- SIDEBAR --}}
        <aside class="w-80 h-screen bg-gray shadow-md w-fulll hidden sm:block">
            <div class="flex flex-col justify-between h-screen p-4 bg-gray-800">
                <div class="text-sm">
                    <div class="bg-gray-900 text-white p-5 rounded cursor-pointer"><a
                            href="{{ route('admin.roles.index') }}">Roles </a> </div>
                    <div
                        class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">
                        <a href="{{ route('admin.permissions.index') }}">Permissions</a>
                    </div>

                    <div class=" text-white p-2 rounded mt-2 cursor-pointer">
                        <a href="{{ route('admin.permissions.index') }}">
                            <button
                                class="p-2 pl-5 pr-5 bg-green-500 text-gray-100 text-lg rounded-lg focus:border-4 border-green-500">Permissions
                                Index</button>
                        </a>
                    </div>
                </div>

                <div class="flex p-3 text-white bg-red-500 rounded cursor-pointer text-center text-sm">
                    <button class="rounded inline-flex items-center">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fillRule="evenodd"
                                d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                clipRule="evenodd" />
                        </svg>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-white font-bold">Logout</button>
                        </form>
                    </button>
                </div>
            </div>
        </aside>
        {{-- END SIDEBAR --}}

        {{-- MAIN --}}
        <section class="w-full">
            {{-- FORM --}}
            <div class=" min-h-screen bg-slate-200 py-6 flex flex-col justify-center relative overflow-hidden sm:py-12">
                <span
                    class="border text-4xl text-yellow-800 px-6 pt-10 pb-8 bg-white w-1/2 max-w-md mx-auto rounded-t-md sm:px-10">Update
                    Permission</span>
                <div
                    class="border relative px-4 pt-7 pb-8 bg-white shadow-xl w-1/2 max-w-md mx-auto sm:px-10 rounded-b-md">
                    <form action="{{ route('admin.permissions.update', $permission) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="name" class="block">Permission name</label>
                        <input value="{{ $permission->name }}" type="text" name="name"
                            class="border w-full h-10 px-3 mb-5 rounded-md">

                        <div class="">

                            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <button
                            class="mt-5 bg-green-500 hover:bg-blue-700 shadow-xl text-white uppercase text-sm font-semibold px-14 py-3 rounded">Update</button>
                    </form>
                </div>
            </div>
            {{-- END FORM --}}
        </section>
        {{-- END MAIN --}}
    </main>
</body>

</html>