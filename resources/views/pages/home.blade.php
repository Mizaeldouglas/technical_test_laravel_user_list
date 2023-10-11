<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List | Home</title>
    @vite('resources/css/app.css')
    <style>
        .container {
            max-width: 100%;
            padding: 0 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #f0f0f0;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .loading-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            z-index: 9999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loading-spinner {
            border: 6px solid #f3f3f3;
            border-top: 6px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        @media (max-width: 768px) {
            .loading-spinner {
                width: 30px;
                height: 30px;
                border-width: 3px;
            }
        }

        @media (min-width: 640px) {
            .container {
                max-width: 640px;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 768px;
            }
        }

        @media (min-width: 1024px) {
            .container {
                max-width: 1024px;
            }
        }
    </style>
</head>
<body>
<h1 class="flex justify-center text-2xl text-blue-500 pt-14">Users List</h1>
<div class="loading-container" id="loadingContainer">
    <div class="loading-spinner"></div>
</div>
<div class="container mx-auto px-1 sm:px-2 lg:px-8">

    <div class="py-8">
        <div class="-my-2 sm:-mx-6 lg:-mx-8">
            <div
                class="align-middle inline-block min-w-full shadow overflow-hidden bg-white shadow-dashboard rounded-lg">
                <table class="min-w-full">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                            Name
                        </th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                            Age
                        </th>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 text-blue-500 tracking-wider">
                            Email
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @if ($users && count($users) > 0)
                        @foreach ($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                    <div class="text-sm leading-5 text-blue-900">{{ $user['name'] }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{ $user['age'] }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5">{{ $user['email'] }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3"
                                class="px-6 py-4 whitespace-no-wrap text-blue-900 border-b border-gray-500 text-sm leading-5">
                                No users found.
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
                <div class="my-4 flex justify-between pl-3 pr-3">
                    <div>
                        <span class="text-gray-700">Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of {{ $users->total() }} results</span>
                    </div>
                    <div>
                        <ul class="flex">
                            @for ($i = 1; $i <= $users->lastPage(); $i++)
                                <li>
                                    <a href="{{ route('users.index', ['page' => $i]) }}"
                                       class="px-3 py-1 mx-1 rounded-lg border border-gray-300  hover:bg-blue-400 hover:text-black transition duration-300 ease-in-out @if ($users->currentPage() == $i) bg-blue-500 text-white @endif">{{ $i }}</a>
                                </li>
                            @endfor
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    function showLoading() {
        document.getElementById('loadingContainer').style.display = 'flex';
    }

    function hideLoading() {
        document.getElementById('loadingContainer').style.display = 'none';
    }

    //  Mostrar o "loading" antes de fazer a solicitação da API
    showLoading();

    // Esconder o "loading" quando os dados da API forem carregados
    setTimeout(function () {
        hideLoading();
    }, 3000); // espera de 3 segundos
</script>
</html>
