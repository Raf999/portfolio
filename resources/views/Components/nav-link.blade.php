{{-- @props(['active' => false])

<a class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-white/5 hover:text-white'}} rounded-md px-3 py-2 text-base font-medium "
   aria-current="{{ $active ? 'page' : 'false' }}" 
   {{$attributes}}
>{{$slot}}</a> --}}

@props(['active' => false, 'icon' => null])

<a {{ $attributes->merge([
        'class' => ($active
            ? 'bg-teal-400 text-white'
            : 'text-gray-900 hover:bg-white/5 hover:text-teal-500'
        ) . ' rounded-md px-3 py-2 text-sm font-medium flex items-center space-x-2'
    ]) }}
   aria-current="{{ $active ? 'page' : 'false' }}">
   
   @if ($icon)
       <i class="{{ $icon }}"></i>
   @endif

   <span>{{ $slot }}</span>
</a>
