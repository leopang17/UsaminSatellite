<?php
if (!$this->request->is('ajax'))
{//Page Title
$this->set('title_for_layout', 'Usamin S@tellite | Idols List');
?>
<div class="row text-center">
    <div class="col-lg-12">
        <p>Click on a Idol puchi to go to the Idol's page!</p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist" id="idolTabs">
            <li role="presentation" class="active" id="cute"><a href="#cute" aria-controls="cute" role="tab" data-toggle="tab">Cute</a>
            </li>
            <li role="presentation" id="cool"><a href="#cool" aria-controls="cool" role="tab" data-toggle="tab">Cool</a></li>
            <li role="presentation" id="passion"><a href="#passion" aria-controls="passion" role="tab" data-toggle="tab">Passion</a>
            </li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Tab panes -->
        <div class="tab-content">
            <?php
            } //end stuff need if not ajax
            if ($type == 'cute'){
            ?>
            <div role="tabpanel" class="tab-pane fade in active cute" id="cute">
                <?php }else{ ?>
                <div role="tabpanel" class="tab-pane fade cute" id="cute">
                    <?php } ?>
                    <div class="row" id="cuteIdols">
                        <?php
                        if ($type == 'cute') {
                            foreach ($idols as $idol) {
                                ?>
                                <div class="col-xs-6 col-sm-3 col-lg-2 center-block text-center" style="height: 194px; margin-bottom: 10px;">
                                <?php echo $this->Html->link($this->Html->image('profiles/' . $idol['Idol']['puchiPic'],
                                        array('alt' => $idol['Idol']['eName'], 'height' => '150px')),
                                    array('controller' => 'idols',
                                        'action' => 'view',
                                        Inflector::slug($idol['Idol']['eName'])),
                                    array('escape' => false)) ?>
                                    <?php echo $this->Html->link($idol['Idol']['eName'].'</br>'.$idol['Idol']['jName'],
                                        array('controller' => 'idols',
                                            'action' => 'view',
                                            Inflector::slug($idol['Idol']['eName'])),
                                        array('class' => 'noLinkStyle', 'escape' => false));?>
                                </div>
                            <?php
                            }
                        }
                        ?>
                        </div>
                </div>
                <?php
                if ($type == 'cool'){
                ?>
                <div role="tabpanel" class="tab-pane fade in active cool" id="cool">
                    <?php }else{ ?>
                    <div role="tabpanel" class="tab-pane fade cool" id="cool">
                        <?php } ?>
                        <div class="row" id="coolIdols">
                            <?php
                            if ($type == 'cool') {
                                foreach ($idols as $idol) {
                                    ?>
                                    <div class="col-xs-6 col-sm-3 col-lg-2 center-block text-center" style="height: 194px; margin-bottom: 10px;">
                                        <?php echo $this->Html->link($this->Html->image('profiles/' . $idol['Idol']['puchiPic'],
                                                array('alt' => $idol['Idol']['eName'], 'height' => '150px')),
                                            array('controller' => 'idols',
                                                'action' => 'view',
                                                Inflector::slug($idol['Idol']['eName'])),
                                            array('escape' => false)) ?>
                                        <?php echo $this->Html->link($idol['Idol']['eName'].'</br>'.$idol['Idol']['jName'],
                                            array('controller' => 'idols',
                                                'action' => 'view',
                                                Inflector::slug($idol['Idol']['eName'])),
                                            array('class' => 'noLinkStyle','escape' => false));?>
                                    </div>
                                <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                    if ($type == 'passion'){
                    ?>
                    <div role="tabpanel" class="tab-pane fade in active passion" id="passion">
                        <?php }else{ ?>
                        <div role="tabpanel" class="tab-pane fade passion" id="passion">
                            <?php } ?>
                            <div class="row" id="passionIdols">
                                <?php
                                if ($type == 'passion') {
                                    foreach ($idols as $idol) {
                                        ?>
                                        <div class="col-xs-6 col-sm-3 col-lg-2 center-block text-center" style="height: 194px; margin-bottom: 10px">
                                            <?php echo $this->Html->link($this->Html->image('profiles/' . $idol['Idol']['puchiPic'],
                                                    array('alt' => $idol['Idol']['eName'], 'height' => '150px')),
                                                array('controller' => 'idols',
                                                    'action' => 'view',
                                                    Inflector::slug($idol['Idol']['eName'])),
                                                array('escape' => false)) ?>
                                            <?php echo $this->Html->link($idol['Idol']['eName'].'</br>'.$idol['Idol']['jName'],
                                                array('controller' => 'idols',
                                                    'action' => 'view',
                                                    Inflector::slug($idol['Idol']['eName'])),
                                                array('class' => 'noLinkStyle', 'escape' => false));?>
                                        </div>
                                    <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (!$this->request->is('ajax')) { ?>
                <script>
                    $(document).ready(function () {
                        $('#idolTabs').find('a').click(function (e) {
                            e.preventDefault();
                            $(this).tab('show');
                            var typeClicked = $(this).attr('aria-controls');
                            var baseUrl = [location.protocol, '//', location.host, location.pathname].join('');
                            var fullUrl = baseUrl + "?type=" + typeClicked;
                            $.get(fullUrl, function (data) {
                                $('.tab-content').html(data);
                            });
                        });
                    });
                </script>
            <?php } ?>
