<x-app>
    @include('partials._publish-tweet-pane')

    <div class="border border-gray-300 rounded-lg">
        @forelse($tweets as $tweet)
            @include('partials._tweet')
        @empty
            <h1>No tweets yet</h1>
        @endforelse

    </div>
</x-app>


