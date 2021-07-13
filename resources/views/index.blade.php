<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full border-none text-sm rounded-xl px-4 py-2">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>

        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full border-none text-sm rounded-xl px-4 py-2">
                <option value="Filter One">Filter One</option>
                <option value="Filter Two">Filter Two</option>
                <option value="Filter Three">Filter Three</option>
                <option value="Filter Four">Filter Four</option>
            </select>
        </div>

        <div class="w-2/3 relative">

            <input type="search" placeholder="Find an Idea"
                   class="w-full rounded-xl bg-white px-4 py-2 pl-8 border-none text-sm placeholder-text-gray-700">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </div>
        </div>


    </div>{{--    end of filters--}}

    <div class="ideas-container space-y-6 my-6">
        <div class="idea-container hover:shadow-card bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                    <div class="mt-8">
                        <button
                            class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">
                            Vote
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200*200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 ht-14 rounded-xl">

                </a>
                <div class="mx-4">
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
                                class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>{{-- end idea container --}}


        <div class="idea-container hover:shadow-card bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                    <div class="mt-8">
                        <button
                            class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">
                            Vote
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200*200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 ht-14 rounded-xl">

                </a>
                <div class="mx-4">
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
                                class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>{{-- end idea container --}}

        <div class="idea-container hover:shadow-card bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                    <div class="mt-8">
                        <button
                            class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">
                            Vote
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200*200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 ht-14 rounded-xl">

                </a>
                <div class="mx-4">
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
                                class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>{{-- end idea container --}}

        <div class="idea-container hover:shadow-card bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes</div>
                    <div class="mt-8">
                        <button
                            class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xxs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">
                            Vote
                        </button>
                    </div>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200*200/?face&crop=face&v=1" alt="avatar"
                         class="w-14 ht-14 rounded-xl">

                </a>
                <div class="mx-4">
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
                                class=" relative bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in py-2 px-3">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                                </svg>
                                <ul class="absolute w-44 text-left font-semibold bg-white shadow-dialog rounded-xl py-3 ml-8">
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 px-5 py-3 transition duration-150 ease-in">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>{{-- end idea container --}}



    </div> {{--    end ideas container--}}

</x-app-layout>
