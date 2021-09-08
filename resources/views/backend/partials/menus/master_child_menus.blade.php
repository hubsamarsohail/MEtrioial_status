<ul class='nav nav-treeview'>

    @foreach($userMenus as $k => $menu)

        <li class='nav-item has-treeview'>
            <a class='nav-link ' href='{{ $menu['route'] == '' ? 'javascript:void(0)' : route($menu['route']) }}'>
                <i class="nav-icon fas fa-arrow-right"></i>
                <p>
                    {{$menu['title']}}
                    @foreach($menu as $key => $m)
                        @if(is_array($m))
                            <i class="right fas fa-angle-left"></i>
                            @php
                                break;
                            @endphp
                        @endif
                    @endforeach
                </p>
            </a>
            @foreach($menu as $key => $m)

                @if(is_array($m))
{{--                    {{ dd() }}--}}
                    @include('backend.partials.menus.master_child_menus', ['userMenus' => [$m]])
                @endif
            @endforeach
        </li>
    @endforeach
</ul>
