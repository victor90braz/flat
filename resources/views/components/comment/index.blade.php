<footer>

    <form action="/flat/{{ auth()->id()  }}/comments/" method="POST" class="bg-white border border-gray-200 p-6 rounded-xl m-4">
        @csrf

        <header class="flex flex-col items-center gap-4 p-4 bg-gray-100 rounded-xl shadow-md transition duration-300 hover:shadow-lg">

            <div class="flex items-center gap-2">
                <img src="https://i.pravatar.cc/100?img={{ auth()->id() }}" alt="avatar" class="rounded-full">
                <h3 class="text-xl font-bold">Wants to let a Review?</h3>
            </div>

            <div class="flex flex-col items-center mt-4 w-full">
                <textarea class="w-full p-3 border rounded-md focus:outline-none focus:border-blue-500 resize-none" name="body" id="body" rows="3" placeholder="Share your thoughts..."></textarea>

                <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md transition duration-300 focus:outline-none focus:shadow-outline-blue" type="submit">Post</button>
            </div>

        </header>

    </form>

    @foreach ($comments as $comment)
        <div class="mt-4 border p-4 bg-blue-200 m-4 rounded-md">
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
