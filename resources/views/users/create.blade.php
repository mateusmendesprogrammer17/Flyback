@extends('layouts.main')

@section('title', 'Criar Conta')

@section('content')
<section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

    <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
      <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
          Create an account
        </h1>

        <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('users.store', [], false) }}">
          @csrf

          <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seu Nome:</label>
            <input type="text" name="name" id="name" placeholder="Seu nome" required
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-600 dark:focus:border-green-600">
          </div>

          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seu email:</label>
            <input type="email" name="email" id="email" placeholder="name@company.com" required
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-600 dark:focus:border-green-600">
          </div>

          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" required
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-600 dark:focus:border-green-600">
          </div>

          <div>
            <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
            <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" required
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-600 dark:focus:border-green-600">
          </div>

          <div class="flex items-start">
            <div class="flex items-center h-5">
              <input id="terms" aria-describedby="terms" type="checkbox" required
                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-green-600 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-green-600 dark:ring-offset-gray-800">
            </div>
            <div class="ml-3 text-sm">
              <label for="terms" class="font-light text-gray-500 dark:text-gray-300">
                I accept the <a href="#" class="font-medium text-green-600 hover:underline dark:text-green-500">Terms and Conditions</a>
              </label>
            </div>
          </div>

          <button type="submit"
            class="w-full text-white bg-green-700 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-700 dark:hover:bg-green-600 dark:focus:ring-green-600">
            Create an account
          </button>

          <p class="text-sm font-light text-gray-500 dark:text-gray-400">
            Already have an account? <a href="#" class="font-medium text-green-600 hover:underline dark:text-green-500">Login here</a>
          </p>

        </form>

      </div>
    </div>

  </div>
</section>
@endsection
