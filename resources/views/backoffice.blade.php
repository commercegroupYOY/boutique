@extends('layout.layout')


@section('title')
backoffice Du site @endsection

@section('content')
{{-- <form>
    <div class="p-5 bg-slate-50 w-1/2 mx-auto rounded-md mt-6">
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-blue-600 dark:text-white">Your email</label>
            <input type="email" id="email"
                class="bg-gray-50 border border-gray-300 text-blue-600 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="name@flowbite.com" required>
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-medium text-blue-600 dark:text-white">Your
                password</label>
            <input type="password" id="password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required placeholder="............">

        </div>
        <div class="flex items-start mb-0">
            <div class="flex items-center h-1">

            </div>
        </div>

        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
        <textarea id="message" rows="4"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Leave a comment..."></textarea>

        <button type="submit"
            class="p-20 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form> --}}

<div class="flex space-x-3 p-5 bg-slate-50 w-1/2 mx-auto rounded-md mt-6">

    <div class="flex-1">
        <div class="text-center text-2xl ps-10">
                <h2>Ajouter produit</h2>
                <a class="" href="/backoffice/Create" role="button">Go !</a>
            
        </div>
    </div>

    <div class="flex-1">
        <div class="">
            <p class="text-center ">
                <h2>Mettre à jour un produit</h2>
                <p><a class="" href="/backoffice/Update" role="button">Go !</a></p>
            </p>
        </div>
    </div>

    <div class="flex-1">
        <div class="">
            <p class="text-center ">
                <h2>Supprimer un produit</h2>
                <p><a class="" href="/backoffice/Delete" role="button">Go !</a></p>
            </p>
        </div>
    </div>





 @endsection

