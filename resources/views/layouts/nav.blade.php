<div class="site-menubar site-menubar-light">
    <div class="site-menubar-body">
        <ul class="site-menu" data-plugin="menu">
            <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                    <span class="site-menu-title">Dashboard</span>
                    <div class="site-menu-badge">
                        <span class="badge badge-pill badge-success">3</span>
                    </div>
                </a>
                <ul class="site-menu-sub">
                    <li class="site-menu-item active">
                        <a class="animsition-link" href="index.html">
                            <span class="site-menu-title">Dashboard v1</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="dashboard/v2.html">
                            <span class="site-menu-title">Dashboard v2</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="dashboard/ecommerce.html">
                            <span class="site-menu-title">Ecommerce</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="dashboard/analytics.html">
                            <span class="site-menu-title">Analytics</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="dashboard/team.html">
                            <span class="site-menu-title">Team</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="site-menu-item has-sub {{Request::routeIs('admins.blogs.posts.*') ? 'active' : '' }}">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon wb-paperclip" aria-hidden="true"></i>
                    <span class="site-menu-title">
                        BLOG
                    </span>
                </a>
                <ul class="site-menu-sub">
                    <li class="site-menu-item {{Request::routeIs('admins.blogs.posts.create') ? 'active' : '' }}">
                        <a class="animsition-link" href="{{route('admins.blogs.posts.create')}}">
                            <span class="site-menu-title">
                                Ajouter un article
                            </span>
                        </a>
                    </li>
                    <li class="site-menu-item {{Request::routeIs('admins.blogs.posts.index') ? 'active' : '' }}">
                        <a class="animsition-link" href="{{route('admins.blogs.posts.index')}}">
                            <span class="site-menu-title">
                                Listes des articles
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon fa fa-facebook" aria-hidden="true"></i>
                    <span class="site-menu-title">
                        FACEBOOK
                    </span>
                </a>
                <ul class="site-menu-sub">
                    <li class="site-menu-item">
                        <a class="animsition-link" href="{{route('admins.facebooks.pages.create')}}">
                            <span class="site-menu-title">
                                Ajouter / Supprimer une page
                            </span>
                        </a>
                    </li>
                    @foreach(\Modules\Facebook\Entities\Page::all() as $page)
                        <li class="site-menu-item {{Request::routeIs('admins.blogs.posts.create') ? 'active' : '' }}">
                            <a class="animsition-link" href="{{route('admins.facebooks.pages.show',['id'=>$page->id])}}">
                            <span class="site-menu-title">
                                {{$page->facebook_name}}
                            </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>

        </ul>
    </div>
</div>