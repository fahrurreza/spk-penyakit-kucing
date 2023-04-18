<!-- Divider -->
<hr class="my-4 md:min-w-full" />
<!-- Heading -->
<h6
    class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
>
    User Pages
</h6>
<!-- Navigation -->

<ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
    <li class="items-center">
        <a href="{{url('/')}}" class="text-xs uppercase py-3 font-bold block {{ request()->is('/') ? '  text-pink-500 hover:text-pink-600' : ' text-blueGray-700 hover:text-blueGray-500'}}">
            <i class="fas fa-tv mr-2 text-sm opacity-75"></i> Dashboard
        </a>
    </li>

    <li class="items-center">
        <a href="{{url('/client')}}" class="text-xs uppercase py-3 font-bold block {{ request()->is('client', 'hasil') ? '  text-pink-500 hover:text-pink-600' : ' text-blueGray-700 hover:text-blueGray-500'}}">
            <i class="fas fa-clipboard-list text-blueGray-300 mr-2 text-sm"></i>
            Diagnosa
        </a>
    </li>
</ul>