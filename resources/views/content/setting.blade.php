@extends('agriask.master')

@section('content')
<main id="main-content" class="my-5 content-container-mobile">
        <div class="container">
            <div class="row">
                <!-- left side -->
                <div class="col-md-3 col-lg-3">
                    <div class="d-flex flex-column left-panel">
                        <h4 class="mb-4">Pengaturan</h4>
                        <div class="d-flex flex-column">
                            <a href="/setting/{{ Auth::id() ?? ''}}" class="text-decoration-none text-dark nav-setting-profile act-cek border-bottom">Profil</a>
                        </div>
                    </div>
                </div>

                <!-- right side detail -->
                <div class="col-md-9 col-lg-9 margin-when-mobile">
                    <div class="p-4 bg-white border rounded padding-acc-mobile">
                        <h4 class="border-bottom pb-3">Profil Pengguna</h4>

                        <p class="mt-3">Foto Diri</p>
                        <div class="d-flex">
                            <img src="https://aui.atlassian.com/aui/8.6/docs/images/avatar-person.svg"
                                alt="user profile" class="rounded my-auto" width="90px" height="90px">
                            <div class="ms-4 align-self-center">
                                <input class="form-control form-control-sm w-50 file-input-mobile-width" type="file"
                                    id="formFile" accept="image/,.jpg,.jpeg,.png">

                                <p class="mt-2 mb-0 form-text">Gambar profile Anda sebaiknya memiliki rasio 1:1 dan
                                    berukuran tidak lebih dari 2MB.
                                </p>
                            </div>
                        </div>

                        <form action="/setting/{{ $user->id }}" class="mt-4" method="post">
                        @csrf
                        @method('PUT')
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control responsive-form-width" id="full-name" name="nama" value="{{ old('nama', $user->name) }}"
                                    aria-describedby="full-name" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" maxlength="16" class="form-control responsive-form-width" id="full-name" name="username" value="{{ old('username', $user->username) }}"
                                    aria-describedby="full-name" required>
                            </div>

                            <button type="submit" class="btn btn-success mt-3">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection