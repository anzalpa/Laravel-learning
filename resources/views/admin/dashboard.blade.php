<x-layout>
    <div>
        <h2>Admin Dashboard</h2>

        @auth('admin')
            <p>Yeh!. the user is authenticated</p>
        @endauth
    </div>
</x-layout>
