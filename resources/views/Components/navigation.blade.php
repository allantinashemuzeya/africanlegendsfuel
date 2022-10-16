<div>
    <nav
        id="site-navigation"
        class="main-navigation"
        aria-label="Primary Menu"
        data-sticky-height="70"
    >
        <button
            id="menu-toggle"
            class="menu-toggle">
      <span
          class="tm-hide"
      >Toggle
      menu</span><i class="tm-tectxon-icon-bars"
            ></i>
        </button>
        <div
            class="nav-menu"
        >
            <ul
                id="menu-main-menu"
                class="nav-menu">

                @if($current === 'Home')
                    <li
                        id="menu-item-4757"
                        class="menu-item menu-item-type-post_type current-menu-ancestor menu-item-object-page menu-item-home menu-item-4757">
                            <a href="{{route('home')}}" aria-current="page">Home
                            </a>

                    </li>
                @else
                    <li
                        id="menu-item-4757"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4757">
                        <a href="{{route('home')}}" aria-current="page">Home
                        </a>

                    </li>

                @endif

                {{--Services--}}
                @if($current === 'Services')
                    <li
                        id="menu-item-4757"
                        class="menu-item menu-item-type-post_type current-menu-ancestor menu-item-object-page menu-item-home menu-item-4757">
                            <a href="{{route('services')}}" aria-current="page">BUNKERING & SERVICES
                            </a>
                    </li>
                @else
                    <li
                        id="menu-item-4757"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4757">
                        <a href="{{route('services')}}" aria-current="page">BUNKERING & SERVICES
                        </a>
                    </li>
                @endif

                {{--Responsibility--}}
                @if($current === 'Responsibility')
                    <li
                        id="menu-item-4757"
                        class="menu-item menu-item-type-post_type current-menu-ancestor menu-item-object-page menu-item-home menu-item-4757">
                            <a href="{{route('responsibility')}}" aria-current="page">Responsibility
                            </a>

                    </li>
                @else
                    <li
                        id="menu-item-4757"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4757">
                        <a href="{{route('responsibility')}}" aria-current="page">Responsibility
                        </a>
                    </li>
                @endif

                {{--Contact--}}
                @if($current === 'Contact')
                    <li
                        id="menu-item-4757"
                        class="menu-item menu-item-type-post_type current-menu-ancestor menu-item-object-page menu-item-home menu-item-4757">
                            <a href="{{route('contact')}}" aria-current="page">Contact
                            </a>

                    </li>
                @else
                    <li
                        id="menu-item-4757"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-4757">
                        <a href="{{route('contact')}}" aria-current="page">Contact
                        </a>
                    </li>
                @endif

            </ul>
        </div>
        <div
            class="kw-phone"
        >
            <div
                class="tm-header-icons"
            >
                <div
                    class="tm-header-icon tm-header-search-link"
                >
                    <a
                        href="#"
                    ><i
                            class="tm-tectxon-icon-search"
                        ></i
                        ></a>
                    <div
                        class="tm-search-overlay"
                    >
                        <form
                            method="get"
                            class="tm-site-searchform"
                            action="https://themetechmount.com/wordpress/tectxon/demo3"
                        >
                            <div
                                class="w-search-form-h"
                            >
                                <div
                                    class="w-search-form-row"
                                >
                                    <div
                                        class="w-search-input"
                                    >
                                        <input
                                            type="search"
                                            class="field searchform-s"
                                            name="s"
                                            placeholder="Type Word Then Enter.."
                                        />
                                        <button
                                            type="submit"
                                        >
                              <span
                                  class="tm-tectxon-icon-search"
                              ></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div
                class="ttm-custombutton"
            >
                <a
                    href="../contact-us/index.html"
                    class="tm-cta-button"
                >GET
                    CONSULTING!</a
                >
            </div>
        </div>
    </nav>
    <!-- .main-navigation -->
</div>
</div>
