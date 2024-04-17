@props(['active' => false])
<li>
    <a class="{{ $active ? 'text-white' : 'text-white-500' }} rounded-md px-3 py-2 text-sm"
        aria-current="{{ request()->is('/') ? 'page' : 'false' }}"{{ $attributes }}>{{ $slot }}</a>
</li>
