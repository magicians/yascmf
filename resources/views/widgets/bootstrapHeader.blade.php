    
    <!-- 前台bootstrap头部导航 -->
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="/" class="navbar-brand">{{ Cache::get('website_title','FansHub') }}</a>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main" aria-expanded="true">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navbar-main" aria-expanded="true" style="">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('home') }}">首页</a>
                    <li><a href="{{ route('about') }}">关于</a>
                    @inject('article_service', 'Douyasi\Services\ArticleService') {{-- Blade模版里面服务注入 Laravel 5.1 LTS 新增功能 --}}
                    @foreach($topPage as $tPage)
                    <li>
                        {{--<a href="{{ $article_service->getPageSlug($tPage->slug, $tPage->id) }}">{{ $tPage->title }}</a>--}}
                    </li>
                    @endforeach



                </ul>

                <ul class="nav navbar-nav navbar-right">

                    @if(Auth::check())
                        <li><a href="{{ route('admin') }}">后台</a></li>
                        <li><a href="{{ route('logout') }}">退出</a></li>
                    @else
                        {{--<li><a href="{{ route('login') }}">登陆</a></li>--}}

                    @endif
                </ul>

            </div>
        </div>
    </div>
