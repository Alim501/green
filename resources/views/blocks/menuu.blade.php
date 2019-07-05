<div class="d-flex flex-row-reverse  adaptive py-4 text-uppercase "  >
    @foreach($menu as $menuSection )
        <a href="{{$menuSection->link}}" class="mx-2 h6 text-dark font-weight-bold">{!! $menuSection->name !!}</a>
    @endforeach
</div>
