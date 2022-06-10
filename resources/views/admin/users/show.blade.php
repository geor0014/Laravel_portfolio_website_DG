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
                    <div
                        class="bg-gray-900 text-white p-2 rounded mt-2 mb-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">
                        <a href="{{ route('admin.users.index') }}">Users</a>
                    </div>
                    <div class="bg-gray-900 text-white p-2 rounded cursor-pointer"><a
                            href="{{ route('admin.roles.index') }}">Roles </a> </div>
                    <div
                        class="bg-gray-900 text-white p-2 rounded mt-2 cursor-pointer hover:bg-gray-700 hover:text-blue-300">
                        <a href="{{ route('admin.permissions.index') }}">Permissions</a>
                    </div>

                    <div class=" text-white p-2 rounded mt-2 cursor-pointer">
                        <a href="{{ route('admin.users.index') }}">
                            <button
                                class="p-2 pl-5 pr-5 bg-green-500 text-gray-100 text-lg rounded-lg focus:border-4 border-green-500">User
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
            {{-- FLASH MESSAGE --}}
            @if (session('success'))
            <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <div>
                    <span class="font-medium">Success alert!</span> <span class="font-bold"> {{ session('success')
                        }}</span>
                </div>
            </div>
            @endif
            {{-- END FLASH MESSAGE --}}

            {{-- FORM --}}
            <div class=" min-h-screen bg-slate-200 py-6 flex flex-col justify-center relative overflow-hidden sm:py-12">
                <span
                    class="border text-4xl text-yellow-800 px-6 pt-10 pb-8 bg-white w-1/2 max-w-md mx-auto rounded-t-md sm:px-10">{{
                    $user->name }}</span>
                <div
                    class="border relative px-4 pt-7 pb-8 bg-white shadow-xl w-1/2 max-w-md mx-auto sm:px-10 rounded-b-md">
                    {{-- <form action="{{ route('admin.roles.update', $role) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="name" class="block">Role name</label>
                        <input value="{{ $role->name }}" type="text" name="name"
                            class="border w-full h-10 px-3 mb-5 rounded-md">

                        <div class="">

                            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <button
                            class="mt-5 bg-green-500 hover:bg-blue-700 shadow-xl text-white uppercase text-sm font-semibold px-14 py-3 rounded">Update</button>
                    </form> --}}

                    {{-- ROLES --}}
                    <div class="m-4 p-3  bg-gray-200">
                        <h2 class="font-semibold text-2xl">Roles</h2>
                        <div class="p-4 flex flex-col">
                            @if($user->roles)
                            @foreach($user->roles as $role)
                            {{-- REMOVE ROLE --}}
                            <form action="{{ route('admin.users.roles.remove',[$user->id,$role->id]) }}"
                                class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white w-1/3 m-1 rounded-md"
                                onsubmit=" return confirm('Are you sure?')" method="POST">
                                @csrf
                                @method("DELETE")
                                <button class="w-full" type="submit">{{ $role->name }}</button>
                            </form>
                            {{-- END REMOVE ROLE --}}
                            @endforeach
                            @endif
                        </div>
                        <div class="p-2">
                            @csrf
                            {{-- DROPDOWN --}}
                            <form action="{{ route('admin.users.roles', $user) }}" method="POST">
                                @csrf
                                <div class="relative inline-flex">
                                    <select name="role"
                                        class="border border-gray-300  text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                                        <option>Choose a Role</option>
                                        @foreach($roles as $role)
                                        <option value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- END DROPDOWN --}}
                                @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
                                <button type="submit"
                                    class="mt-5 bg-blue-500 hover:bg-blue-700 shadow-xl text-white uppercase text-sm font-semibold px-14 py-3 rounded">Assign</button>
                            </form>
                        </div>
                    </div>
                    {{-- END ROLES --}}
                </div>
            </div>
            {{-- END FORM --}}
        </section>
        {{-- END MAIN --}}
    </main>
</body>

</html>