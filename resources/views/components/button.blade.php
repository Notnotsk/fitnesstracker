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
	    case 'blue':
	        $btnClasses = 'bg-blue-500 border border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 hover:bg-blue-600 inline-flex items-center text-gray-100';
	        break;
	    default:
	        $btnClasses = 'bg-white border border-gray-200 dark:bg-black dark:border-gray-800 dark:hover:bg-gray-900 dark:ring-offset-black dark:text-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 hover:bg-gray-50 inline-flex items-center text-gray-700';
	        break;
	}

	switch ($size) {
	    case 'sm':
	        $btnClasses .= 'rounded px-2 py-1 text-sm';
	        break;
		case 'md':
	        $btnClasses .= 'rounded-md px-2.5 py-1.5 text-sm';
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
