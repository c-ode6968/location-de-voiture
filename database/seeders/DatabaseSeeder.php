<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            ['nom' => 'Romeo', 'prenom' => 'Verdi', 'adresse' => 'Ancona', 'username' => 'staffstaff','role' => 'staff',  'numero_de_telephone' => '+39 351 077 5935','email' =>'romeo@verdi.com', 'photos' => 'rr.jpg', 'password' => Hash::make('lionel'), 'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['nom' => 'Luxio', 'prenom' => 'Alexio',  'adresse' => 'Ancona', 'username' => 'luxioverde','role' => 'staff',  'numero_de_telephone' => '+39 351 077 5935','email' =>'licio@alexio.com', 'photos' => 'rr.jpg', 'password' => Hash::make('lionel'), 'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['nom' => 'Alex', 'prenom' => 'Gialli',  'adresse' => 'Padova', 'username' => 'alexgiali','role' => 'staff',  'numero_de_telephone' => '+39 351 077 5935','email' =>'alex@gialli.com', 'photos' => 'rr.jpg', 'password' => Hash::make('lionel'), 'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            
            ['nom' => 'Maxim', 'prenom' => 'Rosso','adresse' => 'Falconara', 'username' => 'maximrosso', 'role' => 'user', 'numero_de_telephone' => '+39 351 077 5935', 'email' =>'massim@rosso.com', 'photos' => 'rr.jpg', 'password' => Hash::make('lionel'),'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],
            ['nom' => 'Leonardo', 'prenom' => 'Verde','adresse' => 'Roma', 'username' => 'leonardo', 'role' => 'user', 'numero_de_telephone' => '+39 351 077 5935', 'email' =>'leonardo@verde.com', 'photos' => 'rr.jpg', 'password' => Hash::make('lionel'),'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],  
            ['nom' => 'Fixi', 'prenom' => 'Umberto','adresse' => 'Ancona', 'username' => 'fixi', 'role' => 'user', 'numero_de_telephone' => '+39 351 077 5935', 'email' =>'fixi@umberto.com', 'photos' => 'rr.jpg', 'password' => Hash::make('lionel'),'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],  
            ['nom' => 'Marco', 'prenom' => 'Gialli','adresse' => 'Ancona', 'username' => 'clieclie', 'role' => 'user', 'numero_de_telephone' => '+39 351 077 5935', 'email' =>'marco@gialli.com', 'photos' => 'rr.jpg', 'password' => Hash::make('lionel'),'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")],  

            ['nom' => 'Mario', 'prenom' => 'Rossi', 'adresse' => 'Ancona',   'username' => 'adminadmin', 'numero_de_telephone' => '+39 351 077 5935','email' =>'mario@rossi.com', 'role' => 'admin', 'photos' => 'rr.jpg', 'password' => Hash::make('lionel'), 'created_at' => date("Y-m-d H:i:s"),'updated_at' => date("Y-m-d H:i:s")], 

        ]);

        DB::table('personnels')->insert([
            ['nom' => 'Maxim', 'prenom' => 'Rosso','email' =>'meca@gialli.com', 'photos' => 'meccaniciene.jpg', 'role' => 'Mecanicien',  ],
            ['nom' => 'Leonardo', 'prenom' => 'Verde', 'email' =>'elec@gialli.com', 'photos' => 'electricien.jpg', 'role' => 'Electricien',],  
            ['nom' => 'Fixi', 'prenom' => 'Umberto','email' =>'chauf@gialli.com', 'photos' => 'chauffeur.jpg', 'role' => 'Chauffeur',],  
            ['nom' => 'Kelefacl', 'prenom' => 'Lionel', 'email' =>'ing@gialli.com', 'photos' => 'LEO.jpg', 'role' => 'Ingegneur',],  
            ['nom' => 'Kelefacl', 'prenom' => 'Lionel',  'email' =>'direc@gialli.com', 'photos' => 'LEO.jpg','role' => 'Directeur général',], 

        ]);



        DB::table('voitures')->insert([
            [ 'marque' => 'Jeep','model'=>'Jeep Compass 4xe','image'=> 'Jeep Compass.jpg','plaque_immatriculation'=>'AB456GH','prix_location_journalier'=>'150','nombre_de_place'=>'4','aménagement'=>'Standard', 'date_debut'=>'2023-02-21', 'date_fin'=>'2023-01-05', ],
            [ 'marque' => 'Jeep','model'=>'Jeep Rinnegata','image'=> 'Jeep Rinnegata.jpg','plaque_immatriculation'=>'IJ789KL','prix_location_journalier'=>'200','nombre_de_place'=>'5', 'aménagement'=>'Automatic','date_debut'=>'2023-12-21', 'date_fin'=>'2024-03-02',],
            [ 'marque' => 'Jeep','model'=>'Jeep Wrangler', 'image'=> 'Jeep Wrangler.jpg','plaque_immatriculation'=>'UV678WK','prix_location_journalier'=>'250','nombre_de_place'=>'4','aménagement'=>'Premium','date_debut'=>'2023-06-21', 'date_fin'=>'2024-03-12',],

            [ 'marque' => 'Audi','model' =>'Audi A1 Sportback','image'=> 'Audi A1 Sportback.jpg', 'plaque_immatriculation'=>'WX789UT','prix_location_journalier'=>'400','nombre_de_place'=>'5','aménagement'=>'Premium','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'Audi','model' =>'CityCarver Audi A1','image'=> 'Audi A1 Sportback.jpg', 'plaque_immatriculation'=>'EER356J','prix_location_journalier'=>'345','nombre_de_place'=>'5','aménagement'=>'Automatic','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'Audi','model' =>'Audi A4','image'=> 'Audi A4.jpg', 'plaque_immatriculation'=>'4RFG3TY','prix_location_journalier'=>'200','nombre_de_place'=>'5','aménagement'=>'Automatic','date_debut'=>'2023-01-21', 'date_fin'=>'2025-01-02',],
            [ 'marque' => 'Audi','model' =>'Audi Q7','image'=> 'Audi Q7.jpg', 'plaque_immatriculation'=>'HHJ7004','prix_location_journalier'=>'250','nombre_de_place'=>'5','aménagement'=>'Premium','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],

            [ 'marque' => 'BMW','model'=>'BMW X1','image'=> 'BMW X1.jpg', 'plaque_immatriculation'=>'OI34E76','prix_location_journalier'=>'250','nombre_de_place'=>'5','aménagement'=>'Standard','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'BMW','model'=>'BMW X5','image'=> 'BMW X5.jpg', 'plaque_immatriculation'=>'PG0I3RR','prix_location_journalier'=>'130','nombre_de_place'=>'5','aménagement'=>'Luxury','date_debut'=>'2023-01-21', 'date_fin'=>'2023-06-02',],
            [ 'marque' => 'BMW','model'=>'BMW X6','image'=> 'BMW X6.jpg', 'plaque_immatriculation'=>'46HW334','prix_location_journalier'=>'550','nombre_de_place'=>'5','aménagement'=>'Premium','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'BMW','model'=>'BMW seri 7 Cabriolet','image'=> 'BMW seri 7 Cabriolet.jpg', 'plaque_immatriculation'=>'UUB58DI','prix_location_journalier'=>'300','nombre_de_place'=>'5','aménagement'=>'Automatic','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'BMW','model'=>'BMW M8','image'=> 'BMW M8.jpg', 'plaque_immatriculation'=>'PO904RT','prix_location_journalier'=>'170','nombre_de_place'=>'5','aménagement'=>'Luxury','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],

            [ 'marque' => 'Cupra', 'model'=>'Cupra Ateca','image'=> 'Cupra Ateca.jpg','plaque_immatriculation'=>'PP0I3RR','prix_location_journalier'=>'100','nombre_de_place'=>'6','aménagement'=>'Automatic','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'Cupra', 'model'=>'Cupra Formentor','image'=> 'Cupra Formentor.jpg', 'plaque_immatriculation'=>'WX889UT','prix_location_journalier'=>'75','nombre_de_place'=>'6','aménagement'=>'Premium','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'Cupra', 'model'=>'Cupra Leon','image'=> 'Cupra Leon.jpg', 'plaque_immatriculation'=>'PG0O3RR','prix_location_journalier'=>'240','nombre_de_place'=>'6','aménagement'=>'Automatic','date_debut'=>'2023-01-21', 'date_fin'=>'2023-08-02',],

            [ 'marque' => 'Jaguar','model'=>'Jaguar E-space','image'=> 'Jaguar E-space.jpg', 'plaque_immatriculation'=>'PG0I30R','prix_location_journalier'=>'250','nombre_de_place'=>'4','aménagement'=>'Premium','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'Jaguar','model'=>'Jaguar XF','image'=> 'Jaguar XF.jpg', 'plaque_immatriculation'=>'UUB08DI','prix_location_journalier'=>'130','nombre_de_place'=>'6','aménagement'=>'Luxury','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'Jaguar','model'=>'Jaguar XE','image'=> 'Jaguar XE.jpg', 'plaque_immatriculation'=>'UEC58DI','prix_location_journalier'=>'200','nombre_de_place'=>'5','aménagement'=>'Standard','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'Jaguar','model'=>'Jaguar XJ','image'=> 'Jaguar XJ.jpg', 'plaque_immatriculation'=>'2SB58DI','prix_location_journalier'=>'310','nombre_de_place'=>'5','aménagement'=>'Premium','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],

            [ 'marque' => 'Honda','model'=>'Honda Honda C','image'=> 'Honda Honda C.jpg', 'plaque_immatriculation'=>'POB53DI','prix_location_journalier'=>'150','nombre_de_place'=>'4','aménagement'=>'Luxury','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'Honda','model'=>'Honda CR-V','image'=> 'Honda CR-V.jpg', 'plaque_immatriculation'=>'PG0I3RE','prix_location_journalier'=>'140','nombre_de_place'=>'4','aménagement'=>'Standard','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'Honda','model'=>'Honda HR-V','image'=> 'Honda HR-V.jpg', 'plaque_immatriculation'=>'WX349UT','prix_location_journalier'=>'650','nombre_de_place'=>'4','aménagement'=>'Premium','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],

            [ 'marque' => 'Citroen', 'model'=>'Citroen C1','image'=> 'Citroen C1.jpg', 'plaque_immatriculation'=>'QS789UT','prix_location_journalier'=>'190','nombre_de_place'=>'5','aménagement'=>'Standard','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'Citroen', 'model'=>'Citroen C3','image'=> 'Citroen C3.jpg', 'plaque_immatriculation'=>'WX76NUT','prix_location_journalier'=>'360','nombre_de_place'=>'5','aménagement'=>'Premium','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'Citroen', 'model'=>'Citroen C4','image'=> 'Citroen C4.jpg', 'plaque_immatriculation'=>'WP789UT','prix_location_journalier'=>'650','nombre_de_place'=>'5','aménagement'=>'Standard','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'Citroen', 'model'=>'Citroen C4 Actus','image'=> 'Citroen C4 Actus.jpg', 'plaque_immatriculation'=>'GDR563L','prix_location_journalier'=>'50','nombre_de_place'=>'4','aménagement'=>'Premium','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'Citroen', 'model'=>'Citroen C5 Aircross','image'=> 'Citroen C5 Aircross.jpg', 'plaque_immatriculation'=>'BOI904R','prix_location_journalier'=>'110','nombre_de_place'=>'6','aménagement'=>'Luxury','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'Citroen', 'model'=>'Citroen C1','image'=> 'Citroen C1.jpg', 'plaque_immatriculation'=>'QS789UT','prix_location_journalier'=>'130','nombre_de_place'=>'5','aménagement'=>'Standard','date_debut'=>'2023-01-21', 'date_fin'=>'2023-02-02',],
            [ 'marque' => 'Citroen', 'model'=>'Citroen C3','image'=> 'Citroen C3.jpg', 'plaque_immatriculation'=>'WX76NUT','prix_location_journalier'=>'120','nombre_de_place'=>'5','aménagement'=>'Premium','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'Citroen', 'model'=>'Citroen C4','image'=> 'Citroen C4.jpg', 'plaque_immatriculation'=>'WP789UT','prix_location_journalier'=>'200','nombre_de_place'=>'5','aménagement'=>'Standard','date_debut'=>'2022-01-21', 'date_fin'=>'2023-05-02',],

            [ 'marque' => 'Fiat', 'model'=>'Fiat 500','image'=> 'Fiat 500.jpg', 'plaque_immatriculation'=>'OI14E76','prix_location_journalier'=>'230','nombre_de_place'=>'4','aménagement'=>'Standard','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'Fiat', 'model'=>'Fiat 500 L','image'=> 'Fiat 500 L.jpg', 'plaque_immatriculation'=>'OI343E6','prix_location_journalier'=>'250','nombre_de_place'=>'3','aménagement'=>'Luxury','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],
            [ 'marque' => 'Fiat', 'model'=>'Fiat Qubo', 'image'=> 'Fiat Qubo.jpg','plaque_immatriculation'=>'OF34E76','prix_location_journalier'=>'100','nombre_de_place'=>'4','aménagement'=>'Premium','date_debut'=>'2023-01-21', 'date_fin'=>'2024-01-02',],

            ['marque' => 'Jeep', 'model' => 'Jeep Compass 4xe', 'image' => 'Jeep_Compa.jpg', 'plaque_immatriculation' => 'AB456GH', 'prix_location_journalier' => '155', 'nombre_de_place' => '4', 'aménagement' => 'Standard', 'date_debut' => '2023-02-21', 'date_fin' => '2024-01-05'],
            ['marque' => 'Toyota', 'model' => 'Toyota Corolla', 'image' => 'Toyota_Corolla.jpg', 'plaque_immatriculation' => 'CD789EF', 'prix_location_journalier' => '160', 'nombre_de_place' => '5', 'aménagement' => 'Premium', 'date_debut' => '2023-03-15', 'date_fin' => '2023-12-20'],
            ['marque' => 'Ford', 'model' => 'Ford Mustang', 'image' => 'Ford_Mustang.jpg', 'plaque_immatriculation' => 'EF123CD', 'prix_location_journalier' => '300', 'nombre_de_place' => '2', 'aménagement' => 'GT', 'date_debut' => '2023-04-10', 'date_fin' => '2023-11-25'],

            ['marque' => 'Ford', 'model' => 'Ford Fiesta', 'image' => 'ford_fiesta.jpg', 'plaque_immatriculation' => 'XY123ZT', 'prix_location_journalier' => '90', 'nombre_de_place' => '5', 'aménagement' => 'Standard', 'date_debut' => '2023-04-01', 'date_fin' => '2023-08-29'],
            ['marque' => 'Volkswagen', 'model' => 'VW Golf', 'image' => 'vw_golf.jpg', 'plaque_immatriculation' => 'PK678LM', 'prix_location_journalier' => '110', 'nombre_de_place' => '5', 'aménagement' => 'Comfortline', 'date_debut' => '2023-03-20', 'date_fin' => '2023-10-15'],
            ['marque' => 'Honda', 'model' => 'Honda Civic', 'image' => 'honda_civic.jpg', 'plaque_immatriculation' => 'WQ987RV', 'prix_location_journalier' => '135', 'nombre_de_place' => '5', 'aménagement' => 'Sport', 'date_debut' => '2023-05-10', 'date_fin' => '2023-12-05'],

            ['marque' => 'BMW', 'model' => 'ALPINA B5', 'image' => 'alpina_b5.jpg', 'plaque_immatriculation' => 'AL123BT', 'prix_location_journalier' => '270', 'nombre_de_place' => '5', 'aménagement' => 'B5 Edition 50', 'date_debut' => '2023-06-15', 'date_fin' => '2023-12-30'],
            ['marque' => 'Lexus', 'model' => 'LEXUS LS', 'image' => 'lexus_ls.jpg', 'plaque_immatriculation' => 'LS789QA', 'prix_location_journalier' => '320', 'nombre_de_place' => '5', 'aménagement' => 'F Sport', 'date_debut' => '2023-07-20', 'date_fin' => '2024-06-30'],

            ['marque' => 'BMW', 'model' => 'ALPINA B5', 'image' => 'alpina_b5.jpg', 'plaque_immatriculation' => 'AL123BT', 'prix_location_journalier' => '270', 'nombre_de_place' => '5', 'aménagement' => 'B5 Edition 50', 'date_debut' => '2023-06-15', 'date_fin' => '2023-12-30'],
            ['marque' => 'BMW', 'model' => 'ALPINA B5', 'image' => 'alpina_b5.jpg', 'plaque_immatriculation' => 'AL567CD', 'prix_location_journalier' => '260', 'nombre_de_place' => '5', 'aménagement' => 'B5 BiTurbo', 'date_debut' => '2023-05-10', 'date_fin' => '2023-11-30'],
            ['marque' => 'Caterham', 'model' => 'CATERHAM SEVEN', 'image' => 'caterham.jpg', 'plaque_immatriculation' => 'SE789YZ', 'prix_location_journalier' => '110', 'nombre_de_place' => '2', 'aménagement' => 'Classic', 'date_debut' => '2023-03-20', 'date_fin' => '2023-10-15'],
            ['marque' => 'Ferrari', 'model' => 'FERRARI ENZO', 'image' => 'ferrari_enzo.jpg', 'plaque_immatriculation' => 'EN234UV', 'prix_location_journalier' => '950', 'nombre_de_place' => '2', 'aménagement' => 'Limited Edition', 'date_debut' => '2023-07-10', 'date_fin' => '2024-06-30'],
            ['marque' => 'Ford', 'model' => 'FORD S-MAX', 'image' => 'ford_s_max.jpg', 'plaque_immatriculation' => 'SM456DE', 'prix_location_journalier' => '160', 'nombre_de_place' => '7', 'aménagement' => 'Titanium', 'date_debut' => '2023-02-01', 'date_fin' => '2023-09-30'],
            ['marque' => 'Infiniti', 'model' => 'INFINITI Q50', 'image' => 'infiniti_q50.jpg', 'plaque_immatriculation' => 'Q550NM', 'prix_location_journalier' => '190', 'nombre_de_place' => '5', 'aménagement' => 'Red Sport 400', 'date_debut' => '2023-08-15', 'date_fin' => '2024-07-30'],
            ['marque' => 'Lexus', 'model' => 'LEXUS LS', 'image' => 'lexus_ls.jpg', 'plaque_immatriculation' => 'LS789QA', 'prix_location_journalier' => '720', 'nombre_de_place' => '5', 'aménagement' => 'F Sport', 'date_debut' => '2023-07-20', 'date_fin' => '2024-06-30'],

            ['marque' => 'Nissan', 'model' => 'CAMPING CAR ', 'image' => 'camping car.jpg', 'plaque_immatriculation' => 'DS789QR', 'prix_location_journalier' => '1100', 'nombre_de_place' => '5', 'aménagement' => 'Viaggio', 'date_debut' => '2023-08-10', 'date_fin' => '2024-09-30'],
            ['marque' => 'Lexus', 'model' => 'MINIVAN 8', 'image' => 'minivan 8.jpg', 'plaque_immatriculation' => 'PS7Y9Q7', 'prix_location_journalier' => '820', 'nombre_de_place' => '8', 'aménagement' => 'Viaggio', 'date_debut' => '2023-05-09', 'date_fin' => '2024-01-24'],
            ['marque' => 'Citroen', 'model' => 'MINIVAN', 'image' => 'minivan.jpg', 'plaque_immatriculation' => 'GS7R9QJ', 'prix_location_journalier' => '420', 'nombre_de_place' => '6', 'aménagement' => 'Viaggio', 'date_debut' => '2023-08-25', 'date_fin' => '2023-11-23'],
            ['marque' => 'Nissan', 'model' => 'PULMINO', 'image' => 'pulmino.jpg', 'plaque_immatriculation' => 'OR789TA', 'prix_location_journalier' => '500', 'nombre_de_place' => '10', 'aménagement' => 'Viaggio', 'date_debut' => '2023-06-10', 'date_fin' => '2024-02-02'],
            ['marque' => 'Renault', 'model' => 'MINIBUS', 'image' => 'minibus 14.jpg', 'plaque_immatriculation' => 'YM7Q9QA', 'prix_location_journalier' => '700', 'nombre_de_place' => '14', 'aménagement' => 'Viaggio', 'date_debut' => '2023-09-01', 'date_fin' => '2024-01-30'],
            ['marque' => 'Opel', 'model' => 'LUXURY', 'image' => 'luxury.jpg', 'plaque_immatriculation' => 'PS7J9RA', 'prix_location_journalier' => '920', 'nombre_de_place' => '4', 'aménagement' => 'Sport', 'date_debut' => '2023-09-03', 'date_fin' => '2023-11-20'],
            ['marque' => 'BMW', 'model' => 'LAMBORGINI', 'image' => 'lamborgini.jpg', 'plaque_immatriculation' => 'AX78FQA', 'prix_location_journalier' => '1000', 'nombre_de_place' => '4', 'aménagement' => 'Sport', 'date_debut' => '2023-06-18', 'date_fin' => '2023-12-30'],

            ['marque' => 'Ferrari', 'model' => 'MINIVAN', 'image' => 'ferrari.jpg', 'plaque_immatriculation' => 'GS7R9QJ', 'prix_location_journalier' => '420', 'nombre_de_place' => '6', 'aménagement' => 'Viaggio', 'date_debut' => '2023-08-25', 'date_fin' => '2023-11-23'],
            ['marque' => ' Ferrari', 'model' => 'FERRARI Q', 'image' => 'ferrari Q.jpg', 'plaque_immatriculation' => 'OR789TA', 'prix_location_journalier' => '500', 'nombre_de_place' => '10', 'aménagement' => 'Viaggio', 'date_debut' => '2023-06-10', 'date_fin' => '2024-02-02'],
            ['marque' => 'Porche', 'model' => 'PORCHE', 'image' => 'porche.jpg', 'plaque_immatriculation' => 'YM7Q9QA', 'prix_location_journalier' => '700', 'nombre_de_place' => '14', 'aménagement' => 'Viaggio', 'date_debut' => '2023-09-01', 'date_fin' => '2024-01-30'],
            ['marque' => 'Porche', 'model' => 'PORCHE C4', 'image' => 'porche C4.jpg', 'plaque_immatriculation' => 'PS7J9RA', 'prix_location_journalier' => '920', 'nombre_de_place' => '4', 'aménagement' => 'Sport', 'data_debu' => '2023-09-03', 'date_fin' => '2023-11-20'],
            ['marque' => 'Bus', 'model' => 'TRANSPOR', 'image' => 'B.jpg', 'plaque_immatriculation' => 'AX78FQA', 'prix_location_journalier' => '1000', 'nombre_de_place' => '4', 'aménagement' => 'Sport', 'data_debu' => '2023-06-18', 'date_fin' => '2023-12-30'],

        ]);

        DB::table('contacts')->insert([
            [ 'phone' => '+39 351 077 5935', 'adresse' => 'A108 Adam Street, New York, NY 535022', 'email' => 'contact@example.com', 
                'desc_site' => 'Bienvenue sur Herzt - Votre Destination de Location de Voitures. Découvrez l\'ultime expérience de location de voitures avec Herzt, votre partenaire de confiance pour tous vos besoins de déplacement. Que vous planifiez un voyage 
                d\'affaires, des vacances en famille ou une escapade spontanée, notre plateforme conviviale simplifie le processus de location de voiture, offrant une gamme diversifiée de véhicules pour répondre à vos exigences spécifiques.',
                'flotte_de_voitures_variee' => 'Parcourez notre vaste sélection de véhicules de la dernière technologie et du plus haut standing. Des berlines élégantes aux SUV spacieux, nous avons la voiture parfaite pour chaque occasion.',
                'tarifs_competitifs' => ' profitez de tarifs de location compétitifs, adaptés à tous les budgets. Notre système de tarification transparent vous assure de bénéficier du meilleur rapport qualité-prix, sans frais cachés.',
                 'facilite_de_reservation_en_ligne' => 'Réservez votre voiture en quelques clics grâce à notre processus de réservation en ligne simple et intuitif. Ajoutez des options supplémentaires, choisissez votre lieu de prise en charge et de restitution, le tout depuis le confort de votre domicile.'
                 ,'service_clientele_exceptionnel' => ' Notre équipe dévouée est disponible 24/7 pour répondre à vos questions et vous assister à chaque étape de votre voyage. Nous sommes là pour vous offrir une expérience sans souci.', 
                 'assurance_et_securite' => 'Votre sécurité est notre priorité. Toutes nos voitures sont régulièrement entretenues et inspectées pour garantir des trajets sûrs et fiables. De plus, nous proposons une gamme d\'options d\'assurance pour vous offrir une tranquillité d\'esprit totale.',
                  'programme_de_fidelite' => 'Rejoignez notre programme de fidélité pour bénéficier d\'offres exclusives, de mises à niveau gratuites et de réductions spéciales. Chez Herzt, nous récompensons votre fidélité.', 
                  'appel_a_laction' => 'Qu\'attendez-vous ? Réservez dès aujourd\'hui votre voiture idéale sur Herzt et préparez-vous à vivre une expérience de location de voitures inoubliable. Nous sommes là pour vous aider à atteindre votre destination, où que la route puisse vous mene.',
                    'marque' => 'Nous disposons des meilleures marques telles que :',  'personnel' => 'Nous disposons de plusieurs membres du personnel tels que des mécaniciens, des chauffeurs, etc.',  'partenaire' => 'Nos partenaires les plus sollicités.',],
        ]);


        DB::table('galleries')->insert([
            [ 'marque' => 'Jeep','images'=> 'Jeep Compass.jpg'],
            [ 'marque' => 'Jeep','images'=> 'Jeep Rinnegata.jpg'],
            [ 'marque' => 'Jeep','images'=> 'Jeep Wrangler.jpg'],

            [ 'marque' => 'Audi','images'=> 'Audi A1 Sportback.jpg'],
            [ 'marque' => 'Audi','images'=> 'Audi A1 Sportback.jpg'],
            [ 'marque' => 'Audi','images'=> 'Audi A4.jpg'],
            [ 'marque' => 'Audi','images'=> 'Audi Q7.jpg'],

            [ 'marque' => 'BMW','images'=> 'BMW X1.jpg'],
            [ 'marque' => 'BMW','images'=> 'BMW X5.jpg'],
            [ 'marque' => 'BMW','images'=> 'BMW X6.jpg'],
            [ 'marque' => 'BMW','images'=> 'BMW seri 7 Cabriolet.jpg'],
            [ 'marque' => 'BMW','images'=> 'BMW M8.jpg'],

            [ 'marque' => 'Cupra', 'images'=> 'Cupra Ateca.jpg'],
            [ 'marque' => 'Cupra', 'images'=> 'Cupra Formentor.jpg' ],
            [ 'marque' => 'Cupra', 'images'=> 'Cupra Leon.jpg'],

            [ 'marque' => 'Jaguar','images'=> 'Jaguar E-space.jpg' ],
            [ 'marque' => 'Jaguar','images'=> 'Jaguar XF.jpg'],
            [ 'marque' => 'Jaguar','images'=> 'Jaguar XE.jpg'],
            [ 'marque' => 'Jaguar','images'=> 'Jaguar XJ.jpg'],

            [ 'marque' => 'Honda','images'=> 'Honda Honda C.jpg'],
            [ 'marque' => 'Honda','images'=> 'Honda CR-V.jpg'],
            [ 'marque' => 'Honda','images'=> 'Honda HR-V.jpg'],

            [ 'marque' => 'Citroen', 'images'=> 'Citroen C1.jpg'],
            [ 'marque' => 'Citroen', 'images'=> 'Citroen C3.jpg'],
            [ 'marque' => 'Citroen', 'images'=> 'Citroen C4.jpg' ],
            [ 'marque' => 'Citroen', 'images'=> 'Citroen C4 Actus.jpg', ],
            [ 'marque' => 'Citroen', 'images'=> 'Citroen C5 Aircross.jpg'],
            [ 'marque' => 'Citroen', 'images'=> 'Citroen C1.jpg'],
            [ 'marque' => 'Citroen', 'images'=> 'Citroen C3.jpg'],
            [ 'marque' => 'Citroen', 'images'=> 'Citroen C4.jpg'],

            [ 'marque' => 'Fiat', 'images'=> 'Fiat 500.jpg'],
            [ 'marque' => 'Fiat', 'images'=> 'Fiat 500 L.jpg'],
            [ 'marque' => 'Fiat', 'images' => 'Fiat Qubo.jpg'],

            ['marque' => 'Jeep', 'images' => 'Jeep_Compa.jpg'],
            ['marque' => 'Toyota',  'images' => 'Toyota_Corolla.jpg' ],
            ['marque' => 'Ford', 'images' => 'Ford_Mustang.jpg' ],

            ['marque' => 'Ford', 'images' => 'ford_fiesta.jpg' ],
            ['marque' => 'Volkswagen', 'images' => 'vw_golf.jpg'],
            ['marque' => 'Honda', 'images' => 'honda_civic.jpg'],

            ['marque' => 'BMW', 'images' => 'alpina_b5.jpg'],
            ['marque' => 'Lexus','images' => 'lexus_ls.jpg'],

            ['marque' => 'BMW', 'images' => 'alpina_b5.jpg' ],
            ['marque' => 'BMW', 'images' => 'alpina_b5.jpg' ],
            ['marque' => 'Caterham', 'images' => 'caterham.jpg'],
            ['marque' => 'Ferrari', 'images' => 'ferrari_enzo.jpg', ],
            ['marque' => 'Ford', 'images' => 'ford_s_max.jpg'],
            ['marque' => 'Lexus', 'images' => 'lexus_ls.jpg' ],

            ['marque' => ' Nissan', 'images' => 'camping car.jpg' ],
            ['marque' => 'Lexus', 'images' => 'minivan 8.jpg' ],
            ['marque' => 'Citroen','images' => 'minivan.jpg'],
            ['marque' => 'Nissan', 'images' => 'pulmino.jpg'],
            ['marque' => 'Opel', 'images' => 'luxury.jpg'],
            ['marque' => 'BMW', 'images' => 'lamborgini.jpg' ],

            ['marque' => 'Ferrari',  'images' => 'ferrari.jpg'],
            ['marque' => 'Ferrari', 'images' => 'ferrari Q.jpg' ],
            ['marque' => 'Porche', 'images' => 'porche.jpg' ],
            ['marque' => 'Porche',  'images' => 'porche C4.jpg' ],
            ['marque' => 'Bus',  'images' => 'B.jpg' ],
        ]);


        DB::table('faqs')->insert([
            ['id' => '1', 'question' => 'Quels sont les critères minimums pour louer une voiture ?', 'reponse' => 'En général, il faut avoir au moins 21 ans (parfois 25) et un permis de conduire valide. Certaines agences peuvent demander une carte de crédit pour la réservation.'],
            ['id' => '2', 'question' => 'Quels documents dois-je présenter lors de la prise en charge de la voiture ?', 'reponse' => 'En général, vous devrez présenter votre permis de conduire valide, une pièce d\'identité et une carte de crédit à votre nom pour la caution.'],
            ['id' => '3', 'question' => 'Quelles options d\'assurance sont disponibles pour la location de voiture ?', 'reponse' => ' En général, les agences proposent des options d\'assurance de base et premium couvrant les dommages, le vol et la responsabilité civile. Vous pouvez également opter pour une couverture supplémentaire.'],
            ['id' => '4', 'question' => 'Quelle est la politique concernant les kilomètres inclus dans la location ?', 'reponse' => 'Certaines locations incluent un nombre limité de kilomètres, tandis que d\'autres offrent un kilométrage illimité. Vérifiez les conditions avant la location.'],
            ['id' => '5', 'question' => 'Puis-je ajouter des conducteurs supplémentaires à la réservation ?', 'reponse' => 'Oui, de nombreuses agences permettent l\'ajout de conducteurs supplémentaires moyennant des frais supplémentaires. Assurez-vous de déclarer tous les conducteurs supplémentaires pour maintenir la couverture d\'assurance.'],
            ['id' => '6', 'question' => 'Que se passe-t-il en cas d\'accident ou de panne pendant la location ?', 'reponse' => 'En général, il existe des procédures à suivre en cas d\'accident ou de panne. Contactez immédiatement l\'agence et suivez les instructions fournies.'],
            ['id' => '7', 'question' => 'Quelle est la politique en matière de carburant ?', 'reponse' => 'Certaines agences exigent le retour du véhicule avec le même niveau de carburant qu\'au moment de la prise en charge. D\'autres peuvent proposer des options de prépaiement pour le carburant.'],
            ['id' => '8', 'question' => 'Puis-je modifier ou annuler une réservation ?', 'reponse' => 'De nombreuses agences permettent des modifications ou des annulations, mais elles peuvent appliquer des pénalités ou des frais. Vérifiez la politique d\'annulation au moment de la réservation.'],
            ['id' => '9', 'question' => 'Quelles sont les restrictions géographiques pour la location de voiture ?', 'reponse' => 'Certaines agences peuvent imposer des restrictions sur l\'endroit où vous pouvez conduire la voiture louée, telles que l\'interdiction de franchir les frontières nationales. Vérifiez ces restrictions à l\'avance.'],
            ['id' => '10','question' => 'Comment se passe la restitution de la voiture ?', 'reponse' => 'En général, vous devez restituer la voiture au même endroit de l\'agence ou à un point désigné à la date et à l\'heure convenues. Assurez-vous que la voiture est propre et en bon état, comme au moment de la prise en charge.']
        ]);


    }
}
