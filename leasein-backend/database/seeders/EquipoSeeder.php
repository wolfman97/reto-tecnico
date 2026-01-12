<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

Equipo::insert([
  [
    'codigo' => 'EQ001',
    'tipo' => 'Laptop',
    'cliente' => 'Claro',
    'estado' => 'Activo',
    'fecha_entrega' => '2025-01-10'
  ],
  [
    'codigo' => 'EQ002',
    'tipo' => 'Monitor',
    'cliente' => 'Movistar',
    'estado' => 'Disponible',
    'fecha_entrega' => null
  ]
]);
