<x-layout>
    <div>
        <h2>Customer Dashboard</h2>

        @auth('customer')
            <p>I'm customer!.</p>
        @endauth
    </div>
</x-layout>