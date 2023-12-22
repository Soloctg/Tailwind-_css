<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
    <x-custom-layout>
        <div class="bg-white mt-8 max-w-6xl mx-auto rounded-xl p-6 shadow">
            <h1 class="text-2xl font-bold capitalize">my profile</h1>

            <form class="flex flex-col items-start mt-6" action="" onSubmit="return false;">
                <label class="text-gray-600" for="username">Username</label>
                <input class="rounded-lg bg-gray-50 focus:bg-white border border-gray-300 mt-1" type="text" id="username" required />
                <button class="bg-indigo-500 text-white font-bold px-2 py-1 rounded hover:bg-indigo-600 mt-4">Update</button>
            </form>
        </div>
    </x-custom-layout>
</div>
