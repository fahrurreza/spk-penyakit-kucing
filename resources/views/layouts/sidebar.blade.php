<!-- Divider -->
<hr class="my-4 md:min-w-full" />
<!-- Heading -->
<h6 class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline">
    Admin Layout Pages
</h6>
<!-- Navigation -->

<ul class="md:flex-col md:min-w-full flex flex-col list-none">
    <li class="items-center">
        <a href="{{url('/admin')}}" class="text-xs uppercase py-3 font-bold block {{ request()->is('admin') ? '  text-pink-500 hover:text-pink-600' : ' text-blueGray-700 hover:text-blueGray-500'}}">
            <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
            Dashboard
        </a>
    </li>

    <li class="items-center">
        <a href="{{url('/penyakit')}}" class="text-xs uppercase py-3 font-bold block {{ request()->is('penyakit') ? '  text-pink-500 hover:text-pink-600' : ' text-blueGray-700 hover:text-blueGray-500'}}">
            <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
            Penyakit
        </a>
    </li>

    <li class="items-center">
        <a href="{{url('/gejala')}}" class="text-xs uppercase py-3 font-bold block {{ request()->is('gejala') ? '  text-pink-500 hover:text-pink-600' : ' text-blueGray-700 hover:text-blueGray-500'}}">
            <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i>
            Gejala
        </a>
    </li>

    <li class="items-center">
        <a href="{{url('/ct')}}" class="text-xs uppercase py-3 font-bold block {{ request()->is('ct') ? '  text-pink-500 hover:text-pink-600' : ' text-blueGray-700 hover:text-blueGray-500'}}">
            <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i>
            Certainty Term
        </a>
    </li>

    <!-- <li class="items-center">
        <a href="{{url('/rule')}}" class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
            <i class="fas fa-table mr-2 text-sm text-blueGray-300"></i>
            Rule
        </a>
    </li>

    <li class="items-center">
        <a href="{{url('/rule_gejala')}}" class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
            <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
            Rule Gejala
        </a>
    </li>

    <li class="items-center">
        <a href="{{url('/rule_penyakit')}}" class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
            <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
            Rule Penyakit
        </a>
    </li>

    <li class="items-center">
        <a href="{{url('/setting')}}" class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500">
            <i class="fas fa-tools mr-2 text-sm text-blueGray-300"></i>
            Rule Base
        </a>
    </li> -->
    
</ul>