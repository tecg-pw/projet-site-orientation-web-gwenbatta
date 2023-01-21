@props([
    'placeholder',
    'name'
])

<textarea id="wysiwyg"
    cols="30" rows="10"
    class="2xl:text-xl border border-orange-500 rounded-xl @error('description') outline outline-3 outline-red-600 @enderror py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
    name="{{$name}}"
    placeholder="{{__($placeholder)}}">{{$slot}}</textarea>
