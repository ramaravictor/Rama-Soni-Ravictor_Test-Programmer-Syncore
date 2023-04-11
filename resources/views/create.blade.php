{{-- memanggil section layout main --}}
@extends('layouts.main')

@section('layout')

<body class="bg-light">
    <div class="container mt-5">
        <main>
            {{-- heading --}}
            <div class="py-5 text-center">
                <h2 class="display-4 fw-normal">Form Entry Biodata</h2>
            </div>

            {{-- Notif Entry Biodata berhasil --}}
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            {{-- menu entry biodata --}}
            <div class="row g-5">
                <div class="container px-5">
                    <div class="container px-5">
                        <div class="container px-5">
                            <div class="col-md-7 col-lg-12">
                                {{-- form biodata --}}
                                <form action="{{ route('entry.bio') }}" method="post" class="needs-validation" novalidate>
                                    @csrf
                                    <div class="row g-3">
                                        <div class="row g-3">
                                            <div class="col-sm-4">
                                                <label for="Nama" class="col-form-label">Nama Lengkap</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control @error('Nama') is-invalid @enderror" id="Nama" name="Nama" placeholder="Nama Lengkap" required autofocus value="{{ old('Nama') }}">
                                                @error('Nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-sm-4">
                                                <label for="NIK" class="col-form-label">Nomor Identitas</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control @error('NIK') is-invalid @enderror" id="NIK" name="NIK" placeholder="NIK" required autofocus value="{{ old('NIK') }}">
                                                @error('NIK')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-sm-4">
                                                <label for="No_HP" class="col-form-label">Nomor HP</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control @error('No_HP') is-invalid @enderror" id="No_HP" name="No_HP" placeholder="Nomor HP" required autofocus value="{{ old('No_HP') }}">
                                                @error('No_HP')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-sm-4">
                                                <label for="Tgl_Lahir" class="col-form-label">Tanggal
                                                    Lahir</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="date" class="form-control @error('Tgl_Lahir') is-invalid @enderror" id="Tgl_Lahir" name="Tgl_Lahir" required autofocus value="{{ old('Tgl_Lahir') }}">
                                                @error('Tgl_Lahir')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-sm-4">
                                                <label for="Tentang_Saya" class="col-form-label">Tentang Saya</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input id="Tentang_Saya" type="hidden" name="Tentang_Saya" value="{{ old('Tentang_Saya') }}">
                                                <trix-editor input="Tentang_Saya"></trix-editor>
                                                @error('Tentang_Saya')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-sm-4">
                                                <label for="Pendidikan" class="col-form-label">Pendidikan Terakhir</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input id="Pendidikan" type="hidden" name="Pendidikan" value="{{ old('Pendidikan') }}">
                                                <trix-editor input="Pendidikan"></trix-editor>
                                                @error('Pendidikan')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row g-3">
                                            <div class="col-sm-4">
                                                <label for="Pengalaman" class="col-form-label">Riwayat Pekerjaan</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input id="Pengalaman" type="hidden" name="Pengalaman" value="{{ old('Pengalaman') }}">
                                                <trix-editor input="Pengalaman"></trix-editor>
                                                @error('Pengalaman')
                                                <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        
                                    </div>



                                    <hr class="my-4">
                                    {{-- button --}}
                                    <div class="justify-content-center mb-5">
                                        <button class="btn btn-primary btn-lg mx-4" id="submit">Submit</button>
                                        <a href="/pesanan" class="btn btn-danger btn-lg">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="{{ asset('js/main.js') }}"></script>

</body>
@endsection
