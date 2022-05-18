<nav class="navbar navbar-expand-lg text-light bg-color">
    <section class="container">
        <a class="navbar-brand text-light" href="{{ url('/') }}">Nutrition Guide</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto nav-list">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="@route('contact')">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="@route('health')">Health</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/food.html">Food Safety</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Check Fitness
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="fitnes.html">Man</a>
            <a class="dropdown-item" href="fitnes.html">Women</a>
            <a class="dropdown-item" href="fitnes.html">Kid's</a>
          </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
              Profile
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="login.html">Login</a>
              <a class="dropdown-item" href="reg.html">Registration</a>
            </div>
          </li>
      </ul>
    </div>
    </section>
</nav> <!-- nabar end here-->
