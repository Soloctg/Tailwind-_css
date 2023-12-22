<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->

    <x-custom-layout>
        <div class="bg-white max-w-6xl mx-auto my-8 rounded-xl shadow overflow-hidden overflow-y-auto">
            <table class="table">
                <thead>
                <tr>
                    <th>Avatar</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Address</th>
                </tr>
                </thead>
                <tbody>
                @for($i = 0; $i < 5; $i++)
                    <tr>
                        <td><img src="https://picsum.photos/seed/{{ $i }}/48" alt="" class="rounded-full"></td>
                        <td>{{ fake()->firstName() }}</td>
                        <td>{{ fake()->lastName() }}</td>
                        <td>{{ fake()->address() }}</td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </x-custom-layout>
</div>
