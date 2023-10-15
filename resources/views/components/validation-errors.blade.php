@props(['errors'])

@if ($errors->any())
    <div {{ $attributes->merge(['class' => 'border border-solid border-red-500 px-5 py-2 rounded-md']) }}>
        <p class="mb-2 font-semibold text-red-500">We ran into issues processing your request.</p>
        <ul class="mb-2 list-inside list-disc text-red-500">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
