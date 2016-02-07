<div class="main-content">
    <div class="container">

        <div class="page-content">

            <!-- Heading -->
            <div class="single-head">
                <!-- Heading -->
                <h3 class="pull-left"><i class="fa fa-envelope green"></i> Mail Compose</h3>
                <!-- Bread crumbs -->
                <div class="breads pull-right">
                    <strong>Nav</strong> : <a href="#">Home</a> / <a href="#">Sign</a> / Home
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- Inbox page content -->
            <div class="page-inbox">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <!-- Side bar mail navigation menu -->
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="mail-write.html" class="br-lblue">Compose Mail</a></li>
                            <li class="active">
                                <a href="inbox.html">Inbox <span class="badge pull-right">3</span></a>
                                <div class="clearfix"></div>
                            </li>
                            <li><a href="#">Sent Mail</a></li>
                            <li><a href="#">Drafts <span class="badge badge-danger pull-right">6</span></a>
                                <div class="clearfix"></div>
                            </li>
                            <li><a href="#">Spam</a></li>
                            <li><a href="#">Trash</a></li>
                        </ul>
                    </div>
                    <div class="col-md-9 col-sm-8">
                        <!-- Page for Compose mail form -->
                        <div class="mail-write">
                            <!-- Mail composing head -->
                            <div class="mail-head">
                                <!-- Heading -->
                                <h3 class="pull-left">From: Me &lt;<a href="#"><?php echo getUser()->row()->email; ?></a>&gt;</h3>
                                <div class="form-group pull-right">
                                    <button type="button" class="btn btn-info">
                                        <i class="fa fa-check-circle"></i>
                                        <span>Send</span>
                                    </button>
                                    <button type="button" class="btn btn-default">
                                        <i class="fa fa-save"></i>
                                        <span>Draft</span>
                                    </button>
                                    <button type="button" class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i>
                                        <span>Discard</span>
                                    </button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- Mail composing form -->
                            <?php echo form_open("/mailer/compose", array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">To</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" name="receiver" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="subject" class="col-sm-2 control-label">Subject</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile"class=" col-sm-2 control-label">Attach File</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="exampleInputFile" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message"class=" col-sm-2 control-label">Message</label>
                                    <div class="col-sm-10">
                                        <textarea class="textarea" class="form-control" placeholder="Type your message ..." name="message" style="width: 100%; height: 200px"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-sm-offset-2 col-lg-10">
                                        <button type="submit" class="btn btn-info">Send</button>&nbsp;
                                        <button type="reset" class="btn btn-default"> Draft</button>&nbsp;
                                        <button type="reset" class="btn btn-danger"> Discard</button>
                                    </div>
                                </div>
                            </form> <!-- Form end -->
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

</div>