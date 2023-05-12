<template>

<section class="text-gray-600 body-font overflow-hidden ">
    <div class="container px-5 py-24 mx-auto ">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">プラン
            /会員価格</h1>
        </div>

        <div class="flex flex-wrap -m-4 justify-center">
            <div class="p-4 xl:w-2/6 md:w-1/2 w-full">

                <div class="h-full p-6 rounded-lg border-2 border-gray-300 flex flex-col relative overflow-hidden">
                    <h2 class="text-sm tracking-widest title-font mb-1 font-medium">無料会員</h2>
                    <h1 class="text-5xl text-gray-900 pb-4 mb-4 border-b border-gray-200 leading-none">0円</h1>
                    <p class="text-xs text-gray-500 mt-3">ユーザーに役立つ機能</p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                        </span>レシピ閲覧
                    </p>
                    <p class="flex items-center text-gray-600 mb-2">
                        <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                            <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                        </span>ブックマーク(上限あり)
                    </p>
                    <button class="flex items-center mt-auto text-white bg-gray-400 border-0 py-2 px-4 w-full focus:outline-none hover:bg-gray-500 rounded">
                        利用を開始する
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </button>
            </div>
        </div>

        <div class="p-4 xl:w-2/6 md:w-1/2 w-full">
            <div class="h-full p-6 rounded-lg border-2 border-pink-500 flex flex-col relative overflow-hidden">
                <span class="bg-pink-500 text-white px-3 py-1 tracking-widest text-xs absolute right-0 top-0 rounded-bl">人気上昇中</span>
                <h2 class="text-sm tracking-widest title-font mb-1 font-medium">有料会員</h2>
                <h1 class="text-5xl text-gray-900 leading-none flex items-center pb-4 mb-4 border-b border-gray-200">
                    <span>1,000円</span>
                    <span class="text-lg ml-1 font-normal text-gray-500">/月</span>
                </h1>
                <p class="text-xs text-gray-500 mt-3">無料の機能に加え、様々な機能が充実しています。</p>
                <p class="flex items-center text-gray-600 mb-2">
                <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                </span>レシピ閲覧/投稿
                </p>
                <p class="flex items-center text-gray-600 mb-2">
                <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                </span>栄養士慣習のレシピ、記事の閲覧
                </p>
                <p class="flex items-center text-gray-600 mb-2">
                <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                </span>掲示板
                </p>
                <p class="flex items-center text-gray-600 mb-2">
                <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                </span>栄養士へ相談(別途料金)
                </p>
                <p class="flex items-center text-gray-600 mb-2">
                <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                </span>天気予報や占い、お役立ち情報
                </p>
                <p class="flex items-center text-gray-600 mb-6">
                <span class="w-4 h-4 mr-2 inline-flex items-center justify-center bg-gray-400 text-white rounded-full flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                    <path d="M20 6L9 17l-5-5"></path>
                    </svg>
                </span>お子さんにおススメレシピの配信
                </p>
                <button class="flex items-center mt-auto text-white bg-pink-500 border-0 py-2 px-4 w-full focus:outline-none hover:bg-pink-600 rounded">
                    利用を開始する
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </button>
                <!-- <p class="text-xs text-gray-500 mt-3">Literally you probably haven't heard of them jean shorts.</p> -->
            </div>
        </div>

        </div>
    </div>
</section>

</template>