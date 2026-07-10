<!-- Panel de eventos Categoria -->
<div class="panel panel-default">
    <div class="panel-heading background_red" role="tab" id="heading<?php echo preg_replace("[\s+]", "", trim($liga));?>">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapsePanel<?php echo preg_replace("[\s+]", "", trim($liga));?>" aria-expanded="false" aria-controls="collapse<?php echo preg_replace("[\s+]", "", trim($liga));?>">
                <!--Categoria-->
                <p class="text-left title_categoria">
                    <?php echo $liga;?>
                </p>
            </a>
        </h4>
    </div>
    <div id="collapsePanel<?php echo preg_replace("[\s+]", "", trim($liga));?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo preg_replace("[\s+]", "", trim($liga));?>">
        <div class="panel-body">
            <div class="panel-group" id="accordion<?php echo preg_replace("[\s+]", "", trim($liga));?>" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <?php foreach ($eventos as $evento): ?>
                        <div class="panel-heading background_blue" role="tab" id="heading<?php echo preg_replace("[\s+]", "", trim($liga)).$evento['id'];?>">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion<?php echo preg_replace("[\s+]", "", trim($liga));?>" href="#collapse<?php echo preg_replace("[\s+]", "", trim($liga)).$evento['id'];?>" aria-expanded="true" aria-controls="collapse<?php echo preg_replace("[\s+]", "", trim($liga)).$evento['id'];?>">
                                    <!-- Evento Nombre -->
                                    <p class="text-left title_categoria">
                                        <?php echo $evento['nombre'].", ".$this->cambiarFormatoDeFecha($evento['fechaEvento']).", ".$evento['resultado'];?>
                                    </p>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse<?php echo preg_replace("[\s+]", "", trim($liga)).$evento['id'];?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo preg_replace("[\s+]", "", trim($liga)).$evento['id'];?>">
                            <div class="panel-body">
                                <div class="col-lg-6 col-sm-6">
                                    <p class="text-justify">
                                        <!-- Evento Descripción -->
                                        <?php echo $evento['descripcion'];?>
                                    </p>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <img class="img-responsive" src="view/img/uploads/<?php echo $evento['imagen']?>" alt="<?php echo $evento['nombre']?>">
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>       
        </div>
    </div>
</div>
<!-- Fin Panel de eventos -->