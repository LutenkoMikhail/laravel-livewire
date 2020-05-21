<div>
    <h2>Add Post</h2>

    <div class="form-group">
        <label for="title">Title</label>
        <input wire:model="title" type="text" class="form-control" id="title">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea wire:model="description" class="form-control" id="description" rows="4">
    </textarea>
    </div>
    <button wire:click="store()" class="btn btn-primary">Creat Post</button>

</div>
