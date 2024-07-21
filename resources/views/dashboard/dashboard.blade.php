<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    @vite('resources/css/app.css')

</head>

<body>

    @include('components.navbar')
    <div class="w-full mt-32 px-10 flex flex-col justify-center gap-4">

        <a href="/add-car"
            class="font-[Poppins] font-medium border border-solid border-blue-500 text-blue-500 hover:bg-blue-700 px-2 py-1 rounded-md hover:text-white duration-300 w-40 text-center">Add</a>
        <div class="border border-solid border-gray-400 w-[80%] rounded-md overflow-x-auto">
            <table class="w-full">
                <thead class="p-2 bg-gray-400">
                    <tr>
                        <th class="p-2">No</th>
                        <th class="p-2">Nama</th>
                        <th class="p-2">Brand</th>
                        <th class="p-2">Type</th>
                        <th class="p-2">Color</th>
                        <th class="p-2">Plat</th>
                        <th class="p-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $index => $transaction)
                        <tr>
                            <td class="p-2">
                                <p class="text-center">{{ $index + 1 }}</p>
                            </td>
                            <td class="p-2">
                                <p class="text-center">{{ $transaction->name }}</p>
                            </td>
                            <td class="p-2">
                                <p class="text-center">{{ $transaction->brand }}</p>
                            </td>
                            <td class="p-2">
                                <p class="text-center">{{ $transaction->type }}</p>
                            </td>
                            <td class="p-2">
                                <p class="text-center">{{ $transaction->color }}</p>
                            </td>
                            <td class="p-2">
                                <p class="text-center">{{ $transaction->plat }}
                                </p>
                            </td>
                            <td class="p-2">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('car-edit', $transaction->id) }}">
                                        <button
                                            class="bg-yellow-500 hover:bg-yellow-700 px-2 py-1 rounded-md text-white duration-300">Edit</button>
                                    </a>
                                    <button data-id="{{ $transaction->id }}" data-transaction="{{ $transaction->name }}"
                                        class="bg-red-500 hover:bg-red-700 px-2 py-1 rounded-md text-white duration-300 delete">
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{ $transactions->links() }}

    </div>
    @include('sweetalert::alert')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const swalDel = (classBtn, dataAttr, url) => {
            $(classBtn).click(function() {
                const id = $(this).attr('data-id');
                const attributeData = $(this).attr(dataAttr);
                Swal.fire({
                    title: 'Anda Yakin?',
                    text: `Anda Akan Menghapus Data ${attributeData}`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Hapus",
                    cancelButtonText: "Batal",
                    reverseButtons: true,
                    customClass: {
                        confirmButton: 'confirm-button-class',
                        cancelButton: 'cancel-button-class',
                        title: 'title-class',
                        icon: 'icon-class',
                        text: 'text-class'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = `/${url}/${id}`;
                        // Swal.fire(
                        //     'Deleted!',
                        //     'Data Berhasil Dihapus!',
                        //     'success'
                        // )
                    }
                })

            })
        }
        swalDel('.delete', 'data-transaction', 'car');
    </script>
</body>

</html>
