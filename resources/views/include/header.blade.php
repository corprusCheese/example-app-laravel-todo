<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" id='icon-navbar' href={{route('home')}}>
        <svg viewBox="000 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg"
             class="h-16 w-auto text-gray-700">
        </svg>
    </a>
    <button id="togglerNav" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href={{route('login')}}>Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{route('register')}}>Register</a>
            </li>
        </ul>
    </div>
</nav>
