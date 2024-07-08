<?php

namespace Database\Seeders;

use App\Models\Cuenta;
use App\Models\Tipopago;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cuenta::create([
            "nombre" => "Aporte Miembros",
            "tipo" => "INGRESO",
            "status" => "1"
        ]);
        Cuenta::create([
            "nombre" => "Recaudación Actividad",
            "tipo" => "INGRESO",
            "status" => "1"
        ]);
        Cuenta::create([
            "nombre" => "Donación",
            "tipo" => "INGRESO",
            "status" => "1"
        ]);
        Cuenta::create([
            "nombre" => "Pago Servicios",
            "tipo" => "EGRESO",
            "status" => "1"
        ]);
        Cuenta::create([
            "nombre" => "Devoluciones",
            "tipo" => "EGRESO",
            "status" => "1"
        ]);
        Cuenta::create([
            "nombre" => "Compras",
            "tipo" => "EGRESO",
            "status" => "1"
        ]);

        Tipopago::create([
            "nombre" => "EFECTIVO",
            "nombrecorto" => "EF",
        ]);
        Tipopago::create([
            "nombre" => "PAGO QR",
            "nombrecorto" => "QR",
        ]);
        Tipopago::create([
            "nombre" => "TRANSFERENCIA BANCARIA",
            "nombrecorto" => "TB",
        ]);
        Tipopago::create([
            "nombre" => "GASTO ADMINISTRATIVO",
            "nombrecorto" => "GA",
        ]);

        User::create([
            "name" => "JULIO CESAR VELIZ",
            "email" => "juliocesar.veliz@gmail.com",
            "password" => bcrypt("6223109"),
        ]);
    }
}
