<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form method="post" action="/profile" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <div class="form-group row ">
                <label for="nama" class="col-sm-1 col-form-label">Nama</label>
                <div class="col-sm-4 sm:col-sm-10">
                  <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama',$user->nama) }}">
                </div>
              </div>
        </div>
        <div>
            <div class="form-group row">
                <label for="nik" class="col-sm-1 col-form-label">NIK</label>
                <div class="col-sm-4 sm:col-sm-10">
                  <input type="text" class="form-control" id="nik" name="nik" value="{{ old('nik',$user->nik) }}">
                </div>
              </div>
        </div>

        <div>
            <div class="form-group row">
                <label for="email" class="col-sm-1 col-form-label">Email</label>
                <div class="col-sm-4 sm:col-sm-10">
                  <input type="email" class="form-control" id="email" disabled value="{{ $user->email }}">
                </div>
              </div>
        </div>

        <div class="flex items-center gap-4">
            <button type="submit" class="btn btn-info">{{ __('Save') }}</button>

        </div>
    </form>
</section>
