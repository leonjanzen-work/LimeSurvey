    <div class="card" id="panel-response-id">
        <div class="card-header bg-primary">
            <div class=""><?php eT("Response ID"); ?></div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class='form-group'>
                    <label class="col-sm-4 control-label" for='idG'><?php eT("Greater than:"); ?></label>
                    <div class='col-sm-8'>
                        <input class="form-control" type='number' id='idG' name='idG' size='10' value='<?php if (isset($_POST['idG'])){ echo  sanitize_int($_POST['idG']);} ?>' onkeypress="returnwindow.LS.goodchars(event,'0123456789')" />
                    </div>
                </div>
            </div>
            <div class="row ls-space margin top-5">
                <div class='form-group'>
                    <label class="col-sm-4 control-label" for='idL'><?php eT("Less than:"); ?></label>
                    <div class='col-sm-8'>
                        <input class="form-control" type='number' id='idL' name='idL' size='10' value='<?php if (isset($_POST['idL'])) { echo sanitize_int($_POST['idL']);} ?>' onkeypress="returnwindow.LS.goodchars(event,'0123456789')" />
                    </div>
                </div>
            </div>

        </div>
    </div>
