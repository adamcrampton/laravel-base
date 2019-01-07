{{-- Generic modal markup to be dynamically populated/updated --}}
<div class="modal" id="manageModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>
                <input id="optionInput" class="form-control" placeholder="Add a value...">
            </p>
        </div>
        <div class="modal-footer">
        <button type="button" id="manageModalUpdate" class="btn btn-primary" data-option-name="{{ $optionValues->optionName }}">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
        </div>
    </div>
</div>