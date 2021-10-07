<form action="#" class="bg-light" x-data="conversationReplyState()" wire:submit.prevent="reply"
    enctype="multipart/form-data">
    <div class="input-group">
        <input type="text" wire:model="model" x-on=keydown.enter="submit" placeholder="Type a message"
            aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light">
        <div class="input-group-append">
            <button id="button-addon1" type="button" x-on:click="attach" class="btn btn-link"> <em
                    class="fas fa-paperclip file-browser"></em></button>
            <input type="file" id="file_upload" wire:model="attachment" name="attachment" style="display:none">
            <button id="button-addon2" type="submit" x-ref="submit" class="btn btn-link"> <em
                    class="fa fa-paper-plane"></em></button>
        </div>
    </div>
</form>

<script type="application/javascript">
    function conversationReplyState() {
        return {
            attach(){
                document.getElementById('file_upload')
            },
            submit() {
                this.$refs.submit.click();
            }
        }
    }
</script>
