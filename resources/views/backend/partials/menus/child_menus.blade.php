<ul class='nav nav-treeview'>
    @foreach($Menus as $menu)
        <li class='nav-item has-treeview menu-open'
            style='margin: 10px 0 10px 0'>
            <div class="icheck-primary d-inline">
{{--                {{dd($menu->menu_id)}}--}}
                <input
                        @if(count($role_menus) > 0 && inArrAssociative('menu_id', $menu->menu_id, $role_menus))
                            checked
                        @endif
                        type="checkbox" name="menu_ids[]"
                        id="icheck_{{$menu->menu_id}}" value="{{$menu->menu_id}}"><label
                        for="icheck_{{$menu->menu_id}}">{{$menu->title}}</label></div>
            @if(count($menu->ChildMenus))
                @include('backend.partials.menus.child_menus', ['Menus' => $menu->ChildMenus, 'role_menus' => $role_menus])
            @endif
        </li>
    @endforeach
</ul>


