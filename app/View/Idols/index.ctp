<!-- page title -->
<?php
$this->set('title_for_layout', 'Usamin S@telite | Idols List');
?>
<div class="row">
    <div class="col-lg-12">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist" id="idolTabs">
            <li role="presentation" class="active"><a href="#cute" aria-controls="cute" role="tab" data-toggle="tab">Cute</a>
            </li>
            <li role="presentation"><a href="#cool" aria-controls="cool" role="tab" data-toggle="tab">Cool</a></li>
            <li role="presentation"><a href="#passion" aria-controls="passion" role="tab" data-toggle="tab">Passion</a>
            </li>
        </ul>
    </div>
</div>
<div class="row container-fluid">
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active cute container-fluid" id="cute">
            <div class="row">
                <div class="col-xs-2">
                Blah
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade cool container-fluid" id="cool">
            <div class="row">
                <div class="col-xs-2">
                    Blah
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade passion container-fluid" id="passion">
            <div class="row">
                <div class="col-xs-2">
                    Blah
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#idolTabs a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        });
    });
</script>
