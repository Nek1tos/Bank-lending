<div {{ $attributes->merge(['class' => 'card shadow-sm mb-3']) }}>
    <div class="card-body">
        @if(isset($icon))
            <div class="fs-2 mb-2">{{ $icon }}</div>
        @endif

        @if(isset($title))
            <h5 class="card-title">{{ $title }}</h5>
        @endif

        <p class="card-text">{{ $slot }}</p>

        @if(isset($link))
            <a href="{{ $link }}" class="btn btn-success btn-sm">Детальніше</a>
        @endif
    </div>
</div>
