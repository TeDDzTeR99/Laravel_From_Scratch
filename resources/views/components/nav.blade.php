<div class="navbar bg-base-100 shadow-sm">

    <div class="flex-1">
        <ul class="flex justify-center items-center gap-x-6 text-sm">
            <li><a href="/ideas">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/contact">Contact Us</a></li>
            @can('view-admin')
                <li><a href="/admin">Admin</a></li>
            @endcan
        </ul>
        <a class="btn btn-ghost text-xl">Ideas</a>
    </div>

    <div class="flex-none space-x-2">
        @guest
            <a class="btn btn-square" href="/register">
                Register
            </a>
            <a class="btn btn-square" href="/login">
                Login
            </a>
        @endguest
        @auth
            <form method="POST" action="/logout">
                @csrf
                @method('DELETE')
                <button class="btn btn-square" type="submit">
                    LogOut
                </button>
            </form>
        @endauth
    </div>
</div>
