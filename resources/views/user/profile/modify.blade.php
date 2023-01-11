<x-commons.navigation
    :page="$user->firstname .' '.$user->name .' – '. __('user.user_modify_title')"></x-commons.navigation>
<main id="content">
    <section class="flex flex-col relative mb-32" aria-labelledby="name">
        <div class="relative">
            <div
                class="flex items-center justify-self-end sm:mt-24 md:mt-36 lg:mt-52 xl:mt-80 2xl:mt-96 px-10 lg:px-16 xl:px-32 2xl:px-48">
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
                <picture>
                    @if($user->srcset && $user->srcset['full'])
                        @foreach($user->srcset['full'] as $size => $path)
                            <source media="(max-width: {{$size}}px)"
                                    srcset="/{{$path}}">
                        @endforeach
                    @endif
                    <img
                        src="{{$user->avatars && $user->avatars['full'] ? '/' . $user->avatars['full'] : '/'.$user->avatar}}"
                        alt="{{$user->title}}" class="rounded-full">
                </picture>
            </div>
            <picture class="absolute -z-10 top-0 bottom-0 left-0 right-0">
                @if($user->srcset_back && $user->srcset_back['full'])
                    @foreach($user->srcset_back['full'] as $size => $path)
                        <source media="(max-width: {{$size}}px)"
                                srcset="/{{$path}}">
                    @endforeach
                @endif
                <img
                    src="{{$user->back_images && $user->back_images['full'] ? '/' . $user->back_images['full'] : '/'.$user->back_image}}"
                    alt="{{$user->title}}" class="">
            </picture>
        </div>
    </section>
    <section class="xl:px-30 lg:px-16 2xl:px-48 px-10 mb-32" aria-labelledby="modify">
        <h2 role="heading" id="modify" aria-level="2"
            class="text-4xl text-yellow-800 font-extrabold font-sans uppercase">{{__('user.user_modify_title')}}</h2>
        <div class="flex  mt-14">
            <form action="/{{app()->getLocale()}}/user/modify" method="post" enctype="multipart/form-data"
                  class="flex-1 flex flex-col lg:flex-row lg:gap-20 xl:gap-24">
                @csrf
                <div class="flex-1">
                    <div class="flex flex-1">
                        <div class="flex flex-col flex-1 mr-10 mb-8">
                            <label class="text-green-500 text-2xl" for="name">{{__('user.user_modify_name')}}</label>
                            <input
                                class="focus:outline-3 focus:outline-green-700 border focus:bg-orange-100 border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight"
                                placeholder="{{__('user.user_modify_name_placeholder')}}" name="name" id="name"
                                type="text" value="{{old('name')?:$user->name}}">
                        </div>
                        <div class="flex flex-col flex-1 mb-8">
                            <label class="text-green-500 text-2xl"
                                   for="firstname">{{__('user.user_modify_firstname')}}</label>
                            <input
                                class="focus:outline-3 focus:outline-green-700 border focus:bg-orange-100 border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                                name="firstname" id="firstname" type="text"
                                placeholder="{{__('user.user_modify_firstname_placeholder')}}"
                                value="{{old('firstname')?:$user->firstname}} ">
                        </div>
                    </div>
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="email">{{__('user.user_modify_mail')}}</label>
                        <input
                            class="focus:outline-3 focus:outline-green-700 border focus:bg-orange-100 border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="email" id="email" type="email"
                            placeholder="{{__('user.user_modify_mail_placeholder')}}"
                            value="{{old('email')?:$user->email}}">
                    </div>
                    <div class="flex flex-col mb-8">
                        <p class="text-green-500 text-2xl">{{__('user.user_modify_picture')}}</p>
                        @error('avatar')
                        <div class="flex gap-1.5 items-center">
                            <svg class="h-7 w-7 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                        </div>
                        @enderror
                        <div class="flex gap-4 items-center">
                            <label for="avatar"
                                   class="px-3 order-3 text-grey-200 flex flex-col justify-center items-center bg-gray-50 rounded-lg border border-orange-500 cursor-pointer">
                                <span class="flex flex-col justify-center items-center py-5 px-32">
                                    <span class="text-xl text-gray-500">{{__('user.user_modify_jpg')}} </span>
                                </span>
                                <input id="avatar" name="avatar" type="file"/>
                            </label>
                            <picture>
                                @if($user->srcset && $user->srcset['tiny'])
                                    @foreach($user->srcset['tiny'] as $size => $path)
                                        <source media="(max-width: {{$size}}px)"
                                                srcset="/{{$path}}">
                                    @endforeach
                                @endif
                                <img
                                    src="{{$user->avatars && $user->avatars['tiny'] ? '/' . $user->avatars['tiny'] : '/'.$user->avatar}}"
                                    alt="{{$user->title}}" class="rounded-full -order-2">
                            </picture>
                        </div>
                    </div>
                    <div class="flex flex-col mb-8 mt-4">
                        <p class="text-green-500 text-2xl">{{__('user.user_modify_banner')}}</p>
                        @error('back_image')
                        <div class="flex gap-1.5 items-center">
                            <svg class="h-7 w-7 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                        </div>
                        @enderror
                        <div class="flex gap-4 items-center">
                            <label for="back_image"
                                   class="px-3 order-3 text-grey-200 flex flex-col justify-center items-center bg-gray-50 rounded-lg border border-orange-500 cursor-pointer">
                                <span class="flex flex-col justify-center items-center py-5 px-32">
                                    <span class="text-xl text-gray-500">{{__('user.user_modify_jpg')}} </span>
                                </span>
                                <input id="back_image" name="back_image" type="file"/>
                            </label>
                            <picture>
                                @if($user->srcset_back && $user->srcset_back['tiny'])
                                    @foreach($user->srcset_back['tiny'] as $size => $path)
                                        <source media="(max-width: {{$size}}px)"
                                                srcset="/{{$path}}">
                                    @endforeach
                                @endif
                                <img
                                    src="{{$user->back_images && $user->back_images['tiny'] ? '/' . $user->back_images['tiny'] : '/'.$user->back_image}}"
                                    alt="{{$user->title}}" class="rounded-full -order-2">
                            </picture>
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
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 @error('password') text-red-400 @enderror text-lg xl:text-2xl"
                               for="password_old">
                            {{__('Old Password')}}
                        </label>
                        @error('password_old')
                        <div class="flex gap-1.5 items-center">
                            <svg class="h-7 w-7 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                        </div>
                        @enderror
                        <div
                            class="flex-1 px-3 items-center  @error('password') outline-red-600 @enderror flex border leading-tight border-orange-500 rounded-xl focus-within:border focus-within:border-2 focus-within:border-green-700 focus-within:bg-orange-100">
                            <input
                                class="password outline-none font-mono focus:bg-orange-100 py-2 text-gray-700 h-full w-full "
                                name="password_old" dusk="password-field" id="password_old" type="password"
                                placeholder="azerty">
                            <span class="show-password cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="20" height="20"
                             class="fill-orange">
                                <path class="show"
                                      d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z"/>
                                <path class="hidden hide"
                                      d="M10.94,6.08A6.93,6.93,0,0,1,12,6c3.18,0,6.17,2.29,7.91,6a15.23,15.23,0,0,1-.9,1.64,1,1,0,0,0-.16.55,1,1,0,0,0,1.86.5,15.77,15.77,0,0,0,1.21-2.3,1,1,0,0,0,0-.79C19.9,6.91,16.1,4,12,4a7.77,7.77,0,0,0-1.4.12,1,1,0,1,0,.34,2ZM3.71,2.29A1,1,0,0,0,2.29,3.71L5.39,6.8a14.62,14.62,0,0,0-3.31,4.8,1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20a9.26,9.26,0,0,0,5.05-1.54l3.24,3.25a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm6.36,9.19,2.45,2.45A1.81,1.81,0,0,1,12,14a2,2,0,0,1-2-2A1.81,1.81,0,0,1,10.07,11.48ZM12,18c-3.18,0-6.17-2.29-7.9-6A12.09,12.09,0,0,1,6.8,8.21L8.57,10A4,4,0,0,0,14,15.43L15.59,17A7.24,7.24,0,0,1,12,18Z"/>
                        </svg>
                    </span>
                        </div>
                    </div>
                    <div class="flex flex-col mb-8">
                        <label class="text-green-500 @error('password') text-red-400 @enderror text-lg xl:text-2xl"
                               for="password_new">
                            {{__('New Password')}}
                        </label>
                        @error('password_new')
                        <div class="flex gap-1.5 items-center">
                            <svg class="h-7 w-7 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <p class="text-red-500 text-lg font-semibold mt-2">{{ $message }}</p>
                        </div>
                        @enderror
                        <div
                            class="flex-1 px-3 items-center  @error('password') outline-red-600 @enderror flex border leading-tight border-orange-500 rounded-xl focus-within:border focus-within:border-2 focus-within:border-green-700 focus-within:bg-orange-100">
                            <input
                                class="password outline-none font-mono focus:bg-orange-100 py-2 text-gray-700 h-full w-full "
                                name="password_new" dusk="password-field" id="password_new" type="password"
                                placeholder="azerty">
                            <span class="show-password cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22" width="20" height="20"
                             class="fill-orange">
                                <path class="show"
                                      d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z"/>
                                <path class="hidden hide"
                                      d="M10.94,6.08A6.93,6.93,0,0,1,12,6c3.18,0,6.17,2.29,7.91,6a15.23,15.23,0,0,1-.9,1.64,1,1,0,0,0-.16.55,1,1,0,0,0,1.86.5,15.77,15.77,0,0,0,1.21-2.3,1,1,0,0,0,0-.79C19.9,6.91,16.1,4,12,4a7.77,7.77,0,0,0-1.4.12,1,1,0,1,0,.34,2ZM3.71,2.29A1,1,0,0,0,2.29,3.71L5.39,6.8a14.62,14.62,0,0,0-3.31,4.8,1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20a9.26,9.26,0,0,0,5.05-1.54l3.24,3.25a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Zm6.36,9.19,2.45,2.45A1.81,1.81,0,0,1,12,14a2,2,0,0,1-2-2A1.81,1.81,0,0,1,10.07,11.48ZM12,18c-3.18,0-6.17-2.29-7.9-6A12.09,12.09,0,0,1,6.8,8.21L8.57,10A4,4,0,0,0,14,15.43L15.59,17A7.24,7.24,0,0,1,12,18Z"/>
                        </svg>
                    </span>
                        </div>
                    </div>
                    <div class="flex flex-col mb-8 ">
                        <label class="text-green-500 text-2xl"
                               for="description">{{__('user.user_modify_description')}}</label>
                        <textarea
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="description" id="description" cols="30" rows="10"
                            placeholder="{{__('user.user_modify_description')}}">{{old('description')?:$user->description}}</textarea>
                    </div>
                    <div class="flex mb-8 items-center gap-3">
                        <input class="checkbox mb-1 absolute cursor-pointer opacity-0 z-30 w-6 h-6" type="checkbox"  @if($user->newsletter) checked @endif
                        name="newsletter"
                               id="newsletter">
                        <span class="notCheck">
                                                    <svg data-name="Composant 7 – 1"
                                                         xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24">
                                                      <g data-name="Rectangle 275" fill="#fff" stroke="#707070" stroke-width="1">
                                                        <rect width="24" height="24" rx="6" stroke="none"/>
                                                        <rect x="0.5" y="0.5" width="23" height="23" rx="5.5" fill="none"/>
                                                      </g>
                                                      <path id="d62ff70270774c6e6e679f7a8c643f83"
                                                            d="M11.852,17.3a1.2,1.2,0,0,0,1.7,0l4.9-4.9a1.2,1.2,0,1,0-1.7-1.7L12.7,14.756l-1.452-1.464a1.2,1.2,0,0,0-1.7,1.7ZM24.8,2H3.2A1.2,1.2,0,0,0,2,3.2V24.8A1.2,1.2,0,0,0,3.2,26H24.8A1.2,1.2,0,0,0,26,24.8V3.2A1.2,1.2,0,0,0,24.8,2ZM23.6,23.6H4.4V4.4H23.6Z"
                                                            transform="translate(-2 -2)" fill="#da953a"/>
                                                      <path id="d62ff70270774c6e6e679f7a8c643f83-2" data-name="d62ff70270774c6e6e679f7a8c643f83"
                                                            d="M11.852,17.3a1.2,1.2,0,0,0,1.7,0l4.9-4.9a1.2,1.2,0,1,0-1.7-1.7L12.7,14.756l-1.452-1.464a1.2,1.2,0,0,0-1.7,1.7ZM24.8,2H3.2A1.2,1.2,0,0,0,2,3.2V24.8A1.2,1.2,0,0,0,3.2,26H24.8A1.2,1.2,0,0,0,26,24.8V3.2A1.2,1.2,0,0,0,24.8,2ZM23.6,23.6H4.4V4.4H23.6Z"
                                                            transform="translate(-2 -2)" fill="#da953a"/>
                                                    </svg>
                                                </span>
                        <span class="isCheck">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                                                      <g data-name="Composant 7 – 2" transform="translate(0.5 0.5)">
                                                        <g data-name="Rectangle 275" transform="translate(0 0)" fill="#da953a" stroke="#da953a" stroke-width="1">
                                                          <rect width="24" height="24" rx="6" stroke="none"/>
                                                          <rect x="0.5" y="0.5" width="23" height="23" rx="5.5" fill="none"/>
                                                        </g>
                                                        <path d="M11.852,17.3a1.2,1.2,0,0,0,1.7,0l4.9-4.9a1.2,1.2,0,1,0-1.7-1.7L12.7,14.756l-1.452-1.464a1.2,1.2,0,0,0-1.7,1.7ZM24.8,2H3.2A1.2,1.2,0,0,0,2,3.2V24.8A1.2,1.2,0,0,0,3.2,26H24.8A1.2,1.2,0,0,0,26,24.8V3.2A1.2,1.2,0,0,0,24.8,2ZM23.6,23.6H4.4V4.4H23.6Z" transform="translate(-2 -2)" fill="#da953a" stroke="#da953a" stroke-width="1"/>
                                                        <path data-name="d62ff70270774c6e6e679f7a8c643f83" d="M11.852,17.3a1.2,1.2,0,0,0,1.7,0l4.9-4.9a1.2,1.2,0,1,0-1.7-1.7L12.7,14.756l-1.452-1.464a1.2,1.2,0,0,0-1.7,1.7ZM24.8,2H3.2A1.2,1.2,0,0,0,2,3.2V24.8A1.2,1.2,0,0,0,3.2,26H24.8A1.2,1.2,0,0,0,26,24.8V3.2A1.2,1.2,0,0,0,24.8,2ZM23.6,23.6H4.4V4.4H23.6Z" transform="translate(-2 -2)" fill="#fff" stroke="#da953a" stroke-width="1"/>
                                                      </g>
                                                    </svg>
                                                </span>
                        <label class="mt-1 text-green-500 text-lg xl:text-2xl"
                               for="newsletter">{{__('login_register.newsletter')}}</label>
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
