<footer>

    <form action="/flat/{{ auth()->id()  }}/comments/" method="POST" class="bg-white border border-gray-200 p-6 rounded-xl m-4">
        @csrf

        <header class="flex items-center gap-2">
            <img src="https://i.pravatar.cc/100?img={{ auth()->id() }}" alt="avatar" class="rounded-full">
            <h3>Wants to let a Review?</h3>

            <div>
                <textarea class="w-full" name="body" id="body" cols="30" rows="10"></textarea>
            </div>

            <div>
                <button type="submit">Post</button>
            </div>
        </header>

    </form>

    @foreach ($comments as $comment)
        <div class="mt-4 border p-4 bg-blue-200">
            <article class="flex">
                <div class="flex flex-col mr-4" style="display: flex; flex-direction: column; align-items: center;">
                    <img src="https://i.pravatar.cc/100?img={{$comment->user->id}}" alt="avatar" class="rounded-full">

                    <header class="flex flex-col items-center">
                        <h3 class="font-bold">{{ $comment->user->name }}</h3>
                        <p class="text-xs"><time> {{ $comment->created_at->diffForHumans() }}</time></p>
                    </header>
                </div>

                <div class="chat chat-start mb-2 mt-2">
                    <div class="chat-bubble mt-4">{{ $comment->body }}</div>
                </div>
            </article>
        </div>
    @endforeach
</footer>
