<div class="flex p-4 border-b border-b-grey-400 ">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profiles', $tweet->user->name) }}">
            <img src="{{ $tweet->user->avatar }}" style="height: 50px; width: 50px;" alt="" class="rounded-full mr-2">
        </a>
    </div>

    <div>
        <a href="{{ route('profiles', $tweet->user->username) }}">
            <h5 class="font-bold mb-4">{{ $tweet->user->name }}
                <button class="btn"><i class="fa fa-trash "></i></button>
            </h5>
        </a>

        <p class="text-sm">
            {{ $tweet->body }}
        </p>

    </div>

</div>
