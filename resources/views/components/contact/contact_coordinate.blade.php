@props([
    /** @var \mixed */
    'coordinate_ref'
])

<div itemscope itemtype="https://schema.org/Organization" {{ $attributes }}>
    <p itemprop="legalName" class="mb-5 uppercase font-sans">{{strtoupper($coordinate_ref->organization)}}</p>
    <p itemprop="employee">{{ucwords($coordinate_ref->employee_firstname)}} {{ucwords($coordinate_ref->employee_name)}}</p>
    <p class="mb-2">{{$coordinate_ref->job}}</p>
    <a class="text-green-700 underline" href="mailto:{{$coordinate_ref->mail}}"
       itemprop="email">{{$coordinate_ref->mail}}</a>
    <p itemprop="telephone">{{$coordinate_ref->phone}}</p>
</div>
