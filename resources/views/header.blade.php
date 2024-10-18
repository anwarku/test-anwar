<nav class="navbar bg-body-tertiary">
    <div class="container">
        <span class="navbar-brand mb-0 h1">{{ Auth::user()->fullname }}</span>
        <form action="/logout" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-secondary">Log Out</button>
        </form>
    </div>
</nav>
