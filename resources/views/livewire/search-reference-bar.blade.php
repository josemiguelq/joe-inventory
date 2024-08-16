<div>

    <input
        type="text"
        class="form-select"
        placeholder="Search Ref..."
        wire:model.live="query"
{{--        wire:keydown.escape="reset"--}}
{{--        wire:keydown.tab="reset"--}}
{{--        wire:keydown.arrow-up="decrementHighlight"--}}
{{--        wire:keydown.arrow-down="incrementHighlight"--}}
{{--        wire:keydown.enter="selectReference"--}}
    />

    @if(!empty($query))
        <div class="z-1000 w-full bg-white rounded-t-none shadow-lg list-group">
            @if(!empty($references))
                @foreach($references as $i => $reference)
                    <p class="list-item ">{{ $reference['name'] }}</p>
                @endforeach
            @else
                <div class="list-item">No results!</div>
            @endif
        </div>
    @endif
</div>
