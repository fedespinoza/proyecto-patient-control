<?php

namespace Database\Seeders;
use App\Models\WorkSocial;
use Illuminate\Database\Seeder;

class ObraSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obra = new WorkSocial();

        $obra->nombre = 'OSDE';
        $obra->cuit = '30-54674125-3';
        $obra->direccion = 'Av. Corrientes 420';
        $obra->iva = 'General';
        $obra->cond_venta = 'Contado';
        $obra->url = 'https://www.osde.com.ar/index.html#!homepage.html';

        $obra->save();

        $obra2 = new WorkSocial();

        $obra2->nombre = 'OSECAC';
        $obra2->cuit = '30-55027355-8';
        $obra2->direccion = 'Int. Norberto García Silva 750';
        $obra2->iva = 'Exento';
        $obra2->cond_venta = 'Cuenta Corriente';
        $obra2->url = 'https://www.osecac.org.ar/';

        $obra2->save();

        $obra3 = new WorkSocial();

        $obra3->nombre = 'OMINT';
        $obra3->cuit = '30-55024530-9';
        $obra3->direccion = 'Carlos Pellegrini 1365';
        $obra3->iva = 'Reducido';
        $obra3->cond_venta = 'Cuenta Corriente';
        $obra3->url = 'https://www.omint.com.ar/website2/default.aspx?tabid=1388';

        $obra3->save();
    }
}
