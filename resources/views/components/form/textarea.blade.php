<label class="block text-sm font-medium text-gray-900">{{ $slot }}
    <textarea {{$attributes->merge(['class' => "relative z-10 mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 block w-full h-40 p-2.5"]) }}></textarea>
</label>
@error($name)
<p class="relative z-0 -top-2 mb-2 py-2 px-3 pt-4 bg-red-500 text-white text-sm rounded-b-lg">{{$message}}</p>
@enderror
