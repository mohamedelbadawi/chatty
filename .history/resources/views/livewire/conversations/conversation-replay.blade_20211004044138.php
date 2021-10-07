<form action="#" class="bg-light" x-data="conversationReplyState()" wire:submit.prevent="reply"
    enctype="multipart/form-data">
    <div class="input-group">
        <input type="text"
        wire:model="model"
        x-on=keydown.enter="submit"

        placeholder="Type a message" aria-describedby="button-addon2"
            class="form-control rounded-0 border-0 py-4 bg-light">
        <div class="input-group-append">
            <button id="button-addon2" type="submit" x-ref="submit" class="btn btn-link"> <i
                    class="fa fa-paper-plane"></i></button>
        </div>
    </div>
</form>

<script type="application/javascript">
    function conversationReplyState() {
        return {
            submit() {
                this.$refs.submit.click();
            }
        }
    }
</script>
