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
                        <a href="{{ route('admin.roles.create') }}">
                            <button
                                class="p-2 pl-5 pr-5 bg-green-500 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300">New
                                Role</button>
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
        <section class="w-full p-4">
            <div class="flex flex-col mt-8">

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

                <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                    <div
                        class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                        {{-- TABLE --}}
                        <table class="min-w-full">
                            {{-- HEAD --}}
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-xl text-gray-500 uppercase tracking-wider">
                                        ROLE</th>
                                    <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                </tr>
                            </thead>
                            {{-- END HEAD --}}

                            <tbody class="bg-white">
                                @foreach ($roles as $role)
                                {{-- ONE ROW --}}
                                <tr>
                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">
                                            <div class="ml-4">
                                                <div class="leading-5 font-bold text-lg text-gray-900">{{
                                                    $role->name
                                                    }}</div>
                                            </div>
                                        </div>
                    </div>
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                        <div class="flex items-center">
                            <div class="ml-4">
                                <a href="{{ route('admin.roles.edit', $role->id) }}">
                                    <button type="submit"
                                        class="p-2 mb-2 pl-5 pr-5 bg-transparent border-2 border-green-500 text-green-500 text-lg rounded-lg hover:bg-green-500 hover:text-gray-100 focus:border-4 focus:border-green-300">Edit</button>
                                </a>
                                <form action="{{ route('admin.roles.destroy', $role->id) }}" method='POST'
                                    onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit"
                                        class="p-2 pl-5 pr-5 bg-transparent border-2 border-red-500 text-red-500 text-lg rounded-lg hover:bg-red-500 hover:text-gray-100 focus:border-4 focus:border-red-300">Delete</button>
                                </form>
                            </div>
                        </div>
                </div>
                </td>
                </tr>
                {{-- END ONE ROW --}}
                @endforeach
                </tbody>
                </table>
                {{-- END TABLE --}}
            </div>
        </section>
        {{-- END MAIN --}}
    </main>
</body>

</html>