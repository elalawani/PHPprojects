@extends('layouts.app')


@section('content')

    <div class="hero-bg-image flex flex-col items-center justify-center">
        <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10 text-center">Welcome</h1>
        <a href="/" class="bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase text-xl">Start reading</a>

    </div>

    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">
        <div class="mx-2 md:mx-0">
            <img class="sm:rounded-lg" src="https://picsum.photos/id/175/960/620">
        </div>

    <div class="flex flex-col items-left justify-center m-10 sm:m-0">
        <h2 class="font-bold text-gray-700 text-4xl uppercase">
            Lorem ipsum dolor sit.
        </h2>
        <p class="font-bold text-gray-600 text-xl pt-2">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam, obcaecati.
        </p>
        <p class="py-4 text-gray-500 text-sm leading-5">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores consequuntur explicabo illum impedit modi molestias obcaecati omnis quas tempore!
        </p>
        <a href="/" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start">read more</a>
    </div>
    </div>

    <div class="text-center p-15 bg-gray-700 text-gray-100" >
        <h2 class="text-2xl">
            Blog categories
        </h2>
        <div class="container mx-auto pt-10 sm:grid grid-cols-4">
            <div class="font-bold text-3xl py-2">Design</div>
            <div class="font-bold text-3xl py-2">programming</div>
            <div class="font-bold text-3xl py-2">front-end</div>
            <div class="font-bold text-3xl py-2">back-end</div>
        </div>
    </div>

    <div class="container mx-auto text-center py-15">
        <h2 class="font-bold text-5xl py-10"> Recent post</h2>
        <p class="text-gray-400 leading-6 px-10">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Alias aliquid atque aut cum dolor excepturi inventore magni maxime numquam optio possimus quae quia
            repellat repellendus reprehenderit sed, sit, suscipit voluptates. Accusantium consequuntur dolore earum eius
            ex facilis illum ipsa, iusto libero magni modi officia possimus praesentium qui quo sapiente sequi similique
            suscipit tenetur voluptates! A commodi consequatur est inventore ipsum laboriosam libero magni,
            minus molestiae mollitia quae quia quidem quos, repudiandae, sapiente tempora ut. Adipisci aliquam at
            beatae cumque deleniti fugiat hic incidunt libero molestias nemo,
            non nostrum odit placeat quaerat quasi qui repellat saepe sit soluta vel velit voluptatum.
        </p>
    </div>
        <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
            <div class="flex bg-yellow-700 text-gray-100 pt-10">
                <div class="block m-auto pt-4 pb-15 w-4/5" >
                    <ul class="md:flex text-xs gap-2">
                        <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300">
                            <a href="/">php</a>
                        </li>
                        <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300">
                            <a href="/">programming</a>
                        </li>
                        <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300">
                            <a href="/">languages</a>
                        </li>
                        <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300">
                            <a href="/">backend</a>
                        </li>
                    </ul>
                    <h3 class="text-l py-10 leading-6">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquid amet
                        beatae blanditiis culpa eius est in magni natus nemo, quidem recusandae ut voluptatum.
                    </h3>
                    <a href="/" class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded font-bold uppercase text-l inline-block"> read more </a>
                </div>
            </div>
            <div class="flex">
                <img class="object-cover" src="https://picsum.photos/id/15/960/620" alt="">
            </div>
        </div>
@endsection

