


<form action="#" class="bg-light" x-data="conversationReplyState()" wire:submit.prevent="Reply"
    enctype="multipart/form-data">


    @if ($attachment)
    <div class="input-group">
        <div class="d-inline-flex align-items-center m-auto p-1 rounded border">
            <img src="{{ $attachment->temporaryUrl() }}" alt="" width="200">
        </div>
    </div>

    @endif
    <div class="input-group">
        <input type="text" wire:model="body" x-on=keydown.enter="submit" placeholder="Type a message"
            aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light">
        <div class="input-group-append">

            <button id="button-addon1" on:click="attach" onclick="attach();" class="btn btn-link"> <em
                    class="fas fa-paperclip file-browser"></em></button>

            <input type="file" id="file_upload" wire:model="attachment" name="attachment" style="display:none">

            <button id="button-addon2" type="submit" x-ref="submit" class="btn btn-link"> <em
                    class="fa fa-paper-plane"></em></button>
        </div>
    </div>
</form>

<script type="application/javascript">
    function attach(){
        document.getElementById('file_upload').click();
    }
    function conversationReplyState() {
        return {
            attach() {
                alert('hi');
                document.getElementById('file_upload').click();
            },
            submit() {
                this.$refs.submit.click();
            }
        }
    }
</script>
