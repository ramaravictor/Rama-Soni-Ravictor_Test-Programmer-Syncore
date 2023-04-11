@extends('layouts.main')

@section('layout')
<body>
    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/buu.jpg" class="card-img" alt="gambar">
                    <div class="carousel-caption text-start">
                        <h1 class="my-3 display-3 text-light"><strong></strong></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container marketing">

            <!-- START THE FEATURETTES -->

            {{-- <hr class="featurette-divider"> --}}

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Selamat Datang</h2>
                    <p class="lead">Website ini merupakan Aplikasi untuk menyimpan biodata calon karyawan.</p>
                </div>
                <p><a href="/create" class="btn btn-secondary">Entry Biodata</a></p>
            </div>
        </div><!-- /.container -->
    </main>
</body>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<!-- FOOTER -->
<footer class="container mt-5">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; Rama Soni Ravictor_Test03. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
    </p>
</footer>
@endsection
