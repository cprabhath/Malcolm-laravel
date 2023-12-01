<div class="card m-4" style="width: 500px;">
    <div class="card-body">
        <div class="card-header display-6 mb-2 text-center">Reset your Password</div>
        <form>
            <div class="form mb-4">
                <label class="form-label" for="newPass">New Password</label>
                <input type="password" id="newPass" class="form-control" autocomplete="falase" />
            </div>

            <div class="form mb-4">
                <label class="form-label" for="ConfirmPass">Confirm Password</label>

                <input type="password" id="ConfirmPass" class="form-control" autocomplete="falase" />
            </div>
            <button type="submit" class="btn btn-block btn-lg" style="background-color: #50017d; color:white">Reset Password</button>
            <a href="{{ route('login') }}" class="btn btn-block btn-outline-dark" wire:navigate>Back</a>
        </form>
    </div>
</div>
