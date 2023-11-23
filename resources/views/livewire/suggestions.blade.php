<div>
    <div class="flex flex-row items-center gap-1">
        <input type="text" wire:model.live="title" />

        <button type="button" wire:click="buttonAction" class="p-2 bg-blue-500 text-white rounded-lg">
            Suggest
        </button>

        <button type="button" wire:click="buttonAction2" class="p-2 bg-blue-500 text-white rounded-lg">
            Suggest 2
        </button>
    </div>

    <div>
        <ul>
            @foreach($list as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
