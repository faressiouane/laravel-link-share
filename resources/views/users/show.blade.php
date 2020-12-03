@extends('layouts.links')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <h2 class="py-4"> {{ $user->username }}'s links : </h2>
                @foreach($user->links as $link)
                    <div class="link">
                        <a
                            class="user-link d-block p-4 mb-4 rounded h3 text-center"
                            style="border: 2px solid {{ $user->text_color }}; color: {{ $user->text_color }}"
                            href="{{ $link->link }}"
                            target="_blank"
                            rel="nofollow"
                            data-link-id="{{ $link->id }}"
                        >{{ $link->name }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection