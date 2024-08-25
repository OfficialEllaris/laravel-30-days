@props(['active' => false])

<li class="nav-item">
    <a class="{{ $active ? 'fw-semibold' : 'fw-normal' }} text-dark nav-link" {{ $attributes }}>
        {!! $active ? '&CircleDot;' : '' !!} {{ $slot }}
    </a>
</li>
