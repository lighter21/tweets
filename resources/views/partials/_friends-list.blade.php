<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @foreach(auth()->user()->follows as $user)
        <li class="mb-4">
            <div class="flex items-center text-sm">
                <a href="{{ route('profiles', $user->username) }}">
                    <img src="{{ $user->avatar }}" style="width: 50px; height: 50px;" alt="" class="rounded-full mr-2">
                </a>
                <a href="{{ route('profiles', $user->username) }}">
                    {{$user->name}}
                </a>
            </div>
        </li>
    @endforeach
</ul>
