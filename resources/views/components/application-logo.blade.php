{{-- <span {{ $attributes->merge(['class' => 'flex justify-center items-center']) }}>
    <img src="{{ asset('img/applicationlogo.png') }}" alt="">
    <p class="text-4xl ml-2 font-boldglacial font-bold text-green-dark tracking-normal">
        iKuryente
    </p>
</span> --}}


<span {{ $attributes->merge(['class' => 'relative flex justify-center items-center w-auto']) }}>
    <img style="max-width: 100%; height: auto;" src="{{ asset('img/applicationlogo.png') }}" alt="">
    <p style="font-size: 2.5vw;" class="ml-1 font-boldglacial font-bold text-green-dark tracking-normal">
        iKuryente
    </p>
</span>