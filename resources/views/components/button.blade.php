@props([
    'renderAs' => 'button',
	'size' => 'md',
    'styles' => 'default',
])

@php
	switch ($styles) {
	    case 'none':
	        $btnClasses = '';
	        break;
	    case 'indigo':
	        $btnClasses = 'inline-flex items-center font-semibold text-white bg-indigo-600 border-transparent focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 hover:bg-indigo-500';
	        break;
	    default:
	        $btnClasses = 'inline-flex items-center font-semibold text-gray-700 bg-white border-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2';
	        break;
	}

	switch ($size) {
	    case 'sm':
	        $btnClasses .= 'rounded px-2 py-1 text-sm';
	        break;
		case 'md':
	        $btnClasses .= 'rounded-md px-3 py-2 text-sm';
	        break;
	    case 'lg':
	        $btnClasses .= 'rounded-lg px-6 py-4 text-lg';
	        break;
	    default:
	        $btnClasses .= 'rounded-md px-4 py-2';
	        break;
	}
@endphp

@if ($attributes->has('href'))
    <a {{ $attributes->merge(['class' => $btnClasses]) }}>
	    {{ $slot }}
	</a>
@elseif ($renderAs === 'input')
    <input {{ $attributes->merge(['type' => 'submit', 'value' => 'Submit', 'class' => $btnClasses]) }}>
@else
    <button {{ $attributes->merge(['class' => $btnClasses]) }}>
	    {{ $slot }}
	</button>
@endif
