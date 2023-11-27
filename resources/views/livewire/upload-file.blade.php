<div>
    @if ($foto)
        <img src="{{ $foto->temporaryUrl() }}" style="
        border-radius:50%; margin: 0 auto; width:100px; display: block; aspect-ratio:1/1">
    @endif
    <div class="mb-3">
        <label for="" class="form-label">Choose file</label>
        <input required wire:model='foto' type="file" class="form-control" name="foto" id="" placeholder="" aria-describedby="fileHelpId">
    </div>
</div>
