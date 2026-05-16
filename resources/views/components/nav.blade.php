<div class="navbar bg-base-100 shadow-sm">
    <div class="flex-1">
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
