<x-commons.navigation></x-commons.navigation>
<main id="content">
    <a class="absolute text-green-500 left-28 top-56 font-sans text-xl underline" href="">Fil d'arianne</a>
    <section class="flex flex-col relative mb-32" aria-labelledby="name">
        <div class="relative">
            <div class="flex items-center justify-self-end mt-80 px-36">
                <div class="order-2 flex-1  ml-8 mt-32">
                    <div>
                        <h2 role="heading" id="name" aria-level="2"
                            class="text-4xl text-yellow-800 font-extrabold font-sans mb-3">{{$user->firstname}} {{$user->name}}</h2>
                        <p class="uppercase text-2xl">{{$user->status}}</p>
                    </div>
                    <div class="text-end">
                        <a href="/user/profile/{{$user->slug}}"
                           class="border-2 border-green-700 hover:text-green-700 hover:bg-white-100 font-sans text-center text-white-100 bg-green-700 px-10 py-3 rounded-2xl text-2xl font-semibold mb-32">{{__('user.user_save')}}</a>
                        <a href="/user/profile/{{$user->slug}}"
                           class="hover:text-orange-500 font-sans text-center text-green-700 ml-6 px-10 py-3 rounded-2xl text-2xl font-semibold mb-32">{{__('user.user_back')}}</a>
                    </div>
                </div>
                <img class="rounded-full " src="{{$user->avatar}}" alt="">
            </div>
            <img class="absolute -z-10 top-0 bottom-0 left-0 right-0"
                 src="{{$user->back_image}}" alt="">
        </div>
    </section>
    <section class="px-36 mb-32" aria-labelledby="modify">
        <h2 role="heading" id="modify" aria-level="2" class="text-4xl text-yellow-800 font-extrabold font-sans uppercase">{{__('user.user_modify_title')}}</h2>
        <div class="flex  mt-14">
            <form action="/" method="post" enctype="multipart/form-data" class="flex-1 flex gap-24">
                @csrf
                <div class="flex-1">
                    <div class="flex flex-1">
                        <fieldset class="flex flex-col flex-1 mr-10 mb-8">
                            <label class="text-green-500 text-2xl" for="name">{{__('user.user_modify_name')}}</label>
                            <input
                                class="focus:outline-3 focus:outline-green-700 border focus:bg-orange-100 border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight"
                                placeholder="{{__('user.user_modify_name_placeholder')}}" name="name" id="name" type="text" value="{{$user->name}}">
                        </fieldset>
                        <fieldset class="flex flex-col flex-1 mb-8">
                            <label class="text-green-500 text-2xl" for="surname">{{__('user.user_modify_firstname')}}</label>
                            <input
                                class="focus:outline-3 focus:outline-green-700 border focus:bg-orange-100 border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                                name="surname" id="surname" type="text" placeholder="{{__('user.user_modify_firstname_placeholder')}}" value="{{$user->firstname}} ">
                        </fieldset>
                    </div>
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="email">{{__('user.user_modify_mail')}}</label>
                        <input
                            class="focus:outline-3 focus:outline-green-700 border focus:bg-orange-100 border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="email" id="email" type="email" placeholder="{{__('user.user_modify_mail_placeholder')}}" value="{{$user->email}}">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8 mt-16">
                        <p class="text-green-500 text-2xl" >{{__('user.user_modify_picture')}}</p>
                        <div class="flex gap-4 items-center">
                            <label for="profil-picture" class="px-3 order-3 text-grey-200 flex flex-col justify-center items-center bg-gray-50 rounded-lg border border-orange-500 cursor-pointer">
                                <span class="flex flex-col justify-center items-center py-5 px-32">
                                    <span class="text-xl text-gray-500">{{__('user.user_modify_jpg')}} </span>
                                </span>
                                <input id="profil-picture" type="file" class="hidden" />
                            </label>
                                <img class="rounded-full -order-2" width="108" src="{{$user->avatar}}" alt="">
                        </div>
                    </fieldset>
                    <fieldset class="flex flex-col mb-8 mt-4">
                        <p class="text-green-500 text-2xl">{{__('user.user_modify_banner')}}</p>
                        <div class="flex gap-4 items-center">
                            <label for="banner" class="px-3 order-3 text-grey-200 flex flex-col justify-center items-center bg-gray-50 rounded-lg border border-orange-500 cursor-pointer">
                                <span class="flex flex-col justify-center items-center py-5 px-32">
                                    <span class="text-xl text-gray-500">{{__('user.user_modify_jpg')}} </span>
                                </span>
                                <input id="banner" type="file" class="hidden" />
                            </label>
                                <img class="rounded-full -order-2" src="https://placehold.jp/108x108.png" alt="">
                        </div>
                    </fieldset>
                </div>
                <div class="flex-1">
                    <fieldset class="flex flex-col mb-8">
                        <label class="text-green-500 text-2xl" for="status">{{__('user.user_modify_status')}}</label>
                        <input
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="status" id="status" type="text" placeholder="{{__('user.user_modify_status_placeholder')}}" value="{{($user->status)}}">
                    </fieldset>
                    <fieldset class="flex flex-col mb-8 mt-16">
                        <label class="text-green-500 text-2xl" for="description">{{__('user.user_modify_description')}}</label>
                        <textarea
                            class="border border-orange-500 rounded-xl py-2 px-3 text-gray-700 leading-tight focus:outline-3 focus:outline-green-700 border focus:bg-orange-100"
                            name="description" id="description" cols="30" rows="10"
                            placeholder="{{__('user.user_modify_description')}}"></textarea>
                    </fieldset>
                </div>
            </form>
        </div>
    </section>
</main>
<x-commons.footer></x-commons.footer>
</body>
</html>
