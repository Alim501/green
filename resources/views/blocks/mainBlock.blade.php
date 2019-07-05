@foreach($lol as $block )
    @if($block->container=="header")
        <div class="bg-tools">
            <div class="container py-4">
                <h2 class="text-white text-center">{!!$block->title!!}</h2>
            </div>
        </div>
    @endif
@endforeach

<div class="container py-2">
<div class="row ">
@foreach($lol as $block)
        @if($block->container=="main")
        <div class=" col-lg-3 py-5">

        </div>
@endif
@endforeach
</div>
</div>



        @foreach($lol as $block)
            @if($block->container=="footer")
                <div class="container py-3" style="background-color: #f7f7f7">
                    <div class="mb-3">{!! $block->title !!}</div>
                    <div>{!! $block->content !!}</div>
                </div>
            @endif
        @endforeach
