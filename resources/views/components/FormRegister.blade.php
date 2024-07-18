<div class="bg-[url('../../../public/mobil-img.jpg')] fixed top-0 bottom-0 left-0 right-0 blur-md">

</div>

<div class="w-screen h-screen flex justify-center items-center absolute top-0 left-0 bottom-0 right-0">
    <form class="flex flex-col w-[500px] h-max gap-5 p-2 px-7 rounded-xl bg-blue-300" method="POST"
        action="{{ route('register-creation') }}">
        @csrf
        <h1 class="text-3xl font-bold text-center font-[Poppins]">REGISTER</h1>
        <input type="text" placeholder="name"
            class="border-2 border-[rgba(0,0,0,0)] border-solid px-2 py-1.5 rounded-md outline-none focus:border-2 focus:border-solid focus:border-blue-600 duration-200"
            name="name">
        <input type="email" placeholder="email"
            class="border-2 border-[rgba(0,0,0,0)] border-solid px-2 py-1.5 rounded-md outline-none focus:border-2 focus:border-solid focus:border-blue-600 duration-200"
            name="email">
        <input type="password" placeholder="password"
            class="border-2 border-[rgba(0,0,0,0)] border-solid px-2 py-1.5 rounded-md outline-none focus:border-2 focus:border-solid focus:border-blue-600 duration-200"
            name="password">
        <button
            class="w-full bg-blue-100 py-1.5 rounded-md hover:bg-blue-400 hover:text-white duration-300 font-[Poppins] font-semibold"
            type="submit">Register</button>
        <div class="flex items-center gap-2 text-sm">
            <p>Does Have an Account?</p>
            <a href="/login" class="text-white underline">Login</a>
        </div>
    </form>

</div>
