<div class="container">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs form-signup" style="padding: 0px; border: 0px;" id="regTabs">
        <li class ="active"><a href="#student" data-toggle="tab">Student</a></li>
        <li><a href="#tutor" data-toggle="tab">Tutor</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="student">
            <form action="<?php echo site_url('api/auth/create') ?>" method="POST" class="form-horizontal form-signup" id="registerFormStudent">
                <legend>Create Account</legend><br>
                <div class="form-group">
                    <label class="control-label col-sm-4">Username</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='uname' data-validation='length alphanumeric' data-validation-length='4-12' 
                               data-validation-error-msg='Between 3-12 chars, only alphanumeric characters' placeholder="Choose a display name (max 12 characters)">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4">Full Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='name' data-validation="length" data-validation-length="max50" data-validation-optional="true" placeholder="Your first name and last name (Optional)">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4">Website</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='website' data-validation="url" data-validation-optional="true" placeholder="URL of your personal blog or website (Optional)">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="pword_confirmation" data-validation="length" data-validation-length="min8" placeholder="Account Password (Min. 8 characters)">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4">Password (Confirm)</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="pword" data-validation="confirmation" placeholder="Please retype password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4">Email</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='email' data-validation="email" placeholder="Please enter your email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" class="btn btn-success">Register</button>
                        <button type="reset" class="btn btn-large btn-default">Reset</button>
                    </div>
                </div>
                <div id="reg-error"></div>
            </form>
        </div>
        <div class="tab-pane" id="tutor">
            <form action="<?php echo site_url('api/auth/create') ?>" method="POST" class="form-horizontal form-signup" id="registerFormTutor">
                <legend>Create Account</legend><br>
                <div class="form-group">
                    <label class="control-label col-sm-4">Username</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='uname' data-validation='length alphanumeric' data-validation-length='4-12' 
                               data-validation-error-msg='Between 3-12 chars, only alphanumeric characters' placeholder="Choose a display name (max 12 characters)">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4">Full Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='name' data-validation="length" data-validation-length="max50" data-validation-optional="true" placeholder="Your first name and last name (Optional)">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4">Website</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='website' data-validation="url" data-validation-optional="true" placeholder="URL of your personal blog or website (Optional)">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="pword_confirmation" data-validation="length" data-validation-length="min8" placeholder="Account Password (Min. 8 characters)">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4">Password (Confirm)</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" name="pword" data-validation="confirmation" placeholder="Please retype password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4">Email</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='email' data-validation="email" placeholder="Please enter your email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4">LinkedIn Profile</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='linkedIn' data-validation="url" placeholder="URL of your LinkedIn profile">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-4">StackOverflow Profile</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='sOProfile' data-validation="url" placeholder="URL of your SO profile">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <button type="submit" class="btn btn-success">Request for Tutor profile</button>
                        <button type="reset" class="btn btn-large btn-default">Reset</button>
                    </div>
                </div>
                <div id="reg-error"></div>
            </form>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Info</h4>
                </div>
                <div class="modal-body" id="errModalBody">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Modal -->
    <div class="modal fade" id="succModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Info</h4>
                </div>
                <div class="modal-body" id="succModalBody">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="reload();">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<script>
                        /* important to locate this script AFTER the closing form element, so form object is loaded in DOM before setup is called */
                        $.fn.serializeObject = function()
                        {
                            var o = {};
                            var a = this.serializeArray();
                            $.each(a, function() {
                                if (o[this.name] !== undefined) {
                                    if (!o[this.name].push) {
                                        o[this.name] = [o[this.name]];
                                    }
                                    o[this.name].push(this.value || '');
                                } else {
                                    o[this.name] = this.value || '';
                                }
                            });
                            return o;
                        };

                        $.validate({
                            modules: 'date, security',
                            onModulesLoaded: function() {
                                var optionalConfig = {
                                    fontSize: '10pt',
                                    padding: '4px',
                                    bad: 'Very bad',
                                    weak: 'Weak',
                                    good: 'Good',
                                    strong: 'Strong'
                                };

                                $('input[name="pword_confirmation"]').displayPasswordStrength(optionalConfig);
                            },
                            onSuccess: function() {
                                $dataToSend = new Array();
                                var activeTab = $("ul#regTabs li.active");

                                isTutor = (activeTab[0].innerHTML).indexOf("Tutor") !== -1;

                                if (isTutor) {
                                    $registerForm = $("#registerFormTutor");
                                } else {
                                    $registerForm = $("#registerFormStudent");
                                }
                                $serializedData = $registerForm.serializeObject();

                                if (isTutor) {
                                    $serializedData['isTutor'] = true;
                                } else {
                                    $serializedData['isTutor'] = false;
                                }

                                console.log($serializedData);
                                $.post("/MobileHub/index.php/api/auth/create", $serializedData, function(content) {

                                    // Deserialise the JSON
                                    content = jQuery.parseJSON(content);
                                    if (content.message === "Success") {
                                        $('#succModalBody').html("<p><center>" + content.type + "</center></p>");
                                        $('#succModal').modal('show');
                                    } else {
                                        $('#errModalBody').html("<p><center>" + content.type + "</center></p>");
                                        $('#errorModal').modal('show');
                                    }
                                }), "json";
                                return true;
                            }
                        });

                        function reload() {
                            window.location = '/MobileHub/';
                        }
</script>