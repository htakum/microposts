
    @if (Auth::user()->is_favorite($micropost->id))
        {{-- unfavoriteボタンのフォーム --}}
        <form method="POST" action="{{ route('user.unfavorite', $micropost->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-error normal-case" 
                onclick="return confirm('id = {{ $micropost->id }} のいいねを外します。よろしいですか？')">Unfavorite</button>
        </form>
    @else
        {{-- favoriteボタンのフォーム --}}
        <form method="POST" action="{{ route('user.favorite', $micropost->id) }}">
            @csrf
            <button type="submit" class="btn btn-primary normal-case">Favorite</button>
        </form>
    @endif
