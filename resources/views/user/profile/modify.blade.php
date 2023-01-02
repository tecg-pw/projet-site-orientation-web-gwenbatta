<x-commons.navigation :page="$user->firstname .' '.$user->name .' – '. __('user.user_modify_title')"></x-commons.navigation>
<main id="content">
    <section class="flex flex-col relative mb-32" aria-labelledby="name">
        <div class="relative">
            <div class="flex items-center justify-self-end sm:mt-24 md:mt-36 lg:mt-52 xl:mt-80 2xl:mt-96 px-10 lg:px-16 xl:px-32 2xl:px-48">
                <div class="order-2 flex-1  ml-8 mt-32">
                    <div>
                        <h2 role="heading" id="name" aria-level="2"
                            class="xl:text-4xl md:text-3xl text-2xl text-yellow-800 font-extrabold font-sans mb-3">{{$user->firstname}} {{$user->name}}</h2>
                        <p class="uppercase text-2xl">{{$user->status->translation->where('locale',app()->getLocale())->first()->name}}</p>
                    </div>
                    <div class="text-end">
                        <a href="/{{app()->getLocale()}}/user/profile/{{$user->slug}}"
                           class="hover:text-orange-500 font-sans text-center text-green-700 ml-6 px-10 py-3 rounded-2xl text-2xl font-semibold mb-32">{{__('user.user_back')}}</a>
                    </div>
                </div>
                <img class="rounded-full sm:w-1/4 md:w-1/4 xl:w-1/4 " src="{{$user->avatar}}" alt="">
            </div>
            <img class="absolute -z-10 top-0 bottom-0 left-0 right-0"
                 src="{{$user->back_image}}" alt="">
        </div>
    </section>
    <section class="xl:px-30 lg:px-16 2xl:px-48 px-10 mb-32" aria-labelledby="modify">
        <h2 role="heading" id="modify" aria-level="2" class="text-4xl text-yellow-800 font-extrabold font-sans uppercase">{{__('user.user_modify_title')}}</h2>
        <div class="flex  mt-14">
            <form action="/{{app()->getLocale()}}/user/modify" method="post" enctype="multipart/form-data" class="flex-1 flex flex-col lg:flex-row lg:gap-20 xl:gap-24">
                @csrf
                <div class="flex-1">
                    <div class="flex flex-1">
                        <div class="flex flex-col flex-1 mr-10 mb-8">
                            <label class="text-green-500 text-2xl" for="name">{{__('user.user_modify_name')}}</label>
                            <input
                                class="focus:outline-3 focus:outline-green-700 border focus:bg-orange-100 border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight"
                                placeholder="{{__('user.user_modify_name_placeholder')}}" name="name" id="name" type="text" value="{{old('name')?:$user->name}}">
                        </div>
                        <div class="flex flex-col flex-1 mb-8">
                            <label class="text-green-500 text-2xl" for="firstname">{{__('user.user_modify_firstname')}}</label>
                            <input
                                class="focus:outline-3 focus:outline-green-700 border focus:bg-orange-100 border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                                name="firstname" id="firstname" type="text" placeholder="{{__('user.user_modify_firstname_placeholder')}}" value="{{old('firstname')?:$user->firstname}} ">
                        </div>
                    </div>
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="email">{{__('user.user_modify_mail')}}</label>
                        <input
                            class="focus:outline-3 focus:outline-green-700 border focus:bg-orange-100 border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="email" id="email" type="email" placeholder="{{__('user.user_modify_mail_placeholder')}}" value="{{old('email')?:$user->email}}">
                    </div>
                    <div class="flex flex-col mb-8">
                        <p class="text-green-500 text-2xl" >{{__('user.user_modify_picture')}}</p>
                        @error('avatar')
                        <div class="flex gap-1.5 items-center">
                            <svg class="h-7 w-7 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                        </div>
                        @enderror
                        <div class="flex gap-4 items-center">
                            <label for="avatar" class="px-3 order-3 text-grey-200 flex flex-col justify-center items-center bg-gray-50 rounded-lg border border-orange-500 cursor-pointer">
{{--                                <span class="flex flex-col justify-center items-center py-5 px-32">--}}
{{--                                    <span class="text-xl text-gray-500">{{__('user.user_modify_jpg')}} </span>--}}
{{--                                </span>--}}
{{--                                <input id="avatar" name="avatar" type="file" class="hidden" />--}}
                            </label>
                            <input type="file" id="avatar" name="avatar" value="{{old('avatar')}}">
                                <img class="rounded-full -order-2" width="108" src="{{old('avatar')?:$user->avatar}}" alt="">
                        </div>
                    </div>
                    <div class="flex flex-col mb-8 mt-4">
                        <p class="text-green-500 text-2xl">{{__('user.user_modify_banner')}}</p>
                        @error('back_image')
                        <div class="flex gap-1.5 items-center">
                            <svg class="h-7 w-7 text-red-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                        </div>
                        @enderror
                        <div class="flex gap-4 items-center">
                            <label for="back_image" class="px-3 order-3 text-grey-200 flex flex-col justify-center items-center bg-gray-50 rounded-lg border border-orange-500 cursor-pointer">
{{--                                <span class="flex flex-col justify-center items-center py-5 px-32">--}}
{{--                                    <span class="text-xl text-gray-500">{{__('user.user_modify_jpg')}} </span>--}}
{{--                                </span>--}}
{{--                                <input id="back_image" name="back_image" type="file" class="hidden" />--}}
                            </label>
                            <input id="back_image" name="back_image" type="file" value="{{old('avatar')}}">
                                <img width="400" class="rounded-full -order-2" src="{{old('back_image')?:$user->back_image}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="flex-1 flex flex-col">
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="status_id">{{__('user.user_modify_status')}}</label>
                        <select name="status_id" id="status_id"
                                class="appearance-none max-w-[50%] bg-green-700 text-white-100 font-sans rounded-lg uppercase font-semibold pl-2 pr-4 py-1">
                            @foreach($status as $status_ref)
                                <option @selected($status_ref->id === $user->status_id)
                                        value="{{$status_ref->id}}">{{mb_strtoupper($status_ref->translation->where('locale',app()->getLocale())->first()->name)}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-col mb-8 ">
                        <label class="text-green-500 text-2xl" for="description">{{__('user.user_modify_description')}}</label>
                        <textarea
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="description" id="description" cols="30" rows="10"
                            placeholder="{{__('user.user_modify_description')}}">{{old('description')?:$user->description}}</textarea>
                    </div>
                    <button
                       class="border-2 mt-4 self-end border-green-700 hover:text-green-700 hover:bg-white-100 font-sans text-center text-white-100 bg-green-700 px-10 py-3 rounded-2xl text-2xl font-semibold mb-32">{{__('user.user_save')}}</button>
                </div>
            </form>
        </div>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
