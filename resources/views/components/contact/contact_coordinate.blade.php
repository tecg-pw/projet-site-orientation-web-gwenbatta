@props([
    /** @var \mixed */
    'coordinate_ref'
])

<div itemscope itemtype="https://schema.org/Organization" {{ $attributes }}>
    <p itemprop="legalName" class="mb-5 uppercase xl:text-lg 2xl:text-xl">{{strtoupper($coordinate_ref->organization)}}</p>
    <p itemprop="employee" class=" xl:text-lg 2xl:text-xl">{{ucwords($coordinate_ref->employee_firstname)}} {{ucwords($coordinate_ref->employee_name)}}</p>
    <p class="mb-2  xl:text-lg 2xl:text-xl">{{$coordinate_ref->job}}</p>
    <a class="text-green-700 underline  xl:text-lg 2xl:text-xl" href="mailto:{{$coordinate_ref->mail}}"
       itemprop="email">{{$coordinate_ref->mail}}</a>
    <p itemprop="telephone" class=" xl:text-lg 2xl:text-xl">{{$coordinate_ref->phone}}</p>
</div>
