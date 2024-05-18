<x-layout>
    <div>
        <h2>User Dashboard</h2>

        @auth()
            <p>User</p>
        @endauth
    </div>
</x-layout>