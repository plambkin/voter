<x-app-layout>
    <div>
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            <span class="ml-2">All Ideas</span>
        </a>
    </div>

    <div class="idea-container bg-white rounded-xl flex mt-4">

        <div class="flex flex-1 px-4 py-6">
            <div class="flex-none">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200*200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 ht-14 rounded-xl">

                </a>
            </div>

            <div class="w-full mx-4">
                <h4 class="text-xl font-semibold">
                    <a href="#" class="hover:underline"> A random title can go here</a>
                </h4>
                <div class="text-gray-600 mt-3 line-clamp-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum facere necessitatibus nihil quae
                    quis quisquam quo, quod totam. Animi architecto asperiores consectetur consequatur delectus
                    deserunt doloremque exercitationem explicabo illo illum ipsum iste labore magni maxime minima
                    modi molestias neque nesciunt nihil non officiis omnis porro possimus quod ratione, reiciendis
                    reprehenderit repudiandae, temporibus totam, ut velit vero vitae voluptate. Accusamus atque aut
                    culpa dolore mollitia saepe, sequi suscipit. Ab at beatae dicta doloremque doloribus dolorum
                    ducimus eligendi eos error, laudantium modi molestiae nihil nostrum nulla numquam obcaecati odit
                    perspiciatis quae quam quas quidem quos repellat repudiandae totam veritatis voluptatem
                    voluptates. Magni.
                </div>
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                        <div class="font-bold text-gray-900">John Doe</div>
                        <div>&bull;</div>
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>Category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 Comments</div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div
                            class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                            Open
                        </div>
                        <button
                            class=" hidden relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                            </svg>
                            <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Mark
                                        as Spam</a></li>
                                <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Delete
                                        Post</a></li>
                            </ul>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div> {{--  End ideas Container --}}

    <div class="buttons-container flex items-center justify-between mt-6">
        <div class="flex items-center space-x-4 ml-6">
            <button type="button"
                    class="flex items-center justify-center w-32 h-11 text-xs  text-white bg-blue font-semibold rounded-xl border border-blue transition duration-150 ease-in hover:bg-blue-hover px-6 py-3">

                        <span class="ml-1">
                            Reply
                        </span>
            </button>

            <button type="button"
                    class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 transition duration-150 ease-in hover:border-gray-400 px-6 py-3">

                <span>Set Status</span>

                <svg class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>

            </button>
        </div>
        <div class="flex items-center space-x-3">
            <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="tesxt-gray-400 text-xs leading-none">
                    Votes
                </div>
            </div>
        </div>
        <button type="button"
                class=" w-32 h-11 text-xs bg-gray-200 font-semibold uppercase rounded-xl border border-gray-200 transition duration-150 ease-in hover:border-gray-400 px-6 py-3">

            <span>Vote</span>

        </button>

    </div> {{-- End Buttons Container--}}

    <div class="comments-container relative space-y-6 ml-2 my-8">

        <div class="comment-container relative bg-white rounded-xl flex mt-4">

            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="https://source.unsplash.com/200*200/?face&crop=face&v=1" alt="avatar"
                             class="w-14 ht-14 rounded-xl">

                    </a>
                </div>

                <div class="w-full mx-4">
                    {{--                    <h4 class="text-xl font-semibold">
                                            <a href="#" class="hover:underline"> A random title can go here</a>
                                        </h4>--}}
                    <div class="text-gray-600 line-clamp-3 ">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum facere necessitatibus nihil quae
                        quis quisquam quo, quod totam. Animi architecto asperiores consectetur consequatur delectus
                        deserunt doloremque exercitationem explicabo illo illum ipsum iste labore magni maxime minima
                        modi molestias neque nesciunt nihil non officiis omnis porro possimus quod ratione, reiciendis
                        reprehenderit repudiandae, temporibus totam, ut velit vero vitae voluptate. Accusamus atque aut
                        culpa dolore mollitia saepe, sequi suscipit. Ab at beatae dicta doloremque doloribus dolorum
                        ducimus eligendi eos error, laudantium modi molestiae nihil nostrum nulla numquam obcaecati odit
                        perspiciatis quae quam quas quidem quos repellat repudiandae totam veritatis voluptatem
                        voluptates. Magni.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                        </div>

                    </div>
                </div>
            </div>

        </div> {{-- end comment container --}}

        <div class="comment-container relative bg-white is-admin rounded-xl flex mt-4">

            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="https://source.unsplash.com/200*200/?face&crop=face&v=2" alt="avatar"
                             class="w-14 ht-14 rounded-xl">

                    </a>
                    <div class="text-center uppercase text-blue text-xxs font-bold mt-1">Admin</div>
                </div>

                <div class="w-full mx-4">
                                        <h4 class="text-xl font-semibold">
                                            <a href="#" class="hover:underline"> Status changed to under construction</a>
                                        </h4>
                    <div class="text-gray-600 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum facere necessitatibus nihil quae
                        quis quisquam quo, quod totam. Animi architecto asperiores consectetur consequatur delectus
                        deserunt doloremque exercitationem explicabo illo illum ipsum iste labore magni maxime minima
                        modi molestias neque nesciunt nihil non officiis omnis porro possimus quod ratione, reiciendis
                        reprehenderit repudiandae, temporibus totam, ut velit vero vitae voluptate. Accusamus atque aut
                        culpa dolore mollitia saepe, sequi suscipit. Ab at beatae dicta doloremque doloribus dolorum
                        ducimus eligendi eos error, laudantium modi molestiae nihil nostrum nulla numquam obcaecati odit
                        perspiciatis quae quam quas quidem quos repellat repudiandae totam veritatis voluptatem
                        voluptates. Magni.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-blue">Andrea</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="comment-container relative bg-white rounded-xl flex mt-4">

            <div class="flex flex-1 px-4 py-6">
                <div class="flex-none">
                    <a href="#" class="flex-none">
                        <img src="https://source.unsplash.com/200*200/?face&crop=face&v=3" alt="avatar"
                             class="w-14 ht-14 rounded-xl">

                    </a>
                </div>

                <div class="w-full mx-4">
                    {{--                    <h4 class="text-xl font-semibold">
                                            <a href="#" class="hover:underline"> A random title can go here</a>
                                        </h4>--}}
                    <div class="text-gray-600 line-clamp-3">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum facere necessitatibus nihil quae
                        quis quisquam quo, quod totam. Animi architecto asperiores consectetur consequatur delectus
                        deserunt doloremque exercitationem explicabo illo illum ipsum iste labore magni maxime minima
                        modi molestias neque nesciunt nihil non officiis omnis porro possimus quod ratione, reiciendis
                        reprehenderit repudiandae, temporibus totam, ut velit vero vitae voluptate. Accusamus atque aut
                        culpa dolore mollitia saepe, sequi suscipit. Ab at beatae dicta doloremque doloribus dolorum
                        ducimus eligendi eos error, laudantium modi molestiae nihil nostrum nulla numquam obcaecati odit
                        perspiciatis quae quam quas quidem quos repellat repudiandae totam veritatis voluptatem
                        voluptates. Magni.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center text-xs font-semibold space-x-2 text-gray-400">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div>&bull;</div>
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>{{-- end comments container  --}}
</x-app-layout>
