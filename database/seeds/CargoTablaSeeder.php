<?php

use Illuminate\Database\Seeder;
use App\Cargo;
class CargoTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargo = new Cargo();
        $cargo->descripcion = 'Administrator';
        $cargo->save();

        $cargo = new Cargo();
        $cargo->descripcion = 'Barbero';
        $cargo->save();

        $cargo = new Cargo();
        $cargo->descripcion = 'Cliente';
        $cargo->save();
    }
}
