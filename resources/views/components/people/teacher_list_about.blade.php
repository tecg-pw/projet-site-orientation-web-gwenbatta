@props([
    /** @var \Illuminate\Database\Eloquent\Model */
    'teacher_ref'
])
<article {{ $attributes->class(['slide-in lg:even:mt-36 lg:even:ml-10 xl:even:ml-0 sm:gap-x-4 lg:odd:mt-0 mt-16 sm:flex xl:max-w-[100%] lg:max-w-[87%] lg:block relative group']) }} aria-labelledby="{{$teacher_ref->slug}}">
    <picture class="rounded-lg lg:absolute -z-10 -top-[80%] group-even:-top-[140%] mb-1.5 lg:mb-0 2xl:mb-2">
        @if($teacher_ref->srcset && $teacher_ref->srcset['full'])
            @foreach($teacher_ref->srcset['full'] as $size => $path)
                <source media="(max-width: {{$size}}px)" srcset="/{{$path}}">
            @endforeach
        @endif
        <img
            src="{{$teacher_ref->logos && $teacher_ref->logos['full'] ? '/' . $teacher_ref->logos['full'] : '/'.$teacher_ref->logo}}"
            alt="{{$teacher_ref->title}}" class="xl:mb-16 mb-6 rounded-3xl">
    </picture>
    <div class="2xl:-bottom-32 2xl:max-w-[80%] relative lg:bg-yellow-100 sm:flex sm:flex-col sm:justify-center lg:block rounded-xl px-4 py-8 lg:left-10">
        <h3 class="font-medium text-xl xl:text-2xl 2xl:text-3xl mb-2 xl:mb-5" id="{{$teacher_ref->slug}}" aria-level="3" role="heading">
            <a class="hover:text-orange-500"
               href="/{{app()->getLocale()}}/bottin/{{$teacher_ref->status === 'teachalumni'? 'teachalumni':'teacher'}}/{{$teacher_ref->slug}}">{{$teacher_ref->firstname}} {{$teacher_ref->name}}</a>
        </h3>
        <a class="hover:text-orange-500 text-lg xl:text-xl 2xl:text-2xl underline text-green-700"
           href="mailto:{{$teacher_ref->mail}}">{{$teacher_ref->mail}}</a>
        <div class="flex lg:flex-row flex-col gap-y-3 {{$teacher_ref->status === 'teachalumni'? 'xl:gap-40 lg:gap-24 2xl:gap-72': 'xl:gap-60 lg:gap-44 2xl:gap-96'}} lg:items-center mt-4 ">
            <div class="flex gap-3">
                <div class="relative hover:scale-110">
                    <svg class="2xl:w-[35px]" xmlns="http://www.w3.org/2000/svg" width="25"
                         viewBox="0 0 38.97 38.005">
                        <path
                            data-name="08774047e75405e5723edc2388e9bc78"
                            d="M21.484,2.247a19.484,19.484,0,0,0-6.162,37.968c.974.171,1.339-.414,1.339-.925,0-.463-.024-2-.024-3.629-4.9.9-6.162-1.193-6.551-2.289a7.084,7.084,0,0,0-2-2.752c-.682-.365-1.656-1.266-.024-1.291a3.9,3.9,0,0,1,3,2,4.164,4.164,0,0,0,5.674,1.607,4.1,4.1,0,0,1,1.242-2.606c-4.335-.487-8.865-2.168-8.865-9.62a7.583,7.583,0,0,1,2-5.236,7,7,0,0,1,.195-5.163s1.632-.511,5.358,2a18.368,18.368,0,0,1,9.742,0c3.726-2.533,5.358-2,5.358-2a7,7,0,0,1,.195,5.163,7.538,7.538,0,0,1,2,5.236c0,7.477-4.554,9.133-8.889,9.62a4.614,4.614,0,0,1,1.315,3.6c0,2.606-.024,4.7-.024,5.358,0,.511.365,1.12,1.339.925a19.494,19.494,0,0,0-6.21-37.968Z"
                            transform="translate(-1.999 -2.247)" fill="#da953a"/>
                    </svg>
                    <a class="linkcard" href="{{$teacher_ref->link_github}}">Aller sur github
                        de {{$teacher_ref->name}}</a>
                </div>
                <div class="relative hover:scale-110">
                    <svg class="2xl:w-[35px]" xmlns="http://www.w3.org/2000/svg" width="25"
                         viewBox="0 0 41.079 41.079">
                        <path
                            d="M33.508,9.107h0a2.465,2.465,0,1,0,2.465,2.465A2.465,2.465,0,0,0,33.508,9.107Zm9.448,4.971a15.589,15.589,0,0,0-.945-4.991,10.146,10.146,0,0,0-2.383-3.635,9.654,9.654,0,0,0-3.636-2.362A14.994,14.994,0,0,0,31,2.123C28.825,2,28.126,2,22.54,2s-6.285,0-8.462.123a14.994,14.994,0,0,0-4.991.965A9.818,9.818,0,0,0,5.451,5.451,9.654,9.654,0,0,0,3.089,9.086a14.994,14.994,0,0,0-.965,4.991C2,16.254,2,16.953,2,22.54S2,28.825,2.123,31a14.994,14.994,0,0,0,.965,4.991,9.654,9.654,0,0,0,2.362,3.635A9.818,9.818,0,0,0,9.086,41.99a14.994,14.994,0,0,0,4.991.965c2.177.123,2.876.123,8.462.123s6.285,0,8.462-.123a14.994,14.994,0,0,0,4.991-.965,9.654,9.654,0,0,0,3.636-2.362,9.962,9.962,0,0,0,2.383-3.635A15.59,15.59,0,0,0,42.956,31c0-2.177.123-2.876.123-8.462S43.079,16.254,42.956,14.077Zm-3.7,16.678a11.523,11.523,0,0,1-.7,3.82,6.285,6.285,0,0,1-1.54,2.362,6.552,6.552,0,0,1-2.362,1.54,11.523,11.523,0,0,1-3.82.7c-2.054.1-2.814.123-8.216.123s-6.162,0-8.216-.123a11.769,11.769,0,0,1-3.985-.616,6.716,6.716,0,0,1-2.259-1.54,6.162,6.162,0,0,1-1.52-2.362,11.379,11.379,0,0,1-.822-3.9c0-2.054-.123-2.814-.123-8.216s0-6.162.123-8.216a11.379,11.379,0,0,1,.719-3.9A6.162,6.162,0,0,1,8.162,8.162a6.449,6.449,0,0,1,2.259-1.643,11.769,11.769,0,0,1,3.9-.7c2.054,0,2.814-.123,8.216-.123s6.162,0,8.216.123a11.523,11.523,0,0,1,3.82.7A6.285,6.285,0,0,1,37.02,8.162a6.285,6.285,0,0,1,1.54,2.259,11.523,11.523,0,0,1,.7,3.9c.1,2.054.123,2.814.123,8.216S39.361,28.7,39.259,30.755ZM22.54,12a10.516,10.516,0,1,0,7.47,3.073A10.537,10.537,0,0,0,22.54,12Zm0,17.376a6.84,6.84,0,1,1,6.84-6.84,6.84,6.84,0,0,1-6.84,6.84Z"
                            transform="translate(-2 -2)" fill="#da953a"/>
                    </svg>
                    <a class="linkcard" href="{{$teacher_ref->instagram ?? '#' }}">Aller sur instagram
                        de {{$teacher_ref->name}}</a>
                </div>
                <div class="hover:scale-110 relative">
                    <svg class="2xl:w-[35px]" xmlns="http://www.w3.org/2000/svg" width="25"
                         viewBox="0 0 37.777 38.005">
                        <path
                            d="M37.044,2H4.853A2.755,2.755,0,0,0,2.06,4.717v32.57A2.755,2.755,0,0,0,4.853,40h32.19a2.755,2.755,0,0,0,2.793-2.717V4.717A2.755,2.755,0,0,0,37.044,2ZM13.518,33.81h-5.7v-17.1h5.7Zm-2.85-19.5h0a2.964,2.964,0,1,1,0-5.929,2.983,2.983,0,1,1,0,5.929Zm23.411,19.5h-5.7V24.632c0-2.3-.817-3.8-2.888-3.8A3.135,3.135,0,0,0,22.564,22.9a3.8,3.8,0,0,0-.19,1.387v9.5h-5.7v-17.1h5.7V19.1a5.7,5.7,0,0,1,5.15-2.85c3.8,0,6.556,2.451,6.556,7.715Z"
                            transform="translate(-2.06 -2)" fill="#da953a"/>
                    </svg>
                    <a class="linkcard" href="{{$teacher_ref->linkedin}}">Aller sur le
                        linkedin de {{$teacher_ref->name}}</a>
                </div>
            </div>
            @if($teacher_ref->status === 'teachalumni')
                <p class="uppercase xl:text-lg 2xl:text-2xl">{{__('people.teachalumni_status')}}</p>
            @else
                <p class="uppercase xl:text-lg 2xl:text-2xl">{{$teacher_ref->status}}</p>
            @endif
        </div>
    </div>
</article>

