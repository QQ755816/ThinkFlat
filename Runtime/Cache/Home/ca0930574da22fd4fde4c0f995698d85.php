<?php if (!defined('THINK_PATH')) exit();?><title>validate</title>
<div id="main">
    <script>
        $(document).ready(function () {
            $('.form-validate').each(function () {
                var id = $(this).attr('id');
                $("#" + id).validate({
                    errorElement: 'span',
                    errorClass: 'help-block error',
                    errorPlacement: function (error, element) {
                        element.parents('.controls').append(error);
                    },
                    highlight: function (label) {
                        $(label).closest('.control-group').removeClass('error success').addClass('error');
                    },
                    success: function (label) {
                        label.addClass('valid').closest('.control-group').removeClass('error success').addClass('success');
                    }
                });
            });
        })
    </script>
    <div class="container-fluid">
        <div class="page-header">
            <div class="pull-left">
                <h1><?php echo I('get.id');?> Validation<?php echo ($tpl); ?></h1>
            </div>
            <div class="pull-right">
                <ul class="minitiles">
                    <li class="grey"> <a href="#"><i class="icon-cogs"></i></a> </li>
                    <li class="lightgrey"> <a href="#"><i class="icon-globe"></i></a> </li>
                </ul>
                <ul class="stats">
                    <li class="satgreen"> <i class="icon-money"></i>
                        <div class="details"> <span class="big">$343,12</span> <span>Balance</span> </div>
                    </li>
                    <li class="lightred"> <i class="icon-calendar"></i>
                        <div class="details"> <span class="big">February 28, 2017</span> <span>Tuesday, 9:17</span> </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="breadcrumbs">
            <ul>
                <li> <a href="more-login.html">Home</a> <i class="icon-angle-right"></i> </li>
                <li> <a href="forms-basic.html">Forms</a> <i class="icon-angle-right"></i> </li>
                <li> <a href="forms-validation.html">Validation</a> </li>
            </ul>
            <div class="close-bread"> <a href="#"><i class="icon-remove"></i></a> </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="box">
                    <div class="box-title">
                        <h3> <i class="icon-ok"></i> Basic validation </h3>
                    </div>
                    <div class="box-content">
                        <form action="#" method="POST" class="form-horizontal form-validate" id="bb" novalidate>
                            <div class="control-group">
                                <label for="textfield" class="control-label">Text input</label>
                                <div class="controls">
                                    <input type="text" name="textfield" id="textfield" class="input-xlarge" data-rule-required="true" data-rule-minlength="2">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="emailfield" class="control-label">Email</label>
                                <div class="controls">
                                    <input type="text" name="emailfield" id="emailfield" class="input-xlarge" data-rule-email="true" data-rule-required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="pwfield" class="control-label">Password</label>
                                <div class="controls">
                                    <input type="text" name="pwfield" id="pwfield" class="input-xlarge" data-rule-required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="confirmfield" class="control-label">Confirm password</label>
                                <div class="controls">
                                    <input type="text" name="confirmfield" id="confirmfield" class="input-xlarge" data-rule-equalto="#pwfield" data-rule-required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="policy" class="control-label">Agree our policy</label>
                                <div class="controls">
                                    <label class="checkbox">
                                        <input type="checkbox" name="policy" value="agree" data-rule-required="true">
                                        I agree the policy. </label>
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" class="btn btn-primary" value="Submit">
                                <button type="button" class="btn">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="box">
                    <div class="box-title">
                        <h3> <i class="icon-ok"></i> More validation elements </h3>
                    </div>
                    <div class="box-content">
                        <form action="#" method="POST" class='form-horizontal form-validate' id="aaa">
                            <div class="control-group">
                                <label for="textfield" class="control-label">Select</label>
                                <div class="controls">
                                    <select name="aaa" id="bbb" data-rule-required="true">
                                        <option value="">-- Please select --</option>
                                        <option value="1">Option-1</option>
                                        <option value="2">Option-2</option>
                                        <option value="3">Option-3</option>
                                        <option value="4">Option-4</option>
                                        <option value="5">Option-5</option>
                                        <option value="6">Option-6</option>
                                        <option value="7">Option-7</option>
                                        <option value="8">Option-8</option>
                                        <option value="9">Option-9</option>
                                        <option value="10">Option-10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="urlfield" class="control-label">URL <small>with http://</small></label>
                                <div class="controls">
                                    <input type="text" placeholder="Enter valid URL" name="urlfield" id="urlfield" data-rule-url="true" data-rule-required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="minlengthfield" class="control-label">Minlength <small>minlength: 3</small></label>
                                <div class="controls">
                                    <input type="text" placeholder="At least 3 characters" name="minlengthfield" id="minlengthfield" data-rule-minlength="3" data-rule-required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="maxlengthfield" class="control-label">Maxlength <small>maxlength: 6</small></label>
                                <div class="controls">
                                    <input type="text" placeholder="At least 3 characters" name="maxlengthfield" id="maxlengthfield" data-rule-maxlength="6" data-rule-required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="datefield" class="control-label">Date <small>YYYY-MM-DD</small></label>
                                <div class="controls">
                                    <input type="text" placeholder="Only numbers" name="datefield" id="datefield" data-rule-dateISO="true" data-rule-required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="numberfield" class="control-label">Number</label>
                                <div class="controls">
                                    <input type="text" placeholder="Only numbers" name="numberfield" id="numberfield" data-rule-number="true" data-rule-required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="digitsfield" class="control-label">Digits</label>
                                <div class="controls">
                                    <input type="text" placeholder="Only digits" name="digitsfield" id="digitsfield" data-rule-digits="true" data-rule-required="true">
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="creditcardfield" class="control-label">Creditcard <small>try 446-667-651</small></label>
                                <div class="controls">
                                    <input type="text" placeholder="Enter valid creditcard" name="creditcardfield" id="creditcardfield" data-rule-creditcard="true" data-rule-required="true">
                                </div>
                            </div>
                            <div class="form-actions">
                                <input type="submit" class="btn btn-primary" value="Submit">
                                <button type="button" class="btn">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>