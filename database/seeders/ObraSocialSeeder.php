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

        $obra4 = new WorkSocial();

        $obra4->nombre = 'SWISS MEDICAL';
        $obra4->cuit = '30-65485516-8';
        $obra4->direccion = 'Sarmiento 487';
        $obra4->iva = 'General';
        $obra4->cond_venta = 'Cuenta Corriente';
        $obra4->url = 'https://www.swissmedical.com.ar';

        $obra4->save();

        $obra5 = new WorkSocial();

        $obra5->nombre = 'GALENO';
        $obra5->cuit = '30-52242816-3';
        $obra5->direccion = 'Av. Rivadavia 780';
        $obra5->iva = 'General';
        $obra5->cond_venta = 'Cuenta Corriente';
        $obra5->url = 'https://www.galeno.com.ar/';

        $obra5->save();

        $obra6 = new WorkSocial();

        $obra6->nombre = 'OBSBA';
        $obra6->cuit = '30-99927011-1';
        $obra6->direccion = 'Av. Dr. Honorio Pueyrredón 951';
        $obra6->iva = 'General';
        $obra6->cond_venta = 'Cuenta Corriente';
        $obra6->url = 'www.obsba.org.ar';

        $obra6->save();

        $obra7 = new WorkSocial();

        $obra7->nombre = 'ELEVAR';
        $obra7->cuit = '30-67906538-2';
        $obra7->direccion = 'Sarmiento 4446';
        $obra7->iva = 'Exento';
        $obra7->cond_venta = 'Cuenta Corriente';
        $obra7->url = 'https://pasteleros.org/caba/obra-social/';

        $obra7->save();

        $obra8 = new WorkSocial();

        $obra8->nombre = 'O.S.P.E';
        $obra8->cuit = '30-66187671-5';
        $obra8->direccion = 'Av. Leandro N. Alem 690';
        $obra8->iva = 'General';
        $obra8->cond_venta = 'Cuenta Corriente';
        $obra8->url = 'https://www.ospesalud.com.ar/';

        $obra8->save();

        $obra9 = new WorkSocial();

        $obra9->nombre = 'O.S.E.D.A';
        $obra9->cuit = '30-51965114-5';
        $obra9->direccion = 'Av. Callao 220';
        $obra9->iva = 'General';
        $obra9->cond_venta = 'Cuenta Corriente';
        $obra9->url = 'https://www.oseda.com.ar/';

        $obra9->save();

        $obra10 = new WorkSocial();

        $obra10->nombre = 'O.S.A.M';
        $obra10->cuit = '30-65180336-1';
        $obra10->direccion = 'Estados Unidos 4037';
        $obra10->iva = 'Exento';
        $obra10->cond_venta = 'Cuenta Corriente';
        $obra10->url = 'https://sitio.osam.org.ar/';

        $obra10->save();
    }
}
