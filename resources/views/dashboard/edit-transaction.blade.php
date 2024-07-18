<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" /> --}}

    @vite('resources/css/app.css')
</head>

<body>
    <div class="w-full py-10 px-10 flex flex-col justify-center gap-4">
        <h1 class="text-3xl font-bold font-[Poppins]">Edit Mobil</h1>

        @foreach ($cars as $index => $car)
            <form class="flex flex-col gap-4" action="{{ route('car-edit-creation', $car->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="flex flex-col gap-2">
                    <p>Nama Mobil</p>
                    <label class="input input-bordered flex items-center gap-2">
                        <input value="{{ $car->name }}" type="text" class="grow" name="name"
                            placeholder="Nama" />
                    </label>
                </div>
                <div class="flex flex-col gap-2">
                    <p>Merk Mobil</p>
                    <label class="input input-bordered flex items-center gap-2">
                        <input value="{{ $car->brand }}" type="text" name="brand" class="grow"
                            placeholder="Merk" />
                    </label>
                </div>
                <div class="flex flex-col gap-2">
                    <p>Type Mobil</p>
                    <label class="input input-bordered flex items-center gap-2">
                        <input value="{{ $car->type }}" type="text" name="type" class="grow"
                            placeholder="Type" />
                    </label>
                </div>
                <div class="flex flex-col gap-2">
                    <p>Warna Mobil</p>
                    <label class="input input-bordered flex items-center gap-2">
                        <input value="{{ $car->color }}" type="text" name="color" class="grow"
                            placeholder="Warna" />
                    </label>
                </div>
                <div class="flex flex-col gap-2">
                    <p>Nomor Polisi</p>
                    <label class="input input-bordered flex items-center gap-2">
                        <input value="{{ $car->plat }}" type="text" name="plat" class="grow"
                            placeholder="Nomor Polisi" />
                    </label>
                </div>
                <button class="btn btn-success text-white" type="submit">Submit</button>
            </form>
        @endforeach
    </div>

</body>

</html>
