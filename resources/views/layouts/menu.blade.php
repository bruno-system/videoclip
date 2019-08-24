<li class="{{ Request::is('imgSliders*') ? 'active' : '' }}">
    <a href="{!! route('imgSliders.index') !!}"><i class="fa fa-image"></i><span>Img Sliders</span></a>
</li>

<li class="{{ Request::is('movieCategories*') ? 'active' : '' }}">
    <a href="{!! route('movieCategories.index') !!}"><i class="fa fa-edit"></i><span>Movie Categories</span></a>
</li>


<li class="{{ Request::is('movies*') ? 'active' : '' }}">
    <a href="{!! route('movies.index') !!}"><i class="fa fa-film"></i><span>Movies</span></a>
</li>

<li class="{{ Request::is('configurations*') ? 'active' : '' }}">
    <a href="{!! route('configurations.index') !!}"><i class="fa fa-fw fa-cogs"></i><span> Configurations</span></a>
</li>

<li >
    <a href="http://analisis.videocliplp.com.ar/"  TARGET="_blank"><i class="fa fa-fw fa-bar-chart"></i><span> Analytics Web</span></a>
</li>


