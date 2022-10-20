<?php
    $dept = new DOMDocument();
    $dept->load("empleados.xml");
    $resupesta = $dept->schemaValidate("departamento.xsd");

    echo ($resupesta) ? "Documento válido" : "Documento inválido";