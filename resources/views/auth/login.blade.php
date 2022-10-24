<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.2/dist/flowbite.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased">
        <section class="h-screen">
            <div class="px-6 h-full text-gray-800">
            <div
                class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6"
            >
                <div
                class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0"
                >
                <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="w-full"
                    alt="Sample image"
                />
                </div>
                <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="flex flex-row items-center justify-center lg:justify-start">
                        <p class="text-lg mb-0 mr-4">Sign in</p>
        
                    </div>
        
                    <div
                    class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5"
                    >
                    {{-- <p class="text-center font-semibold mx-4 mb-0">Or</p> --}}
                    </div>
        
                    <!-- Email input -->
                    <div class="mb-6">
                    <input
                        type="email"
                        class="@error('email') is-invalid @enderror form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="exampleFormControlInput2"
                        placeholder="Email address"
                        name="email"
                        value="{{ old('email') }}"
                    />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
        
                    <!-- Password input -->
                    <div class="mb-6">
                    <input
                        type="password"
                        class="@error('password') is-invalid @enderror form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        id="exampleFormControlInput2"
                        placeholder="Password"
                        name="password"
                    />
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
        
                    <div class="flex justify-between items-center mb-6">
                    <div class="form-group form-check">
                        <input
                        type="checkbox"
                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                        id="exampleCheck2"
                        />
                        <label class="form-check-label inline-block text-gray-800" for="exampleCheck2"
                        >Remember me</label
                        >
                    </div>
                    {{-- <a href="#!" class="text-gray-800">Forgot password?</a> --}}
                    </div>
        
                    <div class="text-center lg:text-left">
                    <button type="submit" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                        {{ __('Login') }}
                    </button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </section>
    </body>
</html>