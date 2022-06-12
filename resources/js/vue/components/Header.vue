<template>
    <nav class="navbar navbar-expand-lg" style="background-color: #26262B">
        <div class="container" style="max-width: 1536px">
            <a class="navbar-brand mb-0 h1 py-3" href="#" style="color: darkgray">
                <img src="/images/logo2.jpeg" alt="" class="d-inline-block rounded-circle" style="width:3.3rem;">
                KamilEater Index
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span style="color: whitesmoke;">
                  <i class="fa-solid fa-bars fa-lg"></i>
                </span>
            </button>
            <div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" style="width:100%">
                        <li class="nav-item">
                            <a class="nav-link custom-nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  custom-nav-link">Drzewko czołgów</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-nav-link">Statystyki czołgów</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-nav-link">Odznaki Biegłośći</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-nav-link">Odznaki Mistrzowskie</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style scoped lang="scss">
.custom-nav-link {
    transition-duration: .3s;
    text-decoration: none;
    color: #8C8C7C;

    &:hover {
        color: #B8411E;
    }

    &:active {
        color: #B8411E;
    }
}

.navbar-btn {
    border-color: #ae142a;
    text-transform: uppercase;
    font-family: Montserrat, "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-weight: 700;
    color: #fff;
    background-color: #ae142a;
    padding: 6px 12px !important;
    margin: 0 0 0 10px;
}

.navbar-btn:hover {
    color: #FFF;
    background-color: #337AB7 !important;
    border-color: #2E6DA4 !important;
}

</style>
