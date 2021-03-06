<?php

use Illuminate\Database\Seeder;

class AssodepTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('assodep')->insert(
      [

      ['numero_ad'=>'2','ad_name'=>'Aisne','antenne_id'=>1],
      ['numero_ad'=>'02I','ad_name'=>'Aisne Insertion','antenne_id'=>1],
      ['numero_ad'=>'1','ad_name'=>'AIN','antenne_id'=>8],
      ['numero_ad'=>'3','ad_name'=>'ALLIER','antenne_id'=>4],
      ['numero_ad'=>'4','ad_name'=>'ALPES DE HAUTE-PROVENCE','antenne_id'=>7],
      ['numero_ad'=>'5','ad_name'=>'HAUTES-ALPES','antenne_id'=>7],
      ['numero_ad'=>'6','ad_name'=>'ALPES-MARITIMES','antenne_id'=>7],
      ['numero_ad'=>'7','ad_name'=>'ARDECHE','antenne_id'=>8],
      ['numero_ad'=>'8','ad_name'=>'ARDENNES','antenne_id'=>10],
      ['numero_ad'=>'9','ad_name'=>'ARIEGE','antenne_id'=>6],
      ['numero_ad'=>'10','ad_name'=>'AUBE','antenne_id'=>10],
      ['numero_ad'=>'11','ad_name'=>'AUDE','antenne_id'=>6],
      ['numero_ad'=>'12','ad_name'=>'AVEYRON','antenne_id'=>6],
      ['numero_ad'=>'13','ad_name'=>'BOUCHES DU RHONE','antenne_id'=>7],
      ['numero_ad'=>'13I','ad_name'=>'BOUCHES DU RHONE Insertion','antenne_id'=>7],
      ['numero_ad'=>'14','ad_name'=>'CALVADOS','antenne_id'=>11],
      ['numero_ad'=>'15','ad_name'=>'CANTAL','antenne_id'=>8],
      ['numero_ad'=>'16','ad_name'=>'CHARENTE','antenne_id'=>5],
      ['numero_ad'=>'17','ad_name'=>'CHARENTE - MARITIME','antenne_id'=>5],
      ['numero_ad'=>'18','ad_name'=>'CHER','antenne_id'=>4],
      ['numero_ad'=>'19','ad_name'=>'CORREZE','antenne_id'=>4],
      ['numero_ad'=>'20A','ad_name'=>'CORSE AJACCIO','antenne_id'=>7],
      ['numero_ad'=>'20B','ad_name'=>'CORSE BASTIA','antenne_id'=>7],
      ['numero_ad'=>'21','ad_name'=>'COTE-D\'OR','antenne_id'=>9],
      ['numero_ad'=>'21I','ad_name'=>'COTE-D\'OR Insertion','antenne_id'=>9],
      ['numero_ad'=>'22','ad_name'=>'COTES-D\'ARMOR','antenne_id'=>3],
      ['numero_ad'=>'22I','ad_name'=>'COTES-D\'ARMOR Insertion','antenne_id'=>3],
      ['numero_ad'=>'23','ad_name'=>'CREUSE','antenne_id'=>4],
      ['numero_ad'=>'24','ad_name'=>'DORDOGNE','antenne_id'=>5],
      ['numero_ad'=>'25','ad_name'=>'DOUBS','antenne_id'=>9],
      ['numero_ad'=>'26','ad_name'=>'DROME','antenne_id'=>8],
      ['numero_ad'=>'26I','ad_name'=>'DROME Insertion','antenne_id'=>8],
      ['numero_ad'=>'27','ad_name'=>'EURE','antenne_id'=>11],
      ['numero_ad'=>'28','ad_name'=>'EURE-ET-LOIR','antenne_id'=>11],
      ['numero_ad'=>'28R','ad_name'=>'EURE-ET-LOIR Petite Ruche','antenne_id'=>11],
      ['numero_ad'=>'29','ad_name'=>'FINISTERE','antenne_id'=>3],
      ['numero_ad'=>'30','ad_name'=>'GARD','antenne_id'=>7],
      ['numero_ad'=>'31','ad_name'=>'HAUTE-GARONNE','antenne_id'=>6],
      ['numero_ad'=>'32','ad_name'=>'GERS','antenne_id'=>6],
      ['numero_ad'=>'33','ad_name'=>'GIRONDE','antenne_id'=>5],
      ['numero_ad'=>'34','ad_name'=>'HERAULT','antenne_id'=>7],
      ['numero_ad'=>'35','ad_name'=>'ILLE-ET-VILAINE','antenne_id'=>3],
      ['numero_ad'=>'36','ad_name'=>'INDRE','antenne_id'=>4],
      ['numero_ad'=>'37','ad_name'=>'INDRE-ET-LOIRE','antenne_id'=>4],
      ['numero_ad'=>'38','ad_name'=>'ISERE','antenne_id'=>8],
      ['numero_ad'=>'38V','ad_name'=>'ISERE Val d\'Akor','antenne_id'=>8],
      ['numero_ad'=>'39','ad_name'=>'JURA','antenne_id'=>9],
      ['numero_ad'=>'40','ad_name'=>'LANDES','antenne_id'=>5],
      ['numero_ad'=>'41','ad_name'=>'LOIR-ET-CHER','antenne_id'=>4],
      ['numero_ad'=>'41R','ad_name'=>'LOIR-ET-CHER Petite Ruche','antenne_id'=>4],
      ['numero_ad'=>'42','ad_name'=>'LOIRE','antenne_id'=>8],
      ['numero_ad'=>'43','ad_name'=>'HAUTE LOIRE','antenne_id'=>8],
      ['numero_ad'=>'44','ad_name'=>'LOIRE-ATLANTIQUE','antenne_id'=>3],
      ['numero_ad'=>'45','ad_name'=>'LOIRET','antenne_id'=>4],
      ['numero_ad'=>'46','ad_name'=>'LOT','antenne_id'=>6],
      ['numero_ad'=>'47','ad_name'=>'LOT-ET-GARONNE','antenne_id'=>5],
      ['numero_ad'=>'47R','ad_name'=>'LOT-ET-GARONNE Petite Ruche','antenne_id'=>5],
      ['numero_ad'=>'48','ad_name'=>'LOZERE','antenne_id'=>7],
      ['numero_ad'=>'49','ad_name'=>'MAINE-ET-LOIRE','antenne_id'=>3],
      ['numero_ad'=>'50','ad_name'=>'MANCHE','antenne_id'=>11],
      ['numero_ad'=>'51','ad_name'=>'MARNE','antenne_id'=>10],
      ['numero_ad'=>'52','ad_name'=>'HAUTE-MARNE','antenne_id'=>10],
      ['numero_ad'=>'53','ad_name'=>'MAYENNE','antenne_id'=>3],
      ['numero_ad'=>'54','ad_name'=>'MEURTHE-ET-MOSELLE','antenne_id'=>10],
      ['numero_ad'=>'55','ad_name'=>'MEUSE','antenne_id'=>10],
      ['numero_ad'=>'56','ad_name'=>'MORBIHAN','antenne_id'=>3],
      ['numero_ad'=>'57A','ad_name'=>'MOSELLE  Ouest','antenne_id'=>10],
      ['numero_ad'=>'57C','ad_name'=>'MOSELLE Est','antenne_id'=>10],
      ['numero_ad'=>'57I','ad_name'=>'MOSELLE Insertion','antenne_id'=>10],
      ['numero_ad'=>'58','ad_name'=>'NIEVRE','antenne_id'=>9],
      ['numero_ad'=>'59B','ad_name'=>'NORD - Valenciennes','antenne_id'=>1],
      ['numero_ad'=>'59C','ad_name'=>'NORD - Dunkerque','antenne_id'=>1],
      ['numero_ad'=>'59D','ad_name'=>'NORD - Maubeuge','antenne_id'=>1],
      ['numero_ad'=>'60','ad_name'=>'OISE','antenne_id'=>1],
      ['numero_ad'=>'61','ad_name'=>'ORNE','antenne_id'=>11],
      ['numero_ad'=>'62A','ad_name'=>'PAS DE CALAIS  - Lens','antenne_id'=>1],
      ['numero_ad'=>'62B','ad_name'=>'PAS DE CALAIS  - Arras','antenne_id'=>1],
      ['numero_ad'=>'62C','ad_name'=>'PAS DE CALAIS - Littoral','antenne_id'=>1],
      ['numero_ad'=>'63','ad_name'=>'PUY-DE-DOME','antenne_id'=>8],
      ['numero_ad'=>'64','ad_name'=>'PYRENEES-ATLANTIQUES','antenne_id'=>5],
      ['numero_ad'=>'65','ad_name'=>'HAUTES-PYRENEES','antenne_id'=>6],
      ['numero_ad'=>'66','ad_name'=>'PYRENEES ORIENTALES','antenne_id'=>6],
      ['numero_ad'=>'67','ad_name'=>'BAS-RHIN','antenne_id'=>10],
      ['numero_ad'=>'68','ad_name'=>'HAUT-RHIN','antenne_id'=>10],
      ['numero_ad'=>'69','ad_name'=>'RHONE','antenne_id'=>8],
      ['numero_ad'=>'70','ad_name'=>'HAUTE-SAONE','antenne_id'=>9],
      ['numero_ad'=>'71','ad_name'=>'SAONE-ET-LOIRE','antenne_id'=>9],
      ['numero_ad'=>'72','ad_name'=>'SARTHE','antenne_id'=>3],
      ['numero_ad'=>'73','ad_name'=>'SAVOIE','antenne_id'=>8],
      ['numero_ad'=>'74','ad_name'=>'HAUTE-SAVOIE','antenne_id'=>8],
      ['numero_ad'=>'75','ad_name'=>'PARIS','antenne_id'=>2],
      ['numero_ad'=>'75H','ad_name'=>'PARIS HERMEL','antenne_id'=>2],
      ['numero_ad'=>'75P','ad_name'=>'PARIS PENICHE DU COEUR','antenne_id'=>2],
      ['numero_ad'=>'76A','ad_name'=>'SEINE-MARITIME - Rouen','antenne_id'=>11],
      ['numero_ad'=>'76L','ad_name'=>'SEINE-MARITIME - Littoral','antenne_id'=>11],
      ['numero_ad'=>'77','ad_name'=>'SEINE-ET-MARNE','antenne_id'=>2],
      ['numero_ad'=>'78','ad_name'=>'YVELINES','antenne_id'=>2],
      ['numero_ad'=>'79','ad_name'=>'DEUX-SEVRES','antenne_id'=>5],
      ['numero_ad'=>'80','ad_name'=>'SOMME','antenne_id'=>1],
      ['numero_ad'=>'81','ad_name'=>'TARN','antenne_id'=>6],
      ['numero_ad'=>'82','ad_name'=>'TARN-ET-GARONNE','antenne_id'=>6],
      ['numero_ad'=>'83','ad_name'=>'VAR','antenne_id'=>7],
      ['numero_ad'=>'84','ad_name'=>'VAUCLUSE','antenne_id'=>7],
      ['numero_ad'=>'85','ad_name'=>'VENDEE','antenne_id'=>3],
      ['numero_ad'=>'86','ad_name'=>'VIENNE','antenne_id'=>5],
      ['numero_ad'=>'87','ad_name'=>'HAUTE-VIENNE','antenne_id'=>4],
      ['numero_ad'=>'88','ad_name'=>'VOSGES','antenne_id'=>10],
      ['numero_ad'=>'89','ad_name'=>'YONNE','antenne_id'=>9],
      ['numero_ad'=>'90','ad_name'=>'TERRITOIRE DE BELFORT','antenne_id'=>9],
      ['numero_ad'=>'91','ad_name'=>'ESSONNE','antenne_id'=>2],
      ['numero_ad'=>'92','ad_name'=>'HAUTS-DE-SEINE','antenne_id'=>2],
      ['numero_ad'=>'93','ad_name'=>'SEINE-SAINT-DENIS','antenne_id'=>2],
      ['numero_ad'=>'94','ad_name'=>'VAL-DE-MARNE','antenne_id'=>2],
      ['numero_ad'=>'95','ad_name'=>'VAL D\'OISE','antenne_id'=>2],
      ['numero_ad'=>'74MC','ad_name'=>'Maison Coluche','antenne_id'=>8],
      ['numero_ad'=>'59A','ad_name'=>'NORD - Lille','antenne_id'=>1],
      ['numero_ad'=>'A2EF','ad_name'=>'Entrepôt Est-Francilien','antenne_id'=>2],
      ['numero_ad'=>'Aero','ad_name'=>'TREMPLINS DU COEUR','antenne_id'=>2],
      ['numero_ad'=>'62Bi','ad_name'=>'PAS DE CALAIS - Insertion','antenne_id'=>1]

      ]);

    }
}
