<aside class="sidebar" theme="dark">


    <button class="collapse-toggle"></button>
    <section class="sidebar__section sidebar__section--menu">
        <h2 class="sidebar__subtitle"></h2>
        <nav class="nav">
            @php
                $agent = \App\Models\Agent::where('user_id', auth()->user()->id)->first();
            @endphp

            @isset($agent->pict)
                <div class="gambar-sidebar" id="gambar-sidebar">
                    <img src="{{ asset('storage/' . $agent->pict) }}" alt="Agent Picture" class="rounded-full w-9 h-9"
                        style="width:80px; height:80px;">
                </div>
            @endisset
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="{{ route('dashboard') }}" class="nav__link">
                        <span class="nav__icon nav__icon--home"></span>
                        <span class="nav__text">Dashboard</span>
                        <span class="nav__count">10</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="{{ route('updateagent') }}" class="nav__link">
                        <span class="nav__icon nav__icon--users"></span>
                        <span class="nav__text">Update Keagenan</span>
                    </a>
                </li>
                @auth
                    @if (auth()->user()->agent)
                        @php
                            $agentCategoryID = auth()->user()->agent->agentcategories_id;
                        @endphp

                        @if ($agentCategoryID == 1)
                            {{-- Menu Selling --}}
                            <li class="nav__item">
                                <a href="#" class="nav__link">
                                    <span class="nav__icon nav__icon--task"></span>
                                    <span class="nav__text">Selling</span>
                                </a>
                            </li>
                            <li class="nav__item">
                                <a href="{{ route('updateagent') }}" class="nav__link">
                                    <span class="nav__icon nav__icon--activity"></span>
                                    <span class="nav__text">Data Produk</span>
                                </a>
                            </li>

                            {{-- Menu lain untuk kategori Selling --}}
                            {{-- <li class="nav__item">
                                <a href="#" class="nav__link">
                                    <span class="nav__icon"></span>
                                    <span class="nav__text">Menu Lain untuk Selling</span>
                                </a>
                            </li> --}}
                        @elseif($agentCategoryID == 2)
                            {{-- Menu Purchasing --}}
                            <li class="nav__item">
                                <a href="#" class="nav__link">
                                    <span class="nav__icon nav__icon--notifications"></span>
                                    <span class="nav__text">Purchasing</span>
                                    <span class="nav__count">21</span>
                                </a>
                            </li>
                            <li class="nav__item">
                                <a href="{{ route('updateagent') }}" class="nav__link">
                                    <span class="nav__icon nav__icon--activity"></span>
                                    <span class="nav__text">Data Produk</span>
                                </a>
                            </li>

                            {{-- Menu lain untuk kategori Purchasing --}}
                            {{-- <li class="nav__item">
                                <a href="#" class="nav__link">
                                    <span class="nav__icon"></span>
                                    <span class="nav__text">Menu Lain untuk Purchasing</span>
                                </a>
                            </li> --}}
                        @endif
                    @endif
                @endauth



            </ul>
        </nav>
    </section>

    <hr class="divider">

    <section class="sidebar__section sidebar__section--settings">
        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="#" class="nav__link">
                        <span class="nav__icon nav__icon--settings"></span>
                        <span class="nav__text">Settings</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#" class="nav__link">
                        <span class="nav__icon nav__icon--report"></span>
                        <span class="nav__text">Report</span>
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#" class="nav__link">
                        <span class="nav__icon nav__icon--support"></span>
                        <span class="nav__text">Support</span>
                    </a>
                </li>
            </ul>
        </nav>
    </section>

    <hr class="divider divider--transparent">
</aside>
