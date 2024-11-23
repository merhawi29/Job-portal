<x-guest-layout>
    <div class="container mt-3 col-md-4 col-md-offset-4">
        <form action="{{url('Home')}}" method="post">
            @csrf
          {{-- <x-flash>

          </x-flash> --}}
        <h1 class="text-gray-700 text-center ">WELCOME!</h1>
          <div>
            <div class="card mt-3">
              <div class="card-body d-grid gab-3">
                  <i class="fa-solid fa-user-tie"></i>
              <input type="radio" class="agree ms-auto" id="check1" name="option1" value="mark">
              <label for="check1">I`m a client,hiring for a project</label>
              </div>
            </div>
          </div>
          <div>
              <div class="card mt-3">
              <div class="card-body d-grid gab-3">
                  <i class="fa-regular fa-user"></i>
                  <input type="radio" class="agree ms-auto" id="check2" name="option1" value="emark">
                  <label for="check2">I`m a freelancer,looking for a work</label>
                  </div>
              </div>
          </div>
          <div class="d-grid mt-3">
            <x-primary-button>Create My Account</x-primary-button>
              {{-- <x-form-button>Create My Account</form-button> --}}
      <p>Aleady have an account?
        <x-primary-button class="my-3">
            {{ __('Log in') }}
        </x-primary-button></p>
      </div>
        </form>
      </div>
  </div>
</x-guest-layout>
