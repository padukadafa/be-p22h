<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="/profile" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <div class="form-group row ">
                <label for="currentPassword" class="col-sm-1 col-form-label">Current Password</label>
                <div class="col-sm-4 sm:col-sm-10">
                  <input type="password" class="form-control" id="currentPassword" name="currentPassword" value="{{ old('currentPassword') }}">
                </div>
              </div>
        </div>

        <div>
            <div class="form-group row ">
                <label for="newPassword" class="col-sm-1 col-form-label">New Password</label>
                <div class="col-sm-4 sm:col-sm-10">
                  <input type="password" class="form-control" id="newPassword" name="newPassword" value="{{ old('newPassword') }}">
                </div>
              </div>
        </div>

        <div>
            <div class="form-group row ">
                <label for="retypePassword" class="col-sm-1 col-form-label">Retype Password</label>
                <div class="col-sm-4 sm:col-sm-10">
                  <input type="password" class="form-control" id="retypePassword" name="retypePassword" value="{{ old('retypePassword') }}">
                </div>
              </div>
        </div>
    </form>
</section>
