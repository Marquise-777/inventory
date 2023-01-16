<div class="modal" id="delmodal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="model/delete.php" method="GET">
                <div class="modal-body">
                    <p> Confirm Delete?
                    <div id="deldis"></div>
                    </p>
                </div>
                <input type="hidden" name="id" id="delid">
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                    <!-- <a  class="btn btn-primary">Delete</a> -->
            </form>
        </div>
    </div>
</div>
</div>