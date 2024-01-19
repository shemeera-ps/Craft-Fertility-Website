<div {{ $attributes->merge(['class'=>"bg-white shadow-xl w-80 p-4  mx-auto mb-10"])}}>
    <div class="flex justify-center items-center">
        <i class="fa-solid fa-quote-left text-pink-400 text-4xl p-2"></i>
        <div class="flex flex-col">
            <h1 class="ml-2 font-bold text-black text-xl capitalize">{{$name}}</h1>
            <div class="flex text-yellow-400 ml-4">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>


        </div>
    </div>
    <p class="tracking-normal my-4">
        {{$review}}
    </p>
</div>