<div class="row">


    <?php 


    foreach ($servers->result() as $server) { ?>

        <div class="col-md-4">
            <div class="widget">
                <div id="widget-title"><?php echo $server->name; ?></div>
                <table>
                    <tr>
                        <td>SERVER</td>
                        <td><i class="fa fa-power-off widget-online"></i> Online</td>
                    </tr>
                    <tr>
                        <td>MISSION</td>
                        <td>Wasteland</td>
                    </tr>
                    <tr>
                        <td>IP ADRESS</td>
                        <td>31.192.156.34</td>
                    </tr>
                    <tr>
                        <td>RAM</td>
                        <td><?php echo $server->maxRam; ?> GB</td>
                    </tr>
                    <tr>
                        <td>Players</td>
                        <td>12/23</td>
                    </tr>
                    <tr>
                        <td>FPS</td>
                        <td>
                            <div class="template__sparkline-area sparkline"><canvas style="display: inline-block; width: 109px; height: 60px; vertical-align: top;" width="109" height="60"></canvas></div>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-default" href="/servers/<?php echo $server->id; ?>">View</a>
                                <a class="btn btn-default" href="#">Settings</a>
                            </div>
                        </td>
                    </tr>
                </table>

            </div>
        </div>


    <?php } ?>
</div>
