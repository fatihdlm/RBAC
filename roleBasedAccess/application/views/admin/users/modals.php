   <!--Modals-->
        <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add Page</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Page Title</label>
                                <input type="text" name="pageTitle" placeholder="Page Title" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>Page Body</label>
                                <textarea name="pageBody" placeholder="Page Title" class="form-control"></textarea>
                                <script>
                                    CKEDITOR.replace('pageBody');
                                </script>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"/> Published
                                </label>
                            </div>
                            <div class="form-group">
                                <label>Meta Tags</label>
                                <input type="text" class="form-control" placeholder="Add Some Tags"/>
                            </div>
                            <div class="form-group">
                                <label>Meta Descripton</label>
                                <input type="text" class="form-control" placeholder="Add Meta Descripton"/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--Modals-->