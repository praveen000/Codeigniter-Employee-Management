<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <?php if($this->session->flashdata('update-failed')): ?>
            <div class="alert alert-danger">
                <?= $this->session->flashdata('update-failed'); ?>
            </div>
        <?php endif; ?>  
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="text-center"> Employee Leave Request</h3></div>

            <div class="panel-body">
                <?php echo form_open('request_leave_Process/'.$employee->id,['class' => 'form-horizontal form-label-left']); ?>

                    <div class="form-group">
                        <?php
                            $label_args = ['class' => 'control-label col-md-4 col-sm-4 col-xs-12'];
                            echo form_label('Employee ID','emp_id', $label_args);
                        ?>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <?php
                            $input_args = [
                                'class'     => 'form-control',
                                'disabled'  => 'disabled',
                                'name'      => 'emp_id',
                                'value'     => $employee->emp_id
                            ];
                            echo form_input($input_args);
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php
                            $label_args = ['class' => 'control-label col-md-4 col-sm-4 col-xs-12'];
                            echo form_label('Leaves Leaft','leaves_left', $label_args);
                        ?>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <?php
                            $input_args = [
                                'class'     => 'form-control',
                                'disabled'  => 'disabled',
                                'id'        => 'leaves_left',
                                'name'      => 'leaves_left',
                                'value'     => $employee->leaves_left
                            ];
                            echo form_input($input_args);
                            ?>
                        </div>
                    </div>
                    
             

                    <div class="form-group">
                        <?php
                            $label_args = ['class' => 'control-label col-md-4 col-sm-4 col-xs-12'];
                            echo form_label('Leave date','leave_day', $label_args);
                        ?>

                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <label for="from">From</label>
                            <input type="text" id="from" name="from">
                            <label for="to">to</label>
                            <input type="text" id="to" name="to">
                        </div>
                    </div>    


                    <div class="form-group">
                        <?php
                            $label_args = ['class' => 'control-label col-md-4 col-sm-4 col-xs-12'];
                            echo form_label('Reason for Leave','reason_for_leave', $label_args);
                        ?>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <?php
                            $input_args = [
                                'rows'       => '3',
                                'name'      => 'reason_for_leave',
                                'id'        => 'reason_for_leave',
                                'required'  => 'required',
                                'class'     => 'form-control',
                            ];
                            echo form_textarea($input_args);
                            ?>
                        </div>
                    </div>

                 
                    <div class="form-group">
                        <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-4 col-sm-offset-4">
                        <?php
                            $args = [
                            'type' => 'submit',
                            'class' => 'btn btn-success',
                            'value' => 'Send Request'
                            ];
                            echo form_input($args);
                        ?>
                        </div>
                    </div>
              <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
