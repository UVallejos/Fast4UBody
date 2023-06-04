
<br>
<div class="card shadow p-3 mb-5 bg-body rounded ">
    <p class="display-6 text-center mb-3">{{ $title }}</p>
    <img src="{{ $src }}" class="img-fluid shadow p-3 rounded" alt="{{ $alt }}">
    <div class="card-body">
        <div class="card-text fuente_grande">
            {!! nl2br(e($content)) !!}
        </div>
    </div>
</div>

