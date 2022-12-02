<form {{ $attributes->merge(['class' => "w-full bg-white border border-gray-200 p-5 sm:rounded-lg sm:max-w-md sm:drop-shadow-md"]) }}>
    @csrf
    {{ $slot }}
</form>
