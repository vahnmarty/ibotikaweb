<!-- Modal -->
<div id="login_modal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="float: none;">Log in</h4>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ url('login') }}">
                     @csrf
                     <input type="hidden" name="url" value="modal">
                    <div class="form-group">
                        <input type="email" name="email" class="mb0 input-foundry" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="mb0" placeholder="**********" required>
                    </div>
                    <button type="submit" class="btn btn-filled btn-block mb0">Log in</button>
                </form>
            </div>
        </div>

    </div>
</div>