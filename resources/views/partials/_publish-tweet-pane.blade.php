<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
<form action="/tweets" method="post" >
    @csrf
    <textarea name="body" class="w-full" style="resize: none"  placeholder="Tweet smth..."> </textarea>
    <hr class="my-4">
    <footer class="flex justify-between ">
        <img src="{{ auth()->user()->avatar }}" alt="" style="width: 40px; height: 40px;" class="rounded-full mr-2">
        <button type="submit" class="bg-blue-500 rounded-lg shadow py-1 px-1 text-white">Tweet</button>
    </footer>
</form>
    @error('body')
        <p class="text-red-500 text-sm">{{ $message }}</p>
    @enderror
</div>
