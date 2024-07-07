<div class="bg-[url('../../../public/mobil-img.jpg')] fixed top-0 bottom-0 left-0 right-0 blur-md">

</div>

<div class="w-screen h-screen flex justify-center items-center absolute top-0 left-0 bottom-0 right-0">
    <form class="flex flex-col w-[500px] h-max gap-5 p-2 rounded-xl bg-blue-300" method="POST"
        action="{{ route('login-creation') }}">
        @csrf
        <h1 class="text-3xl font-bold text-center">LOGIN</h1>
        <input type="text" placeholder="name"
            class="border-2 border-[rgba(0,0,0,0)] border-solid px-2 py-1.5 rounded-md outline-none focus:border-2 focus:border-solid focus:border-blue-600 duration-200"
            name="name">
        <input type="text" placeholder="email"
            class="border-2 border-[rgba(0,0,0,0)] border-solid px-2 py-1.5 rounded-md outline-none focus:border-2 focus:border-solid focus:border-blue-600 duration-200"
            name="email">
        <input type="text" placeholder="password"
            class="border-2 border-[rgba(0,0,0,0)] border-solid px-2 py-1.5 rounded-md outline-none focus:border-2 focus:border-solid focus:border-blue-600 duration-200"
            name="password">
        <button class="w-full bg-blue-100 py-1.5 rounded-xl" type="submit">Login</button>
        <div class="flex items-center gap-2 text-sm">
            <p>Don't Have an Account?</p>
            <a href="/register" class="text-white underline">Register</a>
        </div>
    </form>

</div>
