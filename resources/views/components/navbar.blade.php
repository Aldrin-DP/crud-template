<nav class="p-4 bg-gray-800 shadow shadow-gray-600">
    <div class="flex justify-between items-center text-white opacity-90">
        <div class="w-2/12">
            <h2 class="text-xl font-semibold tracking-widest uppercase">title</h2>
        </div>
        <div class="w-2/12">
            <ul class="flex gap-3 items-center">
                @auth
                <li class="{{ Route::is('home') ? 'bg-gray-400 px-2 py-1 rounded' : 'hover:' }}">
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="{{ Route::is('products*') ? 'bg-gray-400 px-2 py-1 rounded' : 'hover:' }}">
                    <a href="{{ route('products.index') }}">Products</a>
                </li>
                @endauth
            </ul>
        </div>
        <div class="w-5/12 text-center">
            <input type="text" class="border w-full bg-gray-200 rounded text-black opacity-90 px-3 py-2" placeholder="Search">
        </div>
        <div class="w-3/12 flex gap-5 items-center justify-end">
            @auth
                <p>{{ auth()->user()->name }}</p>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="bg-gray-100 text-black opacity-100 px-3 py-1 rounded uppercase tracking-wide font-medium cursor-pointer hover:bg-gray-950 hover:text-gray-100">Logout</button>
                </form>  
            @endauth
            @guest
                <a href="{{ route('login') }}" class="bg-gray-100 text-black opacity-100 px-3 py-1 rounded uppercase tracking-wide font-medium cursor-pointer hover:bg-blue-600 hover:text-gray-100">
                    Login
                </a>
            @endguest
        </div>
    </div>
</nav>