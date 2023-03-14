<nav class="navbar navbar-expand-lg bg-body-light">
    <div class="container-fluid p-0 container col-10">
      <a class="navbar-brand p-0 {{ ($title === "Landing Page") ? 'active' : ''  }}" href="/">
        <div class="">
        <img src="img/logo.png" class="" alt="" width="50">
        </div>
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav col-lg-12">
          <li class="nav-item">
            <a class="nav-link active fw-semibold {{ ($title === "Tentang Aspera") ? 'active' : ''  }}" aria-current="page" href="/tentangaspera">Tentang Aspera</a>
          </li>
          <li class="nav-item col-lg-8 me-5">
            <a class="nav-link fw-semibold {{ ($title === "Pengaduan") ? 'active' : ''  }}" href="/pengaduan">Pengaduan</a>
          </li>


          <div class="hidden fixed top-0 right-0 px-6 sm:block">

                  <form method="POST" action="" class="btn btn-danger my-auto">
                    @csrf


                </form>

                  <a href="" class="btn fw-semibold">Masuk</a>


          </div>

        </ul>
      </div>
    </div>
  </nav>
