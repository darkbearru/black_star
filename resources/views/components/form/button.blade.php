<{{ !empty($type) ? "button type=$type" : "a" }} {{ $attributes->merge(['class' => 'bg-indigo-500 hover:bg-indigo-600 px-5 py-2 text-white rounded-lg']) }} >
{{ $slot }}
</{{ !empty($type) ? "button" : "a" }} >
