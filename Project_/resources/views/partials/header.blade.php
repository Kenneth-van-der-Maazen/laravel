<header class="klm-header">
    {{-- TOPBAR --}}
    <div class="klm-topbar">
    <div class="klm-container">
        {{-- LINKS: LOGO --}}
        <a class="klm-brand" href="{{ url('/') }}">
            <span class="klm-logo"></span>
            <span class="klm-brand-text">ROCvA Bijlmer Airlines</span>
        </a>

        {{-- RECHTS: ACTIONS --}}
        <div class="klm-top-actions">
            <button class="klm-icon-btn" aria-label="Search" type="button">
                🔍
            </button>

            <a class="klm-link" href="#">
                Netherlands - EN
            </a>

            <a class="klm-link" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="8%" height="8%" fill="none" viewBox="0 0 32 32" fit="" preserveAspectRatio="xMidYMid meet" focusable="false"><path fill="#072b45" d="M17.49 7.335c0-1.27-.007-1.74-.103-2.107A3.15 3.15 0 0 0 15.14 2.98c-.366-.096-.848-.103-2.14-.103s-1.774.007-2.14.103a3.15 3.15 0 0 0-2.248 2.248c-.096.366-.103.838-.103 2.107s.007 1.742.103 2.108a3.15 3.15 0 0 0 2.247 2.247c.367.097.848.104 2.14.104s1.775-.007 2.141-.104a3.15 3.15 0 0 0 2.247-2.247c.096-.366.103-.838.103-2.108m1.7 0c0 1.163.007 1.908-.159 2.541a4.85 4.85 0 0 1-3.459 3.458c-.633.166-1.39.16-2.572.16-1.184 0-1.94.006-2.573-.16a4.85 4.85 0 0 1-3.458-3.458c-.167-.633-.16-1.378-.16-2.541s-.007-1.908.16-2.54a4.85 4.85 0 0 1 3.458-3.458c.632-.166 1.39-.16 2.573-.16s1.94-.006 2.572.16a4.85 4.85 0 0 1 3.459 3.458c.166.632.16 1.377.16 2.54M15 16.066v1.7h-4.918c-1.031 0-1.466.002-1.82.048a5.816 5.816 0 0 0-5.031 5.03c-.045.354-.048.79-.048 1.82h-1.7c0-.978-.001-1.547.061-2.036a7.52 7.52 0 0 1 6.501-6.501c.49-.063 1.059-.06 2.037-.06z"></path>
                    <path fill="#d40504" fill-rule="evenodd" d="M22.316 15a7.316 7.316 0 1 1 0 14.633l-.377-.01A7.317 7.317 0 0 1 22.316 15m.223 6.328L20.211 19l-1.201 1.201 2.328 2.328L19 24.87l1.202 1.2 2.338-2.338 2.338 2.338 1.201-1.2-2.338-2.339 2.33-2.329L24.867 19z" clip-rule="evenodd"></path>
                </svg>
                Log in
            </a>

        </div>
    </div>
</div>

    {{-- NAVBAR --}}
    <nav class="klm-nav" aria-label="Main">
    <div class="klm-container">

        <a class="klm-nav-link {{ request()->is('/') ? 'is-active' : '' }}" href="{{ url('/') }}">Book a holiday</a>

        <a class="klm-nav-link" href="/en/tickets">My Tickets</a>
        <a class="klm-nav-link" href="/en/special-offers">Special Offers</a>

        {{-- DROPDOWN: Information --}}
        <div class="klm-dropdown" data-dropdown>
            <button class="klm-nav-link klm-dropdown-trigger" type="button" aria-expanded="false">
                Information
                <span class="klm-caret" aria-hidden="true">▾</span>
            </button>

            <div class="klm-mega" role="menu" aria-label="Information menu">
                <div class="klm-mega-inner">
                    <div class="klm-mega-col">
                        <p class="klm-mega-title">Book and manage your trip</p>
                        <a class="klm-mega-link" href="#">Baggage</a>
                        <a class="klm-mega-link" href="#">Deals and destinations</a>
                        <a class="klm-mega-link" href="#">Find your destination</a>
                        <a class="klm-mega-link" href="#">Ticket options and services</a>
                        <a class="klm-mega-link" href="#">Managing your booking</a>
                        <a class="klm-mega-link" href="#">Extra options for your trip</a>
                        <a class="klm-mega-link" href="#">Refund and compensation</a>
                    </div>

                    <div class="klm-mega-col">
                        <p class="klm-mega-title">Get ready to travel</p>
                        <a class="klm-mega-link" href="#">Travel documents</a>
                        <a class="klm-mega-link" href="#">At the airport</a>
                        <a class="klm-mega-link" href="#">Onboard experience and services</a>
                        <a class="klm-mega-link" href="#">Travelling with kids</a>
                        <a class="klm-mega-link" href="#">Travelling with pets</a>
                        <a class="klm-mega-link" href="#">Assistance and health</a>
                        <a class="klm-mega-link" href="#">Sustainability</a>
                    </div>

                    <div class="klm-mega-col">
                        <p class="klm-mega-title">How can we help you?</p>
                        <a class="klm-mega-link" href="#">Contact us</a>
                        <a class="klm-mega-link" href="#">Flight Status</a>
                        <a class="klm-mega-link" href="#">Travel alerts</a>
                        <a class="klm-mega-link" href="#">Stay informed</a>
                    </div>

                    <div class="klm-mega-col">
                        <p class="klm-mega-title">Frequent flyers and corporate travellers</p>
                        <a class="klm-mega-link" href="#">Flying Blue</a>
                        <a class="klm-mega-link" href="#">Business travel</a>
                    </div>
                </div>
            </div>
        </div>

        <a class="klm-nav-link" href="/en/information/support">Support</a>
    </div>
</nav>

</header>
