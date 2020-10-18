<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="d-none d-lg-inline text-black-800 text-bold">Are you really to log out ?</span>
            </div>
            <div class="modal-footer">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-outline-primary btn-sm" type="submit">Logout</button>
                </form>
        </div>
    </div>
</div>
</div>