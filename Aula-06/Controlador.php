<?php
interface Controlador {
 public function ligar();
 public function desligar();
 public function abrirMenu();
 public function fecharMenu();
 public function maisVolume();
 public function menosVolume();
 public function onMudo();
 public function offMudo();
 public function play();
 public function pause();
}