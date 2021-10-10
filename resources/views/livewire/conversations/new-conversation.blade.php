<form>
    <div class="form-group">
      <input type="text" class="form-control" id="message" wire:model="message"  placeholder="Enter Message">
    </div>
    <div class="form-group">

        <button class="btn btn-primary m-auto" wire:click.prevent="newMessage">talk to stranger</button>
    </div>
</form>
