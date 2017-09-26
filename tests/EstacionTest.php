<?php

namespace Mibici;

use PHPUnit\Framework\TestCase;

class EstacionTest extends TestCase {

    public function testEstacionEnServicio() {
        // Las estaciones nuevas siempre están en servicio.
        $estacion = new Estacion(True,10);
        $this->assertFalse($estacion->desactivarEstacion());
    }

}
