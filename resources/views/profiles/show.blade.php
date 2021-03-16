<x-app>
    @include('partials._profile-photos')

    @forelse($tweets as $tweet)
        @include('partials._tweet')
    @empty
        <h1 class="font-bold text-xl text-blue-500" style="text-align: center;">No tweets yet... </h1>
    @endforelse

</x-app>
