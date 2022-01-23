@if (5>10)
    <p>5 is lower than 10</p>
@elseif (5 == 10)
    <p>5 is indeed lower than 10</p>
@else
    <h2>All conditions are wrong.</h2>
@endif

@unless (empty($name))
    <div> unless: Name isn't empty</div>
@endunless

@if (!empty($name))
    <div> if: Name isn't empty</div>
@endif

@empty($name)
    <div> empty: Name is empty</div>
@endempty

@isset($name)
    <div> isset: Name is set</div>
@endisset

{{-- @switch($type)
    @case(1)
        
        @break
    @case(2)
        
        @break
    @default
        
@endswitch --}}

