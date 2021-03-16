<header class="mb-6 relative">
    <img src="{{ asset('images/default-profile-banner.jpg') }}" alt="" class="mb-2">
    <div class="flex justify-between items-center">
        <div>
            <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
            <p class="text-sm"> Joined {{$user->created_at->diffForHumans()}} </p>
        </div>

        <div class="flex">
            @if(auth()->user()->isNot($user))
            <form method="post" action="/profiles/{{ $user->name }}/follow">
                @csrf
                <button type="submit"  class="bg-blue-500 rounded-lg text-sm shadow py-2 px-2 text-white">
                    {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow me' }}
                </button>
            </form>
            @endif
            @can('edit', $user)
            <a href="/profiles/{{ $user->username }}/edit" class="rounded-full border text-sm py-2 px-2 text-black">Edit Profile</a>
                @endcan

        </div>
    </div>
    <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2 absolute"
    style="width: 150px; left: calc(50% - 75px); top:55%"
    >

</header>
