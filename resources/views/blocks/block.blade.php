@foreach($lol as $block )
    @if($block->container=='image')
    <div class="m-0 py-3 row h-100 w-100 " style=" background-size: cover;background-repeat:no-repeat ;  background-position: center; background-image: url({{ url('/uploads/blocks',$block->backgroundImage)}});">
    </div>
    @elseif($block->container=='menu')
        <div style="background-color: #ebebeb; " class="py-2">
            <div class="container">
                <div class="row justify-content-between">
                        <div class=" logo" style=" background-image: url({{ url('/uploads/blocks/logo.png')}});"> </div>
                    <div class=" d-none econ flex-row-reverse ">
                        <button class=" btn btn-success menu-button menu-btn " onclick="myFunction()"></button>
                    </div>
                    <div class="topnav "  id="myTopnav">{!! \App\utils\Helper::renderMenu() !!}</div>
                </div>
            </div>
        </div>
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " menu";
                } else {
                    x.className = "topnav";
                }
            }
        </script>

    @elseif($block->container=='header')
    <div class="container py-2">
        {!! $block->content!!}
    </div>
    @else

    @endif
@endforeach


