@extends('layouts.app')

@section('content')

<h1 class="text-lg flex-1 font-medium">Tambah User</h1>

<form action="{{route('user.store')}}" autocomplete="off" class="mt-10" method="post">
    @csrf
    <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
        <input name="name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="ex: penpar">
        </div>
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
        <input name="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " autocomplete="off"  placeholder="ex: penpar@gmail.com">
    </div>
    <div class="mb-6">
        <label for="level" class="block mb-2 text-sm font-medium text-gray-900">level</label>
        <select name="level" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            <option value="admin">Admin</option>
            <option value="operator">Operator</option>
        </select>
    </div>
      <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
        <input name="password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="*****">
      </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>
@endsection
