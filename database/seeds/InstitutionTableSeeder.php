<?php

use Illuminate\Database\Seeder;
use App\Institution;

class InstitutionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name'              => 'Acuario Nacional', 
                'acronym'           => 'AN',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
			[
				'name' 			    => 'Administradora de Estancias Infantiles Salud Segura', 
				'acronym'		    => 'AEISS',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
				'created_at' 	    => new DateTime,
				'updated_at' 	    => new DateTime
			],
            [
                'name'              => 'Administradora de Riesgos de Salud SEMMA', 
                'acronym'           => 'ARS-SEMMA',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Administradora de Riesgos Laborales Salud Segura', 
                'acronym'           => 'ARLSS',                
                'address'           => 'Calle 43, No.18, Esq. Rafael Fernandez Dominguez. Ens. La Fe, Santo Domingo, D. N.',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => 'Lunes a Jueves - 8:00 A.M - 5:00 P.M Viernes 8:00 A.M. - 4:00 P.M.',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Administradora de Subsidios Sociales', 
                'acronym'           => 'ADESS',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Archivo General de la Nación', 
                'acronym'           => 'AGN',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'ARS Salud Segura', 
                'acronym'           => 'ARSSS',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Autoridad Portuaria Dominicana', 
                'acronym'           => 'APORDOM',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Azua', 
                'acronym'           => 'AA',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '1',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Bánica', 
                'acronym'           => 'AB',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '7',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Barohana', 
                'acronym'           => 'AB',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '3',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Boca Chica', 
                'acronym'           => 'AB',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Castañuelas', 
                'acronym'           => 'AC',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '18',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Comendador', 
                'acronym'           => 'AC',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '8:00 A.M. - 3:00 P.M.',
                'province_id'       => '7',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Duvergé', 
                'acronym'           => 'AD',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '12',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Jánico', 
                'acronym'           => 'AJ',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '29',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de La Romana', 
                'acronym'           => 'AR',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '14',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de La Vega', 
                'acronym'           => 'ALV',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '15',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Las Matas de Farfán', 
                'acronym'           => 'ALMF',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '18',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Los Alcarrizos', 
                'acronym'           => 'ALA',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Mella', 
                'acronym'           => 'AM',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '12',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Moca', 
                'acronym'           => 'AM',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '9',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Puerto Plata', 
                'acronym'           => 'APP',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '22',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Sabana de la Mar', 
                'acronym'           => 'ASM',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '10',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de San Cristobal', 
                'acronym'           => 'ASC',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '25',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de San Franscico de Macoris', 
                'acronym'           => 'ASFM',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '7',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de San José de Las Matas', 
                'acronym'           => 'ASJLM',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '29',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de San Juan', 
                'acronym'           => 'ASJ',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '8:00 A.M. - 3:00 P.M.',
                'province_id'       => '27',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de San Pedro de Macoris', 
                'acronym'           => 'ASPM',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '28',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Santiago de los Caballeros', 
                'acronym'           => 'ASC',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '29',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Santo Domingo Este', 
                'acronym'           => 'ASDE',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Santo Domingo Norte', 
                'acronym'           => 'ASDN',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Santo Domingo Oeste', 
                'acronym'           => 'ASNO',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Villa Bisonó (Navarrete)', 
                'acronym'           => 'AVB',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '29',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Villa González', 
                'acronym'           => 'AG',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '29',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Villa Jaragua', 
                'acronym'           => 'AJ',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '2',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ayuntamiento de Villa Tapia', 
                'acronym'           => 'AT',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '11',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Banco Agrícola de la República Dominicana', 
                'acronym'           => 'BAGRICOLA',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Banco Central de la República Dominicana', 
                'acronym'           => 'BANCENTRAL',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Cámara de Cuentas de la República', 
                'acronym'           => 'CC',                
                'address'           => 'Av. 27 de Febrero, Esq. Abreu,Edificio Gubernamental Manuel Fernández Mármol',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '8:00 A.M. - 4:00 P.M.',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Cámara de Diputados de la República Dominicana', 
                'acronym'           => 'CD',                
                'address'           => 'Calle Moisés García, Santo Domingo',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Centro Cardio-Neuro-Oftalmológico y Transplante', 
                'acronym'           => 'CECANOT',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Centro de Capacitación en Política y Gestión Fiscal', 
                'acronym'           => 'CAPGEFI',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Centro de Desarrollo y Competitividad Industrial', 
                'acronym'           => 'PROINDUSTRIA',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Centro de Educación Medica de Amistad Dominico-Japonesa', 
                'acronym'           => 'CEMADOJA',                
                'address'           => 'C/ Federico Veláquez No. 1 sector María Auxiliadora',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Centro de Exportación e Inversión de la Rep. Dom', 
                'acronym'           => 'CEI-RD',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Centro de Operaciones de Emergencias', 
                'acronym'           => 'COE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Comedores Económicos del Estado Dominicano', 
                'acronym'           => 'COMEDORES ECONÓMICOS',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Comisión de Defensa Comercial', 
                'acronym'           => 'CDC',                
                'address'           => '',
                'category'          => 'Consejos, Comisiones y Comités',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Comisión Hípica Nacional', 
                'acronym'           => 'CHN',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Comisión Nacional de Defensa de la Competencia', 
                'acronym'           => 'PROCOMPETENCIA',                
                'address'           => '',
                'category'          => 'Consejos, Comisiones y Comités',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Comisión Nacional de Energía', 
                'acronym'           => 'CNE',                
                'address'           => '',
                'category'          => 'Consejos, Comisiones y Comités',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Comisión Presidencial de Apoyo al Desarrollo Barrial', 
                'acronym'           => 'CPADB',                
                'address'           => '',
                'category'          => 'Consejos, Comisiones y Comités',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Comisión Presidencial de Apoyo al Desarrollo Provincial', 
                'acronym'           => 'CPADP',                
                'address'           => 'Ave. delgado esq, moisés Garcia, Gazcue',
                'category'          => 'Consejos, Comisiones y Comités',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Comisión Presidencial de Política Farmacéutica Nacional', 
                'acronym'           => 'COPPFAN',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Comisión Presidencial para la Modernización y Seguridad Portuaria', 
                'acronym'           => 'CPMSP',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Consejo Dominicano del Café', 
                'acronym'           => 'CODOCAFE',                
                'address'           => '',
                'category'          => 'Consejos, Comisiones y Comités',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Consejo Estatal del Azúcar', 
                'acronym'           => 'CEA',                
                'address'           => '',
                'category'          => 'Consejos, Comisiones y Comités',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Consejo Nacional de Competitividad', 
                'acronym'           => 'CNC',                
                'address'           => '',
                'category'          => 'Consejos, Comisiones y Comités',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Consejo Nacional de Discapacidad', 
                'acronym'           => 'CONADIS',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Consejo Nacional de Drogas', 
                'acronym'           => 'CND',                
                'address'           => '',
                'category'          => 'Consejos, Comisiones y Comités',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Consejo Nacional de Estancias Infantiles', 
                'acronym'           => 'CONDEI',                
                'address'           => '',
                'category'          => 'Consejos, Comisiones y Comités',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Consejo Nacional de Fronteras', 
                'acronym'           => 'CNF',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Consejo Nacional de Investigaciones Agropecuarias y Forestales', 
                'acronym'           => 'CONIAF',                
                'address'           => '',
                'category'          => 'Organismos Descentralizados Funcionalmente',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Consejo Nacional de Personas Envejecientes', 
                'acronym'           => 'CONAPE',                
                'address'           => '',
                'category'          => 'Consejos, Comisiones y Comités',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Consejo Nacional de Población y Familia', 
                'acronym'           => 'CONAPOFA',                
                'address'           => '',
                'category'          => 'Consejos, Comisiones y Comités',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Consejo Nacional de Promoción y apoyo a la micro, pequeña y mediana empresa', 
                'acronym'           => 'PROMIPYME',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Consejo Nacional de Seguridad Social', 
                'acronym'           => 'CNSS',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Consejo Nacional de Zonas Francas de Exportación', 
                'acronym'           => 'CNZFE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Consejo Nacional para el Cambio Climático y Mecanismo de Desarrollo Limpio', 
                'acronym'           => '',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Consejo Nacional para el VIH y el SIDA', 
                'acronym'           => 'CONAVISIDA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Consejo Nacional para la Niñez y la Adolescencia', 
                'acronym'           => 'CONANI',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Contraloría General de la República Dominicana', 
                'acronym'           => 'CGR',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Corporación de Acueductos y Alcantarillados de Puerto Plata', 
                'acronym'           => 'CORAAPPLATA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Corporación de Fomento de la Industria Hotelera y desarrollo del turismo', 
                'acronym'           => 'CORPHOTELS',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Corporación del Acueducto y Alcantarillado de la Vega', 
                'acronym'           => 'CORAVEGA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Corporación del Acueducto y Alcantarillado de Moca', 
                'acronym'           => 'CORAAMOCA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Corporación del Acueducto y Alcantarillado de Santiago', 
                'acronym'           => 'CORAASAN',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Corporación del Acueducto y Alcantarillado de Santo Domingo', 
                'acronym'           => 'CAASD',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Corporación Dominicana de Empresas Eléctricas Estatales', 
                'acronym'           => 'CDEEE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Corporación Dominicana de Empresas Eléctricas Estatales', 
                'acronym'           => 'CDEEE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Corporación Estatal de Radio y Televisión', 
                'acronym'           => 'CERTV',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Cuerpo Especializado en Seguridad Aeroportuaria y de la Aviación Civil', 
                'acronym'           => 'CESAC',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Defensa Civil', 
                'acronym'           => 'DC',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Defensor del Pueblo', 
                'acronym'           => 'DP',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Departamento Aeroportuario', 
                'acronym'           => 'DA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Despacho de la Primera Dama', 
                'acronym'           => '',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección de Fomento y Desarrollo de la Artesanía Nacional', 
                'acronym'           => 'FODEARTE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección de Información y Defensa de los Afiliados', 
                'acronym'           => 'DIDA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección de Información, Análisis y Programación Estratégica', 
                'acronym'           => 'DIAPE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Aduanas', 
                'acronym'           => 'DGA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Bienes Nacionales', 
                'acronym'           => 'DN',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Catastro Nacional', 
                'acronym'           => 'DGCN',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Cine', 
                'acronym'           => 'DGCINE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Comunicación', 
                'acronym'           => 'DICOM',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Comunidad Digna', 
                'acronym'           => 'COMUNIDAD-DIGNA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Contabilidad Gubernamental', 
                'acronym'           => 'DIGECOG',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Contrataciones Públicas', 
                'acronym'           => 'DGCP',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Cooperación Multilateral', 
                'acronym'           => 'DIGECOOM',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Desarrollo de la Comunidad', 
                'acronym'           => 'DGDC',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Desarrollo Fronterizo', 
                'acronym'           => 'DGDF',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Embellecimiento de Carreteras y Avenidas de Circunvalación del País', 
                'acronym'           => 'DIGECAC',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Etica e Integridad Gubernamental', 
                'acronym'           => 'DIGEIG',                
                'address'           => 'Calle Moisés García, Santo Domingo',
                'category'          => 'Direcciones Generales',
                'business_hours'   => '8:00 A.M. - 3:00 P.M.',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Ganadería', 
                'acronym'           => 'DIGEGA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Impuestos Internos', 
                'acronym'           => 'DGII',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de las Ecuelas Vocacionales de las Fuerzas Armadas', 
                'acronym'           => 'DIGEV',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Migración', 
                'acronym'           => 'DGM',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Minería', 
                'acronym'           => 'DGM',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Ordenamiento y Desarrollo Territorial', 
                'acronym'           => 'DGODT',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Pasaportes', 
                'acronym'           => 'DGP',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Presupuesto', 
                'acronym'           => 'DIGEPRES',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Programas Especiales de la Presidencia', 
                'acronym'           => 'DIGEPEP',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Seguridad de Tránsito y Transporte Terrestre', 
                'acronym'           => 'DIGESETT',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección General de Sistema Único de Beneficiarios', 
                'acronym'           => 'SIUBEN',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Dirección Nacional de Control de Drogas', 
                'acronym'           => 'DNCD',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ejército de la República Dominicana', 
                'acronym'           => 'EN',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Empresa de Generación Hidroeléctrica Dominicana', 
                'acronym'           => 'EGEHID',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Empresa de Transmisión Eléctrica Dominicana', 
                'acronym'           => 'ETED',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Empresa Distribuidora de Electricidad del Este', 
                'acronym'           => 'EDEESTE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Empresa Distribuidora de Electricidad del Norte', 
                'acronym'           => 'EDENORTE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Empresa Distribuidora de Electricidad del Sur', 
                'acronym'           => 'EDESUR',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Fondo de Desarrollo del Transporte Terrestre', 
                'acronym'           => 'FONDET',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Fondo de Pensiones y Jubilaciones de los Trabajadores de la Construcción', 
                'acronym'           => 'FOPETCONS',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Fondo de Promoción a las Iniciativas Comunitarias', 
                'acronym'           => 'PROCOMUNIDAD',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Fondo Especial para el Desarrollo Agropecuario', 
                'acronym'           => 'FEDA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Fondo Patrimonial de las Empresas Reformadas', 
                'acronym'           => 'FONPER',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Fuerza Aérea de República Dominicana', 
                'acronym'           => 'FARD',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Gabinete de Coordinación de Políticas Sociales', 
                'acronym'           => 'GCPS',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Hospital Central de las Fuerzas Armadas', 
                'acronym'           => 'HCFFAA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Hospital Docente Padre Billini', 
                'acronym'           => 'HDPB',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Hospital Docente SEMMA Santo Domingo', 
                'acronym'           => 'HDSSD',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Hospital Docente Universitario Dr. Dario Contreras', 
                'acronym'           => 'HDUDC',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Hospital General Dr. Vinicio Calventi', 
                'acronym'           => '',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Hospital Materno Dr. Reynaldo Almanzar', 
                'acronym'           => 'HMRA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Hospital Pediátrico Dr. Hugo Mendoza', 
                'acronym'           => 'HPHM',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Hospital Regional Doctor Marcelino Vélez Santana', 
                'acronym'           => 'HPHM',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Hospital Traumatológico Dr. Ney Arias Lora', 
                'acronym'           => '',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Hospital Traumatológico y Quirúrgico Profesor Juan Bosch', 
                'acronym'           => 'HTQJB',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Hospital Universitario Maternidad Nuestra Señora de la Altagracia', 
                'acronym'           => 'HUMNSA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Agrario Dominicano', 
                'acronym'           => 'IAD',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto de Auxilios y viviendas', 
                'acronym'           => 'INAVI',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto de Desarrollo y Crédito Cooperativo', 
                'acronym'           => 'IDECOOP',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto de Estabilización de Precios', 
                'acronym'           => 'INESPRE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto del Tabaco de la Republica Dominicana', 
                'acronym'           => 'INTABACO',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Dominicano de Aviación Civil', 
                'acronym'           => 'IDAC',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Dominicano de Evaluación e Investigación de la Calidad Educativa', 
                'acronym'           => 'IDEICE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Dominicano de Investigaciones Agropecuarias y Forestales', 
                'acronym'           => 'IDIAF',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Dominicano de las Telecomunicaciones', 
                'acronym'           => 'INDOTEL',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Dominicano de Seguros Sociales', 
                'acronym'           => 'IDSS',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Dominicano para la Calidad', 
                'acronym'           => 'INDOCAL',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Duartiano', 
                'acronym'           => '',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto en Innovación en Biotecnología e Industria', 
                'acronym'           => 'IIBI',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Geográfico Nacional José Joaquín Hungría Morell', 
                'acronym'           => 'IGN-JJHM',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Nacional de Administración Pública', 
                'acronym'           => 'INAP',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Nacional de Aguas Potables y Alcantarillados', 
                'acronym'           => 'INAPA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Nacional de Atención Integral a la Primera Infancia', 
                'acronym'           => 'INAIPI',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Nacional de Bienestar Estudiantil', 
                'acronym'           => 'INABIE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Nacional de Bienestar Magisterial', 
                'acronym'           => 'INABIMA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Nacional de Educación Física', 
                'acronym'           => 'INEFI',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Nacional de Formación Técnico Profesional', 
                'acronym'           => 'INFOTEP',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Nacional de Formación y Capacitación del Magisterio', 
                'acronym'           => 'INAFOCAM',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Nacional de la Aguja', 
                'acronym'           => 'INAGUJA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Nacional de la Vivienda', 
                'acronym'           => 'INVI',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Nacional de Migración', 
                'acronym'           => 'INM',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Nacional de Protección de los Derechos del Consumidor', 
                'acronym'           => 'PROCONSUMIDOR',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Nacional de Recursos Hidríulicos', 
                'acronym'           => 'INDRHI',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Nacional de Tránsito y Transporte Terrestre', 
                'acronym'           => 'INTRANT',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Nacional del Cáncer Rosa Emilia Sánchez Pérez de Tavares', 
                'acronym'           => 'INCART',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Postal Dominicano', 
                'acronym'           => 'INPOSDOM',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Superior de Formación Docente Salomé Ureña', 
                'acronym'           => 'ISFODOSU',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Técnico Superior Comunitario', 
                'acronym'           => 'ITSC',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Instituto Tecnológico de las Américas', 
                'acronym'           => 'ITLA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Jardín Botánico Nacional Doctor Rafael María Moscoso', 
                'acronym'           => 'JBN',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Junta Central Electoral', 
                'acronym'           => 'JCE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Junta de Aviación Civil', 
                'acronym'           => 'JAC',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Liga Municipal Dominicana', 
                'acronym'           => 'LMD',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Lotería Nacional Dominicana', 
                'acronym'           => 'LND',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Mercados Dominicanos de Abasto Agropecuario', 
                'acronym'           => 'MERCADOM',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio Administrativo de la Presidencia', 
                'acronym'           => 'MAPRE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de Administración Pública', 
                'acronym'           => 'MAP',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de Agricultura', 
                'acronym'           => 'MA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de Cultura', 
                'acronym'           => 'MC',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de Deportes y Recreación', 
                'acronym'           => 'MIDEREC',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de Economía, Planificación y Desarrollo', 
                'acronym'           => 'MEPYD',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de Educación de la Republica Dominicana', 
                'acronym'           => 'MINERD',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de Educación Superior Ciencia y Tecnología', 
                'acronym'           => 'MESCYT',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de Energía y Minas', 
                'acronym'           => 'MEM',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de Hacienda', 
                'acronym'           => 'MH',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de Industria, Comercio y MiPymes', 
                'acronym'           => 'MICM',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de Interior y Policía', 
                'acronym'           => 'MIP',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de la Juventud', 
                'acronym'           => 'MJ',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de la Mujer', 
                'acronym'           => 'MM',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de la Presidencia', 
                'acronym'           => 'MINPRE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de Medio Ambiente y Recursos Naturales', 
                'acronym'           => 'MMARENA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de Obras Públicas y Comunicaciones', 
                'acronym'           => 'MOPC',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de Relaciones Exteriores', 
                'acronym'           => 'MIREX',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de Salud Pública y Asistencia Social', 
                'acronym'           => 'MISPAS',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de Trabajo', 
                'acronym'           => 'MT',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Ministerio de Turismo', 
                'acronym'           => 'MITUR',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Oficina de Ingenieros Supervisores de Obras del Estado', 
                'acronym'           => 'OISOE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Oficina Metropolitana de Servicios de Autobuses', 
                'acronym'           => 'OMSA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Oficina Nacional de Defensa Pública', 
                'acronym'           => 'ONDP',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Oficina Nacional de Estadística', 
                'acronym'           => 'ONE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Oficina Nacional de Evaluación Sísmica y Vulnerabilidad de Infraestructura y Edificaciones', 
                'acronym'           => 'ONESVIE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Oficina Nacional de la Propiedad Industrial', 
                'acronym'           => 'ONAPI',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Oficina Nacional de Meteorología', 
                'acronym'           => 'ONAMET',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Oficina para el Reordenamiento del Transporte', 
                'acronym'           => 'OPRET',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Oficina Presidencial de Tecnología de la Información y Comunicación', 
                'acronym'           => 'OPTIC',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Oficina Técnica de transporte Terrestre', 
                'acronym'           => 'OTTT',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Organismo Dominicano de Acreditación', 
                'acronym'           => 'ODAC',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Parque Zoológico Nacional', 
                'acronym'           => 'ZOODOM',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Plan de Asistencia Social de la Presidencia', 
                'acronym'           => 'PASP',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Policía Nacional', 
                'acronym'           => 'PN',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Procuraduría General de la República', 
                'acronym'           => 'PGR',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Programa de Medicamentos Esenciales/Central de Apoyo Logístico', 
                'acronym'           => 'PROMESECAL',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Progresando Con Solidaridad', 
                'acronym'           => 'PROSOLI',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Refinería Dominicana de Petroleo', 
                'acronym'           => 'REFIDOMSA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Seguro Nacional de Salud', 
                'acronym'           => 'SENASA',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Senado de la República', 
                'acronym'           => 'SENADO',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Servicio Geológico Nacional', 
                'acronym'           => 'SGN',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Servicio Nacional de Salud', 
                'acronym'           => 'SNS',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Servicio Regional de Salud Metropolitano', 
                'acronym'           => 'SRSM',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Sistema Nacional de Atención a Emergencias y Seguridad', 
                'acronym'           => '911',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Superintendencia de Bancos', 
                'acronym'           => 'SIB',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Superintendencia de Electricidad', 
                'acronym'           => 'SIE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Superintendencia de Pensiones', 
                'acronym'           => 'SIPEN',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Superintendencia de Salud y Riesgos Laborales', 
                'acronym'           => 'SISALRIL',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Superintendencia de Seguros', 
                'acronym'           => 'SUPERSEGUROS',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Superintendencia de Valores', 
                'acronym'           => 'SIV',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Superintendencia de Vigilancia y Seguridad Privada', 
                'acronym'           => 'SVSP',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Suprema Corte de Justicia', 
                'acronym'           => 'SCJ',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Suprema Corte de Justicia', 
                'acronym'           => 'SCJ',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Tesorería de la Seguridad Social', 
                'acronym'           => 'TSS',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Tesorería Nacional', 
                'acronym'           => 'TSS',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Tribunal Constitucional', 
                'acronym'           => 'TC',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Tribunal Superior Electoral', 
                'acronym'           => 'TSE',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Unidad de Electrificación Rural y Sub-Urbana', 
                'acronym'           => 'UERS',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
            [
                'name'              => 'Universidad Autónoma de Santo Domingo', 
                'acronym'           => 'UASD',                
                'address'           => '',
                'category'          => '',
                'business_hours'   => '',
                'province_id'       => '31',
                'created_at'        => new DateTime,
                'updated_at'        => new DateTime
            ],
		);

		Institution::insert($data);
    }
}
