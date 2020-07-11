<!DOCTYPE html>
<html lang="{{ app()-> getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Rebuiding Twitter</title>

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>
<body class="bg-gray-300 font-sans">
    <div class="bg-white">
        <div class="container mx-auto flex items-center py-1 mr-4">
            <div class="w-2/5">
                <a href="#" class="text-sm font-semibold text-gray-700 mr-4 border-b-2 border-solid border-transparent pb-3 hover:text-green-700 hover:border-green-700"><i class="fa fa-home fa-lg mr-1" ></i>Home</a>
                <a href="#" class="text-sm font-semibold text-gray-700 mr-4 border-b-2 border-solid border-transparent pb-3 hover:text-green-700 hover:border-green-700"><i class="fa fa-bolt fa-lg mr-1" ></i>Moments</a>
                <a href="#" class="text-sm font-semibold text-gray-700 mr-4 border-b-2 border-solid border-transparent pb-3 hover:text-green-700 hover:border-green-700"><i class="fa fa-bell fa-lg mr-1" ></i>Notifications</a>
                <a href="#" class="text-sm font-semibold text-gray-700 mr-4 border-b-2 border-solid border-transparent pb-3 hover:text-green-700 hover:border-green-700"><i class="fa fa-envelope fa-lg mr-1 " ></i>Messages</a>
            </div>
            <div class="w-1/5 text-center">
                <a href="#" class="text-center"> <i class="fa fa-twitter fa-lg text-blue-600"></i></a>
            </div>
            <div class="w-2/5 flex justify-end mr-12">
                <div class="relative mt-1">
                    <input type="text" class="bg-white-300 rounded-full w-45 px-4 pl-8 py-2 h-8 focus:outline-none focus:shadow-outline" placeholder="Search Twitter">
                    <div class=" absolute flex items-center top-0 fill-current w-4 text-gray-500 mt-2 ml-2"><i class="fa fa-search text-gray"></i></div>
                </div>
                <div class="ml-2">
                    <a href="#"><img src="/img/avatar.jpg" alt="avatar" class="h-8 w-8 rounded-full"></a>
                </div>
                <div>
                    <button class="bg-teal-500 hover:bg-teal-700 rounded-full text-white font-medium px-4 py-1 ml-2 focus:outline-none">Tweet</button>
                </div>
            </div>
        </div><!--container-->
    </div>

    <div class="hero h-64 bg-cover"></div>

    <div class="bg-white shadow">
        <div class="container mx-auto flex items-center relative">
            <div class="w-1/4">
                <img src="/img/tailwind_logo.jpg" alt="logo" class="h-40 w-40 rounded-full absolute -mt-24 ml-12">
             
            </div>
            <div class="w-1/2 ml-12">
                <ul class="flex">
                    <li class="text-center text-teal-900 py-3 px-4 border-b-2 border-solid border-transparent hover:border-green-700 hover:text-blue-700"><a href="#" class="text-gray-700">
                      <div class="text-sm font-semibold mb-1">Tweets</div>
                      <div class="text-sm font-semibold">60</div>  
                      </a>
                    </li>
                    <li class="text-center text-teal-900 py-3 px-4 border-b-2 border-solid border-transparent hover:border-green-700 hover:text-blue-700"><a href="#">
                        <div class="text-sm font-semibold mb-1">Following</div>
                        <div class="text-sm font-semibold mb-1">4</div>  
                        </a>
                      </li >
                      <li class="text-center text-teal-900 py-3 px-4 border-b-2 border-solid border-transparent hover:border-green-700  hover:text-blue-700"><a href="#">
                        <div class="text-sm font-semibold mb-1">Followers</div>
                        <div class="text-sm font-semibold mb-1">3,456</div> 
                        </a> 
                      </li>
                      <li class="text-center text-teal-900 py-3 px-4 border-b-2 border-solid border-transparent hover:border-green-700  hover:text-blue-700"><a href="">
                        <div class="text-sm font-semibold mb-1">Likes</div>
                        <div class="text-sm font-semibold mb-1">9</div>  
                        </a>
                      </li>
                      <li class="text-center text-teal-900 py-3 px-4 border-b-2 border-solid border-transparent hover:border-green-700  hover:text-blue-700"><a href="">
                        <div class="text-sm font-semibold mb-1">Moments</div>
                        <div class="text-sm font-semibold mb-1">1</div>  
                      </a>
                      </li>
                </ul>
            </div>
            <div class="w-1/4 flex justify-end items-center">
                <div>
                    <button class="bg-teal-600 text-white rounded-full px-4 py-2 hover:bg-teal-900 mr-12">Following</button>
                </div>
                <div>
                    <a href="#" class="mr-12 text-gray-900"><i class="fa fa-ellipsis-v"></i></a>
                </div>  
            </div>
        </div> <!--end container-->
    </div>

    <div class="container flex mx-auto mt-3 text-sm leading-normal">
        <div class="w-1/4 pr-6 ml-20">
            <h1 class="text-black-900 font-bold mt-6"><a href="#">Tailwind CSS</a></h1>
            <div class="text-dark-100 font-sm mb-4"><a href="#">@tailwindcss</a></div>
            <div class="mb-4">
                A utility-first CSS framework for rapid UI development. Created by <a href="" class="text-teal-600">@adamwathan</a>, developed in collaboration with <a href="" class="text-teal-600">@adamwathan</a>, <a href="" class="text-teal-600">@steverogers</a>, <a href="" class="text-teal-600">@steveben.</a>
            </div>
            <div class="font-semibold"><i class="fa fa-link text-gray-800"></i><a href="#" class="text-teal-800 ml-1">tailwindcss.com</a></div>
            <div class="font-semibold"><i class="fa fa-calendar text-gray-800"></i><a href="#" class="text-teal-800 ml-1">joined August 2017</a></div>

            <div class="mb-4 mt-3">
                <button class="font-medium bg-teal-500 px-4 py-2 rounded-full h-10 w-full text-white">Tweet to Tailwind CSS</button>
            </div>

            <div class="mb-4 mt-3"><i class="fa fa-user text-gray-800"></i><a href="#" class="ml-1 text-blue-500">27 Followers you know</a></div>

            <div class="mb-4 flex">
                <a href="#"><img src="/img/follower01.jpg" class="h-12 w-12 rounded-full" alt="avatar"></a>
               <a href="#"><img src="/img/follower02.jpg" class="h-12 w-12 rounded-full" alt="avatar"></a>
                <a href="#"><img src="/img/follower03.jpg" class="h-12 w-12 rounded-full" alt="avatar"></a>
                <a href="#"><img src="/img/follower04.jpg" class="h-12 w-12 rounded-full" alt="avatar"></a>
                <a href="#"><img src="/img/follower05.jpg" class="h-12 w-12 rounded-full" alt="avatar"></a>
            </div>
            <div class="flex mb-4">
                <a href="#"><img src="/img/follower06.jpg" class="h-12 w-12 rounded-full" alt="avatar"></a>
                <a href="#"><img src="/img/follower07.jpg" class="h-12 w-12 rounded-full" alt="avatar"></a>
                <a href="#"><img src="/img/follower08.jpg" class="h-12 w-12 rounded-full" alt="avatar"></a>
                <a href=""><img src="/img/follower09.jpg" class="h-12 w-12 rounded-full" alt="avatar"></a>
                <a href=""><img src="/img/follower10.jpg" class="h-12 w-12 rounded-full" alt="avatar"></a>
            </div>
            <div class="mb-4"><i class="fa fa-picture-o text-gray-900 mr-1"></i>Photos and videos</div>

            <div class="flex mb-4">
                <a href="#"><img src="/img/photo1.jpg" class="h-12 w-12 mr-1" alt="avatar"></a>
                <a href="#"><img src="/img/photo2.jpg" class="h-12 w-12 mr-1" alt="avatar"></a>
                <a href="#"><img src="/img/photo3.jpg" class="h-12 w-12 mr-1 " alt="avatar"></a>
                <a href=""><img src="/img/photo4.jpg" class="h-12 w-12mr-1" alt="avatar"></a>      
            </div>
        </div>
        <div class="w-1/2 bg-white">
            <div class="mt-2 border-b border-solid border-gray-300">
                <a href="" class="text-black-600 ml-12 font-bold">Tweets</a>
                <a href="" class="text-blue-700 ml-12 font-bold">Tweets &amp; Replies</a>
                <a href="" class="text-blue-700 ml-12 font-bold">Media</a>
                <a href="" class="text-blue-700 ml-12 font-bold">Likes</a>
            </div>

            <div class="flex border-b border-solid border-gray-300 mt-2">
                <div class="1/8 text-right ml-8">
                    <div><i class="fa fa-thumb-tack text-gray-500 "></i></div>
                    <div><a href="#"><img src="/img/tailwind_logo.jpg" alt="avatar" class="h-12 w-12 rounded-full"></a></div>
                
                </div>
                <div class="w-7/8 ml-12  hover:bg-gray-100">
                    <div class="text-gray-500">Pinned Tweet</div>
                    <div>
                      <span><a href="" class="font-bold text-black-600">Tailwind CSS</a></span>
                        <span class="text-gray-500 font-bold">@tailwindcss.</span>
                        <span class="text-gray-500 font-bold"><a href="">May 14</a></span>
                    </div>

                    <div>
                        <div class="mb-4">
                            <p class="mb-4">🎉 We're hiring a developer to join the Tailwind team</p>
                            <p class="mb-4">Help us make UI development faster, easier, and a lot more fun Man juggling</p>
                            <p class="mr-2"><a href=""><img src="/img/tweet1.jpg" alt="tweet" class="border border-solid border-gray-300 rounded-md"></a></p>
                        </div>
                    </div>

                    <div class="pb-2">
                        <span class="mr-8"><a href="#" class="text-gray-600 hover:text-blue-600 hover:no-underline"><i class="fa fa-comment fa-lg mr-2"></i>9</a></span>
                        <span class="mr-8"><a href="#" class="text-gray-600 hover:text-green-600 hover:no-underline"><i class="fa fa-retweet fa-lg mr-2"></i>21</a></span>
                        <span class="mr-8"><a href="#" class="text-gray-600 hover:text-red-600 hover:no-underline"><i class="fa fa-heart fa-lg mr-2"></i>129</a></span>
                        <span class="mr-8"><a href="#" class="text-gray-600 hover:text-blue-600 hover:no-underline"><i class="fa fa-envelope fa-lg mr-2"></i>9</a></span>
                    </div>

                        <div>
                          <span><a href="" class="font-bold text-black-600">Tailwind CSS</a></span>
                            <span class="text-gray-500 font-bold">@tailwindcss.</span>
                            <span class="text-gray-500 font-bold"><a href="">May 14</a></span>
                        </div>
    
                        <div>
                            <div class="mb-4">
                                <p class="mb-4">🎉 We're hiring a developer to join the Tailwind team</p>
                                <p class="mb-4">Help us make UI development faster, easier, and a lot more fun Man juggling</p>
                                <p class="mr-2"><a href=""><img src="/img/tweet2.jpg" alt="tweet" class="border border-solid border-gray-300 rounded-md"></a></p>
                            </div>
                        </div>
    
                        <div class="pb-2">
                            <span class="mr-8"><a href="#" class="text-gray-600 hover:text-blue-600 hover:no-underline"><i class="fa fa-comment fa-lg mr-2"></i>10</a></span>
                            <span class="mr-8"><a href="#" class="text-gray-600 hover:text-green-600 hover:no-underline"><i class="fa fa-retweet fa-lg mr-2"></i>15</a></span>
                            <span class="mr-8"><a href="#" class="text-gray-600 hover:text-red-600 hover:no-underline"><i class="fa fa-heart fa-lg mr-2"></i>86</a></span>
                            <span class="mr-8"><a href="#" class="text-gray-600 hover:text-blue-600 hover:no-underline"><i class="fa fa-envelope fa-lg mr-2"></i>9</a></span>
                        </div>
                        <div>
                            <span><a href="" class="font-bold text-black-600">Tailwind CSS</a></span>
                              <span class="text-gray-500 font-bold">@tailwindcss.</span>
                              <span class="text-gray-500 font-bold"><a href="">May 14</a></span>
                          </div>
      
                          <div>
                              <div class="mb-4">
                                  <p class="mb-4">🎉 We're hiring a developer to join the Tailwind team</p>
                                  <p class="mb-4">Help us make UI development faster, easier, and a lot more fun Man juggling</p>
                                  <p class="mr-2"><a href=""><img src="/img/tweet2.jpg" alt="tweet" class="border border-solid border-gray-300 rounded-md"></a></p>
                              </div>
                          </div>
      
                          <div class="pb-2 mb-4">
                              <span class="mr-8"><a href="#" class="text-gray-600 hover:text-blue-600 hover:no-underline"><i class="fa fa-comment fa-lg mr-2"></i>10</a></span>
                              <span class="mr-8"><a href="#" class="text-gray-600 hover:text-green-600 hover:no-underline"><i class="fa fa-retweet fa-lg mr-2"></i>15</a></span>
                              <span class="mr-8"><a href="#" class="text-gray-600 hover:text-red-600 hover:no-underline"><i class="fa fa-heart fa-lg mr-2"></i>86</a></span>
                              <span class="mr-8"><a href="#" class="text-gray-600 hover:text-blue-600 hover:no-underline"><i class="fa fa-envelope fa-lg mr-2"></i>9</a></span>
                          </div>
                    </div>
                </div>
            </div>

            <div class="w-1/4 pl-2 border-b border-solid rounded-md">
                <div class="bg-gray-200 border border-solid border-gray-100 rounded-sm pl-2">
                    <div class="border-b border-solid border-gray-300 flex">
                        <h1 class="font-bold font-black-600 font-lg text-lg mt-1">Trends for you</h1>
                        <span class="ml-32 mt-1 mb-2"><a href="#"><i class="fa fa-cog fa-lg text-lg text-teal-500 hover:text-teal-500 mt-2"></i></a></span>
                    </div>

                    <div class="flex">
                        <h1 class="font-sm font-black-600 font-lg text-sm mt-1">punjabi music</h1>
                        <span class="ml-1 mt-1">Trending</span>
                    </div>
                    <div class="font-bold text-md text-black-500 mb-3">#KurtaPajamaFirstLook</div>
                    <div class="border-b border-solid border-gray-400 ml-1 mt-1">198k people are Tweeting about this</div>

                    <div class="flex">
                        <h1 class="font-sm font-black-600 font-lg text-sm mt-1">celebrities</h1>
                        <span class="ml-1 mt-1">Trending</span>
                    </div>
                    <div class="font-bold text-md text-black-500 mb-3 mt-1">#SidharthShukla</div>
                    <div class="mb-3 border-b border-solid border-gray-400 ml-1">50.2k people are Tweeting about this</div>
                    <div class="font-bold text-md text-black-500 mb-3 mt-3 ml-4">
                        <a href="" class="text-teal-500">Show more</a> 
                    </div>          
                </div>      
                <div class="mb-2 flex border-b border-gray-200 mt-1 bg-gray-200 py-3">
                    <div class="font-bold text-black-400 text-lg ml-2">Who to follow</div>
                </div>
                <div class=" flex border-b border-gray-300 mt-1 bg-gray-200 py-3 ">
                    <div class="mt-2">
                        <a href=""><img src="/img/follow1.jpg" alt="follow" class="h-12 w-12 rounded-full ml-2" ></a>
                    </div>
                    <div class="ml-3 mt-2">
                        <h1 class="text-lg font-bold text-black-500">Jason Lee</h1>
                        <span class="font-md text-gray-700 text-md">@jasonlee</span>
                        <div class="font-md text-gray-700 text-md mt-2">promoted</div>
                    </div>
                    <div class="ml-16 mt-6">
                        <button class="px-4 py-2 bg-teal-400 rounded-md hover:bg-blue-400 text-teal-700 text-md font-bold border border-blue-200 mr-4">Follow</button>
                    </div>
                </div>
                <div class=" flex border-b border-gray-300 bg-gray-200 py-3 ">
                    <div class="mt-2">
                        <a href=""><img src="/img/follow2.jpg" alt="follow" class="h-12 w-12 rounded-full ml-2" ></a>
                    </div>
                    <div class="ml-3 mt-2">
                        <h1 class="font-bold text-black-500">Amit Shah</h1>
                        <span class="font-md text-gray-700 text-md">@amitshah</span>
                    </div>
                    <div class="ml-16 mt-6">
                        <button class="px-4 py-2 bg-teal-400 rounded-md hover:bg-blue-400 text-teal-700 text-md font-bold border border-blue-200 mr-4">Follow</button>
                    </div>
                </div>
                <div class="mb-3 flex border-b border-gray-300 bg-gray-200 py-3 ">
                    <div class="mt-2">
                        <a href=""><img src="/img/follow2.jpg" alt="follow" class="h-12 w-12 rounded-full ml-2" ></a>
                    </div>
                    <div class="ml-3 mt-2">
                        <h1 class=" font-bold text-black-500">Amitabh</h1>
                        <span class="font-md text-gray-700 text-md">@siramitab</span>
                       
                    </div>
                    <div class="ml-16 mt-6">
                        <button class="px-4 py-2 bg-teal-400 rounded-md hover:bg-blue-400 text-teal-700 text-md font-bold border border-blue-200 mr-4">Follow</button>
                    </div>
                </div>
            </div>

        </div>   

    </div>
</body>
</html>